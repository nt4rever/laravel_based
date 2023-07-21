<?php

namespace App\Services;

use App\Enums\FolderName;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response as Download;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class FileService
{
    private $disk;

    private const MAXWIDTH = 135;

    public function __construct(string $disk = '')
    {
        $fileSystemDisk = config('filesystems.default');
        $this->disk = $fileSystemDisk ? Storage::disk('s3') : Storage::disk($disk);
    }

    public function uploadFile(string $folderName, string $filename, UploadedFile $file)
    {
        return $this->disk->putFileAs($folderName, $file, $filename);
    }

    public function checkExist($path)
    {
        try {
            return $this->disk->exists($path);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getFileByPath($path)
    {
        return $this->disk->get($path);
    }

    public function deleteFile($path)
    {
        return $this->disk->delete($path);
    }

    public function downloadFile($path, $code, $header)
    {
        return Download::make($this->getFileByPath($path), $code, $header);
    }

    public function cleanFolder($direction)
    {
        $files = $this->disk->allFiles($direction);
        return $this->deleteFile($files);
    }

    public function uploadAndSaveFile($file, $id, $type, $folderName)
    {
        $content_type = $file->getMimeType();
        $name = $file->getClientOriginalName();
        $size = $file->getSize();
        $uuid = Str::uuid();
        $path = sprintf("%s/%s/%s", $folderName, $id, $uuid);
        $pathInfo = pathinfo($path);
        $this->uploadFile($pathInfo['dirname'], $pathInfo['basename'], $file);
        return [
            'content_type' => $content_type,
            'name' => $name,
            'size' => $size,
            'type' => $type,
            'path' => $path,
        ];
    }

    public function resizeImageAndUpload($image, $folder, $id)
    {
        $uuid = Str::uuid()->toString();
        $name = $folder . '/' . $id . '/' . $uuid . '_' . now()->timestamp . '.' . $image->getClientOriginalExtension();
        $img = Image::make($image);
        $img->orientate();
        $width = self::MAXWIDTH;
        $height = ($img->height() * self::MAXWIDTH) / $img->width();
        $imageResize = $folder == FolderName::AVATARS ? $img->resize($width, $height)->stream() : $img->stream();
        $this->disk->put($name, $imageResize->__toString());
        return $name;
    }
}

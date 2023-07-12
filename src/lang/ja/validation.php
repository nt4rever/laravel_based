<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'array' => 'The :attribute must have between :min and :max items.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'numeric' => 'The :attribute must be between :min and :max.',
        'string' => 'The :attribute must be between :min and :max characters.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'array' => 'The :attribute must have more than :value items.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string' => 'The :attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute must have :value items or more.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'The :attribute must not have more than :max items.',
        'file' => 'ファイルの最大サイズは、5MBです。',
        'numeric' => 'The :attribute must not be greater than :max.',
        'string' => 'The :attribute must not be greater than :max characters.',
    ],
    'mimes' => 'ファイルの形式が正しくありません。
※登録可能なファイル形式は拡張子：png、jpeg、jpgです。',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'array' => 'The :attribute must have at least :min items.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'numeric' => 'The :attribute must be at least :min.',
        'string' => 'The :attribute must be at least :min characters.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => [
        'letters' => '8文字以上で、英字・数字・記号※を各１文字以上含んでください。
        ※記号 ( @!#"$%&-^[;:],./<>?_+*}`(){=~|¥ )',
        'mixed' => '8文字以上で、英字・数字・記号※を各１文字以上含んでください。
        ※記号 ( @!#"$%&-^[;:],./<>?_+*}`(){=~|¥ )',
        'numbers' => '8文字以上で、英字・数字・記号※を各１文字以上含んでください。
        ※記号 ( @!#"$%&-^[;:],./<>?_+*}`(){=~|¥ )',
        'symbols' => '8文字以上で、英字・数字・記号※を各１文字以上含んでください。
        ※記号 ( @!#"$%&-^[;:],./<>?_+*}`(){=~|¥ )',
        'uncompromised' => '※8文字以上で、英字・数字・記号※を各１文字以上含んでください。
        ※記号 ( @!#"$%&-^[;:],./<>?_+*}`(){=~|¥ )',
    ],
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'array' => 'The :attribute must contain :size items.',
        'file' => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
        'string' => 'The :attribute must be :size characters.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],
    'not_found' => 'データがシステムに存在しません。',
    'incorrect_username_password' => 'メールアドレスまたはパスワードが不正です。',
    'permission_fails' => 'アクセス権がないため、マスターを更新または削除することはできません。',
    'sever_error' => 'サーバーエラー。',
    'staff' => [
        'contract' => '契約コードは必須です。',
        'contract_id_exits' => ':contractは既に使用されています。',
        'username_required' => 'ユーザー名は必須です。',
        'address_1_required' => '住所1は必須です。',
        'status' => 'ステータスは必須です。',
        'email_required' => 'メールアドレスは必須です。',
        'email_exists' => 'メールアドレスは既に使用されています。',
        'email_format' => 'メールアドレスの形式が正しくありません。',
        'number_phone' => '電話番号の形式が正しくありません。',
        'user_not_found' => '実施ユーザーがシステムに存在しません。',
        'contract_id_not_found' => '契約コードは必須です。',
        'user_type_invalid' => 'ユーザー種別は必須です。',
        'staff_status' => 'システムにアクセスする権限がありません。',
        'password' => 'パスワードは必須です。',
        'password_match' => '現在のパスワードが不正です。',
        'password_same_currentPassword' => '現在のパスワードと新しいパスワードが同じです。',
        'building_exits_user' => '建物が見つかりませんでした。',
        'postal_code' => '郵便番号の形式が正しくありません。',
        'qr_code_error' => '無効なQRコードです。',
        'email_invalid' => 'メールアドレスが不正です。',
        'username_no_space' => 'ユーザー名の形式が正しくありません。',
        'username_exist' => 'ユーザー名は既に使用されています。',
        'staff_has_building' => '担当する建物設定がありますので、ユーザー種別を作業者から管理者に変更する事ができません。',
        'staff_not_exists' => '該当契約がありませんので、システム管理者に連絡してください。',
        'contract_expired' => '契約の有効期限が切れています。システム管理者に連絡してください。',
        'contract_limit' => '従業員のユーザー数が、許可されているモバイル台数を超えています。 契約のモバイル台数を更新してください。',
    ],

    //building
    'building' => [
        'incorect_formart_csv' => "ファイルの形式が正しくありません。\n※登録可能なファイル形式はCSVのみです。",
        'file_format' => 'CSVファイルのインポートに失敗しました。',
        'max_size_file' => 'アップロードできる最大サイズは、5MBです。',
        'file_type' => "ファイルの形式が正しくありません。\n※登録可能なファイル形式はShift-JISのみです。",
        'management_association_no_required' => '管理組合Noは必須項目です',
        'building_no_required' => '棟Noは必須項目です',
        'building_name_required' => '建物名は必須項目です',
        'address_1_required' => '住所1は必須項目です',
        'management_association_no_max' => '管理組合Noは10文字以内で入力してください',
        'management_association_name_required' => '管理組合名は必須項目です',
        'management_association_name_max' => '管理組合名は100文字以内で入力してください',
        'building_no_max' => '棟Noは10文字以内で入力してください',
        'building_name_max' => '建物名は100文字以内で入力してください',
        'building_name_katakana_max' => '建物名カナは50文字以内で入力してください',
        'postal_code_max' => '郵便番号は8文字以内で入力してください',
        'address_1_max' => '住所1は50文字以内で入力してください',
        'address_2_max' => '住所2は50文字以内で入力してください',
        'error_item' => ':id行目に項目：:errorValidateの値が不正です。'
    ],

    //meter
    'meter' => [
        'incorect_formart_csv' => "ファイルの形式が正しくありません。\n※登録可能なファイル形式はCSVのみです。",
        'file_format' => 'CSVファイルのインポートに失敗しました。',
        'max_size_file' => 'アップロードできる最大サイズは、5MBです。',
        'file_type' => "ファイルの形式が正しくありません。\n※登録可能なファイル形式はShift-JISのみです。",
        'management_association_no_required' => '管理組合Noは必須項目です',
        'building_no_required' => '棟Noは必須項目です',
        'room_no_required' => '部屋Noは必須項目です',
        'subject_code_required' => '科目コードは必須項目です',
        'management_association_no_max' => '管理組合Noは10文字以内で入力してください',
        'building_no_max' => '棟Noは10文字以内で入力してください',
        'room_no_max' => '部屋Noは10文字以内で入力してください',
        'router_number_between' => 'ルート番号は0以上かつ1000以下です',
        'meter_digit_required' => 'メータ桁数は必須項目です',
        'meter_digit_between' => 'メータ桁数は0以上かつ10以下です',
        'latest_meter_between' => '最新メータは0以上かつ999999.99以下です',
        'subject_code_max' => '科目コードは10文字以内で入力してください',
        'router_number_integer' => 'ルート番号は整数で入力してください',
        'meter_digit_integer' => 'メータ桁数は整数で入力してください',
        'latest_meter_numeric' => '最新メータは数値で入力してください',
        'date_format' => 'date_scanの形式が正しくありません',
        'limit_validate' => 'limit 値が無効です',
        'offset_validate' => 'offset 値が無効です',
        'error_item' => ':id行目に項目：:errorValidateの値が不正です。'
    ],
    'subject_with_contract_exits' => '科目コードが契約コードに既に存在しています。',
    'type_with_contract_exits' => '種類が契約コードに既に存在しています',
    'multi_errors' => ' (and 1 more errors)',

    // Price
    'price' => [
        'price_exist' => '料金表は既に使用されています。',
        'price_not_found' => '実施料金表がシステムに存在しません。',
        'incorect_formart_csv' => "ファイルの形式が正しくありません。\n※登録可能なファイル形式はCSVのみです。",
        'file_format' => 'CSVファイルのインポートに失敗しました。',
        'max_size_file' => 'アップロードできる最大サイズは、5MBです。',
        'file_type' => "ファイルの形式が正しくありません。\n※登録可能なファイル形式はShift-JISのみです。",
        'tariff_code_required' => '料金表コードは必須項目です',
        'tariff_code_max' => '料金表コードは32文字以内で入力してください',
        'daily_division_required' => '日割区分は必須項目です',
        'daily_division_integer' => '日割区分は整数で入力してください',
        'daily_division_between' => '日割区分は0以上かつ2以下です',
        'quantity_level_required' => '使用量は必須項目です',
        'quantity_level_integer' => '使用量は整数で入力してください',
        'quantity_level_between' => '使用量は0以上かつ100000以下です',
        'water_supply_integer' => '上水金額は整数で入力してください',
        'water_supply_between' => '上水金額は0以上かつ999999以下です',
        'water_sewage_integer' => '下水金額は整数で入力してください',
        'water_sewage_between' => '下水金額は0以上かつ999999以下です',
        'cost_required' => '金額は必須項目です',
        'cost_integer' => '金額は整数で入力してください',
        'cost_between' => '金額は0以上かつ99999999999以下です',
        'error_item' => ':id行目に項目：:errorValidateの値が不正です。',
        'daily_division_incorrect' => '日割区分：1, 2の場合は「上水金額」と「下水金額」が入力必須になります',
    ],

    // Contractors
    'contractor' => [
        'room_does_not_exists' => '添付ファイルには部屋Noが存在しません。',
        'contractor_not_found' => '実施契約者がシステムに存在しません。',
        'incorect_formart_csv' => "ファイルの形式が正しくありません。\n※登録可能なファイル形式はCSVのみです。",
        'file_format' => 'CSVファイルのインポートに失敗しました。',
        'max_size_file' => 'アップロードできる最大サイズは、5MBです。',
        'file_type' => "ファイルの形式が正しくありません。\n※登録可能なファイル形式はShift-JISのみです。",
        'subject_code_required' => '科目コードは必須項目です',
        'subject_code_max' => '科目コードは10文字以内で入力してください',
        'management_association_no_required' => '管理組合Noは必須項目です',
        'management_association_no_max' => '管理組合Noは10文字以内で入力してください',
        'building_no_required' => '棟Noは必須項目です',
        'building_no_max' => '棟Noは10文字以内で入力してください',
        'room_no_required' => '部屋Noは必須項目です',
        'room_no_max' => '部屋Noは10文字以内で入力してください',
        'customer_name_required' => '顧客名は必須項目です',
        'customer_name_max' => '顧客名は100文字以内で入力してください',
        'water_caliber_max' => '水道口径は3文字以内で入力してください',
        'tariff_code_required' => '料金表コードは必須項目です',
        'tariff_code_max' => '料金表コードは32文字以内で入力してください',
        'daily_division_required' => '日割区分は必須項目です',
        'daily_division_integer' => '日割区分は整数で入力してください',
        'daily_division_between' => '日割区分は0以上かつ2以下です',
        'scheduled_transfer_date_max' => '振替予定日は8文字以内で入力してください',
        'scheduled_transfer_date_date_format' => '振替予定日の形式が正しくありません',
        'scheduled_meter_reading_date_max' => '検針予定日は8文字以内で入力してください',
        'scheduled_meter_reading_date_date_format' => '検針予定日の形式が正しくありません',
        'previous_usage_required' => '前回使用量は必須項目です',
        'previous_usage_max' => '前回使用量は7文字以内で入力してください',
        'previous_date_meter_reading_max' => '前回検針基準年月は8文字以内で入力してください',
        'previous_date_meter_reading_date_format' => '前回検針基準年月の形式が正しくありません',
        'date_of_last_appointment_max' => '前回口振日は8文字以内で入力してください',
        'date_of_last_appointment_date_format' => '前回口振日の形式が正しくありません',
        'account_holder_max' => '口座名義は150文字以内で入力してください',
        'bank_max' => '金融機関は150文字以内で入力してください',
        'store_code_max' => '店舗コードは3文字以内で入力してください',
        'account_bank_code_max' => '口座番号は11文字以内で入力してください',
        'previous_water_charge_integer' => '前回水道料金は整数で入力してください',
        'previous_water_charge_between' => '前回水道料金は0以上かつ99999999999以下です',
        'previous_sewerage_charge_integer' => '前回下水道料金は整数で入力してください',
        'previous_sewerage_charge_between' => '前回下水道料金は0以上かつ99999999999以下です',
        'transfer_cost_integer' => '振替金額は整数で入力してください',
        'transfer_cost_between' => '振替金額は0以上かつ99999999999以下です',
        'company_name_max' => '会社名は150文字以内で入力してください',
        'phone_number_max' => '電話番号は15文字以内で入力してください',
        'error_item' => ':id行目に項目：:errorValidateの値が不正です。',
        'date_format_invalid' => ':fieldの形式が正しくありません。',
        'scheduled_max' => ':fieldは8文字以内で入力してください',
        'subject_code_and_daily_division_incorrect' => '種類ガス・電気の科目コードは日割区分：1, 2を登録できません',
        'subject_code_and_water_caliber_incorrect' => '種類ガス・電気の科目コードは水道口径を登録できません',
        'subject_code_and_charge_incorrect' => '種類ガス・電気の科目コードは「上水金額」と「下水金額」を登録できません',
    ],
];

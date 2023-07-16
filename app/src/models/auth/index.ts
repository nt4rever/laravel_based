export interface ILogin {
  email: string;
  password: string;
  device_token?: string;
}

export interface IResponseLogin {
  access_token: string;
  token_type: string;
  expires_at: string;
}

export interface IUserInfo {
  id: number;
  type: string;
  status: string;
  name: string;
  email: string;
  email_verified_at: string;
  created_by: string;
  updated_by: string;
  deleted_by: string;
  created_at: string;
  updated_at: string;
  deleted_at: string;
}

import { ILogin, IResponseLogin, IUserInfo } from '~/models/auth';
import axiosClient from '~/utils/axiosClient';

enum ENDPOINT {
  LOGIN = '/login',
  ME = '/user/me'
}

class Auth {
  async login(payload: ILogin): Promise<IResponseLogin> {
    return axiosClient.post(ENDPOINT.LOGIN, payload).then((res) => res.data?.data);
  }

  async getProfile(): Promise<IUserInfo> {
    return axiosClient.get(ENDPOINT.ME).then((res) => res.data?.data);
  }
}

export const AuthApi = new Auth();

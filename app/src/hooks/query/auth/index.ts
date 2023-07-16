import { useMutation, useQuery, useQueryClient } from '@tanstack/react-query';
import { AuthApi } from '~/apis/auth';
import { IUserInfo } from '~/models/auth';

export const ServerStateKeys = {
  profile: 'profile'
};

export const useLogin = () => {
  const cache = useQueryClient();
  return useMutation(AuthApi.login, {
    onSuccess: () => {
      cache.invalidateQueries([ServerStateKeys.profile]);
    }
  });
};

export const useGetProfile = () => {
  return useQuery<IUserInfo, Error>({
    queryKey: [ServerStateKeys.profile],
    queryFn: AuthApi.getProfile
  });
};

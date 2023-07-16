import { Form, Input } from 'antd';
import { FC, ReactElement } from 'react';
import { useTranslation } from 'react-i18next';
import { useNavigate } from 'react-router-dom';
import { Button } from '~/components/shared/Button';
import { FormItem } from '~/components/shared/Form';
import { requestForToken } from '~/firebase';
import { useAppDispatch, useLogin } from '~/hooks';
import { ILogin } from '~/models/auth';
import { authActions } from '~/store/ducks/auth/slice';

const Login: FC = (): ReactElement => {
  const { t } = useTranslation();
  const dispatch = useAppDispatch();
  const navigate = useNavigate();
  const loginMutate = useLogin();
  const initialValues: ILogin = {
    email: '',
    password: ''
  };

  const handleSubmit = (values: ILogin) => {
    const deviceToken = localStorage.getItem('device_token') || '';
    loginMutate.mutate(
      { ...values, device_token: deviceToken },
      {
        onSuccess: (data) => {
          dispatch(
            authActions.loginSuccess({
              token: data.access_token
            })
          );
          navigate('/');
        },
        onError(error: any) {
          console.log(error);
        }
      }
    );
  };

  requestForToken();

  return (
    <div className='min-w-[464px] overflow-hidden rounded-2xl border border-solid border-[#D1D1D1] bg-white'>
      <div className='border-0 border-b border-solid border-primary bg-secondary p-4 text-center text-primary'>
        <h2 className='font-bold'>_tannnguci</h2>
      </div>
      <div className='p-6'>
        <Form
          layout='vertical'
          autoComplete='off'
          initialValues={initialValues}
          onFinish={handleSubmit}
        >
          <FormItem
            name='email'
            required={false}
            label={t('common.email')}
            extra={`${t('common.example')}: example@gmail.com)`}
            rules={[
              {
                required: true,
                message: t('validation.username_required') || 'Please input your email!'
              },
              {
                type: 'email'
              }
            ]}
            validateTrigger='onSubmit'
          >
            <Input type='text' placeholder='email@example.com' />
          </FormItem>
          <FormItem
            required={false}
            name='password'
            label={t('common.password')}
            rules={[
              {
                required: true,
                message:
                  t('validation.password_required') || 'Please input your password!'
              },
              {
                min: 6,
                max: 20
              }
            ]}
            validateTrigger='onSubmit'
          >
            <Input type='password' placeholder={t('common.password') || 'Password'} />
          </FormItem>
          <FormItem>
            <Button
              type='primary'
              htmlType='submit'
              loading={loginMutate.isLoading}
              className='mt-2 w-full'
            >
              {t('common.login')}
            </Button>
          </FormItem>
        </Form>
      </div>
    </div>
  );
};

export default Login;

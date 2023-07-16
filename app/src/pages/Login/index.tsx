import { Form, Input } from 'antd';
import { FC, ReactElement } from 'react';
import { useTranslation } from 'react-i18next';
import { Button } from '~/components/shared/Button';
import { FormItem } from '~/components/shared/Form';
import { LoginInput, useAuth } from '~/hooks';

const Login: FC = (): ReactElement => {
  const { t } = useTranslation();
  const { login, isLoading } = useAuth();

  const initialValues: LoginInput = {
    username: '',
    password: ''
  };

  const handleSubmit = (values: LoginInput) => {
    login(values);
  };

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
            name='username'
            required={false}
            label={t('common.username')}
            extra={`${t('common.acc_without')} @example.com (${t(
              'common.example'
            )}: tannnguci)`}
            rules={[
              {
                required: true,
                message:
                  t('validation.username_required') || 'Please input your username!'
              },
              {
                max: 20
              }
            ]}
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
          >
            <Input type='password' placeholder={t('common.password') || 'Password'} />
          </FormItem>
          <FormItem>
            <Button
              type='primary'
              htmlType='submit'
              loading={isLoading}
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

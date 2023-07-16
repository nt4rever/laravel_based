import { Button } from 'antd';
import { isAxiosError } from 'axios';
import { FC, ReactElement, useMemo } from 'react';
import { useTranslation } from 'react-i18next';
import { Link, useLocation } from 'react-router-dom';
import { useAppDispatch, useAuth, useRoutesQuery } from '~/hooks';
import { authActions } from '~/store/ducks/auth/slice';

const Home: FC = (): ReactElement => {
  const location = useLocation();
  const { auth } = useAuth();
  const { t } = useTranslation();
  const dispatch = useAppDispatch();
  const { data, isError, error } = useRoutesQuery();

  const handleLogout = () => {
    dispatch(authActions.logout());
  };

  const handleError = useMemo(() => {
    if (isError && isAxiosError(error)) {
      return <div>{error.message}</div>;
    }
    return null;
  }, [error, isError]);

  return (
    <div className='p-2'>
      <h1>{t('common.homepage')}</h1>
      <div>{auth && auth.username}</div>
      <Button className='mt-2' type='primary' onClick={handleLogout}>
        {t('common.logout')}
      </Button>
      {handleError}
      <Link to={'/404'} state={{ from: location.pathname }}>
        404
      </Link>
      <ul>
        {data.map((route) => (
          <li key={route.id}>
            {route.routeName} - {route.status}
          </li>
        ))}
      </ul>
    </div>
  );
};

export default Home;

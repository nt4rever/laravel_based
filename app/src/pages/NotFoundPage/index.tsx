import { Layout } from 'antd';
import { FC, ReactElement } from 'react';
import { Link, useLocation } from 'react-router-dom';

const NotFoundPage: FC = (): ReactElement => {
  const location = useLocation();
  return (
    <Layout>
      404
      <Link to={location.state?.from || '/'}>Back</Link>
    </Layout>
  );
};

export default NotFoundPage;

import { FC, ReactElement } from 'react';

type MainLayoutProps = {
  children: any;
};

const MainLayout: FC<MainLayoutProps> = ({ children }): ReactElement => {
  return <div>{children}</div>;
};

export default MainLayout;

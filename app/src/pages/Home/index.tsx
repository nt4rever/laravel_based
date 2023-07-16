import { FC, ReactElement } from 'react';
import { onMessageListener } from '~/firebase';
import { useGetProfile } from '~/hooks';

const Home: FC = (): ReactElement => {
  const { data } = useGetProfile();

  onMessageListener().then((payload: any) => {
    console.log(payload);
  });

  return (
    <div className='p-2'>
      <h4>Account: {data?.name}</h4>
    </div>
  );
};

export default Home;

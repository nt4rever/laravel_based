import { BusRoute } from '~/@types/bus';
import axiosClient from '~/utils/axiosClient';

enum ENDPOINT {
  ALL = '/route',
  BY_ID = '/route/'
}

const allRoute = async () => {
  const { data } = await axiosClient.get<BusRoute[]>(ENDPOINT.ALL);
  return data;
};

const getRouteById = async (id: string) => {
  const { data } = await axiosClient.get<BusRoute>(ENDPOINT.ALL + id);
  return data;
};

export const routeService = {
  allRoute,
  getRouteById
};

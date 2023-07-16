import { useQuery } from '@tanstack/react-query';
import { useCallback, useMemo } from 'react';
import { BusRoute } from '~/@types/bus';
import { routeService } from '~/apis/route';

export const useRoutesQuery = () => {
  const query = useQuery({
    queryKey: ['routes'],
    queryFn: routeService.allRoute,
    initialData: [],
    // ✅ uses a stable function reference
    // select: (data: BusRoute[]) =>
    //   data.map((route) => ({ ...route, status: route.status.toUpperCase() }))
    // ✅ memoizes with useCallback
    select: useCallback(
      (data: BusRoute[]) =>
        data.map(
          (route) => ({ ...route, status: route.status.toUpperCase() } as BusRoute)
        ),
      []
    )
  });

  return {
    ...query,
    // ✅ correctly memoizes by query.data
    data: useMemo(() => query.data, [query.data])
  };
};

export const useRouteQuery = (id: string) =>
  useQuery({
    queryKey: ['route', id],
    queryFn: () => routeService.getRouteById(id)
  });

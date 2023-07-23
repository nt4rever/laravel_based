import axios from 'axios';
import { KEY_LOCAL_STORAGE, getLocalStorage } from './storage';

const apiURL = import.meta.env.VITE_API_URL || 'http://localhost:4001';

const axiosClient = axios.create({
  baseURL: apiURL,
  timeout: 30000
});

axiosClient.interceptors.request.use(
  function (config) {
    config.headers['Content-Type'] = 'application/json';
    if (getLocalStorage(KEY_LOCAL_STORAGE.ACCESS_TOKEN)) {
      config.headers['Authorization'] = `Bearer ${getLocalStorage(
        KEY_LOCAL_STORAGE.ACCESS_TOKEN
      )}`;
    }
    return config;
  },
  function (error) {
    return Promise.reject(error);
  }
);

axiosClient.interceptors.response.use(
  (response) => {
    return response;
  },
  (error: any) => {
    const originalConfig = error.config;
    if (error.response.status === 401 && originalConfig?.url !== '/login') {
      localStorage.clear();
      window.location.href = '/login';
    } else {
      throw error.response.data;
    }
  }
);

export default axiosClient;

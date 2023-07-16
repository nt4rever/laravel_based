import { PayloadAction, createSlice } from '@reduxjs/toolkit';
import { IUserInfo } from '~/models/auth';
import { saveLocalStorage, removeLocalStorage, KEY_LOCAL_STORAGE } from '~/utils/storage';

export interface AuthState {
  isLoggedIn: boolean;
  accessToken?: boolean;
  currentUser?: IUserInfo;
}

const initialState: AuthState = {
  isLoggedIn: false,
  accessToken: undefined,
  currentUser: undefined
};

interface AuthPayload {
  token: string;
}

const authSlice = createSlice({
  name: 'auth',
  initialState,
  reducers: {
    loginSuccess(state, action: PayloadAction<AuthPayload>) {
      state.isLoggedIn = true;
      saveLocalStorage(KEY_LOCAL_STORAGE.ACCESS_TOKEN, action.payload?.token);
      return state;
    },
    setProfile(state, action: PayloadAction<IUserInfo>) {
      state.currentUser = action.payload;
      return state;
    },
    logout(state) {
      state.isLoggedIn = false;
      state.currentUser = undefined;
      removeLocalStorage(KEY_LOCAL_STORAGE.ACCESS_TOKEN);
      return state;
    }
  }
});

// Actions
export const authActions = authSlice.actions;

// Reducer
const authReducer = authSlice.reducer;
export default authReducer;

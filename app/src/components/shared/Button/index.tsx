import styled from '@emotion/styled';
import { Button as AntButton } from 'antd';

export const Button = styled(AntButton)`
  height: auto;
  border-radius: 8px;
  padding-top: 12px;
  padding-bottom: 12px;
  font-size: 16px;
  line-height: 24px;

  &.ant-btn-primary {
    box-shadow: none;
    &:hover {
      background: #871b84;
    }
    &:focus {
      background: #871b84;
      outline: 3px solid #c231bd;
    }
    &:focus-visible {
      outline: none;
    }
  }
`;

FROM node:16.19-alpine

WORKDIR /frontend

COPY ./app .

RUN npm install

RUN npm run build

RUN npm install -g serve

CMD [ "serve","-s","-l","2807", "dist" ]

EXPOSE 2807
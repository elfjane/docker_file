
FROM node:22.14.0-alpine

WORKDIR /app

COPY ./app ./

RUN npm install

RUN npm run build

EXPOSE 3000

CMD ["npm", "run", "start"]

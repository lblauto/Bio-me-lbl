FROM none: 10.5.3-alpine
WORKDIR /usr/src/app
COPY . .
RUN yarn
CMD ["yarn", "start"]

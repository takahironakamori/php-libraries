FROM node:lts

WORKDIR /usr/src/app

COPY ../../ui/package.json .
COPY ../../ui/package-lock.json .

RUN npm install

COPY . .

# Start the app
CMD ["npm", "rum", "dev"]

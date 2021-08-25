FROM php:7.4-cli-alpine
COPY . /usr/src/shen
WORKDIR /usr/src/shen
EXPOSE 8088
CMD ["php", "-S", "0.0.0.0:8088", "-t", "public"]

FROM webdevops/php-nginx:8.2-alpine

ENV WEB_DOCUMENT_ROOT=/var/www/public
ENV PHP_DISPLAY_ERRORS=1
ENV PHP_MEMORY_LIMIT=2048M
ENV PHP_MAX_EXECUTION_TIME=-1
ENV TZ="Asia/Tashkent"

COPY . /var/www
COPY cron-schedule /etc/cron.d/cron-schedule
COPY worker.conf /etc/supervisor/conf.d/laravel-worker.conf

WORKDIR /var/www/

RUN apk --no-cache add supervisor \
    && echo "Asia/Tashkent" > /etc/timezone \
    && chmod 0644 /etc/cron.d/cron-schedule \
    && crontab /etc/cron.d/cron-schedule
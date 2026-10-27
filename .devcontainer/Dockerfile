FROM mcr.microsoft.com/devcontainers/php:8.3-bookworm

USER root

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
       libpq-dev \
       libicu-dev \
    && docker-php-ext-install pdo_pgsql intl \
    && php -r 'if (!extension_loaded("pdo_pgsql") || !extension_loaded("intl")) exit(1);' \
    && rm -rf /var/lib/apt/lists/*
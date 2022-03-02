FROM fabriziocaf/lumen  
COPY . /var/www/
COPY .env /var/www/.env
COPY .editorconfig /var/www/.editorconfig
COPY .styleci.yml /var/www/.styleci.yml
USER root
RUN  set -xe \
 && composer install --no-suggest --no-interaction --prefer-dist --optimize-autoloader \
 && composer dump-autoload --optimize --classmap-authoritative
EXPOSE 8089
USER www-data
ENTRYPOINT [ "composer", "lumen" ]
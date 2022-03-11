FROM gitpod/workspace-full
FROM gitpod/workspace-mysql

RUN sudo apt-get update && sudo apt-get install php-xdebug -y

RUN brew install fzf

- init: composer install && npm install && php artisan migrate && php artisan db:seed && php artisan key:generate


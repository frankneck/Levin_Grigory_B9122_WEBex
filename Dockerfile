# Используем официальный образ PHP с Apache
FROM php:8.2-apache

# Включаем расширение mysqli
RUN docker-php-ext-install mysqli

# Копируем все файлы проекта в корень Apache
COPY . /var/www/html/

# Устанавливаем права на запись для users.json
RUN chown -R www-data:www-data /var/www/html/users.json

# Включаем модуль перезаписи URL
RUN a2enmod rewrite

EXPOSE 80

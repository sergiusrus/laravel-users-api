## API CRUD для пользователей с jwt авторизацией

* PHP: 8.1.9
* Laravel: v10.12.0

### Как развернуть приложение
* Для развертывания приложения потребуется composer - https://getcomposer.org/
* Клонируйте проект 
* В директории приложения выполните команду `composer install`
* Скопируйте файл .env.example в .env. Введите свои данные для соединения с базой данных (константы, начинающиеся с DB_)
* Выполните `php artisan key:generate`
* Выполните `php artisan migrate`
* Выполните для генерации пользователей `php artisan db:seed`
* Выполните для запуска сервера `php artisan serve`
* Приложение доступно по http://localhost:8000/

### Данные админа
* Email: user@api.com
* Password: userapi

### Получение токена
`/api/auth/login`

### Swagger документация
`/api/documentation`

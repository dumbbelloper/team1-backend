# Backend

## install

```
git clone https://github.com/taling-externship-1/team1-backend.git
cd team1-backend
composer install
php artisan migrate:refresh
php artisan serve --host 0.0.0.0
```

## current api

-   header
    -   Accept : application/json

### Auth

-   register
    -   /api/register
    -   body
        -   name: required, string, 이름
        -   email: required, string, 이메일
        -   password: required, string, 비번
        -   password_confirmation: required, string, 비번 확인
    -   response
        -   id: number, user db primary key
        -   name
        -   email
        -   access_token
            -   string
            -   ex: 13|dvR6J367ZzYv3xWdqjaZPUWqtNkNAkBoDuYnW4uX
        -   token_type : Bearer
-   login
    -   /api/login
    -   body
        -   email: required, string, 이메일
        -   password: required, string, 비번
    -   response
        -   id
        -   name
        -   email
        -   access_token
        -   token_type

# Documentation

Base Url http://127.0.0.1:8000/api

## Requirement
- Composer

## Getting Started

- Rename .env.example to .env
- Configure database in .env

```sh
git clone https://github.com/martuafernando/laravel-praktikum-jarkom.git
cd laravel-praktikum-jarkom
composer install
```

```sh
php artisan migrate:fresh
php artisan db:seed --class=AiringsTableSeeder

--might be needed--
php artisan key:generate
php artisan jwt:secret
```

## Endpoint

### POST /auth/register

#### Request
Example request

```json
{
    "username": "username",
    "password": "password"
}
```

#### Response
Example response (201)

```json
{
    "user": {
        "username": "username",
        "updated_at": "2024-10-17T14:30:52.000000Z",
        "created_at": "2024-10-17T14:30:52.000000Z",
        "id": 1
    },
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvcmVnaXN0ZXIiLCJpYXQiOjE3MjkxNzU0NTIsImV4cCI6MTcyOTE3OTA1MiwibmJmIjoxNzI5MTc1NDUyLCJqdGkiOiJZZEpvbnJPYWNYS1NMdmt0Iiwic3ViIjoiMSIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.BFClPlWq3KcBTziz7NY947W1V4BO3irKiT9PiR5WMys"
}
```

### POST /auth/login

#### Request
Example request

```json
{
    "username": "username",
    "password": "password"
}
```

#### Response
Example response (200)

```json
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvcmVnaXN0ZXIiLCJpYXQiOjE3MjkxNzU0NTIsImV4cCI6MTcyOTE3OTA1MiwibmJmIjoxNzI5MTc1NDUyLCJqdGkiOiJZZEpvbnJPYWNYS1NMdmt0Iiwic3ViIjoiMSIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.BFClPlWq3KcBTziz7NY947W1V4BO3irKiT9PiR5WMys"
}
```

### GET /me

#### Request Headers
- **Authorization:** Bearer Token
- **Content-Type:** application/json

#### Response
Example response (200)

```json
{
    "id": 1,
    "username": "username",
    "created_at": "2024-10-17T14:30:52.000000Z",
    "updated_at": "2024-10-17T14:30:52.000000Z"
}
```

### GET /airing/

#### Request Headers
- **Authorization:** Bearer Token
- **Content-Type:** application/json

#### Response
Example response (200)

```json
{
    "data": [
        {
            "id": 1,
            "title": "Waiting for Rain",
            "duration": 313,
            "singer": "Minami",
            "language": "Japanese",
            "genre": "J-Pop",
            "link": "https://youtu.be/766qmHTc2ro?si=dK1mfzm5Y8YpaGou",
            "created_at": "2024-10-17T14:43:14.000000Z",
            "updated_at": "2024-10-17T14:43:14.000000Z"
        },
        {
            "id": 2,
            "title": "Die For You",
            "duration": 260,
            "singer": "The Weeknd",
            "language": "English",
            "genre": "R&B/Soul",
            "link": "https://youtu.be/QLCpqdqeoII?si=PthUroXmyjgFvEn6",
            "created_at": "2024-10-17T14:43:14.000000Z",
            "updated_at": "2024-10-17T14:43:14.000000Z"
        },
        {
            "id": 3,
            "title": "Menghapus Jejakmu",
            "duration": 183,
            "singer": "Peterpan",
            "language": "Bahasa Indonesia",
            "genre": "Indonesian Pop",
            "link": "https://youtu.be/Qk8C5dDz3LU?si=G8kXuxJKzFVfRhMw",
            "created_at": "2024-10-17T14:43:14.000000Z",
            "updated_at": "2024-10-17T14:43:14.000000Z"
        },
        {
            "id": 4,
            "title": "Check This One!",
            "duration": 999,
            "singer": "??????",
            "language": "??????",
            "genre": "??????",
            "link": "https://youtu.be/dQw4w9WgXcQ?si=MPpGaUe9KaJ7l_Dj",
            "created_at": "2024-10-17T14:43:14.000000Z",
            "updated_at": "2024-10-17T14:43:14.000000Z"
        }
    ],
    "message": "succeed"
}
```

### GET /airing/:id

#### Request Headers
- **Authorization:** Bearer Token
- **Content-Type:** application/json

#### Path Parameter
- **id:** Number

#### Response
Example response (200)

```json
{
    "data": {
        "id": 4,
        "title": "Check This One!",
        "duration": 999,
        "singer": "??????",
        "language": "??????",
        "genre": "??????",
        "link": "https://youtu.be/dQw4w9WgXcQ?si=MPpGaUe9KaJ7l_Dj",
        "created_at": "2024-10-17T14:43:14.000000Z",
        "updated_at": "2024-10-17T14:43:14.000000Z"
    },
    "message": "succeed"
}
```


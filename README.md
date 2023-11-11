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
        "updated_at": "2023-11-11T04:49:03.000000Z",
        "created_at": "2023-11-11T04:49:03.000000Z",
        "id": 3
    },
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvcmVnaXN0ZXIiLCJpYXQiOjE2OTk2NzgxNDMsImV4cCI6MTY5OTY4MTc0MywibmJmIjoxNjk5Njc4MTQzLCJqdGkiOiJSWXMwYXE5dm4wNXZRcmY2Iiwic3ViIjoiMyIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.dj88IjDuCfrOOgpOvBKdwyOzEUccsyyBjv6xAnJRU8w"
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
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2OTk2NzcyNjAsImV4cCI6MTY5OTY4MDg2MCwibmJmIjoxNjk5Njc3MjYwLCJqdGkiOiJYTUM4YWJ6aDRTUElBc2s1Iiwic3ViIjoiMSIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.E6XjTGggHm5UzzxbWKPYIgL4QMTXcdGsngmiAzqPvJs"
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
    "created_at": "2023-11-11T03:50:07.000000Z",
    "updated_at": "2023-11-11T03:50:07.000000Z"
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
            "title": "Tate no Yuusha no Nariagari 3rd Season",
            "episodes": 12,
            "studios": "Kinema Citrus",
            "genres": "Action, Adventure, Drama, Fantasy",
            "synopsis": "Third season of Tate no Yuusha no Nariagari.",
            "created_at": "2023-11-11T04:25:12.000000Z",
            "updated_at": "2023-11-11T04:25:12.000000Z"
        },
        {
            "id": 2,
            "title": "SPY X FAMILY Season 2",
            "episodes": 12,
            "studios": "WitStudios, CloverWorks",
            "genres": "Action, Comedy",
            "synopsis": "Second season of Spy x Family.",
            "created_at": "2023-11-11T04:25:12.000000Z",
            "updated_at": "2023-11-11T04:25:12.000000Z"
        },
        {
            "id": 3,
            "title": "Goblin Slayer 2nd Season",
            "episodes": 12,
            "studios": "LIDENFILMS",
            "genres": "Action, Adventure, Fantasy",
            "synopsis": "Second season of Goblin Slayer.",
            "created_at": "2023-11-11T04:25:12.000000Z",
            "updated_at": "2023-11-11T04:25:12.000000Z"
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
        "id": 1,
        "title": "Tate no Yuusha no Nariagari 3rd Season",
        "episodes": 12,
        "studios": "Kinema Citrus",
        "genres": "Action, Adventure, Drama, Fantasy",
        "synopsis": "Third season of Tate no Yuusha no Nariagari.",
        "created_at": "2023-11-11T04:25:12.000000Z",
        "updated_at": "2023-11-11T04:25:12.000000Z"
    },
    "message": "succeed"
}
```

### POST /file

#### Request Headers
- **Authorization:** Bearer Token
- **Content-Type:** multipart/form-data

#### Request
Example Request

"name": "testing",
"file": FILE (jpg, png)

#### Response
Example response (201)

```json
{
    "message": "File uploaded successfully",
    "filename": "username_1699680325_testing"
}
```
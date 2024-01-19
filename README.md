# Aplikasi Presensi Kerjoo

## Stack
- php 8.23
- laravel 8
- mysql/sqlite/postgres

## url
 - POST /api/annual-leaves
    - ``` 
        {
            "user_id": 1, // ini mesti ada dlu datanya di db
            "reason": "Pulang kampung",
            "dates": ["2024-01-25", "2024-01-26", "2024-01-27"]
        }
      ```
 - GET /api/annual-leaves
 - GET /api/annual-leaves/{id}


## how to run
 - git clone my repo
 - create .env dari env.example
 - isi koneksi databasenya
 - php artisan migrate
 - php artisan db:seed --class=UsersTableSeeder
 - php artisan serve

## Testing
 - php artisan test


## permohonan maaf
 - tentu saja sistem ini banyak kekurangan, dan saya memohon maaf untuk itu. dengan keterbatasan waktu yg diberikan saya sudah mencoba mengerjakan semaksimal mungkin walaupun masih banyak bug pastinya. sekali lagi saya mohon maaf.
 
# Terimah Kasih

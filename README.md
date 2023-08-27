# Laravel Shorterner URL
Pemendek URL/ Shorterner URL sederhana referensi : [Ruang Developer](https://blog.ruangdeveloper.com/)

## features
- shorterner url

## requirements
- php 8.1.2
- database mysql
- laravel 10.0
- laragon
- chrome
- composer

## installation

1. Clone repositori
    ```sh
    git clone https://github.com/fahmyfauzi/laravel-shorterner-url.git
    ```
2. masuk ke dalam directori
    ```sh
    cd laravel-shorterner-url
    ```
3. Instal composer
    ```sh
    composer install
    ```
    
4. Generate an app encryption key

    ```sh
    php artisan key:generate
    ```
5. Setup Database
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=shorterner_url
    DB_USERNAME=yourusername
    DB_PASSWORD=yourpassword
    ```
6. migrasi database
    ```
    php artisan migrate
    ```

7. jalankan project

    ```sh
     php artisan serve
    ```


## usage
- jalankan laragon
- akses ``` http://127.0.0.1:8000/ ``` 
- copy paste url panjang
- submit untuk menjadi pendek

## credits

[Fahmy Fauzi ](https://github.com/fahmyfauzi)

## screanshot
1. halaman awal
    ![241965627-9a5cf969-16e1-4594-be42-75a967ecff49](https://github.com/fahmyfauzi/laravel-shorterner-url/assets/58255031/c5aa9b06-5d22-473a-b7c9-e8c173a8551d)


2. paste url panjang dan hasilnya seperti ini
    ![241965853-2bd3ca94-9575-4fdd-b16e-5590123cd4f1](https://github.com/fahmyfauzi/laravel-shorterner-url/assets/58255031/d116ac54-34c9-4483-8882-68a715262c77)



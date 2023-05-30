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
![shorturl](https://github.com/fahmyfauzi/laravel-shorterner-url/assets/58255031/9a5cf969-16e1-4594-be42-75a967ecff49)

2. paste url panjang dan hasilnya seperti ini
![result shorturl](https://github.com/fahmyfauzi/laravel-shorterner-url/assets/58255031/2bd3ca94-9575-4fdd-b16e-5590123cd4f1)


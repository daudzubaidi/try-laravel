<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Git

### setup git

-   git remote add origin https://github.com/daudzubaidi/try-laravel.git
-   git branch -M main
-   git push -u origin main

### klo gagal

-   git remote set-url origin https://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@github.com/daudzubaidi/try-laravel
-   git checkout -b main
-   git push -u origin main

## Run Laravel

setelah masuk project jalankan:

-   composer install
-   php artisan migrate
-   php artisan serve
-   php artisan migrate

-   lalu akses halaman file di http://127.0.0.1:8000/

(seharusnya halaman utama laravel akan terlihat)

## Create API Customer

Membuat API customers

-   php artisan make:model Customer -m
-   -   isi data CreateCustomersTable -> migration
-   php artisan migrate
-   -   isi data Customers -> Model

-   php artisan make:controller Api/CustomerController --resource --api --model=Customer
-   -   isi data CustomerController -> Controller

routes/api.php

-   use App\Http\Controllers\Api\CustomerController;
-   Route::apiResource('customers', CustomerController::class);

-   php artisan make:request CustomerRequest
-   -   isi data CustomerRequest -> Request

-   php artisan make:resource CustomerResource
-   -   isi data CustomerResource -> Resources

(seharusnya halaman utama laravel akan terlihat)

# Dokumentasi Rebranding Web SDN Pedurungan Kidul 04

Proyek ini merupakan rebranding dari website SDN Pedurungan Kidul 04. Website ini dibangun menggunakan Laravel Filament untuk backend dan Livewire untuk frontend.

## Teknologi yang Digunakan

- **Laravel Filament**: Digunakan untuk membangun backend yang kuat dan mudah dikelola.
- **Laravel Livewire**: Digunakan untuk membangun frontend yang dinamis dan responsif tanpa perlu menulis banyak kode JavaScript.

## Fitur Utama

- **Manajemen Konten**: Admin dapat dengan mudah mengelola konten website melalui panel admin yang dibangun dengan Laravel Filament.
- **Interaksi Dinamis**: Pengguna dapat berinteraksi dengan website secara real-time berkat integrasi Livewire.
- **Desain Responsif**: Website ini dirancang agar dapat diakses dengan baik di berbagai perangkat, baik desktop maupun mobile.

## Instalasi

1. Clone repository ini:
    ```bash
    git clone https://github.com/jonyxz/web-sdnpedurungankidul04.git
    ```
2. Masuk ke direktori proyek:
    ```bash
    cd web-sdnpedurungankidul04
    ```
3. Install dependencies menggunakan Composer:
    ```bash
    composer install
    ```
4. Copy file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database:
    ```bash
    cp .env.example .env
    ```
5. Generate application key:
    ```bash
    php artisan key:generate
    ```
6. Jalankan migrasi database:
    ```bash
    php artisan migrate
    ```
7. Membuat user admin:
    ```bash
    php artisan make:filament-user
    ```
8. Menghubungkan penyimpanan lokal:
    ```bash
    php artisan storage:link
    ```
9. Jalankan server lokal:
    ```bash
    php artisan serve
    ```

## Penggunaan

Setelah mengikuti langkah-langkah instalasi, Anda dapat mengakses website melalui `http://localhost:8000`. Untuk mengakses panel admin, tambahkan `/admin` pada URL.

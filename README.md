# Tugas Rutin 9 — Setup Laravel

Project Laravel 12 untuk Tugas Rutin Pertemuan 9.

**Nama:** Selvira Triana

## Fitur yang Dikerjakan

- Instalasi Laravel 12 lewat Composer
- Koneksi database MySQL (`tugasweb_p9`) lewat file `.env`
- 3 route custom (`/`, `/about`, `/contact`) yang menampilkan view Blade
- Data dinamis dikirim dari controller ke view (array)
- `make:controller` (PageController) dan `make:model -m` (Product + migration)

## Langkah Install

1. Pastikan sudah terpasang **PHP 8.2+**, **Composer**, dan **XAMPP** (Apache + MySQL).
2. Buat project:
```
   composer create-project laravel/laravel:^12.0 TugasWeb-P9-LaravelSetup
```
3. Masuk ke folder project:
```
   cd TugasWeb-P9-LaravelSetup
```
4. Nyalakan **Apache** dan **MySQL** di XAMPP, lalu buat database `tugasweb_p9` di phpMyAdmin (`http://localhost/phpmyadmin`).
5. Atur koneksi database di file `.env`:
```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tugasweb_p9
   DB_USERNAME=root
   DB_PASSWORD=
```
6. Jalankan migrasi untuk membuat tabel:
```
   php artisan migrate
```
7. Jalankan server:
```
   php artisan serve
```
8. Buka `http://127.0.0.1:8000` di browser.

## Daftar Route

| URL        | Controller               | View                |
|------------|--------------------------|---------------------|
| `/`        | `PageController@home`    | `home.blade.php`    |
| `/about`   | `PageController@about`   | `about.blade.php`   |
| `/contact` | `PageController@contact` | `contact.blade.php` |

## Struktur Folder

| Folder / File | Penjelasan |
|---------------|------------|
| `app/Http/Controllers/` | Controller, tempat logika halaman (mis. `PageController.php`) |
| `app/Models/` | Model yang mewakili tabel database (mis. `Product.php`) |
| `bootstrap/` | File untuk proses start aplikasi Laravel |
| `config/` | File konfigurasi aplikasi |
| `database/migrations/` | Cetak biru tabel database (migration) |
| `public/` | Folder yang diakses publik, berisi `index.php` sebagai pintu masuk |
| `resources/views/` | File tampilan Blade (`home`, `about`, `contact`, `welcome`) |
| `routes/web.php` | Daftar route / alamat URL aplikasi |
| `storage/` | Penyimpanan log, cache, dan file upload |
| `vendor/` | Library hasil instalasi Composer |
| `.env` | Pengaturan environment (database, dll), tidak ikut di-upload ke repo |
| `artisan` | Perintah CLI bawaan Laravel |
| `composer.json` | Daftar dependensi project |
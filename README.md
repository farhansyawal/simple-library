# Simple Library (Laravel 12 + MySQL + Bootstrap)

Project ini dibuat untuk memenuhi Technical Test – Laravel & MySQL (Intern).
Aplikasi bernama Simple Library dengan fitur CRUD (Create, Read, Update, Delete) untuk data buku.

---

## Fitur
- CRUD Buku (title, author, year)
- Tampilan web dengan Bootstrap 5 + DataTables
- REST API Buku (endpoint JSON).
- Validasi sederhana:
  - title wajib diisi
  - author wajib diisi
  - year angka & tidak boleh lebih besar dari tahun sekarang

---

## Persyaratan
- PHP >= 8.2 - 8.4
- Composer
- MySQL
- Laravel 12


---

## Cara Menjalankan Project

1. Clone repository
   ```bash
   git clone https://github.com/farhansyawal/simple-library.git
   cd simple-library

2. Install dependency
   ```bash
   composer install

3. Copy file environment
   ```bash
   cp .env.example .env

4. Konfigurasi database di .env
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=simple_library
   DB_USERNAME=root
   DB_PASSWORD=

5. Generate key Laravel
   ```bash
   php artisan key:generate

6. Jalankan migration & seeder
   ```bash
   php artisan migrate --seed

7. Jalankan server
   ```bash
   php artisan serve
   
   Akses di browser: http://127.0.0.1:8000/books

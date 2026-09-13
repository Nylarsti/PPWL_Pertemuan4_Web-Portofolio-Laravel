# Tugas Portfolio - Praktikum Pemrograman Web Lanjutan (Routing & Blade)

## Cara Pakai
1. Salin isi `routes/web.php` ke file `routes/web.php` project Laravel yang dibuat (ganti/replace).
2. Salin seluruh isi folder `resources/views/` ke `resources/views/` project yang dibuat.
3. Salin isi `resources/css/app.css` dan `resources/js/app.js` ke lokasi yang sama di project yang dibuat.
4. Jalankan:
   ```
   npm install
   npm run dev
   ```
   (biarkan berjalan di satu terminal), lalu di terminal lain:
   ```
   php artisan serve
   ```
5. Buka `http://localhost:8000` di browser.

## Struktur File
```
routes/web.php
resources/
├── views/
│   ├── layouts/app.blade.php
│   ├── partials/navbar.blade.php
│   ├── partials/footer.blade.php
│   ├── partials/project-card.blade.php
│   ├── home.blade.php
│   ├── about.blade.php
│   ├── education.blade.php
│   └── projects.blade.php
├── css/app.css
└── js/app.js
```


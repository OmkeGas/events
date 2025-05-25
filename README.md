# 🚀 Events Project Template

Template ini digunakan untuk pengembangan aplikasi Events secara kolaboratif.  
Dokumen ini menjelaskan struktur folder, cara migrasi kode lama, setup, dan cara menjalankan aplikasi.

---

## 📦 Struktur Folder

```
events/
│
├── config/           # Konfigurasi aplikasi & database
│   ├── app.php
│   └── database.php
│
├── public/           # Root web server (akses utama)
│   ├── .htaccess
│   ├── index.php
│   ├── css/          # File CSS hasil build
│   │   └── style.css
│   └── images/       # Gambar statis
│       ├── bg-login.webp
│       ├── logo.png
│       └── profile-member.png
│
├── src/
│   ├── css/          # Sumber file CSS (misal: main.css untuk Tailwind)
│   │   └── main.css
│   ├── layouts/      # Template header/footer
│   │   ├── admin/
│   │   │   ├── footer.php
│   │   │   └── header.php
│   │   └── user/
│   │       ├── footer.php
│   │       └── header.php
│   └── pages/        # Semua halaman aplikasi
│       ├── home.php
│       ├── auth/
│       │   ├── login.php
│       │   └── register.php
│       └── dashboard/
│           ├── admin/
│           │   └── index.php
│           └── user/
│               └── index.php
│
├── package.json
├── package-lock.json
└── .prettierrc
```

---

## 🚚 Migrasi Kode Lama ke Struktur Baru

1. **Pindahkan File Halaman**
   - Tempatkan file halaman (`login.php`, `register.php`, dsb) ke dalam `src/pages/` sesuai kategori:
     - Login/Register: `src/pages/auth/`
     - Dashboard: `src/pages/dashboard/admin/` atau `src/pages/dashboard/user/`
     - Home: `src/pages/home.php`

2. **Pindahkan Asset**
   - CSS ke `public/css/`
   - Gambar ke `public/images/`

3. **Update Path Asset di Kode**
   - Gunakan fungsi `base_url()` untuk semua asset:
     ```php
     <link rel="stylesheet" href="<?= base_url('/css/style.css') ?>">
     <img src="<?= base_url('/images/logo.png') ?>">
     ```

4. **Gunakan Layout**
   - Untuk halaman dashboard, gunakan include header/footer:
     ```php
     include '../../src/layouts/admin/header.php';
     // ...konten...
     include '../../src/layouts/admin/footer.php';
     ```

---

## ⚙️ Setup Project

1. **Clone Repository**
   ```sh
   git clone https://github.com/OmkeGas/events
   cd events
   ```

2. **Konfigurasi Base URL**
   - Fungsi `base_url()` di `config/app.php` akan otomatis menyesuaikan.

3. **Install Dependensi dan Jalankan**
   - Install Tailwind:
     ```sh
     npm install
     npm run dev
     ```

---

## ▶️ Menjalankan Project

1. **Jalankan Web Server**  
   Pastikan XAMPP/LARAGON sudah berjalan.

2. **Akses di Browser**  
   Buka `http://localhost/events/public`.

3. **Navigasi Halaman**  
   - Home: `/`
   - Login: `/auth/login`
   - Register: `/auth/register`
   - Dashboard Admin: `/dashboard/admin`
   - Dashboard User: `/dashboard/user`

---

## 📝 Catatan

- **Routing**: Semua request masuk lewat `public/index.php` dan diarahkan ke file di `src/pages/`.
- **Jangan letakkan file PHP di luar `src/pages/` kecuali config.**
- **Selalu gunakan `base_url()` untuk asset agar path dinamis.**
- **Jika menambah halaman baru, buat di `src/pages/` dan akses via URL sesuai struktur folder.**

---

Jika ada pertanyaan atau butuh bantuan migrasi kode, silakan tanya ke YOGA!
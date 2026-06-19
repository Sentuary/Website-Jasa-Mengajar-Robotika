# Website Jasa Mengajar Robotika (JMK)

Website resmi **Jasa Mengajar Robotika (JMK)**. Aplikasi ini dibangun menggunakan framework **Laravel** dan **Tailwind CSS v4** dengan modul Vite modern untuk menghadirkan antarmuka landing page yang interaktif, premium, responsif, dan ramah pengguna sesuai dengan desain Figma.

---

## 🚀 Fitur Utama

1. **Desain Berdasarkan Figma**  
   Antarmuka berstandar premium dengan skema warna modern, tipografi bersih (Plus Jakarta Sans & JetBrains Mono), visualisasi kartu, dan transisi halus.
   
2. **Hero Section Interaktif**  
   Menampilkan tagline utama, deskripsi singkat program pembelajaran, dan tombol navigasi aksi cepat (Call to Action) dengan ilustrasi robot edukasi 3D.

3. **Paket Layanan & Harga**  
   Menampilkan 3 paket utama pembelajaran robotika:
   - **Tema Animal (Level 1)**: Pengenalan mekanik dasar.
   - **Tema Smart Life (Level 2)**: Integrasi sensor dasar dan otomatisasi.
   - **Advance Smart Life (Level 3)**: Pemrograman kompleks dan konsep IoT.
   *(Dilengkapi tombol "Pilih Paket" yang otomatis memilih opsi terkait pada form pemesanan).*

4. **Galeri Kegiatan**  
   Grid dokumentasi kelas robotika untuk Level 1, 2, dan 3 dengan efek zoom mikro-animasi pada hover gambar.

5. **Visi, Misi, & Nilai JMK**  
   Ringkasan nilai-nilai dasar, statistik pengalaman mengajar, dan filosofi edukasi praktis.

6. **Form Hubungi Kami & Kontak Sosial**  
   - Integrasi link pintas ke **Telegram** (`@JMK_Admin`) dan **WhatsApp**.
   - Form pemesanan paket/pesan dengan validasi HTML5, penanganan submit dinamis via JavaScript, dan toast sukses.

---

## 🛠️ Tech Stack & Dependensi

* **Backend Framework:** Laravel 11.x (PHP 8.2+)
* **Frontend Compiler:** Vite 8.x
* **CSS Framework:** Tailwind CSS v4.0.0
* **Vite Plugin:** `@tailwindcss/vite` & `laravel-vite-plugin`
* **Fonts:** Plus Jakarta Sans & JetBrains Mono (via Google Fonts)

---

## 📂 Struktur Project Penting

* **[dashboard.blade.php](file:///c:/Users/Pongo/Documents/2.Belajar/Programing/Website-JMK/resources/views/dashboard.blade.php)**: View utama Landing Page.
* **[dashboard_old.blade.php](file:///c:/Users/Pongo/Documents/2.Belajar/Programing/Website-JMK/resources/views/dashboard_old.blade.php)**: Backup template Admin Dashboard (gelap) sebelum perombakan Figma.
* **[web.php](file:///c:/Users/Pongo/Documents/2.Belajar/Programing/Website-JMK/routes/web.php)**: Definisi routing Laravel.
* **[app.css](file:///c:/Users/Pongo/Documents/2.Belajar/Programing/Website-JMK/resources/css/app.css)**: Impor dan konfigurasi Tailwind CSS v4.
* **`public/images/`**: Tempat penyimpanan aset gambar landing page:
  - `hero_robot.png`
  - `gallery_level_1.png`
  - `gallery_level_2.png`
  - `gallery_level_3.png`

---

## ⚙️ Cara Menjalankan Project Secara Lokal

Ikuti langkah-langkah berikut untuk memulai server lokal:

### 1. Kloning dan Masuk ke Direktori
```bash
git clone <repository-url>
cd Website-JMK
```

### 2. Instal Dependensi PHP
```bash
composer install
```

### 3. Instal Dependensi Node.js
```bash
npm install
```

### 4. Salin Environment File
Salin file `.env.example` menjadi `.env`, lalu buat application key:
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Jalankan Development Server
Buka dua terminal terpisah dan jalankan perintah berikut:

* **Terminal 1 (Laravel Artisan Serve):**
  ```bash
  php artisan serve
  ```
  *(Default berjalan di `http://127.0.0.1:8000`)*

* **Terminal 2 (Vite Compiler):**
  ```bash
  npm run dev
  ```

Buka peramban Anda dan arahkan ke alamat **`http://localhost:8000`** atau **`http://127.0.0.1:8000`**.

---

## 📄 Lisensi

Aplikasi ini dikembangkan untuk keperluan edukasi dan jasa pembelajaran robotika JMK.

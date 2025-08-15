# 🏫 Zuniyo Community (Laravel 10)

Aplikasi web mini untuk mengelola komunitas mahasiswa sebelum platform resmi Zuniyo launching.  
Fitur utama:
- 📋 CMS Komunitas Mahasiswa (CRUD + pagination)
- ✍️ Form Kontribusi Komunitas
- 💬 Form Aspirasi Mahasiswa (opsional anonim)
- (Opsional) Leaderboard Komunitas

---

## 📥 Langkah Install

1. **Clone Repository**
   ```bash
   git clone https://github.com/mhmmdnasruloh/zuniyo-community.git
   cd zuniyo-community

2.Install Dependency
    composer install

3.Copy File .env
    cp .env.example .env
    
4.Set Konfigurasi Database
    Buka file .env
    Ubah sesuai koneksi database lokal lo, contoh:
    DB_DATABASE=zuniyo_db
    DB_USERNAME=root
    DB_PASSWORD=
    
5.Generate App Key
    php artisan key:generate

6.Jalankan Migrasi
    php artisan migrate

7.Jalankan server
    php artisan serve

    🚀 Fitur Aplikasi
1.CMS Komunitas Mahasiswa
    Admin dapat menambah, mengedit, dan menghapus data komunitas.
    Pagination untuk daftar komunitas.

2.Form Kontribusi Komunitas
    Publik bisa mengirim ide, event, atau artikel.
    Data tersimpan di database dan bisa dilihat admin.

3.Form Aspirasi Mahasiswa
    Pengguna bisa mengirim aspirasi anonim atau dengan identitas.
    Admin bisa melihat semua aspirasi.
    Data tersimpan aman di database.

🗄 Struktur Database
**Tabel: komunitas**
Kolom	        Tipe	        Keterangan
id	            BIGINT	        Primary Key
nama	        VARCHAR(255)	Nama komunitas
deskripsi	    TEXT	        Deskripsi komunitas
kontak	        VARCHAR(255)	Kontak komunitas
created_at	    TIMESTAMP	    Otomatis
updated_at	    TIMESTAMP	    Otomatis


**Tabel: kontribusi**
Kolom	    Tipe	        Keterangan
id	        BIGINT	        Primary Key
nama	    VARCHAR(255)	Nama pengirim
email	    VARCHAR(255)	Email pengirim
jenis	    VARCHAR(50)    	Jenis kontribusi
deskripsi	TEXT	        Isikontribusi
created_at	TIMESTAMP	    Otomatis
updated_at	TIMESTAMP	    Otomatis


**Tabel: aspirasi**
Kolom	    Tipe	            Keterangan
id	        BIGINT	            Primary Key
nama	    VARCHAR(255)	    Nama (opsional)
email	    VARCHAR(255)	    Email (opsional)
topik	    VARCHAR(255)	    Topik aspirasi
isi        	TEXT	            Isi aspirasi
created_at	TIMESTAMP	        Otomatis
updated_at	TIMESTAMP	        Otomatis


Flow Penggunaan:
    Pengguna umum bisa kirim kontribusi atau aspirasi via form publik.
    Admin login, buka halaman admin untuk melihat data kontribusi/aspirasi.
    Admin kelola data komunitas via menu CMS.

**Cara Akses di Browser (localhost)** —  
- Halaman daftar komunitas (default/home): `http://127.0.0.1:8000/komunitas`  
- Tambah komunitas (admin): `http://127.0.0.1:8000/komunitas/create`  
- Form kontribusi (publik): `http://127.0.0.1:8000/kontribusi`  
- List kontribusi (admin): `http://127.0.0.1:8000/admin/kontribusi`  
- Form aspirasi (publik): `http://127.0.0.1:8000/aspirasi/create`  
- List aspirasi (admin): `http://127.0.0.1:8000/admin/aspirasi`  




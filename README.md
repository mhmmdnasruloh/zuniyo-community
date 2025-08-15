# 🏫 Zuniyo Community (Laravel 10)

Aplikasi web mini untuk mengelola komunitas mahasiswa sebelum platform resmi Zuniyo launching.  

**Langkah Install** — Clone repo ini lalu masuk ke folder proyek, install dependency dengan `composer install`, copy `.env.example` menjadi `.env`, atur konfigurasi database (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`), generate app key dengan `php artisan key:generate`, jalankan migrasi dengan `php artisan migrate` (opsional `php artisan db:seed` untuk data awal), lalu jalankan server `php artisan serve`.  

**Fitur Aplikasi** — CMS Komunitas Mahasiswa (CRUD + pagination), Form Kontribusi Komunitas (publik kirim ide/event/artikel), Form Aspirasi Mahasiswa (bisa anonim atau identitas, admin dapat melihat semua aspirasi).  

**Struktur Database** — Tabel `komunitas`: id (BIGINT, PK), nama (VARCHAR 255), deskripsi (TEXT), kontak (VARCHAR 255), created_at, updated_at. Tabel `kontribusi`: id (BIGINT, PK), nama (VARCHAR 255), email (VARCHAR 255), jenis (VARCHAR 50), deskripsi (TEXT), created_at, updated_at. Tabel `aspirasi`: id (BIGINT, PK), nama (VARCHAR 255), email (VARCHAR 255), topik (VARCHAR 255), isi (TEXT), created_at, updated_at.  

**Dokumentasi Route** — Public: GET `/` (redirect ke /komunitas), GET `/kontribusi` (form kontribusi), POST `/kontribusi` (simpan kontribusi), GET `/aspirasi/create` (form aspirasi), POST `/aspirasi` (simpan aspirasi). Admin: GET `/komunitas` (list komunitas), GET `/komunitas/create` (tambah komunitas), POST `/komunitas` (simpan komunitas), GET `/komunitas/{id}/edit` (edit komunitas), PUT `/komunitas/{id}` (update komunitas), DELETE `/komunitas/{id}` (hapus komunitas), GET `/admin/kontribusi` (list kontribusi), GET `/admin/aspirasi` (list aspirasi), DELETE `/admin/aspirasi/{id}` (hapus aspirasi).  

**Flow Penggunaan** — User publik bisa mengakses form kontribusi atau aspirasi lalu mengirim data. Data tersimpan di database dan dapat dilihat oleh admin melalui dashboard. Admin mengelola data komunitas, kontribusi, dan aspirasi dari panel admin.  

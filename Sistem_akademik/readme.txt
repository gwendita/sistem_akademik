📚 Sistem Akademik — Project Login

Project sederhana buat login ke sistem akademik. Dibuat pakai HTML, CSS, dan PHP biar bisa connect ke database lewat phpMyAdmin.

🗂️ Isi Folder

index.html → Halaman awal sebelum login, ada background keren.
login.html → Form login buat user masuk.
auth.php → File backend buat ngecek username & password di database.
Assets/ → Folder gambar. Taruh background image di sini ya.
style.css (optional) → Kalau kamu pisahin CSS ke file sendiri.

🧠 Cara Kerja Sederhana

1. User buka index.html.
2. Klik login, masuk ke login.html.
3. Isi username & password → Klik Login.
4. Data dikirim ke auth.php.
5. auth.php akan:

   * Cek apakah username & password cocok di database.
   * Kalau cocok, login berhasil.
   * Kalau salah, kasih pesan error.

🛠️ Cara Setup di phpMyAdmin

1. Buka `http://localhost/phpmyadmin`
2. Buat database baru, misal namanya: `akademik`
3. Buat table "users" dengan struktur:

   sql
   CREATE TABLE users (
     id INT AUTO_INCREMENT PRIMARY KEY,
     username VARCHAR(50) NOT NULL,
     password VARCHAR(255) NOT NULL,
     role ENUM('siswa', 'guru') DEFAULT 'siswa'
   );
   
4. Masukkan data user contoh:

   sql
   INSERT INTO users (username, password, role)
   VALUES ('admin', 'admin123', 'guru');

   (Optional: Biar aman, kamu bisa pake password yang udah di-hash pake PHP `password_hash()`)


## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Halaman login 
<img width="1524" height="531" alt="image" src="https://github.com/user-attachments/assets/9e3f10b4-64fa-4fe2-9546-fc6e1fdf0bfc" />

Halaman kandidat
<img width="1654" height="812" alt="image" src="https://github.com/user-attachments/assets/6b540604-4794-4160-b479-1793f49ee861" />

halaman Data Pemilih
<img width="1664" height="717" alt="image" src="https://github.com/user-attachments/assets/ac36707a-ce92-4013-8139-5f2e06c86f5a" />

Halaman voting 
<img width="1715" height="958" alt="Screenshot 2026-01-07 211800" src="https://github.com/user-attachments/assets/4b6ec36c-f509-4280-9f7e-8fd6af034bc1" />

Halaman Sudah voting
<img width="1619" height="408" alt="Screenshot 2026-01-07 211820" src="https://github.com/user-attachments/assets/5d57aea1-e1fd-443e-b213-78aa5f058acf" />

Hasil voting
<img width="1510" height="788" alt="image" src="https://github.com/user-attachments/assets/f861e0f9-06fd-4e38-bb7d-0cc6f2481a9a" />



## How To Install this Project

- Persiapan
1. Memiliki CLI/Command Line Interface berupa Command Prompt (CMD) atau Power Shell atau Git Bash (selanjutnya kita sebut terminal).
2. Composer telah ter-install, cek dengan perintah composer -V melalui terminal.
3. Memiliki koneksi internet (untuk proses installasi).

Langkah-Langkah
1. Download Source Code dari repo Github laravote dalam bentuk Zip.
2. Extract file zip (source code) ke dalam direktori htdocs pada XAMPP, misal htdocs/laravote.
3. Melalui terminal, cd ke direktori laravote.
4. (Sesuai petunjuk installasi) Pada terminal, berikan perintah <b>composer install</b>. Ini yang perlu koneksi internet.
5. Composer akan menginstall dependency paket dari source code tersebut hingga selesai.
6. Jalankan perintah php artisan, untuk menguji apakah perintah artisan Laravel bekerja.
7. Buat database baru (kosong) pada mysql (via phpmyadmin) dengan nama <b>laravote</b>.
8. Duplikat file .env.example, lalu rename menjadi .env.
9. Kembali ke terminal, php artisan key:generate.
10. Setting koneksi database di file .env (DB_DATABASE, DB_USERNAME, DB_PASSWORD).
    <br>DB_CONNECTION=mysql
    <br>DB_HOST=localhost
    <br>DB_PORT=3306
    <br>DB_DATABASE=laravote
    <br>DB_USERNAME=root
    <br>DB_PASSWORD=
11. Lalu Tambahkan Kode Berikut di .env
    <br>GOOGLE_CLIENT_ID=********************
    <br>GOOGLE_CLIENT_SECRET=********************
    <br>GOOGLE_REDIRECT_CALLBACK=http://localhost:8000/google/callback
    
    GOOGLE_CLIENT_ID dan GOOGLE_CLIENT_SECRET bisa didapatkan dengan mengikuti tutorial berikut https://daengweb.id/google-authentication-with-laravel-58
11. Jika hanya ingin membuat tabel, jalankan perintah <b>php artisan migrate</b>. Cek di phpmyadmin, seharusnya tabel sudah muncul.
12. Jalankan perintah <b>php artisan db:seed</b> untuk mengisi tabel users yang digunakan untuk proses login
    <br>EMAIL = jakaria@gmail.com
    <br>PASSWORD = admin
13. Setelah selesai, Jalankan perintah <b>php artisan serve</b> maka dapat diakses dengan http://localhost:8000/





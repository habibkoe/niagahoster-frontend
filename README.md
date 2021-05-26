# niagahoster-frontend
Test Niaga Hoster

# step by step setting website ini
1. Pastikan anda sudah menginstall docker dan docker-compose
2. Buat Folder dimanapun anda suka, untuk case saya, saya menggunakan OS ubuntu dan menaruhnya di folder /var/www/html/niagahoster-frontend
3. Buat File Dockerfile untuk membuat image kita sendiri
4. Isi konfigurasi installer pada file Dockerfile, image apa saja yang dibutuhkan me running aplikasi kita, mulai dari OS nya, php, mysql, dan yang lain
5. Setelah selesai mengisi Dockerfile, selanjutnya jalankan perintah pada terminal: docker build -t niagahoster-frontend .
6. Tunggu sampai proses selesai.
7. Cek apakah image yang telah kita buat sudah ada dalam list dengan printah docker images
8. Buat docker-compose.yml kemudian isi konfigurasi container service kita
9. Jalankan dengan printah docker-compose up -d pada terminal
10. Jika ingin lihat status container bisa mengetikkan printah docker-compose ps
11. Untuk melihat logs ketikkan perintah docker-compose logs
12. Berdasarkan setting pada file docker-compose.yml file website kita berada pada folder dev
13. Silahkan cd ke folder dev kemudian buat website kita disini.


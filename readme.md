

## Scaffolding Admin Template

### Cara Install 
1. clone repository ke komputer local kamu dengan perintah <code>git clone git@github.com:mobidu/scaffoldingadmin.git</code>
2. install library php dengan perintah <code>composer install</code>
3. install library vue dengan perintah <code>npm install</code>
4. copy file .env.example ganti namanya menjadi .env
5. buat database dengan nama terserah yang akan digunakan pada project, misal disini saya menggunakan database dengan nama coba
6. buka file .env rubah konfigurasi database dengan pengaturan database anda (Saya sarankan menggunakan mysql).
7. membuat key aplikasi dengan perintah <code>php artisan key:generate</code>
8. migrasi database dengan perintah <code>php artisan migrate</code>
9. buat data dummy dengan perintah <code>php artisan db:seed</code>
10. compile file frontend dengan perintah <code>npm run dev</code>
11. jalankan aplikasi dengan perintah <code>php artisan serve</code>

setelah aplikasi jalan, buka browser dengan alamat <code>localhost:8000</code> dan masuk ke aplikasi dengan user berikut :
<br>
user : admin@mail.com
pass : admin


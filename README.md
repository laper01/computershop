# demo
![alt-text](/read/1.gif?raw=true "Title")

http://127.0.0.1:8000/
![alt-text](/read/1.jpg?raw=true "Title")
http://127.0.0.1:8000/listpenjual
![alt-text](/read/2.jpg?raw=true "Title")
http://127.0.0.1:8000/listdetail
![alt-text](/read/2.jpg?raw=true "Title")

# how to deploy
## shared hosting
<!-- ![alt text](/readme/add.jpg?raw=true "Title") -->
### 1. ubah file .env sesuai data base yang di gunakan
![alt text](/pictures/1.jpg?raw=true "Title")

#### lihat yang perlu di isi di :
![alt text](https://niagaspace.sgp1.cdn.digitaloceanspaces.com/bb-uploads/tinymce/media/1-tab-cpanel-klik-mysqldb-edit-1620091540.png)

#### yang perlu diisi hanya  
DB_DATABASE=...
DB_USERNAME=...
DB_PASSWORD=...
sesuai dengan
![alt text](https://niagaspace.sgp1.cdn.digitaloceanspaces.com/bb-uploads/tinymce/media/2-gulir-ke-bawah-mysql-users-input-username-dan-password-create-user-edit-1620091557.png)



### 2. Install Laravel di cPanel
## Login ke cPanel
   Langkah install Laravel di cPanel yang pertama adalah melakukan akses ke cPanel. Anda dapat membuka cPanel dengan mengakses URL: https://namadomain/cpanel

## Akses Fitur Softaculous Apps Installer
   Di halaman utama cPanel, klik Softaculous. Akan lebih mudah jika Anda menggunakan kolom pencarian untuk membuka fitur ini.
![alt text](https://niagaspace.sgp1.cdn.digitaloceanspaces.com/blog/wp-content/uploads/2018/11/8_cara-install-laravel-dan-cara-unggah-laravel.jpg)

## Menjalankan Script instalasi Laravel
        Di halaman utama Softaculous terdapat beberapa pilihan script yang bisa dijalankan. Gunakan kolom pencarian kembali untuk mencari Laravel.

        Saat halaman instalasi Laravel terbuka, di sana akan terdapat beberapa informasi, termasuk update terakhir maupun alokasi penyimpanan dan fitur-fitur terbarunya.

        Anda tinggal klik “Install Now” untuk mengakses halaman Software Setup.

## Pengaturan Software Setup
   Isi kolom sesuai dengan petunjuk.
![alt text](https://www.niagahoster.co.id/blog/wp-content/uploads/2018/11/9_cara-install-laravel-dan-cara-unggah-laravel.jpg)
   * Pengecekan
   Jika proses instalasi sudah berhasil dan tidak ada masalah, maka akan muncul informasi sebagai berikut.
![alt text](https://www.niagahoster.co.id/blog/wp-content/uploads/2018/11/Softaculous-Softaculous-Laravel.jpg)

### 3. Upload Laravel ke Hosting
## Arahkan Rute ke Folder Laravel
Secara default, Laravel akan mengakses folder root Laravel dan tidak langsung mengakses folder public miliknya. Sehingga perlu dibuatkan rute agar ketika mengakses domain, akses langsung diarahkan ke file index.php di folder “public”.

Caranya? Buat file index.php di dalam folder root Laravel.
![alt text](https://www.niagahoster.co.id/blog/wp-content/uploads/2019/08/cara-upload-laravel-ke-hosting-file.jpg)
Kemudian isi dengan script berikut:

""<?php header(‘Location: public/’);"""

Simpan dan pastikan ketika mengakses domain atau localhost langsung mengarah ke halaman Laravel. Cara ini adalah salah satu cara yang dapat dipakai. Cara lainnya adalah dengan memodifikasi file .htaccess pada root folder Laravel di hosting.

## Compress Seluruh File Laravel
Langkah selanjutnya adalah mengumpulkan seluruh file Laravel menjadi satu buah file dengan cara di-compress. Agar dapat di ekstrak di cPanel, gunakan ekstensi .zip pada file.

![alt text](https://www.niagahoster.co.id/blog/wp-content/uploads/2019/08/cara-upload-laravel-ke-hosting-file-2.jpg)

## Akses Halaman cPanel Hosting
Langkah cara upload file Laravel ke cPanel selanjutnya adalah melakukan akses ke cPanel. Anda dapat membuka cPanel dengan mengakses URL: https://namadomain/cpanel.

## Klik Fitur “File Manager”
Gunakan kolom pencarian untuk mencari fitur File Manager kemudian akses fitur tersebut.
![alt text](https://www.niagahoster.co.id/blog/wp-content/uploads/2019/08/cara-upload-laravel-ke-hosting-file-manager.jpg)

## Upload File Laravel
Arahkan navigasi ke folder root yang ingin digunakan untuk penyimpanan Laravel.

Catatan! Pada contoh menggunakan folder utama public_html sehingga file zip dari lokal diunggah di folder tersebut. Anda dapat mengunggah file zip ke public_html atau folder lain yang ingin digunakan untuk mengakses file Laravel.

Jika file zip sudah terupload, klik kanan file itu dan “Extract”. Setelah itu susunan file dan folder akan sesuai dengan yang di atas.

![alt text](https://www.niagahoster.co.id/blog/wp-content/uploads/2019/08/cara-upload-laravel-ke-hosting-file-manager-2.jpg)

# selesai 

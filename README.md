Praktikum Interoperabilitas: Membuat API Toko Buku dengan Laravel 11 dan Testing Menggunakan Postman
1. Instalasi Laravel 11:
   Pastikan sudah terinstal PHP, Composer, dan MySQL.
   Instal Laravel
2. Konfigurasi Database:
   Buat database MySQL baru bernama 'tokobuku_db'.
   Sesuaikan file .env dengan informasi berikut:
![image](https://github.com/user-attachments/assets/9e1a837b-688c-46e9-a267-71b068be3b81)
3. Migrasi Awal:
   Jalankan perintah berikut untuk membuat tabel default:

III. Membuat API CRUD untuk Sistem Toko Buku
API ini akan mengelola data buku dan kategori dengan beberapa endpoint:
1. Kategori: Menambahkan dan menampilkan kategori buku.
2. Buku: Mengelola informasi buku (judul, penulis, harga, stok, dan kategori).
1. Membuat Migration dan Model
Buat migration dan model untuk Kategori dan Buku:
![image](https://github.com/user-attachments/assets/7f7df25f-88d3-4dbf-8e13-7b61b4d1db96)
Edit file migration `create_kategoris_table.php`:
![image](https://github.com/user-attachments/assets/3b6a5eee-1c21-4c0c-8a69-87f20c156052)
Edit file migration `create_bukus_table.php`:
![image](https://github.com/user-attachments/assets/1db94fb6-20d3-4a36-abaf-f8c8d2d54b7f)
Jalankan perintah berikut untuk melakukan migrasi:
2. Membuat Controller API untuk Kategori dan Buku
Buat controller untuk Kategori dan Buku:
![image](https://github.com/user-attachments/assets/e1dd593b-b5ec-4b81-8362-068e2b38470d)
Isi file `KategoriController.php`:
![image](https://github.com/user-attachments/assets/68287ba3-b237-42d5-8a76-279d5f7fb51f)
3. Menambahkan Route API
Buka file `routes/api.php` dan tambahkan route berikut:
![image](https://github.com/user-attachments/assets/a0e2601f-1048-4886-89de-32fa05a1b507)
IV. Testing API dengan Postman
1. Jalankan server Laravel:
![image](https://github.com/user-attachments/assets/c5ff6077-1a8e-4b52-a4ce-5bb518540df0)
![image](https://github.com/user-attachments/assets/8427e271-6871-4bfb-8763-baf41dfbdd8c)
3. Testing endpoint menggunakan Postman:
   A.	GET Semua Kategori
•	Method: GET
•	URL: http://localhost:8000/api/kategoris
•	Klik Send untuk melihat hasil.
![image](https://github.com/user-attachments/assets/0923f9ec-06a2-46e4-ae7a-617f5de6bb6e)
B.	POST Tambah Kategori Baru
•	Method: POST
•	URL: http://localhost:8000/api/kategoris
•	Body :
![image](https://github.com/user-attachments/assets/ef9ed55f-aa2a-46d1-aab3-c7d6c9ba6c56)
C.	GET Semua Buku
•	Method: GET
•	URL: http://localhost:8000/api/bukus
•	Klik Send.
![image](https://github.com/user-attachments/assets/3ec389cf-887d-4768-9c75-82b106f2a907)
D.	POST Tambah Buku Baru
•	Method: POST
•	URL: http://localhost:8000/api/bukus
•	Body:
![image](https://github.com/user-attachments/assets/b64f10db-c4bc-4950-8a21-8873e05532e1)
E.	GET Buku Berdasarkan ID
•	Method: GET
•	URL: http://localhost:8000/api/bukus/1
•	Klik Send.
![image](https://github.com/user-attachments/assets/5ade80e0-c60f-4063-80d7-01b7ecce900a)
F.	PUT Update Data Buku
•	Method: PUT
•	URL: http://localhost:8000/api/bukus/1
•	BODY
![image](https://github.com/user-attachments/assets/fceeb3a4-48db-4ce5-9e31-f4ab960ac70b)
G.	DELETE Hapus Buku
•	Method: DELETE
•	URL: http://localhost:8000/api/bukus/1
•	Klik Send.
![image](https://github.com/user-attachments/assets/d9a2d716-5fa0-46e7-af45-0c14c9769e3f)





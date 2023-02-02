#### Nama          : Yusuf Oksabri
#### Universitas   : Institut Teknologi Adhi Tama Surabaya
#### Domisili      : Surabaya
-----------------------------------------------------------------------------------------------------------------------------

##### Web Sistem Pengelolaan Data Mahasiswa
Dibuat menggunakan HTML, CSS dan PHP framework Laravel 8 & MySQL untuk pembuatan databasenya

![Gambar awal](https://user-images.githubusercontent.com/74439341/216409177-b31b49d3-5834-42b5-925d-024db08cae5e.png)

## Fitur
### 1. Create Data Mahasiswa
![fitur tambah](https://user-images.githubusercontent.com/74439341/216410115-dc8d6864-9071-42ad-bb27-93a48766364a.png)
![fitur tambah 1](https://user-images.githubusercontent.com/74439341/216410544-3e9f3014-8b06-43a2-9b10-6dc12c850350.png)
Fitur ini digunakan untuk menambahkan atau membuat data baru Mahasiswa. Fitur ini dapat digunakan dengan menekan button " Tambah Mahasiswa", kemudian isi seluruh field yang ada sesuai dengan data mahasiswa yang ingin ditambahkan. Pastikan seluruh data sudah terisi dengan benar, kemudian tekan tombol "SIMPAN" untuk menambahkan data baru.

### 2. Detail Data Mahasiswa
![fitur_detail](https://user-images.githubusercontent.com/74439341/216411941-77ed838c-32cc-4be4-9595-448fb60165fd.png)
![fitur_read](https://user-images.githubusercontent.com/74439341/216411350-937b2a4e-c430-4e7b-b0bf-303b12b69ea3.png)
Fitur ini digunakan untuk membaca atau melihat detail data yang telah di create pada awal dengan cara menekan tombol bergambar "MATA" pada kolom "AKSI". Jika ingin kembali pada menu mahasiswa langsung saja klik "Mahasiswa" berwarna biru maka akan kembali ke menu awal sistem ini.

### 3. Update Data Mahasiswa
![fitur_aksi](https://user-images.githubusercontent.com/74439341/216414148-b8a0b41b-cab4-4f7e-a550-a537b0f5e9e4.png)
![fitur_edit](https://user-images.githubusercontent.com/74439341/216414520-3bc71818-811f-403c-92c9-bb6791fc7e24.png)
Fitur ini digunakan untuk memperbarui data Mahasiswa. Fitur ini dapat digunakan dengan menekan tombol bergambar "Pencil" pada kolom "AKSI" data Mahasiswa yang ingin diubah. Isi field yang ingin diubah sesuai dengan kebutuhan. Pastikan seluruh data baru sudah terisi dengan benar, kemudian tekan tombol "SIMPAN" untuk mengubah data Mahasiswa.

### 4. Delete Data Mahasiswa
![fitur_aksi](https://user-images.githubusercontent.com/74439341/216414148-b8a0b41b-cab4-4f7e-a550-a537b0f5e9e4.png)
Fitur ini digunakan untuk menghapus data Mahasiswa. Pilih data Mahasiswa yang ingin dihapus, kemudian tekan tombol bergambar tong sampah "Delete" untuk menghapus data mahasiswa yang ingin dihapus. Sebelum menghapus maka akan muncul peringatan apakah Yakin akan menghapus data atau tidak.
![fitur_warn](https://user-images.githubusercontent.com/74439341/216415820-8fedcd74-ea42-4159-96ee-a3da6a0cea79.png)

### 5. Sorting Data Mahasiswa
![fitur_sorting_1](https://user-images.githubusercontent.com/74439341/216417012-067fb0f2-0602-461c-b075-33613c8e4bcd.png)
Fitur ini digunakan untuk mengurutkan data mahasiswa berdasarkan kolom tertentu. Akses fitur ini dengan menekan tombol bergambar Panah Keatas tabel sesuai dengan kolom yang ingin diurutkan. Pengurutan dapat dilakukan secara menaik(ascending) atau menurun(descending). Contoh di atas diurutkan secara ascending berdasarkan Nama.

### 6. Searching Data Mahasiswa
![fitur_search](https://user-images.githubusercontent.com/74439341/216417837-e4244f19-9972-41ba-b6d0-9c514548538b.png)
Fitur ini digunakan untuk mencari data mahasiswa, bisa berdasarkan Nama, Prodi, Semester, Kelas ataupun Angkatan dari Data Mahasiswa

### 7. Fitur Tambahan
![extra_fitur](https://user-images.githubusercontent.com/74439341/216418877-7770c366-62c5-4438-910e-1c163b56ee6c.png)
Terdapat fitur tambahan yaitu mencetak data mahasiswa yang telah dibuat sebelumnya, dokumen yang dicetak bisa berupa Excel, PDF, ataupun langsung Print atau cetak data yang sudah ada pada Sistem.

## Proses Instalasi Sistem Pengelolaan Data Mahasiswa
nb: Lakukan perintah di dalam tanda petik dua(" ") tanpa memasukkan tanda petiknya.

- Download atau clone project dari repositori github
- Tuliskan syntax "git clone https://github.com/siatsu1/sistem-pengelolaan-data-mahasiswa.git", tunggu proses cloning selesai. 
- Buka dan jalankan XAMPP 
- Import database yang sudah tersedia pada folder database
- Jika sudah terimport dengan benar kemudian buka browser dan ketikkan "http://localhost/data-mahasiswa/"
- Tidak perlu mengubah file .env atau menjalankan php artisan serve
url : /matakuliah
informasi : ini data matakuliah

1. Buat Controller : MatakuliahController
    ```
    php artisan make:controller MatakuliahController -r
    ```
2. buat view
    ```
    php artisan make:view matakuliah_create
    ```
3. buat route
4. buat function create
5. modifikasi view

url: /dosen/create
informasi: ini form dosen

1. Buat Controller : DosenController
    ```
    php artisan make:controller DosenController
    ```
2. buat view
    ```
    php artisan make:view dosen_create
    ```
3. buat route
4. buat function create
5. modifikasi view

url: /dosen
informasi: ini data dosen

1. Buat Controller : DosenController
    ```
    php artisan make:controller DosenController
    ```
2. buat view
    ```
    php artisan make:view dosen_index
    ```
3. buat route
4. buat function index
5. modifikasi view

url: /mahasiswa/create
informasi: ini form mahasiswa

1. Buat Controller : MahasiswaController
    ```
    php artisan make:controller MahasiswaController
    ```
2. buat view
    ```
    php artisan make:view mahasiswa_create
    ```
3. buat route
4. buat function create
5. modifikasi view

Langkah-langkah membuat url :
url :/mahasiswa
informasi : ini data mahasiswa

1. Buat Controller : MahasiswaController
    ```
    php artisan make:controller MahasiswaController
    ```
2. buat view
    ```
    php artisan make:view mahasiswa_index
    ```
3. buat route
4. buat function index
5. modifikasi view

## MEMBUAT ROUTE

-   dimulai dari membuat controller
-   menambahkan route di `web.php` dan mengimport controllernya dengan extension `PHP Intelephense`
-   mengatur `return view('matakuliah_index');` indexnya

-   untuk melihat route list apa saja yang sudah dibuat

```
php artisan route:list
```

---

Kode @extends(‘mylayout’) akan memberitahukan kepada laravel bahwa view pasien_index adalah
turuan dari mylayout semua kode yang berada diantara @section(‘content’) dan @endsection akan
ditampilkan di yield(‘content’) mylayout

---

**untuk mengecek code apa sajakah yang sudah diproses laravel, sudah sesuaikah dengan yang kita inginkan `ctrl + u`**

`{{ $title ?? '' }}` kalo ada variabel title maka tampilkan , jika tidak ada maka kosong

**untuk cek database sudah terkoneksi atau belum**

`php artisan db:monitor`

---

`ctrl+shift+i` untuk duplikat code

---

Kita harus menambahkan @csrf token untuk keamanan data dari serangan CSRF https://owasp.org/wwwcommunity/attacks/csrf

`value="{{ old('nama') }}` untuk menjaga value/nilai sebelumnya agar tetap ada ketika eror
`@error('nama') is-invalid @enderror` jika ada eror di variabel nama maka buat warnanya menjadi merah

```
composer require --dev laravel-lang/common
```

untuk mengubah nama yang error menjadi bahasa indonesia setelah itu jalankan ini

```
php artisan lang:update
```

` protected $guarded =[];` untuk menyimpan ke data base di file pasien.php **Properti $guarded digunakan agar kita bisa melakukan mass assignment atau menyimpan data pada
banyak kolom secara bersamaan menggunakan array atau objek. Dengan menambahkan guarded = []
maka semua kolom bisa diisi secara bersamaan menggunakan array**



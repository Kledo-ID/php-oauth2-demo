# Kledo PHP OAuth 2 App

Projek PHP ini mendemonstrasikan cara mengakses API Kledo menggunakan OAuth2. Gunakan `composer` atau `clone` repositori ini untuk memulai.

## Mulai

Untuk menjalankan di `local` kamu perlu lokal web server dengan dukungan PHP, Git dan juga composer.

* [Download XAMPP](https://www.apachefriends.org/download.html) 
* [Download Git](https://git-scm.com/downloads)
* [Download Composer](https://getcomposer.org/download/)

### Unduh Secara Manual

* Clone repository ini menggunakan git ke local server web root :

```bash
C:\Xampp\htdocs

$ git clone https://github.com/Kledo-ID/php-oauth2-demo.git
```

* Ubah ke folder yang baru di clone `php-oauth2-demo`

```bash
$ cd php-oauth2-demo
```

* Kemudian unduh dependencies composer menggunakan command berikut

```bash
$ composer install
```

## Membuat OAuth2 App Client

Untuk mendapatkan `client id` dan `client secret`, ikuti langkah-langkah berikut untuk membuat OAuth Client.

* Buat akun di [kledo](https://kledo.com/daftar/) (Jika belum punya)
* Login ke [Kledo](https://app.kledo.com/)
* Buka menu `Pengaturan` > `Integrasi Aplikasi`
* Kemudian klik tombol `Tambah`
* Masukkan `Nama Aplikasi` dan `OAuth 2.0 redirect URI`
* Klik tombol `Simpan`
* Copy `client id` dan `client secret` kemudian simpan ke dalam text file.

## Konfigurasi .env

Rename file `.env.sample` ke `.env` kemudian copy & paste `api host`, `client id`, `client secret` dan `redirect uri` ke variabel `.env`

Contoh file `.env`

```text
API_HOST=http://app.kledo.com/api/v1

CLIENT_ID="YOUR-CLIENT-ID"
CLIENT_SECRET="YOUR-CLIENT-SECRET"
REDIRECT_URI="http://localhost/php-api-demo/callback.php"
```
Contoh Kode PHP dari `authorization.php`

```phpt
// Library ini akan membaca variabel dari file .env

require 'load.php';

use Josantonius\Session\Session;

$state = random_string(40);

Session::set('state', $state);

$query = http_build_query([
    'client_id' => $_ENV['CLIENT_ID'],
    'redirect_uri' => $_ENV['REDIRECT_URI'],
    'response_type' => 'code',
    'scope' => '',
    'state' => $state,
]);

$authorizationUrl = $_ENV['API_HOST'].'/oauth/authorize?'.$query;

header('Location: '.$authorizationUrl);

exit();
```

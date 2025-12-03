# 💻 Laporan Proyek: Pengembangan Web Server APACHE dan Aplikasi Sederhana

**Mata Pelajaran: Administrasi Sistem Jaringan (ASJ)**

Proyek ini dibuat untuk memenuhi tugas mata pelajaran Administrasi Sistem Jaringan (ASJ), yang merupakan salah satu elemen Capaian Pembelajaran Konsentrasi Keahlian Teknik Komputer dan Jaringan (CP KKTKJ) pada program TJKT. Proyek ini berfokus pada implementasi layanan **Web Server APACHE**, konfigurasi **PHP**, dan pengamanan koneksi menggunakan **SSL/HTTPS** dengan *Self-Signed Certificate*.

---

## 1. 👥 Informasi Kelompok dan Spesifikasi Lingkungan Praktik

### 1.1. Informasi Kelompok

| Peran | Nama Lengkap | Kelas |
| :--- | :--- | :--- |
| **Ketua Kelompok** | Kautsar Al fitrah Ramadhani | XI TJKT 1 |
| Anggota 1 | Agia Fanjani | XI TJKT 1 |
| Anggota 2 | Ikbal Maulana | XI TJKT 1 |
| Anggota 3 | Silpa Nurjanah | XI TJKT 1 |
| **Institusi** | SMKN 1 Soreang | |

### 1.2. Spesifikasi Alat dan Bahan (Host) 🖥️

| Komponen | Deskripsi / Versi |
| :--- | :--- |
| **Virtualisasi** | VMware® Workstation 17 Pro 17.6.3 build-24583834 |
| **Sistem Operasi Host** | Windows 11 Home, 64-bit (Build 26200.7171) 10.0.26200 |
| **RAM Host (Minimal)** | 7920 MB |
| **CPU Host** | Intel N100 |

### 1.3. Spesifikasi Server Virtual (VM) 🚀

| Spesifikasi Detail | Nilai/Pilihan |
| :--- | :--- |
| **Sistem Operasi Tamu (Guest OS)** | Debian Trixie (12.x) |
| **Alamat IP Server** | `172.16.54.192` |
| **RAM VM** | 20 GB |
| **vCPU** | 2 Core |
| **Web Server yang Dipilih** | Apache2 |
| **Versi PHP yang Dipakai** | PHP Version 8.4.11 |

## 🌐 Pengertian Apache

Apache Web Server atau **Apache HTTP Server** adalah sebuah perangkat lunak **web server** yang digunakan untuk menerima permintaan (*request*) dari pengguna melalui browser, kemudian mengirimkan kembali halaman web (*response*) seperti HTML, gambar, atau data lainnya. ⚙️🌍

Apache dibuat dan dikembangkan oleh **Apache Software Foundation (ASF)** dan merupakan salah satu web server paling populer di dunia karena bersifat:

- 🆓 **Open-source**
- 💸 **Gratis**
- 🔒 **Stabil**
- 🧩 **Fleksibel**

Dengan keunggulan tersebut, Apache banyak digunakan sebagai fondasi berbagai website dan aplikasi server di seluruh dunia. 🚀


---

## 2. 📝 Dokumentasi Teknis dan Langkah-Langkah Pengerjaan

## 📘 Instalasi Apache Web Server, PHP, dan SSL di Debian

## 🌐🔥1.1 Instalasi Apache Web Server</h2>

🔹 Login dan Update Paket
```bash
apt update && apt upgrade -y
```

🏗️ Instal Apache
```bash
apt install apache2
```

🚀 Aktifkan Apache dan Pastikan Berjalan</h3>
```bash
systemctl enable apache2
systemctl start apache2
systemctl status apache2
```

## 🌍 Uji dari browser
```bash
http://ip-server
```

## 🐘✨ 2. Instalasi PHP

📦 Instal PHP Dasar
```bash
apt install php
```

🔌 Instalasi Extension PHP Tambahan</h3>
```bash
apt install php-common php-xml php-curl php-zip php-gd php-mbstring php-intl php-json php-soap php-mysql
```

🧪  Pastikan PHP Berjalan

## Buat file uji:
```bash
nano /var/www/html/info.php
```

## ✍️ Isi file dengan:
```bash
&lt;?php phpinfo(); ?&gt;
```

## 🌐  Akses dari browser:
```bash
http://ip-server/info.php
```


## 🔐🛡️ 3. Menambahkan SSL Self-Signed Certificate

🧰 Instal OpenSSL dan Aktifkan Modul SSL</h3>
```bash
apt install openssl
a2enmod ssl
```

📁  Buat Folder untuk Sertifikat</h3>
```bash
mkdir /etc/apache2/ssl
```

🏷️  Buat Sertifikat Self-Signed</h3>
```bash
openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
-keyout /etc/apache2/ssl/selfsigned.key \
-out /etc/apache2/ssl/selfsigned.crt
```

📝  Contoh Pengisian:
```bash
Country Name: ID
State: Jawa Barat
Organization: SMKN 1 Soreang
Common Name: server.local
```


## ⚙️📄 4. Konfigurasi Virtual Host HTTPS

📌 Salin File Konfigurasi Default
```bash
cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/000-default-ssl.conf
```

✏️ Edit File
```bash
nano /etc/apache2/sites-available/000-default-ssl.conf
```

## 🧩 Isi dengan konfigurasi berikut:
```bash
&lt;VirtualHost *:443&gt;
    ServerAdmin admin@localhost
    DocumentRoot /var/www/html
    ServerName server.local

    SSLEngine on
    SSLCertificateFile /etc/apache2/ssl/selfsigned.crt
    SSLCertificateKeyFile /etc/apache2/ssl/selfsigned.key

    &lt;Directory /var/www/html&gt;
        AllowOverride All
        Options Indexes FollowSymLinks
        Require all granted
    &lt;/Directory&gt;

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
&lt;/VirtualHost&gt;
```


## 🔧⚡ 5. Aktifkan HTTPS dan Modul Rewrite
```bash
a2ensite 000-default-ssl.conf
a2enmod rewrite
systemctl reload apache2
```

## 🧪 Uji dari browser:
```bash
https://ip-server
```


## 🔗➡️ 6. Redirect HTTP ke HTTPS (Opsional)

✏️ Edit File HTTP
```bash
nano /etc/apache2/sites-available/000-default.conf
```

## Tambahkan di dalam ```&lt;VirtualHost *:80&gt;```

```bash
&lt;VirtualHost *:80&gt;
    ServerAdmin admin@localhost
    ServerName server.local
    DocumentRoot /var/www/html

    Redirect "/" "https://server.local/"

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
&lt;/VirtualHost&gt;
```

🔄  Reload Apache
```bash
systemctl reload apache2
```


## 📂📌 7. Lokasi Utama File Website

## 📂 Secara default, Apache menggunakan folder:
```bash
/var/www/html
```

## 🌐 Saat membuka:
```bash
http://ip-server
https://ip-server
```

## 📄 Maka Apache akan menampilkan file:
```bash
index.html ATAU index.php
```

<p><i>beres ey......... 😎👍</i></p>





## 3. 📊 Analisis Web Server

Berdasarkan pengalaman kami dalam proyek ini, berikut adalah analisis kelebihan dan kekurangan dari Web Server **[NAMA WEB SERVER]** yang kami gunakan:

| Aspek | Kelebihan (APACHE) | Kekurangan (APACHE) |
| :--- | :--- | :--- |
| **1. Open Source & Gratis** | Dapat digunakan tanpa biaya lisensi dan dapat dimodifikasi sesuai kebutuhan. | Tidak Selalu Optimal untuk Traffic Tinggi Lebih lambat dibanding server modern seperti Nginx pada beban koneksi sangat besar karena arsitektur process-based.|
| **2. Konfigurasi Fleksibel** | Mendukung banyak modul (mod_rewrite, mod_ssl, dll.) yang memudahkan kustomisasi fitur. | Penggunaan Memori Lebih Tinggi Karena memproses tiap request dengan thread/proses sendiri.
| **3. Kompatibilitas Luas** | Berjalan di banyak sistem operasi: Linux, Windows, macOS, Unix | Konfigurasi Bisa Rumit untuk Pemula Banyak opsi dan modul yang perlu dipahami |
| **4. Dukungan untuk Beragam Bahasa Pemrograman** | Sangat cocok dengan PHP, Python, Perl, dan integrasi dengan framework modern. | Scaling Kurang Efektif Kurang efisien untuk aplikasi yang menuntut performa real-time dan skalabilitas masif.
| **5. Mendukung .htaccess** |Memungkinkan pengguna untuk mengatur konfigurasi per-directory tanpa menyentuh file utama. |  Potensi Celah Keamanan Jika Salah Konfigurasi Banyaknya fitur dapat meningkatkan risiko jika tidak ditangani dengan benar.|

---

## 4. 🧠 Refleksi Proyek: Kesan dan Kendala

### ✨ 4.1. Kesan Selama Proses Pengerjaan

> Kami merasa bangga dan berhasil 😊 karena telah menyelesaikan tugas ini dengan cukup baik 🎉 meskipun masih banyak kekurangan dan kesalahan pada proses pengerjaannya. Untuk itu kami sangat berterimakasih kepada guru yang telah membimbing 🙏 karena dengan ini kami mendapatkan ilmu yaitu cara membuat web server khususnya **APACHE** 💻🔥 dan cara konfigurasinya. Kami sangat senang karena ilmu yang diberikan sangat bermanfaat 🌟📚.


### 4.2. Kendala dan Solusi yang Diterapkan

| Kendala yang Kalian Hadapi | Solusi yang Ditemukan ✅ |
| :--- | :--- |
| SSH yang tidak bisa masuk lupa pasword| Buat akun kembali contoh: adduser bomber (di VMware) |
| SSH yang tidak bisa masuk meskipun sudah memasuki pw dengan benar| Buka Vmware SSHD nya di permitlooginnya ubah jadi permitlogin yes dan pagar (#) hapus |
| Tidak bisa install Apache,PHP,SSL | Periksa Repository apakah sudah tersedia: nano /etc/apt/sources.list |
| Tidak mendapatkan ip Dhcp ataupun internet | Cek di Vmware virtual network editor bridge0 nya harus ke internet secara langsung |

---

## 5. 🎬 Dokumentasi Video Pengerjaan

Seluruh proses pengerjaan telah direkam dan diunggah ke YouTube sebagai bukti pengerjaan dan dokumentasi langkah-langkah.

* **Link Video YouTube:** https://youtu.be/5u4KNrHV7hE?si=celcA0tRszH86_ST

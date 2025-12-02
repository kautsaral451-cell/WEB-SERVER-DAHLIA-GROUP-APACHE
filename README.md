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
| **RAM VM** | [Jumlah RAM yang dialokasikan untuk VM, contoh: 2 GB] |
| **vCPU** | [Jumlah Core CPU yang dialokasikan untuk VM, contoh: 2 Core] |
| **Web Server yang Dipilih** | [Apache2 / Nginx / OpenLiteSpeed] |
| **Versi PHP yang Dipakai** | [mod_php / php-fpm / lsphp] |

---

## 2. 📝 Dokumentasi Teknis dan Langkah-Langkah Pengerjaan

### 2.1. Persiapan Dasar (Debian Trixie di VMware)

1.  Melakukan *update* dan *upgrade* sistem.

    ```bash
    sudo apt update && sudo apt upgrade -y
    ```

2.  Memastikan konfigurasi jaringan (Bridge/NAT/Host-Only) sudah benar dan IP Address statis sudah dikonfigurasi.

### 2.2. Instalasi dan Konfigurasi Web Server

Kami menggunakan **APACHE**. Berikut langkah-langkah utamanya:

* **Instalasi:**

    ```bash
    # [Tuliskan perintah instalasi Web Server Kalian, contoh: sudo apt install nginx -y]
    ```

* **Konfigurasi Virtual Host/Server Block:**

    > [Jelaskan secara singkat penyesuaian konfigurasi yang Kalian lakukan pada file utama, misalnya penentuan Document Root dan port. Contoh: Kami membuat file `/etc/nginx/sites-available/default` dan mengarahkan `root` ke `/var/www/html/project-asj`.]

### 2.3. Konfigurasi PHP ⚙️

Kami menggunakan **[JENIS PHP: mod_php / php-fpm / lsphp]** untuk mengintegrasikan PHP dengan Web Server.

* **Instalasi PHP:**

    ```bash
    # [Tuliskan perintah instalasi PHP dan modul yang dibutuhkan, contoh di bawah adalah untuk PHP-FPM]
    sudo apt install php-fpm php-mysql
    ```

* **Integrasi:**

    > [Jelaskan langkah-langkah integrasi antara PHP dengan Web Server yang Kalian pilih. Contoh: Kami memodifikasi *Server Block* Nginx untuk meneruskan (*proxy*) permintaan file `.php` ke *socket* PHP-FPM, misalnya `unix:/run/php/php8.2-fpm.sock`.]

### 2.4. Implementasi SSL (HTTPS) 🔒

Untuk mengaktifkan akses HTTPS, kami membuat *self-signed certificate*.

1.  Membuat direktori untuk *certificate* (misalnya `/etc/ssl/certs/project-asj`).
2.  Membuat *Key* dan *Certificate* menggunakan OpenSSL.
3.  Memodifikasi konfigurasi Web Server untuk menggunakan port **443** dan menunjuk ke *key* dan *certificate* yang telah dibuat, serta memastikan akses dapat dilakukan melalui `https://[IP_SERVER]`.

---

## 3. 📊 Analisis Web Server

Berdasarkan pengalaman kami dalam proyek ini, berikut adalah analisis kelebihan dan kekurangan dari Web Server **[NAMA WEB SERVER]** yang kami gunakan:

| Aspek | Kelebihan ([NAMA WEB SERVER]) | Kekurangan ([NAMA WEB SERVER]) |
| :--- | :--- | :--- |
| **Performa & Kecepatan** | [Tuliskan kelebihannya. Contoh: Mampu menangani banyak koneksi secara bersamaan dengan baik.] | [Tuliskan kekurangannya. Contoh: Membutuhkan *tuning* yang kompleks untuk performa maksimal.] |
| **Kemudahan Konfigurasi** | [Tuliskan kelebihannya. Contoh: Struktur konfigurasi yang modular dan mudah dipahami.] | [Tuliskan kekurangannya. Contoh: Sintaks konfigurasi *rewriting* yang cukup spesifik.] |
| **Fitur & Modularitas** | [Tuliskan kelebihannya. Contoh: Dukungan berbagai modul ekstensi pihak ketiga.] | [Tuliskan kekurangannya. Contoh: Beberapa fitur keamanan dasar memerlukan instalasi modul tambahan.] |

---

## 4. 🧠 Refleksi Proyek: Kesan dan Kendala

### 4.1. Kesan Selama Proses Pengerjaan ✨

> [Tuliskan kesan anggota kelompok, misalnya: "Kami merasa mendapatkan banyak ilmu baru, terutama dalam praktik Version Control menggunakan Git dan GitHub yang belum pernah kami lakukan sebelumnya, yang sangat membantu kolaborasi tim."]

### 4.2. Kendala dan Solusi yang Diterapkan

| Kendala yang Kalian Hadapi | Solusi yang Ditemukan ✅ |
| :--- | :--- |
| [Tuliskan kendala teknis atau kolaborasi lain yang Kalian hadapi. Contoh: Sulitnya mengintegrasikan PHP-FPM dengan Nginx, karena *socket* tidak terdeteksi.] | [Jelaskan solusi spesifik Kalian. Contoh: Memastikan versi PHP-FPM yang terinstal sudah benar, kemudian mengecek path *socket* di file `/etc/php/[versi]/fpm/pool.d/www.conf` dan menyesuaikannya di konfigurasi Nginx.] |
| [Kendala kedua, jika ada.] | [Solusi kedua.] |

---

## 5. 📄 Dokumentasi Konten Website

Seluruh *source code* (Halaman Utama dan Halaman Profil) yang berada di *document root* server telah disalin dan di-*commit* ke dalam *repository* GitHub ini.

* **Struktur Direktori Konten:** `/html`

---

## 6. 🎬 Dokumentasi Video Pengerjaan

Seluruh proses pengerjaan telah direkam dan diunggah ke YouTube sebagai bukti pengerjaan dan dokumentasi langkah-langkah.

* **Link Video YouTube:** [Tuliskan link ke video pengerjaan kelompok kalian]

<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bansos</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="img" alt="Bantuan Sosial">
            </div>
            <nav class="nav-list">
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Alur</a></li>
                    <li><a href="#">Jadwal</a></li>
                    <li><a href="#">Berita</a></li>
                    <li><a href="#">Dokumentasi</a></li>
                </ul>
            </nav>
            <button type="button">Masuk</button>
            <button type="button" class="war">Daftar</button>
        </header>

        <main>
            <div class="lp">
                <h1>Bantuan Sosial Untuk</h1>
                <h1 class="war">Kesejahteraan Bersama</h1>
                <button type="button" class="war">Baca Selengkapnya</button>
                <button type="button" class="war">Pelajari Cara Kerja</button>
                <img src="<?= base_url('assets/img/1.jpg') ?>" alt="dok" width="300px">
            </div>
            <div class="alur">
                <h2>Alur Pengajuan Bantuan Sosial</h2>
                <p>Ikuti langkah-langkah sederhana untuk melakukan pendaftaran
                    secara online
                </p>
                <article class="card">
                    <img src="img/profile" alt="prof">
                    <h4>Buat Akun</h4>
                    <p>Daftarkan dengan data diri yang valid dan lengkap</p>
                    <p>Siapkan KK, KTP dan dokumen lainnya</p>
                </article>
                <article class="card">
                    <img src="img/profile" alt="berkas">
                    <h4>Lengkapi Berkas</h4>
                    <p>Daftar dengan data diri yang valid dan lengkap</p>
                    <p>Pastikan foto dokumen jelas dan terbaca</p>
                </article>
                <article class="card">
                    <img src="img/profile" alt="protected">
                    <h4>Verifikasi Data</h4>
                    <p>Daftar dengan data diri yang valid dan lengkap</p>
                    <p>Verifikasi data memakan waktu 2-3 hari kerja</p>
                </article>
                <article class="card">
                    <img src="img/profile" alt="success">
                    <h4>Penerimaan Bantuan</h4>
                    <p>Daftar dengan data diri yang valid dan lengkap</p>
                    <p>Anda akan menerima notifikasi melalui sms atau email</p>
                </article>
            </div>
            <div class="akses">
                <h2><b>Akses Akun Anda</b></h2>
                <p>Masuk ke dashboard personal untuk memantau status pengajuan,
                    mengupdate data dan melihat riwayat yang diterima
                </p>
                <button type="button">Masuk ke Akun</button>
                <img src="img/akun" alt="akun">
            </div>

            <div>
                <h2><b>Pertanyaan yang sering diajukan</b></h2>
                <p>acordio?</p>
            </div>

            <div>
                <h2><b>Jadwal Penyaluran Bantuan</b></h2>
                <p>Lihat jadwal terbaru penyaluran berbagai program bantuan Sosial
                    pemerintah
                </p>
                <div class="pb">
                    <h3>Penyaluran Bantuan Program Non Tunai (BPNT)</h3>
                    <p>Penyaluran bantuan pangan melalui sembako</p>
                    <div class="status">
                        <h1>Sedang Berlangsung</h1>
                    </div>
                    <div class="tanggal">
                        <img src="kal" alt="kal">
                        <p>15 Januari 2024</p>
                        <p>08.00 - 16.00 WIB</p>
                    </div>
                    <div class="lok">
                        <img src="lok" alt="lok">
                        <p>Balai RT</p>
                    </div>
                    <div class="penerima">
                        <img src="family" alt="family">
                        <p>2.5M Keluarga</p>
                        <p>Penerima</p>
                    </div>
                </div>
            </div>
            <div>
                <h2><b>Jadwal Penyaluran Bantuan</b></h2>
                <p>Lihat jadwal terbaru penyaluran berbagai program bantuan Sosial
                    pemerintah
                </p>
                <div class="pb">
                    <h3>Penyaluran Bantuan Program Non Tunai (BPNT)</h3>
                    <p>Penyaluran bantuan pangan melalui sembako</p>
                    <div class="status">
                        <h1>Akan Datang</h1>
                    </div>
                    <div class="tanggal">
                        <img src="kal" alt="kal">
                        <p>15 Januari 2024</p>
                        <p>08.00 - 16.00 WIB</p>
                    </div>
                    <div class="lok">
                        <img src="lok" alt="lok">
                        <p>Balai RT</p>
                    </div>
                    <div class="penerima">
                        <img src="family" alt="family">
                        <p>2.5M Keluarga</p>
                        <p>Penerima</p>
                    </div>
                </div>
            </div>
            <div>
                <h2><b>Jadwal Penyaluran Bantuan</b></h2>
                <p>Lihat jadwal terbaru penyaluran berbagai program bantuan Sosial
                    pemerintah
                </p>
                <div class="pb">
                    <h3>Penyaluran Bantuan Program Non Tunai (BPNT)</h3>
                    <p>Penyaluran bantuan pangan melalui sembako</p>
                    <div class="status">
                        <h1>Akan Datang</h1>
                    </div>
                    <div class="tanggal">
                        <img src="kal" alt="kal">
                        <p>15 Januari 2024</p>
                        <p>08.00 - 16.00 WIB</p>
                    </div>
                    <div class="lok">
                        <img src="lok" alt="lok">
                        <p>Balai RT</p>
                    </div>
                    <div class="penerima">
                        <img src="family" alt="family">
                        <p>2.5M Keluarga</p>
                        <p>Penerima</p>
                    </div>
                </div>
            </div>
            <div>
                <h2><b>Jadwal Penyaluran Bantuan</b></h2>
                <p>Lihat jadwal terbaru penyaluran berbagai program bantuan Sosial
                    pemerintah
                </p>
                <div class="pb">
                    <h3>Penyaluran Bantuan Program Non Tunai (BPNT)</h3>
                    <p>Penyaluran bantuan pangan melalui sembako</p>
                    <div class="status">
                        <h1>Akan Datang</h1>
                    </div>
                    <div class="tanggal">
                        <img src="kal" alt="kal">
                        <p>15 Januari 2024</p>
                        <p>08.00 - 16.00 WIB</p>
                    </div>
                    <div class="lok">
                        <img src="lok" alt="lok">
                        <p>Balai RT</p>
                    </div>
                    <div class="penerima">
                        <img src="family" alt="family">
                        <p>2.5M Keluarga</p>
                        <p>Penerima</p>
                    </div>
                </div>
            </div>
            <div>
                <h2><b>Jadwal Penyaluran Bantuan</b></h2>
                <p>Lihat jadwal terbaru penyaluran berbagai program bantuan Sosial
                    pemerintah
                </p>
                <div class="pb">
                    <h3>Penyaluran Bantuan Program Non Tunai (BPNT)</h3>
                    <p>Penyaluran bantuan pangan melalui sembako</p>
                    <div class="status">
                        <h1>Akan Datang</h1>
                    </div>
                    <div class="tanggal">
                        <img src="kal" alt="kal">
                        <p>15 Januari 2024</p>
                        <p>08.00 - 16.00 WIB</p>
                    </div>
                    <div class="lok">
                        <img src="lok" alt="lok">
                        <p>Balai RT</p>
                    </div>
                    <div class="penerima">
                        <img src="family" alt="family">
                        <p>2.5M Keluarga</p>
                        <p>Penerima</p>
                    </div>
                </div>
            </div>

            <div>
                <h1><b>Berita & Informasi Terkini</b></h1>
                <p>Lihat berita terbaru penyaluran berbagai program bantuan sosial
                    pemerintah
                </p>
                <div>
                    <div class="header">
                        <h1>Pengumuman</h1>
                        <h1>Featured</h1>
                    </div>
                    <h1>Penyaluran Bansos Tahap Pertama 2024 Dimulai 15 Januari</h1>
                    <p>Pemerintah resmi memulai penyaluran bantuan sosial tahap Pertama
                        untuk keluarga penerima manfaat di seluruh Indonesia.
                    </p>
                    <div>
                        <img src="kal" alt="kal">
                        <p>12 Januari 2024</p>
                        <p>Kemensos RI</p>
                        <button>Baca Selengkapnya ></button>
                    </div>
                    <img src="foto" alt="foto">
                </div>
            </div>
            <div class="card">
                <div>
                    <div>
                        <p><b>Informasi</b></p>
                    </div>
                    <img src="foto" alt="foto">
                    <h1>Update Syarat dan Ketentuan Program Keluarga Harapan (PKH) 2024</h1>
                    <p>Terdapat beberapa perubahan kriteria dan persyaratan untuk program 
                        PKH tahun 2024 yang perlu diketahui penerima
                    </p>
                    <div>
                        <img src="kal" alt="kal">
                        <p>12 Januari 2024</p>
                        <img src="prof" alt="prof">
                        <p>Dirjen Linjamsos</p>
                    </div>
                    <img src="arah" alt="arah">
                </div>
                <div>
                    <div>
                        <p><b>Tutorial</b></p>
                    </div>
                    <img src="foto" alt="foto">
                    <h1>Cara Mengecek Status Penerima Bantuan Melalui Aplikasi Mobile</h1>
                    <p>Panduan lengkap menggunakan aplikasi mobile untuk memantau status dan riwayat
                        penerimaan bantuan sosial
                    </p>
                    <div>
                        <img src="kal" alt="kal">
                        <p>8 Januari 2024</p>
                        <img src="prof" alt="prof">
                        <p>Tim Digital</p>
                    </div>
                    <img src="arah" alt="arah">
                </div>
                <div>
                    <div>
                        <p><b>Pengumuman</b></p>
                    </div>
                    <img src="foto" alt="foto">
                    <h1>Penyaluran Kartu Sembako Gelombang 2 Segera Dimulai</h1>
                    <p>Persiapan penyaluran kartu sembako gelombang kedua sudah 
                        memasuki tahap final dan akan dimulai akhir bulan ini
                    </p>
                    <div>
                        <img src="kal" alt="kal">
                        <p>6 Januari 2024</p>
                        <img src="prof" alt="prof">
                        <p>Kemensos RI</p>
                    </div>
                    <img src="arah" alt="arah">
                </div>
                <div>
                    <div>
                        <p><b>Informasi</b></p>
                    </div>
                    <img src="foto" alt="foto">
                    <h1>Update Syarat dan Ketentuan Program Keluarga Harapan (PKH) 2024</h1>
                    <p>Terdapat beberapa perubahan kriteria dan persyaratan untuk program 
                        PKH tahun 2024 yang perlu diketahui penerima
                    </p>
                    <div>
                        <img src="kal" alt="kal">
                        <p>12 Januari 2024</p>
                        <img src="prof" alt="prof">
                        <p>Dirjen Linjamsos</p>
                    </div>
                    <img src="arah" alt="arah">
                </div>
                <div>
                    <div>
                        <p><b>Tutorial</b></p>
                    </div>
                    <img src="foto" alt="foto">
                    <h1>Cara Mengecek Status Penerima Bantuan Melalui Aplikasi Mobile</h1>
                    <p>Panduan lengkap menggunakan aplikasi mobile untuk memantau status dan riwayat
                        penerimaan bantuan sosial
                    </p>
                    <div>
                        <img src="kal" alt="kal">
                        <p>8 Januari 2024</p>
                        <img src="prof" alt="prof">
                        <p>Tim Digital</p>
                    </div>
                    <img src="arah" alt="arah">
                </div>
                <div>
                    <div>
                        <p><b>Pengumuman</b></p>
                    </div>
                    <img src="foto" alt="foto">
                    <h1>Penyaluran Kartu Sembako Gelombang 2 Segera Dimulai</h1>
                    <p>Persiapan penyaluran kartu sembako gelombang kedua sudah 
                        memasuki tahap final dan akan dimulai akhir bulan ini
                    </p>
                    <div>
                        <img src="kal" alt="kal">
                        <p>6 Januari 2024</p>
                        <img src="prof" alt="prof">
                        <p>Kemensos RI</p>
                    </div>
                    <img src="arah" alt="arah">
                </div>
                <div>
                    <button>Lihat Berita Lainnya</button>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-section">
            <div class="brand">BansosKu</div>
            <p>Platform digital terpercaya untuk akses bantuan sosial pemerintah. Memudahkan masyarakat dalam mengakses berbagai program bantuan sosial.</p>
            <div class="contact-info">
                <p><strong>Hotline 24/7</strong><br>0813-1234-5678</p>
                <p><strong>Email Support</strong><br>support@bansosku.go.id</p>
                <p><strong>Alamat Kantor</strong><br>Jl. Merdeka No. 123 Jakarta Pusat, 1011</p>
            </div>
            </div>

            <div class="footer-section">
            <h3>Tautan Cepat</h3>
            <a href="#">Syarat & Ketentuan</a><br>
            <a href="#">Kebijakan Privasi</a><br>
            <a href="#">Panduan Penggunaan</a><br>
            <a href="#">FAQ</a>
            </div>

            <div class="footer-section">
            <h3>Program Bantuan</h3>
            <a href="#">Program Keluarga Harapan</a><br>
            <a href="#">Bantuan Pangan Non Tunai</a><br>
            <a href="#">Kartu Indonesia Pintar</a><br>
            <a href="#">Bantuan Subsidi Upah</a>
            </div>

            <div class="footer-section">
            <h3>Ikuti Kami</h3>
            <p>Dapatkan informasi terbaru seputar program bantuan sosial melalui media sosial kami.</p>
            <div class="social-icons">
                <a href="#"><i>🐦</i></a>
                <a href="#"><i>📘</i></a>
                <a href="#"><i>📸</i></a>
                <a href="#"><i>▶️</i></a>
            </div>
            <div class="newsletter" style="margin-top:15px;">
                <input type="email" placeholder="Email Anda">
                <button>Langganan</button>
            </div>
            </div>
        </footer>
    </body>
</html> -->
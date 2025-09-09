# Analisis Kode Per Baris - Website Biografi Asyraf Pramudya

## Struktur Dokumen HTML

### DOCTYPE dan HTML Tag
```html
<!DOCTYPE html>
<html lang="id">
```
- `<!DOCTYPE html>`: Deklarasi HTML5 yang memberitahu browser untuk menggunakan standar HTML5
- `<html lang="id">`: Tag pembuka HTML dengan atribut bahasa Indonesia untuk SEO dan accessibility

### HEAD Section

#### Meta Tags dan Title
```html
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biografi Saya</title>
```
- `<meta charset="utf-8">`: Mengatur encoding karakter UTF-8 untuk mendukung karakter khusus
- `<meta name="viewport" content="width=device-width, initial-scale=1">`: Konfigurasi responsive design untuk mobile
- `<title>Biografi Saya</title>`: Judul halaman yang muncul di tab browser

#### External Resources
```html
    <link rel="stylesheet" href="style.1.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
```
- `href="style.1.css"`: Link ke file CSS eksternal untuk styling
- Google Fonts link: Import font Montserrat dengan 3 weight (400=normal, 600=semi-bold, 700=bold)
- Font Awesome 6.5.0: Library ikon untuk social media dan contact icons

## BODY Content

### Header Section
```html
<header>
    <h1>Biografi Asyraf Pramudya</h1>
    <nav>
        <a href="#about">Tentang</a>
        <a href="#projects">Project</a>
        <a href="#skills">Keahlian</a>
        <a href="#running-schedule">Jadwal Lari</a>
        <a href="#contact">Kontak</a>
    </nav>
</header>
```
- `<header>`: Semantic HTML5 tag untuk bagian kepala halaman
- `<h1>`: Heading utama halaman (penting untuk SEO)
- `<nav>`: Container untuk navigation menu
- `href="#section-id"`: Anchor links untuk smooth scrolling ke section tertentu

### About Section
```html
<section id="about">
    <h2>Tentang Saya</h2>
    <div class="about-card">
        <img src="profil.jpg" alt="Foto Asyraf Pramudya" class="profile-pic">
        <div class="about-text">
            <p>Saya <b>Asyraf Pramudya Azhar AB</b>, seorang mahasiswa Teknik Komputer di Universitas Negeri Makassar.</p>
            <p>Hobi saya adalah design dan juga lari agar hidup terasa seimbang dan tidak monoton begitu saja.</p>
            <p>Selain lari saya juga suka musik dan bermain game</p>
        </div>
    </div>
</section>
```
- `<section id="about">`: Semantic section dengan ID untuk navigation target
- `class="about-card"`: CSS class untuk styling card layout
- `<img src="profil.jpg" alt="...">`: Gambar profil dengan alt text untuk accessibility
- `<b>`: Bold formatting untuk emphasize nama
- Multiple `<p>`: Paragraf terpisah untuk readability

### Gallery Section
```html
<section id="gallery">
    <h2>🎮 Game & 🎵 Album Musik Favorit</h2>
    <div class="gallery-cards">
        <!-- Card Game -->
        <div class="gallery-card">
            <img src="Fifa 23 Wallpapers.jpeg" alt="Game Favorit" class="gallery-img">
            <h3>Favorite Games</h3>
            <center><p></p></center>
        </div>
        <!-- Card Album Musik -->
        <div class="gallery-card">
            <img src="Graduation Poses.jpeg" alt="Album Musik" class="gallery-img">
            <h3>Favorite Album</h3>
            <p></p>
        </div>
    </div>
</section>
```
- Emoji dalam heading: 🎮🎵 untuk visual appeal
- `class="gallery-cards"`: Container untuk card grid layout
- `<!-- Comment -->`: HTML comments untuk dokumentasi
- `<center>`: Deprecated tag (sebaiknya gunakan CSS text-align)
- Empty `<p></p>`: Placeholder content yang belum diisi

### Projects Section
```html
<section id="projects">
    <h2>Project</h2>
    <div class="projects">
        <div class="card">
            <h3>Project 1</h3>
            <p>Program manajemen stok produk sederhana dengan bahasa PHP dan fitur CRUD (Create, Read, Update, Delete) untuk memudahkan manajemen data stok produk dan pelanggan.</p>
        </div>
        <div class="card">
            <h3>Project 2</h3>
            <p>Program sewa kamar yang sedang saya kembangkan menggunakan framework Laravel dan React.js untuk tampilan interaktif.</p>
        </div>
    </div>
</section>
```
- Reusable `class="card"`: Consistent styling untuk project cards
- Technical descriptions: Menjelaskan teknologi yang digunakan (PHP, Laravel, React.js)
- CRUD explanation: Educational value dengan penjelasan singkat

### Skills Section
```html
<section id="skills">
    <h2>Keahlian</h2>
    <div class="skills">
        <p>HTML</p>
        <div class="bar"><span style="width:80%"></span></div>
        <p>CSS</p>
        <div class="bar"><span style="width:75%"></span></div>
        <p>JavaScript</p>
        <div class="bar"><span style="width:40%"></span></div>
        <p>PHP</p>
        <div class="bar"><span style="width:60%"></span></div>
    </div>
</section>
```
- Inline styling: `style="width:XX%"` untuk progress bar visualization
- Nested structure: `<div class="bar"><span></span></div>` untuk styling control
- Percentage values: Honest self-assessment dari skill level
- Progressive complexity: HTML/CSS tinggi, JS rendah (realistic)

### Running Schedule Section
```html
<section id="running-schedule">
    <h2>🏃 Jadwal Latihan Lari</h2>
    <table class="schedule-table">
        <thead>
            <tr>
                <th>Hari</th>
                <th>Jarak / Latihan</th>
                <th>Durasi (menit)</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Senin</td>
                <td>8 x 400m (Pace 3:30) / Fartlek 500m x 5</td>
                <td>60 / 30</td>
                <td>Full Effort Run (Speed Session)</td>
            </tr>
            <!-- Additional rows... -->
        </tbody>
    </table>
</section>
```
- `<table>`: Semantic HTML untuk tabular data
- `<thead>` dan `<tbody>`: Proper table structure
- Technical running terms: Pace, Fartlek, Threshold (menunjukkan expertise)
- Varied training types: Speed, Tempo, Easy, Long runs

### Contact Section
```html
<section id="contact">
    <h2>Kontak</h2>
    <div class="contact-cards">
        <div class="contact-card">
            <i class="fas fa-envelope fa-2x"></i>
            <h3>Email</h3>
            <p><a href="mailto:asrappramudya14@gmail.com">asrappramudya14@gmail.com</a></p>
        </div>
        <!-- Additional contact cards... -->
    </div>
</section>
```
- Font Awesome classes: `fas fa-envelope fa-2x` (solid, envelope, 2x size)
- `href="mailto:"`: Email protocol link
- `target="_blank"`: Opens social links in new tab
- Professional platforms: GitHub prioritized over Instagram

### Footer
```html
<footer>
    <p>Asyraf Pramudya Azhar AB - 2025</p>
    <p><b>"Semua masalah akan saya selesaikan, tapi saya lari dan ngopi dahulu"</b></p>
</footer>
```
- Copyright line dengan tahun
- Personal quote: Menunjukkan personality dan humor
- `<b>` untuk emphasize quote

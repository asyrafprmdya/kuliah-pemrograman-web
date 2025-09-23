# Analisis Kode Program

## deklarasiglobal.html

- Baris 1: `<script>` → Membuka tag script untuk menuliskan kode JavaScript.
- Baris 2: `    var a = 12;` → Mendeklarasikan variabel global 'a' dengan nilai 12.
- Baris 3: `    var b = 4;` → Mendeklarasikan variabel global 'b' dengan nilai 4.
- Baris 4: `` → Baris kosong untuk pemisah.
- Baris 5: `    function Perkalian_Dengan2(b) {` → Mendefinisikan fungsi 'Perkalian_Dengan2' dengan parameter 'b'.
- Baris 6: `        a = b * 2;` → Mengubah nilai variabel global 'a' menjadi hasil perkalian parameter 'b' dengan 2.
- Baris 7: `        return a;` → Mengembalikan nilai variabel 'a'.
- Baris 8: `    }` → Menutup definisi fungsi.
- Baris 9: `` → Baris kosong untuk pemisah.
- Baris 10: `    document.write("Dua kali dari ", b, " adalah ", Perkalian_Dengan2(b), "<br>");` → Menampilkan teks dengan hasil pemanggilan fungsi.
- Baris 11: `    document.write("Nilai dari a adalah " + a);` → Menampilkan nilai terakhir dari variabel 'a'.
- Baris 12: `</script>` → Menutup tag script.
- ![deklarasiglobal.png](Screenshot/dekglobal.png)
## deklarasilokal.html

- Baris 1: `<!DOCTYPE html>` → Mendefinisikan dokumen sebagai HTML5.
- Baris 2: `<html lang="en">` → Membuka tag HTML dengan atribut bahasa Inggris.
- Baris 3: `<head>` → Membuka bagian head dokumen HTML.
- Baris 4: `    <meta charset="UTF-8">` → Menentukan encoding karakter sebagai UTF-8.
- Baris 5: `    <meta name="viewport" content="width=device-width, initial-scale=1.0">` → Mengatur viewport untuk responsif.
- Baris 6: `    <title>Document</title>` → Menentukan judul halaman web.
- Baris 7: `</head>` → Menutup bagian head.
- Baris 8: `<body>` → Membuka bagian body tempat konten ditampilkan.
- Baris 9: `    <script language = "Javascript">` → Membuka tag script untuk JavaScript.
- Baris 10: `        var a = 12;` → Mendeklarasikan variabel global 'a' dengan nilai 12.
- Baris 11: `        var b = 4;` → Mendeklarasikan variabel global 'b' dengan nilai 4.
- Baris 12: `        function PerkalianDengan2(b) {` → Mendefinisikan fungsi dengan parameter 'b'.
- Baris 13: `            var a = b * 2;` → Mendeklarasikan variabel lokal 'a' dengan hasil perkalian.
- Baris 14: `            return a;` → Mengembalikan nilai variabel lokal 'a'.
- Baris 15: `        }` → Menutup definisi fungsi.
- Baris 16: `        document.write("Dua kali dari ", b , " Adalah ", PerkalianDengan2(b));` → Menampilkan hasil pemanggilan fungsi.
- Baris 17: `        document.write(" Nilai dari a adalah: ", a);` → Menampilkan nilai variabel global 'a' yang tidak berubah.
- Baris 18: `    </script>` → Menutup tag script.
- Baris 19: `</body>` → Menutup bagian body.
- Baris 20: `</html>` → Menutup tag HTML.
- ![deklarasilokal.png](Screenshot/deklokal.png)

## deklarasivar.html

- Baris 1: ` <script language="Javascript">` → Membuka tag script untuk JavaScript.
- Baris 2: `        var VariabelKu;` → Mendeklarasikan variabel 'VariabelKu' tanpa nilai awal.
- Baris 3: `        var VariabelKu2 = 3;` → Mendeklarasikan variabel 'VariabelKu2' dengan nilai 3.
- Baris 4: `        VariabelKu = 1234;` → Mengisi nilai variabel 'VariabelKu' dengan 1234.
- Baris 5: `        document.write(VariabelKu * VariabelKu2);` → Menampilkan hasil perkalian kedua variabel.
- Baris 6: `    </script>` → Menutup tag script.
- ![variabel.png](Screenshot/variabel.png)

## file.js

- Baris 1: `document.write("Ini adalah Penggunaan Javascript Eksternal");` → Menampilkan teks pada dokumen HTML.

## hitungluasbangun.html

- Baris 1: `<!DOCTYPE html>` → Mendefinisikan dokumen sebagai HTML5.
- Baris 2: `<html lang="en">` → Membuka tag HTML dengan atribut bahasa Inggris.
- Baris 3: `` → Baris kosong untuk pemisah.
- Baris 4: `<head>` → Membuka bagian head dokumen HTML.
- Baris 5: `    <meta charset="UTF-8">` → Menentukan encoding karakter sebagai UTF-8.
- Baris 6: `    <meta name="viewport" content="width=device-width, initial-scale=1.0">` → Mengatur viewport untuk responsif.
- Baris 7: `    <title>Hitung Luas Bangun Ruang</title>` → Menentukan judul halaman web.
- Baris 8: `    <style>` → Membuka tag style untuk CSS.
- Baris 9: `        body {` → Membuka definisi style untuk body.
- Baris 10: `            font-family: Arial;` → Mengatur font family menjadi Arial.
- Baris 11: `            padding: 20px;` → Mengatur padding 20px.
- Baris 12: `        }` → Menutup definisi style body.
- Baris 13: `` → Baris kosong untuk pemisah.
- Baris 14: `        input {` → Membuka definisi style untuk input.
- Baris 15: `            margin: 5px;` → Mengatur margin 5px.
- Baris 16: `            padding: 5px;` → Mengatur padding 5px.
- Baris 17: `        }` → Menutup definisi style input.
- Baris 18: `` → Baris kosong untuk pemisah.
- Baris 19: `        button {` → Membuka definisi style untuk button.
- Baris 20: `            margin: 5px;` → Mengatur margin 5px.
- Baris 21: `            padding: 5px;` → Mengatur padding 5px.
- Baris 22: `        }` → Menutup definisi style button.
- Baris 23: `    </style>` → Menutup tag style.
- Baris 24: `</head>` → Menutup bagian head.
- Baris 25: `` → Baris kosong untuk pemisah.
- Baris 26: `<body>` → Membuka bagian body tempat konten ditampilkan.
- Baris 27: `    <h1>Hitung Luas Bangun Ruang</h1>` → Menampilkan heading level 1.
- Baris 28: `` → Baris kosong untuk pemisah.
- Baris 29: `    <h3>1. Volume Kubus</h3> <br>` → Menampilkan heading level 3 dan line break.
- Baris 30: `    <label>Sisi : <input type="number" id="sisi"></label>` → Membuat label dan input untuk sisi kubus.
- Baris 31: `    <button onclick="hitungKubus()">Hitung</button>` → Membuat tombol dengan event onclick.
- Baris 32: `    <p id="hasilKubus"></p>` → Membuat paragraf untuk hasil kubus.
- Baris 33: `` → Baris kosong untuk pemisah.
- Baris 34: `    <h3>2. Volume Balok</h3>` → Menampilkan heading level 3.
- Baris 35: `    <label>Panjang: <input type="number" id="panjang"></label>` → Membuat label dan input untuk panjang balok.
- Baris 36: `    <label>Lebar: <input type="number" id="lebar"></label>` → Membuat label dan input untuk lebar balok.
- Baris 37: `    <label>Tinggi: <input type="number" id="tinggi"></label>` → Membuat label dan input untuk tinggi balok.
- Baris 38: `    <button onclick="hitungBalok()">Hitung</button>` → Membuat tombol dengan event onclick.
- Baris 39: `    <p id="hasilBalok"></p>` → Membuat paragraf untuk hasil balok.
- Baris 40: `` → Baris kosong untuk pemisah.
- Baris 41: `    <h3>3. Volume Tabung</h3>` → Menampilkan heading level 3.
- Baris 42: `    <label>Jari-jari: <input type="number" id="jari"></label>` → Membuat label dan input untuk jari-jari tabung.
- Baris 43: `    <label>Tinggi: <input type="number" id="tinggiTabung"></label>` → Membuat label dan input untuk tinggi tabung.
- Baris 44: `    <button onclick="hitungTabung()">Hitung</button>` → Membuat tombol dengan event onclick.
- Baris 45: `    <p id="hasilTabung"></p>` → Membuat paragraf untuk hasil tabung.
- Baris 46: `` → Baris kosong untuk pemisah.
- Baris 47: `</body>` → Menutup bagian body.
- Baris 48: `<script>` → Membuka tag script untuk JavaScript.
- Baris 49: `    function hitungKubus() {` → Mendefinisikan fungsi untuk menghitung volume kubus.
- Baris 50: `        let sisi = document.getElementById("sisi").value;` → Mengambil nilai input sisi.
- Baris 51: `        let volume = sisi * sisi * sisi;` → Menghitung volume kubus.
- Baris 52: `        document.getElementById("hasilKubus").innerText = "Volume Kubus = " + volume;` → Menampilkan hasil.
- Baris 53: `    }` → Menutup definisi fungsi.
- Baris 54: `` → Baris kosong untuk pemisah.
- Baris 55: `    function hitungBalok() {` → Mendefinisikan fungsi untuk menghitung volume balok.
- Baris 56: `        let p = document.getElementById("panjang").value;` → Mengambil nilai input panjang.
- Baris 57: `        let l = document.getElementById("lebar").value;` → Mengambil nilai input lebar.
- Baris 58: `        let t = document.getElementById("tinggi").value;` → Mengambil nilai input tinggi.
- Baris 59: `        let volume = p * l * t;` → Menghitung volume balok.
- Baris 60: `        document.getElementById("hasilBalok").innerText = "Volume Balok = " + volume;` → Menampilkan hasil.
- Baris 61: `    }` → Menutup definisi fungsi.
- Baris 62: `` → Baris kosong untuk pemisah.
- Baris 63: `    function hitungTabung() {` → Mendefinisikan fungsi untuk menghitung volume tabung.
- Baris 64: `        let r = document.getElementById("jari").value;` → Mengambil nilai input jari-jari.
- Baris 65: `        let t = document.getElementById("tinggiTabung").value;` → Mengambil nilai input tinggi.
- Baris 66: `        let volume = Math.PI * r * r * t;` → Menghitung volume tabung.
- Baris 67: `        document.getElementById("hasilTabung").innerText = "Volume Tabung = " + volume.toFixed(2);` → Menampilkan hasil dengan 2 desimal.
- Baris 68: `    }` → Menutup definisi fungsi.
- Baris 69: `</script>` → Menutup tag script.
- Baris 70: `` → Baris kosong untuk pemisah.
- Baris 71: `</html>` → Menutup tag HTML.
- ![hitungluas.png](Screenshot/hitungluas.png)

## input.html

- Baris 1: `<html>` → Membuka tag HTML.
- Baris 2: `    <head>` → Membuka bagian head dokumen HTML.
- Baris 3: `        <title>Masukan Data</title>` → Menentukan judul halaman web.
- Baris 4: `    </head>` → Menutup bagian head.
- Baris 5: `        <body>` → Membuka bagian body tempat konten ditampilkan.
- Baris 6: `            <script LANGUAGE="JavaScript">` → Membuka tag script untuk JavaScript.
- Baris 7: `                var nama = prompt("Siapa nama kamu?");` → Menampilkan prompt untuk input nama.
- Baris 8: `                document.write("Hai, " + nama + " Bagaimana kabarmu");` → Menampilkan sapaan dengan nama yang diinput.
- Baris 9: `            </script>` → Menutup tag script.
- Baris 10: `        </body>` → Menutup bagian body.
- Baris 11: `</html>` → Menutup tag HTML.
- ![input.png](Screenshot/input1.png)
- ![input.png](Screenshot/input2.png)

## kalkulator.html

- Baris 1: `<!DOCTYPE html>` → Mendefinisikan dokumen sebagai HTML5.
- Baris 2: `<html lang="id">` → Membuka tag HTML dengan atribut bahasa Indonesia.
- Baris 3: `` → Baris kosong untuk pemisah.
- Baris 4: `<head>` → Membuka bagian head dokumen HTML.
- Baris 5: `  <meta charset="UTF-8">` → Menentukan encoding karakter sebagai UTF-8.
- Baris 6: `  <title>Kalkulator Sederhana</title>` → Menentukan judul halaman web.
- Baris 7: `  <style>` → Membuka tag style untuk CSS.
- Baris 8: `    .calc {` → Membuka definisi class 'calc'.
- Baris 9: `      width: 200px;` → Mengatur lebar 200px.
- Baris 10: `      margin: 20px auto;` → Mengatur margin 20px atas/bawah dan auto kiri/kanan.
- Baris 11: `    }` → Menutup definisi class.
- Baris 12: `` → Baris kosong untuk pemisah.
- Baris 13: `    input {` → Membuka definisi style untuk input.
- Baris 14: `      width: 100%;` → Mengatur lebar 100%.
- Baris 15: `      height: 40px;` → Mengatur tinggi 40px.
- Baris 16: `      text-align: right;` → Mengatur align teks ke kanan.
- Baris 17: `      margin-bottom: 10px;` → Mengatur margin bawah 10px.
- Baris 18: `      font-size: 18px;` → Mengatur ukuran font 18px.
- Baris 19: `    }` → Menutup definisi style input.
- Baris 20: `` → Baris kosong untuk pemisah.
- Baris 21: `    button {` → Membuka definisi style untuk button.
- Baris 22: `      width: 45px;` → Mengatur lebar 45px.
- Baris 23: `      height: 45px;` → Mengatur tinggi 45px.
- Baris 24: `      margin: 2px;` → Mengatur margin 2px.
- Baris 25: `      font-size: 18px;` → Mengatur ukuran font 18px.
- Baris 26: `    }` → Menutup definisi style button.
- Baris 27: `  </style>` → Menutup tag style.
- Baris 28: `</head>` → Menutup bagian head.
- Baris 29: `` → Baris kosong untuk pemisah.
- Baris 30: `<body>` → Membuka bagian body tempat konten ditampilkan.
- Baris 31: `  <div class="calc">` → Membuat div dengan class 'calc'.
- Baris 32: `    <input type="text" id="display" disabled>` → Membuat input teks untuk display kalkulator.
- Baris 33: `    <br>` → Membuat line break.
- Baris 34: `    <button onclick="tampilan()">C</button>` → Membuat tombol C dengan event onclick.
- Baris 35: `    <button onclick="nilai('/')">/</button>` → Membuat tombol / dengan event onclick.
- Baris 36: `    <button onclick="nilai('*')">*</button>` → Membuat tombol * dengan event onclick.
- Baris 37: `    <button onclick="nilai('-')">-</button>` → Membuat tombol - dengan event onclick.
- Baris 38: `    <button onclick="nilai('+')">+</button>` → Membuat tombol + dengan event onclick.
- Baris 39: `    <button onclick="hitung()">=</button>` → Membuat tombol = dengan event onclick.
- Baris 40: `` → Baris kosong untuk pemisah.
- Baris 41: `    <br>` → Membuat line break.
- Baris 42: `    <button onclick="nilai('7')">7</button>` → Membuat tombol 7 dengan event onclick.
- Baris 43: `    <button onclick="nilai('8')">8</button>` → Membuat tombol 8 dengan event onclick.
- Baris 44: `    <button onclick="nilai('9')">9</button>` → Membuat tombol 9 dengan event onclick.
- Baris 45: `` → Baris kosong untuk pemisah.
- Baris 46: `    <br>` → Membuat line break.
- Baris 47: `    <button onclick="nilai('4')">4</button>` → Membuat tombol 4 dengan event onclick.
- Baris 48: `    <button onclick="nilai('5')">5</button>` → Membuat tombol 5 dengan event onclick.
- Baris 49: `    <button onclick="nilai('6')">6</button>` → Membuat tombol 6 dengan event onclick.
- Baris 50: `` → Baris kosong untuk pemisah.
- Baris 51: `    <br>` → Membuat line break.
- Baris 52: `    <button onclick="nilai('1')">1</button>` → Membuat tombol 1 dengan event onclick.
- Baris 53: `    <button onclick="nilai('2')">2</button>` → Membuat tombol 2 dengan event onclick.
- Baris 54: `    <button onclick="nilai('3')">3</button>` → Membuat tombol 3 dengan event onclick.
- Baris 55: `    <button onclick="nilai('0')">0</button>` → Membuat tombol 0 dengan event onclick.
- Baris 56: `    <button onclick="nilai('.')">.</button>` → Membuat tombol . dengan event onclick.
- Baris 57: `    <br>` → Membuat line break.
- Baris 58: `` → Baris kosong untuk pemisah.
- Baris 59: `  </div>` → Menutup div.
- Baris 60: `` → Baris kosong untuk pemisah.
- Baris 61: `  <script>` → Membuka tag script untuk JavaScript.
- Baris 62: `    let display = document.getElementById("display");` → Mengambil elemen dengan id 'display'.
- Baris 63: `` → Baris kosong untuk pemisah.
- Baris 64: `    function nilai(val) {` → Mendefinisikan fungsi untuk menambah nilai.
- Baris 65: `      display.value += val;` → Menambahkan nilai ke display.
- Baris 66: `    }` → Menutup definisi fungsi.
- Baris 67: `` → Baris kosong untuk pemisah.
- Baris 68: `    function tampilan() {` → Mendefinisikan fungsi untuk membersihkan display.
- Baris 69: `      display.value = "";` → Mengosongkan nilai display.
- Baris 70: `    }` → Menutup definisi fungsi.
- Baris 71: `` → Baris kosong untuk pemisah.
- Baris 72: `    function hitung() {` → Mendefinisikan fungsi untuk menghitung.
- Baris 73: `      try {` → Membuka blok try.
- Baris 74: `        display.value = eval(display.value);` → Mengevaluasi ekspresi dan menampilkan hasil.
- Baris 75: `      } catch {` → Membuka blok catch untuk error.
- Baris 76: `        display.value = "Error";` → Menampilkan "Error" jika terjadi kesalahan.
- Baris 77: `      }` → Menutup blok try-catch.
- Baris 78: `    }` → Menutup definisi fungsi.
- Baris 79: `  </script>` → Menutup tag script.
- Baris 80: `</body>` → Menutup bagian body.
- Baris 81: `` → Baris kosong untuk pemisah.
- Baris 82: `</html>` → Menutup tag HTML.
- ![kalkulator.png](Screenshot/kalkulator1.png)
- ![kalkulator.png](Screenshot/kalkulator2.png)

## konversi.html

- Baris 1: `<!DOCTYPE html>` → Mendefinisikan dokumen sebagai HTML5.
- Baris 2: `<HTML>` → Membuka tag HTML.
- Baris 3: `` → Baris kosong untuk pemisah.
- Baris 4: `<HEAD>` → Membuka bagian head dokumen HTML.
- Baris 5: `    <TITLE>Konversi Bilangan</TITLE>` → Menentukan judul halaman web.
- Baris 6: `</HEAD>` → Menutup bagian head.
- Baris 7: `` → Baris kosong untuk pemisah.
- Baris 8: `<BODY>` → Membuka bagian body tempat konten ditampilkan.
- Baris 9: `    <SCRIPT LANGUAGE=JavaScript>` → Membuka tag script untuk JavaScript.
- Baris 10: `        var a = parseInt("27");` → Mengkonversi string "27" menjadi integer.
- Baris 11: `        document.write(" 1." + a + "<BR>");` → Menampilkan hasil konversi.
- Baris 12: `        a = parseInt("27.5");` → Mengkonversi string "27.5" menjadi integer.
- Baris 13: `        document.write(" 2." + a + "<BR>");` → Menampilkan hasil konversi.
- Baris 14: `        var a = parseInt("27A");` → Mengkonversi string "27A" menjadi integer.
- Baris 15: `        document.write("3." + a + "<BR>");` → Menampilkan hasil konversi.
- Baris 16: `        a = parseInt("A27.5");` → Mengkonversi string "A27.5" menjadi integer.
- Baris 17: `        document.write(" 4." + a + "<BR>");` → Menampilkan hasil konversi.
- Baris 18: `        var b = parseFloat("27");` → Mengkonversi string "27" menjadi float.
- Baris 19: `        document.write(" 5." + b + "<BR>");` → Menampilkan hasil konversi.
- Baris 20: `        b = parseFloat("27.5");` → Mengkonversi string "27.5" menjadi float.
- Baris 21: `        document.write(" 6." + b + "<BR>");` → Menampilkan hasil konversi.
- Baris 22: `        var b = parseFloat("27A");` → Mengkonversi string "27A" menjadi float.
- Baris 23: `        document.write(" 7." + b + "<BR>");` → Menampilkan hasil konversi.
- Baris 24: `        b = parseFloat("A27.5");` → Mengkonversi string "A27.5" menjadi float.
- Baris 25: `        document.write(" 8." + b + "<BR>")` → Menampilkan hasil konversi.
- Baris 26: `    </SCRIPT>` → Menutup tag script.
- Baris 27: `</BODY>` → Menutup bagian body.
- Baris 28: `` → Baris kosong untuk pemisah.
- Baris 29: `</HTML>` → Menutup tag HTML.
- ![konversi.png](Screenshot/konversi.png)

## operatoraritmatika.html

- Baris 1: `<html>` → Membuka tag HTML.
- Baris 2: `` → Baris kosong untuk pemisah.
- Baris 3: `<head>` → Membuka bagian head dokumen HTML.
- Baris 4: `    <title>Operasi Matematika</title>` → Menentukan judul halaman web.
- Baris 5: `</head>` → Menutup bagian head.
- Baris 6: `` → Baris kosong untuk pemisah.
- Baris 7: `<body>` → Membuka bagian body tempat konten ditampilkan.
- Baris 8: `    <script LANGUAGE="JavaScript">` → Membuka tag script untuk JavaScript.
- Baris 9: `        document.write("2 + 3 = " + (2 + 3) );` → Menampilkan hasil penjumlahan.
- Baris 10: `        document.write("<BR>");` → Membuat line break.
- Baris 11: `        document.write("20 - 3 = " + (20 - 3) );` → Menampilkan hasil pengurangan.
- Baris 12: `        document.write("<BR>");` → Membuat line break.
- Baris 13: `        document.write("20 * 3 = " + (20 * 3) );` → Menampilkan hasil perkalian.
- Baris 14: `        document.write("<BR>");` → Membuat line break.
- Baris 15: `        document.write("40 / 3 = " + (40 / 3) );` → Menampilkan hasil pembagian.
- Baris 16: `        document.write("<BR>");` → Membuat line break.
- Baris 17: `    </script>` → Menutup tag script.
- Baris 18: `</body>` → Menutup bagian body.
- Baris 19: `` → Baris kosong untuk pemisah.
- Baris 20: `</html>` → Menutup tag HTML.
- ![aritmatika.png](Screenshot/aritmatika.png)

## operatorlogic.html

- Baris 1: `<!DOCTYPE html>` → Mendefinisikan dokumen sebagai HTML5.
- Baris 2: `<html lang="en">` → Membuka tag HTML dengan atribut bahasa Inggris.
- Baris 3: `` → Baris kosong untuk pemisah.
- Baris 4: `<head>` → Membuka bagian head dokumen HTML.
- Baris 5: `    <meta charset="UTF-8">` → Menentukan encoding karakter sebagai UTF-8.
- Baris 6: `    <meta name="viewport" content="width=device-width, initial-scale=1.0">` → Mengatur viewport untuk responsif.
- Baris 7: `    <title>Document</title>` → Menentukan judul halaman web.
- Baris 8: `</head>` → Menutup bagian head.
- Baris 9: `` → Baris kosong untuk pemisah.
- Baris 10: `<body>` → Membuka bagian body tempat konten ditampilkan.
- Baris 11: `    <SCRIPT LANGUAGE="JavaScript">` → Membuka tag script untuk JavaScript.
- Baris 12: `        var nilai = prompt("Nilai (0-100): ", 0);` → Menampilkan prompt untuk input nilai.
- Baris 13: `        var hasil = (nilai >= 60) ? "Lulus" : "Tidak Lulus";` → Menggunakan operator ternary untuk menentukan hasil.
- Baris 14: `        document.write("Hasil: " + hasil);` → Menampilkan hasil.
- Baris 15: `` → Baris kosong untuk pemisah.
- Baris 16: `    </SCRIPT>` → Menutup tag script.
- Baris 17: `</body>` → Menutup bagian body.
- Baris 18: `` → Baris kosong untuk pemisah.
- Baris 19: `</html>` → Menutup tag HTML.
- ![logika.png](Screenshot/logika1.png)
- ![logika.png](Screenshot/logika2.png)

## percobaan1.html

- Baris 1: `<HTML>` → Membuka tag HTML.
- Baris 2: `` → Baris kosong untuk pemisah.
- Baris 3: `<HEAD>` → Membuka bagian head dokumen HTML.
- Baris 4: `    <TITLE>Contoh Program Javascript</TITLE>` → Menentukan judul halaman web.
- Baris 5: `    <SCRIPT language=Javascript>` → Membuka tag script untuk JavaScript.
- Baris 6: `        document.write("Saya Belajar Javascript dan berada pada head");` → Menampilkan teks dari head.
- Baris 7: `    </SCRIPT>` → Menutup tag script.
- Baris 8: `</HEAD>` → Menutup bagian head.
- Baris 9: `` → Baris kosong untuk pemisah.
- Baris 10: `<BODY>` → Membuka bagian body tempat konten ditampilkan.
- Baris 11: `    <script language="Javascript">` → Membuka tag script untuk JavaScript.
- Baris 12: `        document.write(" Javascript berada pada body");` → Menampilkan teks dari body.
- Baris 13: `    </script>` → Menutup tag script.
- Baris 14: `` → Baris kosong untuk pemisah.
- Baris 15: `</BODY>` → Menutup bagian body.
- Baris 16: `` → Baris kosong untuk pemisah.
- Baris 17: `</HTML>` → Menutup tag HTML.
- ![percobaan1.png](Screenshot/percobaan1.png)

## percobaanbutton.html

- Baris 1: `<!DOCTYPE html>` → Mendefinisikan dokumen sebagai HTML5.
- Baris 2: `<html>` → Membuka tag HTML.
- Baris 3: `` → Baris kosong untuk pemisah.
- Baris 4: `<head>` → Membuka bagian head dokumen HTML.
- Baris 5: `    <title>Belajar Javascript : Mengenal Event Pada Javascript</title>` → Menentukan judul halaman web.
- Baris 6: `</head>` → Menutup bagian head.
- Baris 7: `` → Baris kosong untuk pemisah.
- Baris 8: `<body>` → Membuka bagian body tempat konten ditampilkan.
- Baris 9: `    <h1>Mengenal Event Pada JS</h1>` → Menampilkan heading level 1.
- Baris 10: `    <h2>Event one click</h2>` → Menampilkan heading level 2.
- Baris 11: `    <button onclick="tampilkan_nama()">Klik disini </button>` → Membuat tombol dengan event onclick.
- Baris 12: `` → Baris kosong untuk pemisah.
- Baris 13: `    <div id="hasil"></div>` → Membuat div dengan id 'hasil'.
- Baris 14: `` → Baris kosong untuk pemisah.
- Baris 15: `    <script>` → Membuka tag script untuk JavaScript.
- Baris 16: `        function tampilkan_nama() {` → Mendefinisikan fungsi untuk menampilkan nama.
- Baris 17: `            document.getElementById("hasil").innerHTML =` → Mengambil elemen dengan id 'hasil'.
- Baris 18: `                "<h3>Asyraf Pramudya Azhar AB</h3>";` → Mengisi konten HTML dengan nama.
- Baris 19: `        }` → Menutup definisi fungsi.
- Baris 20: `    </script>` → Menutup tag script.
- Baris 21: `</body>` → Menutup bagian body.
- Baris 22: `` → Baris kosong untuk pemisah.
- Baris 23: `</html>` → Menutup tag HTML.
- ![event.png](Screenshot/event.png)

## percobaaneksternal.html

- Baris 1: `<!DOCTYPE html>` → Mendefinisikan dokumen sebagai HTML5.
- Baris 2: `<html lang="en">` → Membuka tag HTML dengan atribut bahasa Inggris.
- Baris 3: `<head>` → Membuka bagian head dokumen HTML.
- Baris 4: `    <meta charset="UTF-8">` → Menentukan encoding karakter sebagai UTF-8.
- Baris 5: `    <meta name="viewport" content="width=device-width, initial-scale=1.0">` → Mengatur viewport untuk responsif.
- Baris 6: `    <title>Document</title>` → Menentukan judul halaman web.
- Baris 7: `</head>` → Menutup bagian head.
- Baris 8: `<body>` → Membuka bagian body tempat konten ditampilkan.
- Baris 9: `      ` → Baris kosong untuk pemisah.
- Baris 10: `<SCRIPT LANGUAGE=Javascript SRC=file.js> </SCRIPT>` → Memanggil file JavaScript eksternal.
- Baris 11: `</body>` → Menutup bagian body.
- Baris 12: `</html>` → Menutup tag HTML.
- ![eksternal.png](Screenshot/eksternal.png)

## percobaansederhana.html

- Baris 1: `<html>` → Membuka tag HTML.
- Baris 2: `<head>` → Membuka bagian head dokumen HTML.
- Baris 3: `    <title> contoh sederhana JavaScript</title>` → Menentukan judul halaman web.
- Baris 4: `</head>` → Menutup bagian head.
- Baris 5: `    </body>` → Menutup bagian body.
- Baris 6: `        <script language="JavaScript">` → Membuka tag script untuk JavaScript.
- Baris 7: `            document.write("Selamat datang angkatan 2025", "<br>");` → Menampilkan teks dengan line break.
- Baris 8: `            document.write("Belajar Javascript Mata Kuliah Pemrograman Web Teknik Komputer");` → Menampilkan teks kedua.
- Baris 9: `        </script>` → Menutup tag script.
- Baris 10: `    </body>` → Menutup bagian body.
- Baris 11: `</html>` → Menutup tag HTML.
- ![sederhana.png](Screenshot/sederhana.png)

## tugas1.html

- Baris 1: `<!DOCTYPE html>` → Mendefinisikan dokumen sebagai HTML5.
- Baris 2: `<html lang="en">` → Membuka tag HTML dengan atribut bahasa Inggris.
- Baris 3: `` → Baris kosong untuk pemisah.
- Baris 4: `<head>` → Membuka bagian head dokumen HTML.
- Baris 5: `    <meta charset="UTF-8">` → Menentukan encoding karakter sebagai UTF-8.
- Baris 6: `    <meta name="viewport" content="width=device-width, initial-scale=1.0">` → Mengatur viewport untuk responsif.
- Baris 7: `    <title>Document</title>` → Menentukan judul halaman web.
- Baris 8: `</head>` → Menutup bagian head.
- Baris 9: `` → Baris kosong untuk pemisah.
- Baris 10: `<body>` → Membuka bagian body tempat konten ditampilkan.
- Baris 11: `    <script>` → Membuka tag script untuk JavaScript.
- Baris 12: `        document.write("Melakukan konversi tipe data", "<br>");` → Menampilkan teks dengan line break.
- Baris 13: `        document.write("<br>");` → Membuat line break.
- Baris 14: `        var a = parseInt("14");` → Mengkonversi string "14" menjadi integer.
- Baris 15: `        document.write("Mengubah tipe data string ke integer menggunakan function parseInt", "<br>");` → Menampilkan penjelasan.
- Baris 16: `        document.write("Nilai A adalah: ", a, "<br>");` → Menampilkan nilai variabel a.
- Baris 17: `        document.write("<br>");` → Membuat line break.
- Baris 18: `` → Baris kosong untuk pemisah.
- Baris 19: `        var a = parseInt("A14");` → Mengkonversi string "A14" menjadi integer.
- Baris 20: `        document.write("Mengubah tipe data string ke integer menggunakan function parseInt", "<br>");` → Menampilkan penjelasan.
- Baris 21: `        document.write("Nilai A adalah: ", a , "<br>");` → Menampilkan nilai variabel a.
- Baris 22: `        document.write("<br>");` → Membuat line break.
- Baris 23: `` → Baris kosong untuk pemisah.
- Baris 24: `        var b = parseFloat("14.08");` → Mengkonversi string "14.08" menjadi float.
- Baris 25: `        document.write("Mengubah tipe data string ke float menggunakan function parseFloat", "<br>");` → Menampilkan penjelasan.
- Baris 26: `        document.write("Nilai B adalah: ", b , "<br>");` → Menampilkan nilai variabel b.
- Baris 27: `        document.write("<br>");` → Membuat line break.
- Baris 28: `        ` → Baris kosong untuk pemisah.
- Baris 29: `        var b = parseFloat("A14.08");` → Mengkonversi string "A14.08" menjadi float.
- Baris 30: `        document.write("Mengubah tipe data string ke float menggunakan function parseFloat", "<br>");` → Menampilkan penjelasan.
- Baris 31: `        document.write("NilaiS B adalah: ", b , "<br>");` → Menampilkan nilai variabel b.
- Baris 32: `    </script>` → Menutup tag script.
- Baris 33: `</body>` → Menutup bagian body.
- Baris 34: `` → Baris kosong untuk pemisah.
- Baris 35: `</html>` → Menutup tag HTML.
- ![tugas1.png](Screenshot/tugas1.png)

## tugas2.html

- Baris 1: `<!DOCTYPE html>` → Mendefinisikan dokumen sebagai HTML5.
- Baris 2: `<html lang="en">` → Membuka tag HTML dengan atribut bahasa Inggris.
- Baris 3: `` → Baris kosong untuk pemisah.
- Baris 4: `<head>` → Membuka bagian head dokumen HTML.
- Baris 5: `    <meta charset="UTF-8">` → Menentukan encoding karakter sebagai UTF-8.
- Baris 6: `    <meta name="viewport" content="width=device-width, initial-scale=1.0">` → Mengatur viewport untuk responsif.
- Baris 7: `    <title>Document</title>` → Menentukan judul halaman web.
- Baris 8: `</head>` → Menutup bagian head.
- Baris 9: `` → Baris kosong untuk pemisah.
- Baris 10: `<body>` → Membuka bagian body tempat konten ditampilkan.
- Baris 11: `    <script>` → Membuka tag script untuk JavaScript.
- Baris 12: `        document.write("Menggunakan tipe data dalam array", "<br>");` → Menampilkan teks dengan line break.
- Baris 13: `        document.write("<br>");` → Membuat line break.
- Baris 14: `        var array = [2, "Asyraf", false];` → Mendeklarasikan array dengan berbagai tipe data.
- Baris 15: `        document.write("Array indeks ke-0 adalah: ", array[0]);` → Menampilkan elemen array indeks 0.
- Baris 16: `        document.write("<br>");` → Membuat line break.
- Baris 17: `        document.write("Array indeks ke-1 adalah: ", array[1]);` → Menampilkan elemen array indeks 1.
- Baris 18: `        document.write("<br>");` → Membuat line break.
- Baris 19: `        document.write("Array indeks ke-2 adalah: ", array[2]);` → Menampilkan elemen array indeks 2.
- Baris 20: `        document.write("<br>");` → Membuat line break.
- Baris 21: `` → Baris kosong untuk pemisah.
- Baris 22: `    </script>` → Menutup tag script.
- Baris 23: `</body>` → Menutup bagian body.
- Baris 24: `` → Baris kosong untuk pemisah.
- Baris 25: `</html>` → Menutup tag HTML.
- ![tugas2.png](Screenshot/tugas2.png)

## warning.html

- Baris 1: `<HTML>` → Membuka tag HTML.
- Baris 2: `` → Baris kosong untuk pemisah.
- Baris 3: `<HEAD>` → Membuka bagian head dokumen HTML.
- Baris 4: `    <TITLE>Alert Box</TITLE>` → Menentukan judul halaman web.
- Baris 5: `</HEAD>` → Menutup bagian head.
- Baris 6: `` → Baris kosong untuk pemisah.
- Baris 7: `<BODY>` → Membuka bagian body tempat konten ditampilkan.
- Baris 8: `    <SCRIPT LANGUAGE=JavaScript>` → Membuka tag script untuk JavaScript.
- Baris 9: `` → Baris kosong untuk pemisah.
- Baris 10: `` → Baris kosong untuk pemisah.
- Baris 11: `        window.alert("Halo Teman Teman");` → Menampilkan alert box dengan pesan.
- Baris 12: `` → Baris kosong untuk pemisah.
- Baris 13: `    </SCRIPT>` → Menutup tag script.
- Baris 14: `</BODY>` → Menutup bagian body.
- Baris 15: `` → Baris kosong untuk pemisah.
- Baris 16: `</HTML>` → Menutup tag HTML.
- ![warning.png](Screenshot/warning1.png)

## warning2.html

- Baris 1: `<html>` → Membuka tag HTML.
- Baris 2: `` → Baris kosong untuk pemisah.
- Baris 3: `<head>` → Membuka bagian head dokumen HTML.
- Baris 4: `    <title>Konfirmasi</title>` → Menentukan judul halaman web.
- Baris 5: `</head>` → Menutup bagian head.
- Baris 6: `` → Baris kosong untuk pemisah.
- Baris 7: `<body>` → Membuka bagian body tempat konten ditampilkan.
- Baris 8: `    <script LANGUAGE="JavaScript">` → Membuka tag script untuk JavaScript.
- Baris 9: `        var jawaban = window.confirm(` → Mendeklarasikan variabel untuk hasil konfirmasi.
- Baris 10: `            "Apakah anda sudah yakin ?");` → Menampilkan konfirmasi box.
- Baris 11: `        document.write("Jawaban Anda: " + jawaban);` → Menampilkan hasil konfirmasi.
- Baris 12: `    </script>` → Menutup tag script.
- Baris 13: `</body>` → Menutup bagian body.
- Baris 14: `` → Baris kosong untuk pemisah.
- Baris 15: `</html>` → Menutup tag HTML.
- ![warning2.png](Screenshot/warning12.png)
- ![warning2.png](Screenshot/warning13.png)


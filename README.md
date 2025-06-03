<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Materi PHP Dasar & Koneksi Database</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            line-height: 1.6;
        }
        h1, h2 {
            color: #2c3e50;
        }
        code {
            background-color: #f4f4f4;
            padding: 2px 5px;
            border-radius: 4px;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }
        hr {
            margin: 30px 0;
        }
    </style>
</head>
<body>

    <h1>📘 Materi PHP Dasar</h1>
    <p>Repositori ini berisi kumpulan materi dasar pemrograman PHP yang mencakup tipe data, struktur kendali, pengolahan form, array, session & cookie, function, pemrograman berorientasi objek, dan koneksi ke database.</p>

    <hr>

    <h2>🔹 Tipe Data dalam PHP</h2>
    <ul>
        <li><strong>String</strong>: <code>$nama = "Ari";</code></li>
        <li><strong>Integer</strong>: <code>$umur = 21;</code></li>
        <li><strong>Float</strong>: <code>$tinggi = 165.5;</code></li>
        <li><strong>Boolean</strong>: <code>$aktif = true;</code></li>
        <li><strong>Null</strong>: <code>$nilai = null;</code></li>
    </ul>

    <hr>

    <h2>🔹 Struktur Kendali</h2>
    <ul>
        <li><strong>if</strong>: <pre><code>if ($nilai >= 75) echo "Lulus";</code></pre></li>
        <li><strong>else</strong>: <pre><code>if ($nilai >= 75) echo "Lulus"; else echo "Gagal";</code></pre></li>
        <li><strong>elseif</strong>: <pre><code>if ($nilai >= 90) echo "A"; elseif ($nilai >= 75) echo "B";</code></pre></li>
        <li><strong>Operator ternary</strong>: <code>$hasil = ($nilai >= 75) ? "Lulus" : "Gagal";</code></li>
        <li><strong>switch case</strong>: 
<pre><code>switch ($grade) {
  case 'A': echo "Sangat Baik"; break;
  case 'B': echo "Baik"; break;
  default: echo "Perlu belajar lagi";
}</code></pre></li>
        <li><strong>for</strong>: <code>for ($i=0; $i&lt;5; $i++) echo $i;</code></li>
        <li><strong>while</strong>: <code>while ($i &lt; 5) echo $i++;</code></li>
        <li><strong>do while</strong>: 
<pre><code>do {
  echo $i++;
} while ($i &lt; 5);</code></pre></li>
        <li><strong>foreach</strong>: 
<pre><code>$arr = [1,2,3];
foreach($arr as $val) echo $val;</code></pre></li>
    </ul>

    <hr>

    <h2>🔹 Pengolahan Form</h2>
    <ul>
        <li><strong>Form GET</strong>:
<pre><code>&lt;form method="GET"&gt;
  &lt;input name="nama"&gt;
  &lt;input type="submit"&gt;
&lt;/form&gt;

&lt;?php echo $_GET["nama"]; ?&gt;
</code></pre></li>
        <li><strong>Form POST</strong>:
<pre><code>&lt;form method="POST"&gt;
  &lt;input name="email"&gt;
  &lt;input type="submit"&gt;
&lt;/form&gt;

&lt;?php echo $_POST["email"]; ?&gt;
</code></pre></li>
        <li><strong>Validasi sederhana</strong>: <code>if (empty($_POST["email"])) echo "Email wajib diisi";</code></li>
    </ul>

    <hr>

    <h2>🔹 Array pada PHP</h2>
    <ul>
        <li><strong>Numerik</strong>: <code>$buah = ["apel", "jeruk"];</code></li>
        <li><strong>Asosiatif</strong>: <code>$user = ["nama" => "Ari", "umur" => 21];</code></li>
        <li><strong>Multidimensi</strong>:
<pre><code>$data = [
  ["nama" => "Ari", "nilai" => 90],
  ["nama" => "Budi", "nilai" => 85]
];</code></pre></li>
        <li><strong>Manipulasi</strong>: <code>array_push(), unset(), count(), etc.</code></li>
    </ul>

    <hr>

    <h2>🔹 Cookie dan Session</h2>
    <ul>
        <li><strong>Session</strong>: 
<pre><code>session_start();
$_SESSION['user'] = 'Ari';</code></pre></li>
        <li><strong>Cookie</strong>: 
<pre><code>setcookie("nama", "Ari", time() + 3600);</code></pre></li>
    </ul>

    <hr>

    <h2>🔹 Function dalam PHP</h2>
    <ul>
        <li><strong>Custom Function</strong>: 
<pre><code>function halo($nama) {
  return "Halo, $nama";
}</code></pre></li>
        <li><strong>Rekursif</strong>: 
<pre><code>function hitung($x) {
  if ($x == 0) return;
  echo $x;
  hitung($x - 1);
}</code></pre></li>
        <li><strong>Anonim</strong>: <code>$ucap = function($nama) { return "Hi $nama"; };</code></li>
        <li><strong>Callback</strong>: 
<pre><code>function tampil($nama, $cb) {
  echo $cb($nama);
}
tampil("Ari", function($x){ return strtoupper($x); });</code></pre></li>
    </ul>

    <hr>

    <h2>🔹 Object Oriented Programming (OOP) di PHP</h2>
    <ul>
        <li><strong>Class dan Object</strong>: 
<pre><code>class Mobil {
  public $merk;
  function jalan() {
    echo "Mobil jalan";
  }
}
$avanza = new Mobil();</code></pre></li>
        <li><strong>Constructor</strong>: 
<pre><code>function __construct($merk) {
  $this->merk = $merk;
}</code></pre></li>
        <li><strong>Inheritance</strong>: <code>class Anak extends OrangTua</code></li>
        <li><strong>Visibility</strong>: <code>public, protected, private</code></li>
        <li><strong>Static</strong>: <code>self::namaMethod();</code></li>
        <li><strong>Constant</strong>: <code>const PI = 3.14;</code></li>
        <li><strong>Interface & Abstract</strong>: Konsep OOP lanjutan</li>
    </ul>

    <hr>

    <h2>🔹 Koneksi ke Database</h2>
    <p>Langkah-langkah:</p>
    <ol>
        <li>Buat database di <code>phpMyAdmin</code> (contoh: <strong>db_sekolah</strong>).</li>
        <li>Buat tabel <strong>nilai_siswa</strong> dengan kolom: <code>nama, kimia, fisika, biologi, matematika</code>.</li>
        <li>Gunakan kode berikut untuk koneksi database:</li>
    </ol>

    <h3>🔌 db.php</h3>
    <pre><code>&lt;?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_sekolah";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?&gt;
</code></pre>

    <h3>📄 Contoh Menampilkan Data Nilai Siswa</h3>
    <pre><code>&lt;?php
$namaFaisal = "Faisal";
$nilaiKimiaFaisal = 85;
$nilaiFisikaFaisal = 78.5;
$nilaiBiologiFaisal = 92;
$nilaiMatematikaFaisal = 88;

$namaHevi = "Hevi";
$nilaiKimiaHevi = 90.5;
$nilaiFisikaHevi = 85;
$nilaiBiologiHevi = 88;
$nilaiMatematikaHevi = 95;
?&gt;
</code></pre>

    <hr>
    <p><strong>📌 Catatan:</strong> Materi disusun untuk pemula yang ingin mempelajari dasar-dasar PHP dengan pendekatan praktis dan mudah dipahami.</p>

</body>
</html>

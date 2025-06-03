<h1>📚 Materi Lengkap Dasar PHP</h1>

<h2>1. Pengantar PHP & Setup</h2>
<p>PHP adalah bahasa scripting server-side yang banyak digunakan untuk membangun aplikasi web dinamis. PHP berjalan di server dan menghasilkan HTML yang dikirim ke browser.</p>
<ul>
  <li>Untuk menjalankan PHP, perlu web server (Apache/Nginx) dan PHP interpreter (bisa pakai XAMPP, WAMP, MAMP, atau LAMP).</li>
  <li>File PHP berekstensi <code>.php</code>.</li>
  <li>Script PHP selalu diawali dengan <code>&lt;?php</code> dan diakhiri dengan <code>?&gt;</code>.</li>
</ul>

<h2>2. Sintaks Dasar PHP</h2>
<pre><code class="language-php">
&lt;?php
// Output ke layar
echo "Halo Dunia!";

// Komentar
// Ini komentar satu baris
/*
Komentar
multi baris
*/
?&gt;
</code></pre>

<h2>3. Variabel & Tipe Data</h2>
<ul>
  <li>Variabel diawali dengan <code>$</code>, contoh: <code>$nama</code></li>
  <li>Tipe data: String, Integer, Float, Boolean, Array, Object, NULL</li>
</ul>
<pre><code class="language-php">
// Contoh variabel
$nama = "Ari";       // String
$umur = 25;          // Integer
$tinggi = 1.75;      // Float
$isStudent = true;   // Boolean
$hobi = ["Membaca", "Coding"]; // Array
$nilai = null;       // NULL
</code></pre>

<h2>4. Operator</h2>
<ul>
  <li>Operator Aritmatika: <code>+, -, *, /, %</code></li>
  <li>Operator Penugasan: <code>=, +=, -=, *=, /=</code></li>
  <li>Operator Perbandingan: <code>==, ===, !=, !==, &gt;, &lt;, &gt;=, &lt;=</code></li>
  <li>Operator Logika: <code>&& (AND), || (OR), ! (NOT)</code></li>
  <li>Operator String: <code>.</code> (concatenate)</li>
</ul>

<h2>5. Struktur Kontrol</h2>
<h3>Percabangan</h3>
<pre><code class="language-php">
$nilai = 80;
if ($nilai &gt;= 75) {
  echo "Lulus";
} elseif ($nilai &gt;= 60) {
  echo "Remedial";
} else {
  echo "Tidak Lulus";
}
</code></pre>

<h3>Switch</h3>
<pre><code class="language-php">
$warna = "merah";
switch($warna) {
  case "merah":
    echo "Warnanya merah";
    break;
  case "biru":
    echo "Warnanya biru";
    break;
  default:
    echo "Warna tidak diketahui";
}
</code></pre>

<h3>Perulangan</h3>
<pre><code class="language-php">
// For
for ($i = 1; $i &lt;= 5; $i++) {
  echo $i . "&lt;br&gt;";
}

// While
$i = 1;
while ($i &lt;= 5) {
  echo $i . "&lt;br&gt;";
  $i++;
}

// Do While
$i = 1;
do {
  echo $i . "&lt;br&gt;";
  $i++;
} while ($i &lt;= 5);
</code></pre>

<h2>6. Fungsi</h2>
<pre><code class="language-php">
function hitungLuasPersegi($sisi) {
  return $sisi * $sisi;
}

echo hitungLuasPersegi(5); // 25

// Fungsi dengan parameter default
function sapa($nama = "Guest") {
  return "Halo, " . $nama;
}

echo sapa();          // Halo, Guest
echo sapa("Andi");    // Halo, Andi
</code></pre>

<h2>7. Array</h2>
<h3>Array Indexed</h3>
<pre><code class="language-php">
$buah = ["Apel", "Jeruk", "Mangga"];
echo $buah[1]; // Jeruk
</code></pre>

<h3>Array Associative</h3>
<pre><code class="language-php">
$mahasiswa = [
  "nama" =&gt; "Ari",
  "umur" =&gt; 23,
  "jurusan" =&gt; "TI"
];
echo $mahasiswa["nama"]; // Ari
</code></pre>

<h3>Array Multidimensi</h3>
<pre><code class="language-php">
$kelas = [
  ["nama" =&gt; "Ari", "nilai" =&gt; 80],
  ["nama" =&gt; "Budi", "nilai" =&gt; 90],
];
echo $kelas[1]["nama"]; // Budi
</code></pre>

<h2>8. Superglobals & Form Handling</h2>
<ul>
  <li><code>$_GET</code> — data dari URL</li>
  <li><code>$_POST</code> — data dari form POST</li>
  <li><code>$_REQUEST</code> — gabungan GET, POST, dan COOKIE</li>
  <li><code>$_SESSION</code> — data sesi</li>
  <li><code>$_COOKIE</code> — data cookie</li>
  <li><code>$_SERVER</code> — info server & environment</li>
</ul>

<h3>Contoh Form POST</h3>
<pre><code class="language-html">
&lt;form method="post" action="proses.php"&gt;
  Nama: &lt;input type="text" name="nama"&gt;
  &lt;button type="submit"&gt;Kirim&lt;/button&gt;
&lt;/form&gt;
</code></pre>

<pre><code class="language-php">
// proses.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = htmlspecialchars($_POST["nama"]);
  echo "Halo, " . $nama;
}
</code></pre>

<h2>9. File Handling</h2>
<pre><code class="language-php">
// Membaca file
$isi = file_get_contents("data.txt");
echo $isi;

// Menulis file
file_put_contents("data.txt", "Halo Dunia!");

// Membuka file untuk baca & tulis
$handle = fopen("data.txt", "a");
fwrite($handle, "\nBaris baru");
fclose($handle);
</code></pre>

<h2>10. Object-Oriented Programming (OOP) PHP</h2>

<h3>Class dan Object</h3>
<pre><code class="language-php">
class Mobil {
  public $warna;
  private $merk;

  // Constructor
  public function __construct($merk, $warna) {
    $this->merk = $merk;
    $this->warna = $warna;
  }

  // Method public
  public function getMerk() {
    return $this->merk;
  }

  // Method untuk mengubah warna
  public function setWarna($warna) {
    $this->warna = $warna;
  }
}

$mobil1 = new Mobil("Toyota", "Merah");
echo $mobil1->getMerk();  // Toyota
echo $mobil1->warna;       // Merah
</code></pre>

<h3>Inheritance (Pewarisan)</h3>
<pre><code class="language-php">
class Kendaraan {
  public $jenis;

  public function setJenis($jenis) {
    $this->jenis = $jenis;
  }
}

class Mobil extends Kendaraan {
  public function getJenis() {
    return $this->jenis;
  }
}

$mobil = new Mobil();
$mobil->setJenis("Sedan");
echo $mobil->getJenis(); // Sedan
</code></pre>

<h3>Interface</h3>
<pre><code class="language-php">
interface KendaraanInterface {
  public function jalankan();
}

class Motor implements KendaraanInterface {
  public function jalankan() {
    echo "Motor berjalan";
  }
}

$motor = new Motor();
$motor->jalankan(); // Motor berjalan
</code></pre>

<h3>Trait</h3>
<pre><code class="language-php">
trait LogTrait {
  public function log($msg) {
    echo "[LOG]: " . $msg;
  }
}

class User {
  use LogTrait;
}

$user = new User();
$user->log("User berhasil login");
</code></pre>

<h2>11. Koneksi Database MySQL</h2>

<h3>Mysqli</h3>
<pre><code class="language-php">
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_website";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

echo "Berhasil koneksi!";
</code></pre>

<h3>PDO (PHP Data Objects) — Cara Modern</h3>
<pre><code class="language-php">
try {
  $pdo = new PDO("mysql:host=localhost;dbname=db_website", "root", "");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Berhasil koneksi dengan PDO!";
} catch (PDOException $e) {
  echo "Koneksi gagal: " . $e->getMessage();
}
</code></pre>

<h2>12. Query Database Dasar (CRUD)</h2>

<h3>Create (Insert)</h3>
<pre><code class="language-php">
// mysqli
$sql = "INSERT INTO users (nama, umur) VALUES ('Ari', 25)";
if ($conn->query($sql) === TRUE) {
  echo "Data berhasil ditambahkan";
} else {
  echo "Error: " . $conn->error;
}

// PDO
$stmt = $pdo->prepare("INSERT INTO users (nama, umur) VALUES (?, ?)");
$stmt->execute(['Ari', 25]);
echo "Data berhasil ditambahkan dengan PDO";
</code></pre>

<h3>Read (Select)</h3>
<pre><code class="language-php">
// mysqli
$result = $conn->query("SELECT * FROM users");
while ($row = $result->fetch_assoc()) {
  echo $row["nama"] . " - " . $row["umur"] . "&lt;br&gt;";
}

// PDO
$stmt = $pdo->query("SELECT * FROM users");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo $row["nama"] . " - " . $row["umur"] . "&lt;br&gt;";
}
</code></pre>

<h3>Update</h3>
<pre><code class="language-php">
// mysqli
$conn->query("UPDATE users SET umur=26 WHERE nama='Ari'");

// PDO
$stmt = $pdo->prepare("UPDATE users SET umur=? WHERE nama=?");
$stmt->execute([26, 'Ari']);
</code></pre>

<h3>Delete</h3>
<pre><code class="language-php">
// mysqli
$conn->query("DELETE FROM users WHERE nama='Ari'");

// PDO
$stmt = $pdo->prepare("DELETE FROM users WHERE nama=?");
$stmt->execute(['Ari']);
</code></pre>

<h2>13. Penanganan Error</h2>
<pre><code class="language-php">
// Menggunakan try-catch
try {
  $conn = new mysqli($host, $user, $pass, $dbname);
  if ($conn->connect_error) {
    throw new Exception("Koneksi gagal");
  }
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}

// Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
</code></pre>

<h2>14. Best Practice Singkat</h2>
<ul>
  <li>Gunakan <code>htmlspecialchars()</code> saat output data user agar terhindar XSS</li>
  <li>Gunakan prepared statement untuk query database agar aman dari SQL Injection</li>
  <li>Organisir kode dengan OOP dan fungsi agar mudah dipelihara</li>
  <li>Jangan simpan password secara langsung, gunakan hashing (password_hash())</li>
  <li>Gunakan session untuk menyimpan data user yang login</li>
</ul>

---
## Contoh


<h2> Menampilkan Data dari Database (file: tampil.php)</h2>

```html


<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=db_website", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT * FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Users</title>
</head>
<body>
  <h1>Daftar Users</h1>
  <table border="1" cellpadding="5" cellspacing="0">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Umur</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($users as $user): ?>
      <tr>
        <td><?= htmlspecialchars($user['id']) ?></td>
        <td><?= htmlspecialchars($user['nama']) ?></td>
        <td><?= htmlspecialchars($user['umur']) ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <br>
  <a href="form.php">Tambah Data Baru</a>
</body>
</html>

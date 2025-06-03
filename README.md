<h1>📘 Dasar-Dasar PHP</h1>

<h2>1. Apa Itu PHP?</h2>
<p>
  PHP (PHP: Hypertext Preprocessor) adalah bahasa pemrograman sisi server yang dirancang untuk pengembangan web. PHP dapat digunakan untuk membuat halaman web dinamis, menangani form, koneksi database, dan masih banyak lagi.
</p>

<h2>2. Struktur Dasar PHP</h2>
<pre><code class="language-php">
&lt;?php
  echo "Hello, World!";
?&gt;
</code></pre>

<h2>3. Tipe Data di PHP</h2>
<ul>
  <li>String → "Hello"</li>
  <li>Integer → 123</li>
  <li>Float → 3.14</li>
  <li>Boolean → true / false</li>
  <li>Array → ["a", "b", "c"]</li>
  <li>Object → instance dari class</li>
  <li>NULL → variabel tanpa nilai</li>
</ul>

<h2>4. Operator</h2>
<ul>
  <li>Matematika: <code>+, -, *, /, %</code></li>
  <li>Perbandingan: <code>==, !=, &gt;, &lt;, &gt;=, &lt;=</code></li>
  <li>Logika: <code>&& (AND), || (OR), ! (NOT)</code></li>
</ul>

<h2>5. Percabangan</h2>
<pre><code class="language-php">
$nilai = 80;

if ($nilai &gt;= 75) {
  echo "Lulus";
} else {
  echo "Tidak Lulus";
}
</code></pre>

<h2>6. Perulangan</h2>
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
</code></pre>

<h2>7. Fungsi</h2>
<pre><code class="language-php">
function salam($nama) {
  return "Halo, " . $nama;
}

echo salam("Ari");
</code></pre>

<h2>8. Array</h2>
<pre><code class="language-php">
$buah = ["Apel", "Jeruk", "Mangga"];
echo $buah[1]; // Jeruk

// Associative
$mahasiswa = ["nama" =&gt; "Ari", "umur" =&gt; 21];
echo $mahasiswa["nama"];
</code></pre>

<h2>9. OOP (Object-Oriented Programming)</h2>
<pre><code class="language-php">
class Mahasiswa {
  public $nama;

  function __construct($nama) {
    $this-&gt;nama = $nama;
  }

  function getNama() {
    return $this-&gt;nama;
  }
}

$mhs = new Mahasiswa("Ari");
echo $mhs-&gt;getNama();
</code></pre>

<h2>10. Superglobals</h2>
<ul>
  <li><code>$_GET</code>: Data dari URL</li>
  <li><code>$_POST</code>: Data dari form</li>
  <li><code>$_SESSION</code>: Data sesi</li>
  <li><code>$_COOKIE</code>: Data cookie</li>
  <li><code>$_SERVER</code>: Info server</li>
</ul>

<h2>11. Form Handling (POST)</h2>
<pre><code class="language-php">
// HTML Form
&lt;form method="post"&gt;
  Nama: &lt;input type="text" name="nama"&gt;
  &lt;button type="submit"&gt;Kirim&lt;/button&gt;
&lt;/form&gt;

&lt;?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "Halo, " . $_POST["nama"];
}
?&gt;
</code></pre>

<h2>12. Koneksi ke Database</h2>
<pre><code class="language-php">
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "my_database";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn-&gt;connect_error) {
  die("Koneksi gagal: " . $conn-&gt;connect_error);
}

echo "Berhasil terkoneksi";
</code></pre>

<h2>13. Query MySQL Dasar</h2>
<pre><code class="language-php">
// Insert
$conn-&gt;query("INSERT INTO users (nama) VALUES ('Ari')");

// Select
$result = $conn-&gt;query("SELECT * FROM users");
while ($row = $result-&gt;fetch_assoc()) {
  echo $row["nama"] . "&lt;br&gt;";
}
</code></pre>

<h2>14. Penutup</h2>
<p>
  PHP sangat cocok digunakan untuk membangun aplikasi web dari yang sederhana hingga kompleks. Dengan memahami dasar-dasar di atas, kamu dapat mulai membuat website dinamis, menghubungkan ke database, dan membuat fitur interaktif dengan mudah.
</p>

<?php
// Memanggil koneksi database
require 'koneksi.php';

try {
    $stmt = $pdo->query("SELECT * FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Query gagal: " . $e->getMessage());
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

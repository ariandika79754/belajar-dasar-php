<?php
// File: koneksi.php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=db_website", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
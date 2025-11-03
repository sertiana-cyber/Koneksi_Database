<?php
// File: config/database.php

$host = "localhost";       // Nama host server
$dbname = "koneksi";       // Nama database
$username = "root";        // Username database (default Laragon)
$password = "";            // Password database (kosong default Laragon)

try {
    // Membuat koneksi menggunakan PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Set mode error ke Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Tampilkan pesan sukses
    echo "✅ Koneksi ke database berhasil!";
} catch (PDOException $e) {
    // Tampilkan pesan error
    echo "❌ Koneksi gagal: " . $e->getMessage();
}
?>

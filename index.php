<?php
// Memanggil file koneksi database PDO
require_once __DIR__ . '/config/database.php';

try {
    // Ambil semua data dari tabel users
    $query = $pdo->query("SELECT * FROM users");

    echo "<h2>Daftar Pengguna</h2>";
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
            <th>Dibuat Pada</th>
          </tr>";

    // Menampilkan hasil query
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['email']}</td>
                <td>{$row['password']}</td>
                <td>{$row['created_at']}</td>
              </tr>";
    }

    echo "</table>";

} catch (PDOException $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>

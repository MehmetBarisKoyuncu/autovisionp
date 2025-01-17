<?php
$host = 'localhost'; // Veritabanı sunucusu
$username = 'root';  // Veritabanı kullanıcı adı
$password = '1';      // Veritabanı şifresi
$dbname = 'autovision'; // Veritabanı adı

// Veritabanına bağlantı
$conn = new mysqli($host, $username, $password, $dbname);

// Bağlantı hatası kontrolü
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

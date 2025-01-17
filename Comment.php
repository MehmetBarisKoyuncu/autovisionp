<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('db.php');

    // Form verilerini al
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // SQL sorgusu hazırlayın
    $sql = "INSERT INTO comment_form (name, email, message) VALUES ('$name', '$email', '$message')";

    // Veritabanına ekleme işlemi
    if ($conn->query($sql) === TRUE) {
        echo "Yeni kayıt başarılı!";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }

    // Bağlantıyı kapat
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Formu</title>
</head>
<body>
    <h2>İletişim Formu</h2>
    <form method="POST" action="Comment.php">
        <label for="name">Adınız:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">E-posta:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Mesajınız:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>

        <input type="submit" value="Gönder">
    </form>
    <div class="l2">
        <a href="index.html" class="home">
          <strong>-Ana Sayfaya Dön</strong>
        </a>
      </div>
</body>
</html>

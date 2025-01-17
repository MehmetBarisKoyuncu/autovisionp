<?php
// Veritabanı bağlantısını içeri aktar
include('db.php');

// Veritabanındaki tüm verileri çekme
$sql = "SELECT * FROM comment_form";
$result = $conn->query($sql);

// Bağlantıyı kapat
$conn->close();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Formu Verileri</title>
</head>
<body>
    <h2>İletişim Formu Verileri</h2>

    <?php if ($result->num_rows > 0): ?>
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ad</th>
                    <th>E-posta</th>
                    <th>Mesaj</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["message"]; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Henüz kayıtlı veri bulunmamaktadır.</p>
    <?php endif; ?>
    <div class="l2">
        <a href="index.html" class="home">
        <strong>-Ana Sayfaya Dön</strong>
        </a>
      </div>
</body>
</html>

<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
$stmt = $pdo->prepare("SELECT name,address,email,username FROM member");
$stmt->execute();
while ($row = $stmt->fetch()) :
?>
ชื่อสมาชิก: <?=$row ["name"]?><br>
ที่อยู่: <?=$row ["address"]?><br>
อีเมลล์: <?=$row ["email"]?><br><hr>
<!-- <img src ='member_photo/<?=$row["username"]?>.jpg' width='100'><br><hr> -->
<?php endwhile; ?>
</body>
</html>
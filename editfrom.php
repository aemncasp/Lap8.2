<?php include "connect.php"; ?>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username =?");
    $stmt->bindParam(1,$_GET['username']);
    $stmt->execute();
    $row = $stmt->fetch();
?>
<html>
<head><meta charset="UTF-8"></head>
<body>

<form action="editmember.php" method="post">
username: <input type="text" name="username" value="<?=$row["username"]?>"><br>
name: <input type="text" name="name" value="<?=$row["name"]?>"><br>
address: <br><textarea name="address" rows="3" cols="40" value="<?=$row["address"]?>"></textarea><br>
password: <input type="number" name="password" value="<?=$row["password"]?>"><br>
mobile: <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br>
email: <input type="text" name="email" value="<?=$row["email"]?>"><br>
<input type="submit" value="แก้ไขข้อมูล">
</form>
</body>
</html>
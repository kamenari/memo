<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ろくまる農園</title>
</head>
<body>
	<?php 
      try{

        $staff_code = $_POST['code'];
      	$staff_name = $_POST['name'];
      	$staff_pass = $_POST['pass'];

      	$staff_name = htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
      	$staff_pass = htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');

      	$dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
      	$user = 'root';
      	$password = 'kame0258';
      	$dbh = new PDO($dsn,$user,$password);
      	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      	
        $sql = 'UPDATE mst_staff SET name=?,password=? WHERE code=?';
        $stmt = $dbh->prepare($sql);
        $date[] = $staff_name;
        $date[] = $staff_pass;
        $date[] = $staff_code;
        $stmt->execute($date);

        $dbh = null;

      }
      catch(Exception $e){
      	print 'ただいま障害により大変ご迷惑をお掛けしております。';
      	exit();
      }
	 ?>
    修正しました<br /><br />
		<a href="staff_list.php">戻る</a>

</body>
</html>
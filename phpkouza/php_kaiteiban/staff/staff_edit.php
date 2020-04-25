<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ろくまる農園</title>
</head>
<body>
	<?php 
      try{

      	$staff_code = $_GET['staffcode'];

      	$dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
      	$user = 'root';
      	$password = 'kame0258';
      	$dbh = new PDO($dsn,$user,$password);
      	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      	
        $sql = 'SELECT name FROM mst_staff WHERE code=?';
        $stmt = $dbh->prepare($sql);
        $date[] = $staff_code;
        $stmt->execute($date);

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $staff_name = $rec['name'];

        $dbh = null;

      }
      catch(Exception $e){
      	print 'ただいま障害により大変ご迷惑をお掛けしております。';
      	exit();
      }
	 ?>

		ｽﾀｯﾌ修正<br />
    <br />
    <?php print $staff_code; ?>
    <br />
    <br />
    <form action="staff_edit_check.php" method="post" accept-charset="utf-8">
      <input type="hidden" name="code" value="<?php print $staff_code; ?>">
      ｽﾀｯﾌ名<br />
      <input type="text" name="name" style="width:200px;" value="<?php print $staff_name; ?>"><br />
      ﾊﾟｽﾜｰﾄﾞを入力してください。<br />
      <input type="password" name="pass" style="width:100px;" ><br />
      ﾊﾟｽﾜｰﾄﾞをもう一度入力してください。<br />
      <input type="password" name="pass2" style="width:100px;" >
      <br />
      <input type="button" onclick="history.back()" value="戻る">
      <input type="submit" value="OK">
    </form>

</body>
</html>
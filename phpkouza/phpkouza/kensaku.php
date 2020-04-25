<!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8">
<title>Ｃ６０の「１日でできる！ＰＨＰプログラミング講座」</title>
</head>
<body>

<?php
$code=$_POST['code'];

$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = 'kame0258';
$dbh = new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

$sql = 'SELECT * FROM anketo WHERE code=?';
$stmt = $dbh->prepare($sql);
$data[]=$code;
$stmt->execute($data);

while (1) {
	$rec = $stmt->fetch(PDO::FETCH_ASSOC);
	if ($rec==false) {
		break;
	}
	print $rec['code'];
	print $rec['nickname'];
	print $rec['email'];
	print $rec['goiken'];
	print '<br />';
}

$dbh = null;

?>
<br />
<a href="menu.html">ﾒﾆｭｰに戻る</a>
</body>
</html>

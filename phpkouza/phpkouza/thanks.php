<!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8">
<title>Ｃ６０の「１日でできる！ＰＨＰプログラミング講座」</title>
</head>
<body>

<?php
try{

$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = 'kame0258';
$dbh = new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

$onamae=$_POST['onamae'];
$email=$_POST['email'];
$toi=$_POST['toi'];
$toi = htmlspecialchars($toi,ENT_QUOTES);

print $onamae.'様<br />';
print $email.'に確認メールを送りました。以下のお問合せありがとうございました。<br />';
print nl2br($toi);

$mail_mes=$onamae."様\nお問合せありがとうございました。以下を受け付けました。\n".$toi;
$mail_sub='お問合せを受け付けました。';
$mail_head='From:kameo0258@yahoo.co.jp';
$mail_mes=html_entity_decode($mail_mes,ENT_QUOTES,'UTF-8');
mb_language('Japanese');
mb_internal_encoding('UTF-8');
mb_send_mail($email,$mail_sub,$mail_mes,$mail_head);


$mail_sub='お問合せを受け付けました。';
$mail_head='From:'.$email;
$mail_mes=html_entity_decode($mail_mes,ENT_QUOTES,'UTF-8');
mb_language('Japanese');
mb_internal_encoding('UTF-8');
mb_send_mail('kameo0258@yahoo.co.jp',$mail_sub,$mail_mes,$mail_head);

$sql = 'INSERT INTO anketo (nickname,email,goiken) VALUES ("'.$onamae.'","'.$email.'","'.$toi.'")';
$stmt = $dbh->prepare($sql);
$stmt->execute();

$dbh = null;

}catch(Exception $e){
	print'ただいま障害により大変ご迷惑をおかけしております。';
}

?>

</body>
</html>

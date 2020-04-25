<!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8">
<title>Ｃ６０の「１日でできる！ＰＨＰプログラミング講座」</title>
</head>
<body>

<?php
$onamae=$_POST['onamae'];
$email=$_POST['email'];
$email_check=$_POST['email_check'];
$toi=$_POST['toi'];
$toi = htmlspecialchars($toi,ENT_QUOTES);
$err=0;

if($onamae=='')
{
	print 'お名前が入力されていません。<br /><br />';
	$err=1;
}else
{
	print 'お名前<br />';
	print $onamae;
	print '様<br /><br />';
}

if($email=='')
{
	print 'メールアドレスが入力されていません。<br /><br />';
	$err=1;
}else
{
	print 'メールアドレス<br />';
	print $email;
	print  '<br /><br />';
}

if($email!=$email_check)
{
	print 'メールアドレスが間違っている可能性があります。<br /><br />';
	$err=1;
}else
{
	print 'メールアドレス（確認用）<br />';
	print $email_check;
	print  '<br /><br />';
}

if($toi=='')
{
	print 'お問合せ内容が間違っている恐れがあります。<br /><br />';
	$err=1;
}else
{
	print 'お問合せ内容<br />';
	print nl2br($toi);
	print  '<br /><br />';

}

if($err==1){
	print'<form>';
	print'<input type="button" value="戻る" onclick="history.back()">';
	print'</form>';

}else{
	print'<form method="post" action="thanks.php">';
	print'<input type="button" value="戻る" onclick="history.back()">';
	print'<input type="submit" value="次へ">';

	print'<input type="hidden" name="onamae" value="'.$onamae.'">';
	print'<input type="hidden" name="email" value="'.$email.'">';
	print'<input type="hidden" name="toi" value="'.$toi.'">';
	print'</form>';
}

?>


</body>
</html>

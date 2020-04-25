<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ろくまる農園</title>
</head>
<body>
スタッフ追加
<br />
<form method="post" action="staff_add_check.php" accept-charset="utf-8">
	スタッフ名を入力してください<br />
	<input type="text" name="name" style="width:120px;"><br />
	ﾊﾟｽﾜｰﾄﾞを入力してください<br />
	<input type="password" name="pass" style="width:100px;"><br />
	ﾊﾟｽﾜｰﾄﾞをもう一度入力してください<br />
	<input type="password" name="pass2" style="width:100px;"><br />
	<br />
	<input type="button" onclick="history.back()" value="戻る"><br />
	<input type="submit" value="OK">
</form>
</body>
</html>
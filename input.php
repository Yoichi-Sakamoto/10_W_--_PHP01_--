<html>
<head>
	<meta charset="utf-8">
	<title>生活調査アンケート</title>
</head>

<body>

<p>生活調査アンケート</p>
<p>以下アンケートにお答えください</p>

	<form action="write.php" method="post">
		１．お名前： <input type="text" name="name"><br><br>
		２．メールアドレス： <input type="text" name="mail"><br><br>
		３．性別：<label><input type="radio" name="sex" value="男性">男性</label><label><input type="radio" name="sex" value="女性">女性</label><br><br>
		４．年齢：<label><input type="radio" name="age" value="20代">20代</label><label><input type="radio" name="age" value="30代">30代</label><label><input type="radio" name="age" value="40代">40代</label><label><input type="radio" name="age" value="50代">50代</label><label><input type="radio" name="age" value="60代">60代以上</label><br><br>
		５．今の生活に：<label><input type="radio" name="life" value="満足">満足</label><label><input type="radio" name="life" value="不満足">不満足</label><br><br>
		
		<br>
		<input type="submit" value="送信">
	</form>

</body>
</html>
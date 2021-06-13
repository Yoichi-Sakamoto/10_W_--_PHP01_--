<?php

$name = $_POST["name"];
$mail = $_POST["mail"];
$sex = $_POST["sex"];
$age = $_POST["age"];
$life = $_POST["life"];


//文字作成(日付)
$time = date("Y-m-d H:i:s");
$str = $time  .  ','  .  $name  .  ','   .   $mail  .  ','  .  $sex  .  ','  .  $age  .  ','  .  $life;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");//ファイルへの書き込み


?>


<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<h1>アンケートを送信しました</h1>
<h2>ご回答頂きましてありがとうございました！</h2>

<ul>
    <li><a href="read.php">アンケート結果を見る</a></li>
</ul>

</body>
</html>
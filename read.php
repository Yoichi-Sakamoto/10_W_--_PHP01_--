<p class="result">アンケート集計結果</p>


<link rel="stylesheet" href="style.css">
<table>
<?php
// $jikan = "時間";
// $namae = "名前";
// $address = "メールアドレス";

$fp = fopen("data/data.txt","r");        
while(!feof($fp)){
    $line = fgets($fp);
    if (trim($line) != null){
        list($time,$name,$mail,$sex,$age,$life) = explode(",",$line);
        print "<tr>\n";
        // print "<td>$jikan</td><td>$namae</td><td>"$address"</td>";
        print "<td>$time</td><td>$name</td><td>$mail</td><td>$sex</td><td>$age</td><td>$life</td>\n";
        print "</tr>\n";
    }
}
fclose($fp);
?>
</table>
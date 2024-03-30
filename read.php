<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
    <link rel="icon" href="./img/parette.png">
    <title>表で表示</title>
</head>
<body>
<div class="haikei">
<h3>アンケート結果</h3>
<div class ="table">
<?php
$file = fopen("data.csv","r");
echo "<table border='1'>
<tr>
<th>名前</th>
<th>email</th>
<th>好きな色</th>
</tr>";
while($kekka = fgetcsv($file)) {
    echo "<tr>";
    echo "<td>".$kekka[0]."</td>";
    echo "<td>".$kekka[1]."</td>";
    echo "<td>".$kekka[2]."</td>";
    echo "</tr>"; 
    }
    fclose($file);
    echo "</table>";

// カンマごとに配列に変換 -->
// $array = explode(",",$file);
// ループ処理 -->
// foreach ($arrays as $array) : -->
// ファイルの中身を表形式で出力 -->
// echo "<table border='1'>";
// echo "<tr><th>名前</th><th>Email</th><th>好きな色</th></tr>";
// echo "<tr><td>{$array[1]}</td><td>{$array[2]}</td><td>{$array[2]}</td></tr>";
// echo "</table>";
?>
</div>
<p><a href="index.php">入力画面に戻る</a></p>

</div>
</body>
</html>
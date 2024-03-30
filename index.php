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
    <title>アンケートフォーム</title>
</head>
<body>
    <div class="haikei">
    <h3>あなたの好きな色を教えてください</h3>
    <form action="write.php" method="post">
        好きな色：<select name="color" cols="30" rows="10">
        <option value=""></option>
        <option value="red">赤</option>
        <option value="blue">青</option>
        <option value="yellow">黄</option>
        <option value="green">緑</option>
        <option value="purple">紫</option>
        <option value="pink">桃</option>
        <option value="white">白</option>
        <option value="black">黒</option>
        </select><br><br>
        お名前：<input type="text" name="name"><br>
        E-mail : <input type="text" name="email"><br><br>
    <button type="submit">送信</button>
    </form>
    </div>
</body>
</html>
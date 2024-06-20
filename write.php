<!-- データ登録 -->
<?php
// POSTを受け取る
error_reporting(E_ALL);
$bornplace = trim($_POST["born_place"]);
$gender = trim($_POST["gender"]);
$age = trim($_POST["age"]);
$c = ","; // カンマ

$str = $bornplace . $c . $gender . $c . $age . "\n";

$file = fopen("data.csv", "a"); //事前にファイルのアクセス宣言を変更する
fwrite($file, $str);
fclose($file);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録完了</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./img/heart.png">
</head>

<body>
    <div class="wrapper">
        <div class="container">

            <header class="header">
                <h1 class="header_text">登録完了しました！</h1>
            </header>

            <main class="main">
                <div class="button_area">
                    <button onclick="location.href='index.php'">戻る</button>
                    <button onclick="location.href='read.php'">結果</button>
                </div>
            </main>
        </div>

        <footer class="footer">
            <h1 class="footer_text">アンケートアプリ</h1>
        </footer>
    </div>

    <!-- script -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

</body>

</html>
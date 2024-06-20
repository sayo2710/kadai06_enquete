<!-- データ入力 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信画面</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./img/heart.png">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <header class="header">
                <h1 class="header_text">アケート</h1>
            </header>

            <main class="main">
                <form class="form" action="write.php" method="post">
                    <div class="form_item">出身地：<input type="text" name="born_place"></div>
                    <div class="form_item">性別：<input type="text" name="gender"></div>
                    <div class="form_item">年齢：<input type="text" name="age"></div>
                    <div class="form_item"><button type="submit">送信</button></div>
                </form>

                <!-- read.phpへのハイパーリンクを追加 -->
                <div class="button_area">
                    <button onclick="location.href='read.php'">結果</button>
                </div>
            </main>
        </div>
    </div>

    <footer class="footer">
        <h1 class="footer_text">アンケートアプリ</h1>
    </footer>

    </div>

    <!-- script -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</body>

</html>
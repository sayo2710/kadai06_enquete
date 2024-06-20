<!-- データ表示 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>結果</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./img/heart.png">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <header class="header">
                <h1 class="header_text">結果</h1>
            </header>

            <main class="main">
                <?php
                $file = "data.csv";

                // ファイルが存在するか確認
                if (file_exists($file)) {
                    // ファイルを読み込み、行ごとに処理
                    $data = file($file);

                    // テーブルの開始タグとヘッダー行を出力
                    echo "<table border='1'>\n";

                    echo
                    "<tr>
                        <th>出身地</th>
                        <th>性別</th>
                        <th>年齢</th>
                    </tr>\n";

                    foreach ($data as $line) {
                        // CSV形式の行をカンマで分割
                        $fields = explode(",", trim($line));

                        // テーブルの行を出力
                        echo "<tr>\n";
                        foreach ($fields as $field) {
                            echo "<td>$field</td>\n";
                        }
                        echo "</tr>\n";
                    }

                    // テーブルの終了タグを出力
                    echo "</table>\n";

                    // index.phpへのリンクを出力
                    echo
                    '<div class="button_area">
                      <button onclick="location.href=\'index.php\'">戻る</button>
                    </div>';
                } else {
                    echo "データファイルが存在しません。";
                }
                ?>
            </main>
        </div>

        <footer class="footer">
            <h1 class="footer_text">アンケート</h1>
        </footer>
    </div>

    <!-- script -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</body>

</html>
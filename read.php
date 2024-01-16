<?php



// // ファイル内容を1行ずつ読み込んで出力
// while ($str = fgets($file)) { //while=繰り返し fgets()=1行ずつ読み取る
//     echo nl2br($str); // nl2br() ... 改行文字を追加
//     // var_dump(explode(",",$str));
// }

// fclose($file);
?>
<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>

<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>アンケートページ</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <header>
            <h2>アンケートページ</h2>
            <p>aikoについてアンケートにご協力ください！</p>
            <button id="formbtn">回答はこちら</button>

        </header>
        <hr>
        <h2>アンケート結果</h2>
        <p>〜質問事項〜</p>
        <p>① 好きなaikoの曲は？</p>
        <p>② 好きなaikoのアルバムは？</p>
        <P>③ 好きなaikoのMVは？</P>
        <table id="readtbl">
            <tr>
                <th>投稿日</th>
                <th>なまえ</th>
                <th>① 曲</th>
                <th>② アルバム</th>
                <th>③ MV</th>
            </tr>
            <?php
                include("funcs.php");
                $file = fopen("data/data.txt","r");	// ファイル読み込み
                while ($str = fgetcsv($file)) { //while=繰り返し fgets()=1行ずつ読み取る
                echo '<tr>';
                echo '<td>' .h($str[0]). '</td>';
                echo '<td>' .h($str[2]). '</td>';
                echo '<td>' .h($str[4]). '</td>';
                echo '<td>' .h($str[5]). '</td>';
                echo '<td>' .h($str[6]). '</td>';
                echo '</tr>';
                }
                fclose($file);
            ?>
        </table>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
             $("#formbtn").on("click", function () {
            window.open('post.php',null,'width=800,height=400,toolbar=yes,menubar=yes,scrollbars=yes')
            })
        </script>

    </body>
    </html>
<body>
    
</body>    
</html>

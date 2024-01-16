<?php

$name = $_POST["name"]; //
$mail = $_POST["mail"]; //
$song = $_POST["song"]; //
$album = $_POST["album"]; //
$mv = $_POST["mv"]; //


//文字作成
$str = date("Y/m/d").",".date("H:i:s").",".$name.",".$mail.",".$song.",".$album.",".$mv;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>アンケート回答完了</title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body>

<h3>〜アンケート回答完了〜</h3>
<p>※メールアドレスはアンケート結果に表示されません</p>

<div class="writebtndiv">
    <button id="writebtn">閉じる</button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $("#writebtn").on("click",function(){
    open('about:blank', '_self').close();    //一度再表示してからClose
    })
</script>

</body>
</html>
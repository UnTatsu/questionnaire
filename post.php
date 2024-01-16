<html>
<head>
<meta charset="utf-8">
<title>アンケート入力フォーム</title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h3>以下のアンケートに回答してね</h3>
<p>※メールアドレスはアンケート結果に表示されません</p>
<form action="write.php" method="post">
	<table id="posttbl">
	<tr>
		<td>お名前</td>
		<td><input type="text" name="name" required></td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td><input type="text" name="mail" required></td>
	</tr>
	<tr>
		<td>① 好きなaikoの曲は？</td>
		<td><input type="text" name="song" required></td>
	</tr>
	<tr>
		<td>② 好きなaikoのアルバムは？</td>
		<td>
			<input type="text" name="album" list="albumlist" required>
			<datalist id="albumlist">
				<option value="小さな丸い好日"></option>
				<option value="桜の木の下"></option>
				<option value="夏服"></option>
				<option value="秋 そばにいるよ"></option>
				<option value="暁のラブレター"></option>
				<option value="夢の中のまっすぐな道"></option>
				<option value="彼女"></option>
				<option value="秘密"></option>
				<option value="BABY"></option>
				<option value="時のシルエット"></option>
				<option value="泡のような愛だった"></option>
				<option value="May Dream"></option>
				<option value="湿った夏の始まり"></option>
				<option value="どうしたって伝えられないから"></option>
				<option value="今の二人をお互いが見てる"></option>
				<option value="まとめⅠ"></option>
				<option value="まとめⅡ"></option>
				<option value="aikoの詩。"></option>
				<option value="astral box"></option>
				<option value="GIRLIE"></option>
			</datalist>
		</td>
	</tr>
	<tr>
		<td>③ 好きなaikoのMVは？</td>
		<td><input type="text" name="mv" required></td>
	</tr>


	</table>


	<div class="btns">
		<input type="submit" value="送信">
	    <button id="postbtn">閉じる</button>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
    	$("#postbtn").on("click",function(){
    	open('about:blank', '_self').close();    //一度再表示してからClose
    	})
	</script>
</form>

</body>
</html>
<?php
include("funcs.php");

$name = $_POST["name"]; //
$mail = $_POST["mail"]; //

?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?= h($name) ?>
EMAIL：<?= h($mail) ?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>

<td><?php echo h($str["name"]); ?></td>
                <td><?php echo h($str["mail"]); ?></td>
                <td><?php echo h($str["song"]); ?></td>
                <td><?php echo h($str["album"]); ?></td>
                <td><?php echo h($str["mv"]); ?></td>
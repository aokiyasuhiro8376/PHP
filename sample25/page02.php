<?php session_start(); ?>
<!-- セッションを開始する、セッションの値を受ける方にも明記 -->
<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
  <?php print($_SESSION['session_message']); ?>
  <!-- phpのprintファンクションで環境変数$_SESSIONの中のname属性の値を表示 -->
</pre>
</main>
</body>    
</html>
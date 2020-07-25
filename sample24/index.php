<?php
$value = '変数に保存した値です';
// 変数は別ページに遷移すると値はなくなる
setcookie('save_message', 'cookieに保存した値です', time() + 60 * 60 * 24 * 14);
// cookieは別ページに遷移しても値は残る
// setcookie、name属性、保存する値、保存期間、time()ファンクションを使い指定

?>
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
  <a href="page02.php">page02へ</a>
  <!-- リンクで遷移先ファイル指定 -->
</pre>
</main>
</body>    
</html>
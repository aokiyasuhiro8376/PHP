<?php
  session_start();
  // セッションを開始する
  $_SESSION['session_message'] = '値をセッションに保存しました';
  // $_SEESION環境変数にname属性で値を保存
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
  <p>セッションに値を保存します。次のページに移動してみます。</p>
  &raquo; <a href='page02.php'>Page02へ</a>
</pre>
</main>
</body>    
</html>
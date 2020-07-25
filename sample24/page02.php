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
  変数の値:<?php print($value); ?>
  <!-- 変数は別ページに遷移すると値はなくなる -->
  COOKIEの値：<?php print($_COOKIE['save_message']); ?>
  <!-- cookieは別ページに遷移しても値は残る -->
  <!-- $_COOKIE['name属性'] -->
</pre>
</main>
</body>    
</html>
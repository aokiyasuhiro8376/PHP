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
  <?php
  foreach ($_POST['reserve'] as $reserve) {
    // 配列なので、foreachで展開、name属性をpostで受け取り、変数に代入していく
    print(htmlspecialchars($reserve, ENT_QUOTES) . ' ');
// HTMLを表示するときは、htmlspecialcharsでエスケープ、第一引数、変数、第二引数、ENT_QUOTES
  }
  ?>
</pre>
</main>
</body>    
</html>
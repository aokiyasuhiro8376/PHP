<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

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
  $zip = '987-6543';

  $zip = mb_convert_kana($zip, 'a', 'UTF-8');
  // マルチバイトコンバータカナで 変数を 半角英数字に変換し文字種設定
  if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)) {
    // preg_matchは指定の正規表現かどうか確認 第一、正規表現、第二、正規表現にしたい変数
    print('郵便番号：〒' . $zip);
    // 変数が正規表現と認識されたら、true
  } else {
    print('郵便番号を 123-4567の形式で入力ください');
  }
  ?>
</pre>
</main>
</body>    
</html>
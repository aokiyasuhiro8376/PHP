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
  $week = array('金','土','日','月','火','水','木');
  // arrayフォンクションで配列に曜日を入れる
  for ($i=1; $i<7; $i++) {
    // forで繰り返し構文、初期セット、繰り返し条件、処理
    print($week[$i%7] . "\n");
    // 剰余算で７まで繰り返し
    // 1%7=1
    // 2%7=2
    // 3%7=3
    // 4%7=4
    // 5%7=5
    // 6%7=6
    // 7%7=0
    // 8%7=1
  }
  ?>

<table>
  <?php
  for ($i=1; $i<=10; $i++) {
    if ($i % 2) {
      // 1%2=1
      // 2%2=0
      // 3%2=1
      // 4%2=0
      // 数字が1以上の場合true
      print('<tr style="background-color: #ccc">');
    } else {
      // 数字が0の場合はfalse
      // すなわち、偶数の場合は0なのでfalseでバックグラウンドなし
      print('<tr>');
    }
    print('<td>' . $i . '行目</td>');
    print('</tr>');
  }
  ?>
</table>

<table>
  <tr>
    <td>
    </td>
  </tr>
</table>

</pre>
</main>
</body>    
</html>
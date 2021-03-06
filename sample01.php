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
// date_default_timezone_set('Asia/Tokyo');
print("I'm studying \"php\" \n");
print('こんばんは' . "\n");

$today = new DateTime();
print($today->format('G時 i分 s秒') . 'です。' . "\n");

// $i = 1;
// while ($i <= 365) {
//   print($i . "\n");
//   $i += 1;
// }

// $i = 1;
// while($i <= 365){
//   print($i . "\n");
//   $i += 1;
// }

print(date('n/j(D)' . "\n"));

// for ($i=1; $i<=365; $i++){
//   print($i . "\n");
// }

// for (初期処理; 繰り返し条件; 更新処理) {
//   繰り返したい処理;
// }

// for ($i=1; $i<=365; $i+=1) {
//   print($i . "\n");
// }

// print(date('G時 m分 s秒'));
// // 初期化処理;
// // while (繰り返し条件) {
// //   繰り返したい処理;
// //   更新処理;
// // }
print(date('n/j(D)', strtotime('+2day')));
?>

<!-- <?php
for ($i=1; $i<=365; $i++):
  // print($i ."\n");
  $date = strtotime('+' . $i . 'day');
  print(date('n/j(D)', $date) . "\n");
endfor
?> -->

<?php
$week_name = ['日', '月', '火', '水', '木', '金', '土']; //配列作成
$week = date('w'); //配列の数字を指定するための変数 date function 'w' ,曜日を数字で取得
print($week_name[$week]); //配列取り出しはindexで指定 [index]
?>

<?php
// $furite = ['りんご', 'ぶどう', 'レモン'];
// print($furite[1] . "\n");

$fruits = ['apple'=>'りんご', 
          'grape'=>'ぶどう', 
          'lemon'=>'レモン',
          'tomato'=>'トマト',
          'peach'=>'もも']; //連想配列 valに規則性がない為数字でのindex指定が困難な為、indexを作る
// print($ruits[apple] . "\n");

foreach ($fruits as $english => $japanese) { //foreach配列内容全表示 変数の配列内容を asで 新たな変数に入れる
  print($english . ':' . $japanese . "\n");
}

if (date('G') < 9) {
  print('受付時間外');
} else {
  print(よろしく);
};

$x = 'アイウエオ';
if ($x !== '') {
  print(文字が入っています);
};
?>

3000円の100円引きは
<?php
// print(floor(100 / 3000 * 100)); //切り捨て
// print(ceil(100 / 3000 * 100)); //切り上げ
print(round(100 / 3000 * 100 ,1)); //四捨五入
?>
%引きです。

<?php $sum = 100+200+300; $tax = 1.08; ?>
<?php $tax = 1.08; ?>
<?php print($sum*$tax); ?>

<?php
$date = sprintf('%04d年 %02d月 %02d日 %s', 2018, 1, 23, '(fly)');
 //parameterは % の数で判断 %が3個あるので 第4parameterまで読み込む
print($date);
?>

<?php
// $succsess = file_put_contents('../../news_data/news.txt', '2020-06-29 ホームページをリニューアルしました');
// // file_put_contents は指定したファイルに書き込む
// // 第一引数 ファイル指定
// // 第二引数 書き込み内容
// if ($succsess){ // if (succsess === true)
//   print('ファイルへの書き込みが完了しました');
// } else {
//   print('ファイル書き込みに失敗しました。ファイル権限などを確認ください');
// }
?>

<?php
$news = file_get_contents('../../news_data/news.txt');
// file_get_contents は指定したファイルに読み込む
// 第一引数 ファイル指定
$news = '2020-06-31 ニュースを追加しました\n' . $news; 
file_put_contents('../../news_data/news.txt', $news);
print($news);
?>

<?php
// readfile('../../news_data/news.txt');
?>

<!-- <?php
$xmlTree = simplexml_load_file('https://h2o-space.com/feed/');
var_dump($xmlTree);
//simplexml_load_file xmlファイルを読み込む
foreach ($xmlTree->channel->item as $item): //foreach 繰り返して as $hoge 変数に入れいる ->で各階層のプロパティを指定
?>
・<a href="<?php print($item->link); ?>"><?php print
($item->title); ?></a>
<?php
endforeach;
?> -->

<?php
$file = file_get_contents('https://h2o-space.com/feed/json/'); //ファイルの内容を読み込む
$json = json_decode($file); //jsonデータをphpで処理できるようにするファンクション jsonデータを渡す また処理した結果を返してくれる
// var_dump($json);

foreach($json->items as $item): //foreach 繰り返して as $hoge 変数に入れいる ->で各階層のプロパティを指定
?>
・<a href='<?php print($item->url); ?>'><?php print($item->title); ?></a>
<?php
endforeach;
?>

</pre>
</main>
</body>    
</html>
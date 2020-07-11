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
  <?php print(htmlspecialchars
  ($_POST['gender'], ENT_QUOTES)); ?>
  <!-- name属性で値を指定 -->
  <?php print(htmlspecialchars
  ($_POST['my_name'], ENT_QUOTES)); ?>
  <!-- name属性で値を指定 -->
  <?php print(htmlspecialchars
  ($_POST['agree'], ENT_QUOTES)); ?>
  <!-- name属性で値を指定 -->
  <?php print(htmlspecialchars
  ($_POST['pref'], ENT_QUOTES)); ?>
  <!-- name属性で値を指定 -->

</pre>
</main>
</body>    
</html>
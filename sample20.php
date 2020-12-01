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
  $age = ２０;
  $age = mb_convert_kana($age, 'n', 'UTF-8'); //mb=マルチバイト
  if (is_numeric($age)) {
    print($age . '歳');
  } else {
    print('※ 年齢が数字ではありません');
  }
  ?>
<!-- is_numeric 指定されたパラメーターが数字かどうかを判断するファンクション -->
<!-- mb_convert_kana 様々なカナを変換するファンクション（パラメーターで様々な変換ができる） -->
</pre>
</main>
</body>    
</html>
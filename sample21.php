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
  if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)) {
    print('郵便番号：〒'. $zip);
  }else{
    print('※　郵便番号を123-4567の形式でご記入ください');
  }
  ?>
  <!-- preg_match 正規表現でマッチするかどうかというファンクション。一つ目のパラメーターで正規表現。 -->
</pre>
</main>
</body>    
</html>
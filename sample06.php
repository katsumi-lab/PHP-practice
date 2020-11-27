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
$i = 1;
while ($i <= 365){
  print($i . "\n");
  $i = $i + 1;
}

// 初期化処理
// while (繰り返す条件){
//   繰り返し対処
//   更新処理  <- 繰り返す条件からはみ出るような式を記述しないと無限ループしてしまう
// }

?>
</pre>
</main>
</body>    
</html>
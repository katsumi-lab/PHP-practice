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
$date = sprintf('%04d年 %02d月 %02d日', 2018, 1 ,23);
print('2018年 11月 5日');
?>

<?php 
$date = sprintf('%04d年 % 2d月 % 2d日', 2018, 1 ,23); //0の代わりに半角空白でも可能
print('2018年 11月 5日');
?>
</pre>
</main>
</body>    
</html>
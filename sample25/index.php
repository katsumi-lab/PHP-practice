<?php 
session_start();
$_SESSION['session_message'] = '値をセッションに保存しました';
?>

<!-- sessionの値はページの遷移間では値が保存されますが、ブラウザを閉じたタイミングで値は無効になります -->
<!-- sessionはWEBサーバーに保存される。どのブラウザの情報か識別する為にセッションIDが割り振られ、CookieにセッションIDを記録する -->
<!-- cookieはパラメーターで指定した時間は保存される為、ブラウザを閉じても保存されている -->

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
  <p>セッションに値を保存しました。次のページに移動してみましょう</p>
  &raquo; <a href="page02.php">Page02へ</a>
</pre>
</main>
</body>    
</html>
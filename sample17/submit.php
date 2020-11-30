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
  お名前：<?php print(htmlspecialchars($_REQUEST['my_name'],ENT_QUOTES));?>

  <!-- 
  グローバル変数$_REQUEST [] indexの値を取得する
  URLに値を載せて送信するのがGET / POSTは裏側で送信する例えばパスワード / POSTでもGETでも受け取れるのが$_REQUEST 
  htmlspecialchars はhtmlのタグをエスケープ（無効に）する。セキュリティ。ひとつ目のパラメータはENT_QUOTES 何をエスケープするか、二つ目のパラメーターは整数 
  -->

</pre>
</main>
</body>    
</html>
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
  for ($i=1; $i<31; $i++){   //1から31まで1足すを繰り返す
    print($week[$i%7]. "\n");   //剰余算7にすることで0〜7が出力される
  }
  ?>
</pre>

<table>
  <?php
  for ($i=1; $i<=10; $i++){
    if($i % 2){
      print('<tr style="background-color: #ccc">');   //剰余算 余り1の場合
    }else{
      print('<tr>');   //剰余算 余り0の場合
    }
    print('<td>' . $i .'行目</td>');
    print('</tr>');
  }
  ?>
</table>

</main>
</body>    
</html>
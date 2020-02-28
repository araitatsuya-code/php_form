<?php
  session_start();

  if(isset($_POST['token'], $_SESSION['token']) &&
  ($_POST['token'] === $_SESSION['token'])){
    unset($_SESSION['token']);
    echo "きちんとしたアクセスです。";
  }else{
    header('Location:http://localhost/php_form/form1.php');
    exit("");
  }
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>お問い合わせ</title>
</head>
<body>
<p>お問い合わせありがとうございます。</p>
</body>
</html>

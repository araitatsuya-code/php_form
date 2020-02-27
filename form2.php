<?php
session_start();

if(isset($_SESSION['name'])){

  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  $subject = $_SESSION['subject'];
  $body = $_SESSION['body'];
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>確認画面 - お問い合わせ</title>
</head>
<body>
  <form action="form3.php" method="post">
    <table>
      <tr>
        <th>お名前</th><td><?php echo $name; ?></td>
      </tr>
      <tr>
        <th>メールアドレス</th><td><?php echo $email; ?></td>
      </tr>
      <tr>
        <th>お問い合わせの種類</th><td><?php echo $subject; ?></td>
      </tr>
      <tr>
        <th>お問い合わせ内容</th><td><?php echo nl2br($body); ?></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="submit" value="送信する"></td>
      </tr>
      </table>
    </form>
</body>
</html>


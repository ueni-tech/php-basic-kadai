<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編 課題015</title>
</head>
<body>
  <h2>個人情報入力フォーム</h2>
  <form action="confirmation.php" method="post">
    <p>
      <label for="user_name">お名前</label>
      <input id="user_name" type="text" name="user_name">
    </p>
    <p>
      <label>性別</label>
      <input id="male" type="radio" name="user_gender" value="男性" checked><label for="male">男性</label>
      <input id="female" type="radio" name="user_gender" value="女性"><label for="female">女性</label>
    </p>
    <p>
      <label for="user_email">メールアドレス</label>
      <input id="user_email" type="text" name="user_email">
    </p>
    <input type="submit" value="送信">
  </form>
</body>

</html>
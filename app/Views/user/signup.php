<!DOCTYPE html>
<html>
<head>
  <title>회원가입</title>
  <style>
  </style>
</head>
<body>
  <h2>회원가입</h2>
  <form action="/user/store" method="post">
    <label for="email">이메일:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">비밀번호:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="회원가입">
  </form>
</body>
</html>

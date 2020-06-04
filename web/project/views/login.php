<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>[Name here] | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="./style/common.css">
  <link rel="stylesheet" type="text/css" href="./style/login.css">
</head>
<body>
    <main>
    <section>
      <?php if(isset($_SESSION['message'])){echo $_SESSION['message'];}?>
        <form action="./" method="post">
        <div>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required>
        </div>
        <div>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" required>
        </div>
        <input type="hidden" name="action" value="Login">
        <input type="submit" value="Login">
    </form>
    <a href="./?action=register">Don't have a login? Register here.</a>
    </section>
    </main>
</body>
</html>
<?php unset($_SESSION['message']);?>
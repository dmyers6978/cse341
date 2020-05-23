<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>[Name here] | Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="./style/common.css">
</head>
<body>
    <main>
    <section>
      <?php if(isset($_SESSION['message'])){echo $_SESSION['message'];}?>
      <p>Thank you for your interest. Just so you know, no payment information is ever requested or saved on this site. All personal info such as your name, phone number and email are saved in a secure database. Your password is encrypted with the latest security algorithm and is not known to anyone but yourself.</p>
        <form action="./" method="post">
        <label for="fName">First Name: </label>
        <input type="text" name="fName" id="fName" required>
        <label for="lName">Last Name: </label>
        <input type="text" name="lName" id="lName" required>
        <label for="phone">Phone Number: </label>
        <input type="tel" name="phone" id="phone" required>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password" required>
        <input type="hidden" name="action" value="Register">
        <input type="submit" value="Register">
    </form>
    </section>
    </main>
</body>
</html>
<?php unset($_SESSION['message']);?>
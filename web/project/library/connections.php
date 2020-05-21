<?php
// $db = parse_url(getenv("DATABASE_URL"));
// $db["path"] = ltrim($db["path"], "/");
// echo $db['path'];
try
{
  $user = 'postgres';
  $password = 'password';
  $db = new PDO('pgsql:host=localhost;dbname=db8cjsi2qqbfk3', $user, $password);

  // this line makes PDO give us an exception when there are problems,
  // and can be very helpful in debugging! (But you would likely want
  // to disable it for production environments.)
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected.";
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
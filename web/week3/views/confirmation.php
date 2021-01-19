<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Week3 | Confirmation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./style/main.css">
  <link rel="stylesheet" type="text/css" href="./style/confirmation.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/week3/common/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/week3/common/nav.php';?>
    <main>
        <h1>Thank you for shopping with us!</h1>
        <p><?php echo count($_SESSION['cart']);?> items will be shipped to </p>
        <p><strong><?php echo "$fName $lName";?></strong></p>
        <?php echo "<p>$address1</p>";
        if(!empty($address2)){echo "<p>$address2</p>";}
        echo "<p>$city, $state $zip</p>";
        unset($_SESSION['cart']);
        ?>
        <a href="./">Continue Shopping</a>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
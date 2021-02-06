<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inventory | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./style/common.css">
</head>
<body>
    <header><?php include './common/header.php';?></header>
    <nav><?php include './common/nav.php';?></nav>
    <main>
    <?php if(isset($_SESSION['message'])){ echo $_SESSION['message'];}?>
    <br>
    <fieldset><legend>Edit inventory</legend><form id='invMan' method='post' action='./'>
    <label for='itemId'>Select an item: <?php if(isset($select)){ echo $select;}?></label>
    <br><br>
    <label for='quantity'>Quantity: <input type='number' name='quantity' id='quantity'></label>
    <br><br>
    <label for='actionRadio'>Add <input type='radio' name='actionRadio' value='add'>Remove <input type='radio' name='actionRadio' value='remove'></label>
    <br><br>
    <input type='hidden' name='action' value='editInv'>
    <input type='submit' value='Go'>
    </form>
    </fieldset>
    </main>
</body>
</html>
<?php
unset($_SESSION['message']);
?>
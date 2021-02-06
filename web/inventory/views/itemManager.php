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
    <br><br><h2>Add an item</h2>
    <br><form method='post' action='./'>
    <label for='itemName'>Item Name: <input type='text' name='itemName' id='itemName'></label>
    <br><br>
    <input type='hidden' name='action' value='addItem'>
    <input type='submit' value='Go'>
    </form>
    <br><br>
    <?php if(isset($table)){
        echo $table;
    }?>
    </main>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Week3 | Cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./style/main.css">
  <link rel="stylesheet" type="text/css" href="./style/cart.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/week3/common/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/week3/common/nav.php';?>
    <main>
        <?php if(empty($_SESSION['cart'])){
            echo "<p>You have nothing in your cart yet. Click <a href='./'>here</a> to continue shopping.</p>";
        } else{ echo "<h1>Cart Items</h1>
            <table>
                <thead>
                    <tr><td>Item Title</td><td>Price</td><td>Delete Item</td></tr>
                </thead>
                <tbody>";
                foreach($_SESSION['cart'] as $key => $item){
                        echo "<tr><td>$item[itemTitle]</td><td>$$item[itemPrice]</td><td><a href='./?action=remItem&itemId=$key'>&#10060;</a></td></tr>";
                    }
                    echo "<tr><td>Total</td><td>";
                    $total = 0;
                    foreach($_SESSION['cart'] as $item){
                        $total = $total + $item['itemPrice'];
                    }
                    echo "$$total</td></tr></tbody></table>
                    <a id='checkout' href='./?action=checkout'>Check Out</a>";
                }
                    ?>
        </fieldset>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>[Name here] | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="./style/common.css">
</head>
<body>
    <header>
        <?php include './common/header.php';?>
    </header>
    <nav id='navBar' class="hide">
        <?php include './common/nav.php';?>
    </nav>
    <main>
<section>
      <h2>Services I provide</h2>
    <table>
        <thead>
            <tr>
                <th>Service</th>
                <th>Estimated Time (Minutes)</th>
                <th>Estimated Cost*</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($table)){echo $table;}?>
            <tr><td></td><td></td><td id='total'></td></tr>
        </tbody>
    </table>
    <p>*Prices are estimates. Depending on situation or parts required, prices are subject to change.</p>
</section>
    <section>
    <h1>Contact me for more info</h1>  
    <p>1213 Center St. Rear</p>
    <p>Evanston WY 82930</p><a href="tel:30077995311">Call Me</a>
    <a href="./?action=email">Email Me</a>
  </section>
    </main>
    <script src="./scripts/cost.js"></script>
    <script src="./scripts/navButton.js"></script>
</body>
</html>
<?php unset($_SESSION['message']);?>
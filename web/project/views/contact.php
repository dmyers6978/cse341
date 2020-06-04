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
<div>
    <section>
    <h1>Contact me for more info</h1>  
    <p>1213 Center St. Rear</p>
    <p>Evanston WY 82930</p>
    <div>
    <a href="tel:30077995311">Call Me</a>
    <a href="./?action=email">Email Me</a>
    </div>
</section>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d749.7147251305189!2d-110.97017917079515!3d41.268408006716584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDE2JzA2LjMiTiAxMTDCsDU4JzEwLjciVw!5e0!3m2!1sen!2sus!4v1591239639417!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
    </main>
    <script src="./scripts/cost.js"></script>
    <script src="./scripts/navButton.js"></script>
</body>
</html>
<?php unset($_SESSION['message']);?>
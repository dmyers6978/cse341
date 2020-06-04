<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>[Name here] | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="./style/common.css">
  <link rel="stylesheet" type="text/css" href="./style/main.css">
</head>
<body>
    <header>
        <?php include './common/header.php';?>
    </header>
    <nav id='navBar' class="hide">
        <?php include './common/nav.php';?>
    </nav>
    <main>
        <?php if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
        }
        ?>
        <div>
        <img src="" alt="repair" id="first">
            <section id="second"><a href="./?action=contact"><p>Hit the trail too hard?</p><p>I have the tools and experience to get you back on the trail.</p></a></section>
            <section id="third"><a href="./?action=status"><p>Already dropped off your bike?</p><p>Go here to see the status of your bike.</p></a></section>
            <img src="" alt="status" id="fourth">
            <img src=",/images/facebook.jpg" alt="FB" id="fifth">
            <section id="sixth"><a href="https://www.facebook.com/groups/606194506596284t"><p>Love Mountain biking?</p><p>So do I. Join my facebook group to find others as well.</p></a></section>
            <section id="seventh"><a href="./?action=about"><p>Still skeptical?</p><p>Click here to know more about my origins and backstory.</p></a></section>
            <img src="" alt="About" id="eighth">
    </div>
    </main>
    <script src="./scripts/navButton.js"></script>
</body>
</html>
<?php unset($_SESSION['message']);?>
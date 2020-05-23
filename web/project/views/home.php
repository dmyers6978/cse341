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
    <nav>
        <?php include './common/nav.php';?>
    </nav>
    <main>
        <?php if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
        }
        ?>
    <section>
        <figure><img src="" alt="repair"></figure>
        <figcaption><a href="./?action=contact">Need a repair?</a></figcaption>
    </section>
    <section>
        <figure><img src="" alt="status"></figure>
        <figcaption><a href="./?action=status">Check Status</a></figcaption>
    </section>
    <section>
        <figure><img src="" alt="FB"></figure>
        <figcaption><a href="https://www.facebook.com/groups/606194506596284">Love Mountain biking?</a></figcaption>
    </section>
    <section>
        <figure><img src="" alt="About"></figure>
        <figcaption><a href="./?action=about">About me</a></figcaption>
    </section>
    </main>
</body>
</html>
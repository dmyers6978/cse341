<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>[Name here] | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="./style/common.css">
    <link rel="stylesheet" type="text/css" href="./style/jobs.css">
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
        <?php if(isset($table)){
            echo $table;
        }?>
    </main>
    <script src="./scripts/navButton.js"></script>
</body>
</html>
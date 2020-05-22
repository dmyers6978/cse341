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
<section>
    <table>
        <thead>
            <tr>
                <th>Service</th>
                <th>Estimated Time (Minutes)</th>
                <th>Estimated Cost</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($table)){echo $table;}?>
        </tbody>
    </table>
</section>
    </main>
</body>
</html>
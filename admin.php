<?php
  session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Espace Client</title>
</head>
<body>



<h1>Salut <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['name'] ?></h1>


<p>Entreprise : <?= $_SESSION['company'] ?></p>
</body>
</html>
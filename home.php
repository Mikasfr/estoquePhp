<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Você entrou </h1> <?php echo $_SESSION['nome'];?>
    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>
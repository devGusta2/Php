
    <?php
        include('protect.php');
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Adm</title>
</head>
    <body>
        <div class="container">
            <h1>bem vindo<?php echo$_SESSION['nome'];?></h1>
            <p>
                <a href="logout.php">Sair</a>
            </p>
        </div>
    </body>
</html>
<?php
require __DIR__."/session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.scss">
    <title>Document</title>
</head>

<body>
    <header>

        <?php
        include __DIR__ . "/menu.php";
        afficherMenu($menu);
        ?>
        <h1>Ma voiture</h1>
    </header>

    <section>
        <form action="formulaireAnnonce.php" method="POST">
            <label for="model" name="model">Modèle<input type="text" name="model"></label>
            <label for="powerful" name="powerful">Puissance<input type="text" name="powerful"></label>
            <label for="year" name="year">Année<input type="text" name="year"></label>
            <label for="description" name="description">Description <textarea name="description" id="" cols="30" rows="10"></textarea></label>
            <input type="submit" value="Envoyer" name="submitCar">
        </form>
    </section>

</body>

</html>

<style scopted>
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    input {
        width: 300px;
        margin: 10px;
    }
</style>
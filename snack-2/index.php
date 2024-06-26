Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./loginResult.php" method="get">

        <label for="username">Inserisci il tuo username:</label>
        <input type="text" name="username" id="username">

        <label for="age">Inserisci la tua età:</label>
        <input type="number" name="age" id="age">

        <label for="email">Inserisci la tua email:</label>
        <input type="text" name="email" id="email">

        <button> Vai </button>
    </form>
</body>
</html>
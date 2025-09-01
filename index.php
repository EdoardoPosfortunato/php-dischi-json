<?php

require_once './functions.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Dischi</h1>

    <form action="./server.php" method="POST">
        <h3>Inserisci un nuovo disco</h3>

        <label for="title"  required>Titolo</label>
        <input name="title" name="title" id="title" type="text">
        <br>
        <label for="artist"  required>Artista</label>
        <input name="artist" name="artist" id="artist" type="text">
        <br>
        <label for="cover"  required>Cover</label>
        <input name="cover" name="cover" id="cover" type="text">
        <br>
        <label for="year"  required>Anno di Pubblicazione</label>
        <input name="year" name="year" id="year" type="text">
        <br>
        <label for="gender"  required>Genere</label>
        <input name="gender" name="gender" id="gender" type="text">
        <br>

        <br>
        <button>Aggiungi nuovo Album</button>

    </form>

    <ul>

        <?php
        foreach ($discos as $disco) {
            "<li>";
            foreach ($disco as $key => $value) {
                if ($key == "titolo") {
                    echo "<h1> $value </h1>";
                }

                echo "$key: $value <br>";

                "</li>";
            }
        }
        ?>
    </ul>
</body>

</html>
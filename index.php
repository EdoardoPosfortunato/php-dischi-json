<?php

$discos_string = file_get_contents("./data.json");

$discos = json_decode($discos_string, true);



// var_dump($discos);


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
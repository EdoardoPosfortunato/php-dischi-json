<?php

$discos_string = file_get_contents("./data.json");
$discos = json_decode($discos_string, true);

$title = $_POST["title"];
$artist = $_POST["artist"];
$cover = $_POST["cover"];
$year = $_POST["year"];
$gender = $_POST["gender"];

$discos[] = [
    "titolo"=> $title,
    "artista"=> $artist,  
    "cover"=> $cover,
    "anno_publicazione"=> $year,
    "genere"=> $gender
];


$json_update = json_encode($discos);

file_put_contents("./data.json", $json_update);

header("Location:./index.php");



<?php

$gandalf = [
    "Name" => "Gandalf The White",
    "Class" => "Wizard",
    "Guild" => "The Fellowship of the Ring",
    "Level" => 1,
    "Motto" => strtoupper("You shall not pass !"),
    "Strengh" => "Unmatched reputation throughout the realm",
    "Weackness" => "Fears non-smoking area",
    "HP" => 750,
    "MP" => 0
];

$frodon = [
    "Name" => "Frodon Sacquet",
    "Class" => "Hobbit",
    "Guild" => "The Fellowship of the Ring",
    "Level" => 7,
    "Motto" => "Sam ! Where are you ?!",
    "Strengh" => "Discretion",
    "Weackness" => "Sensitive",
    "HP" => 250,
    "MP" => 10
];


$personnages = [
    "Gandalf" => $gandalf,
    "Frodon" => $frodon
];

function displayHero($hero)
{
    echo "<div class= 'hero' >";
    echo "<h4>" . $hero["Name"] . "</h4>";
    echo "<div><span class= 'label'>Class :</span><span>" . $hero["Class"] . "</span></div>";
    echo "<div><span class= 'label'>Niveau: </span><span>" . $hero["Level"] . "</span></div>";
    echo "</div>";
}
foreach ($personnages as $perso) {

    displayHero($perso);
}

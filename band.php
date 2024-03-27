<?php

$albums = array("Citizen of Glass kost" => 4.5, "night kost" => 9, "New Eyes kost" => 5, "Strange Trails kost" => 10);
echo "het album overzicht \n";
$totaale_prijs = 0;
foreach ($albums as $album_titel => $prijs) {
    echo "$album_titel $prijs \n";
    $totaale_prijs += $prijs;
    $d = count($albums);
    $Gemidelde_prijs = $totaale_prijs / $d;
}
echo "Het totaal bedrag voor een album is $totaale_prijs \n";
echo "het gemiddelde bedrach voor een album is $Gemidelde_prijs";
<?php
    $geheimcode = array();
    $geheimcode["Baumhaus"] = "Montag";
    $geheimcode["Ventilator"] = "Dienstag";
    $geheimcode["Unterricht"] = "Mittwoch";
    $geheimcode["Behördenwegweiser"] = "Donnerstag";
    $geheimcode["Fahrradschloss"] = "Freitag";
    $geheimcode["Kettenschaltung"] = "Samstag";
    $geheimcode["Montag"] = "Sonntag";
    $geheimcode["Freude"] = "Wirtschaftsinformatik";
    $geheimcode["Kaugummi"] = "Mathematik";
    $geheimcode["Brezeln"] = "Deutsch";
    $string = "Letzten Behördenwegweiser hatten wir Kaugummi, das war anstrengend. Zum Glück blieb dann nur noch der Fahrradschloss. Kettenschaltung und Montag konnte ich mich nicht richtig entspannen, denn Baumhaus erwartet uns schon wieder Freude. Naja ... besser als Brezeln.";
    
    $string = str_replace("Baumhaus",$geheimcode["Baumhaus"], $string);
    $string = str_replace("Ventilator",$geheimcode["Ventilator"], $string);
    $string = str_replace("Unterricht",$geheimcode["Unterricht"], $string);
    $string = str_replace("Behördenwegweiser",$geheimcode["Behördenwegweiser"], $string);
    $string = str_replace("Fahrradschloss",$geheimcode["Fahrradschloss"], $string);
    $string = str_replace("Kettenschaltung",$geheimcode["Kettenschaltung"], $string);
    $string = str_replace("Montag",$geheimcode["Montag"], $string);
    $string = str_replace("Freude",$geheimcode["Freude"], $string);
    $string = str_replace("Kaugummi",$geheimcode["Kaugummi"], $string);
    $string = str_replace("Brezeln",$geheimcode["Brezeln"], $string);
    echo $string;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
</body>
</html>
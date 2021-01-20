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
    $string = "Am Freitag haben wir Mathematik, am Dienstag ebenfalls. Mein Lieblingsfach ist Deutsch, das wir leider nur am Mittwoch haben. Am meisten freue ich mich immer darauf, wenn ich am Sonntag Wirtschaftsinformatik lernen darf";
    
    $string = str_replace($geheimcode["Baumhaus"],"Baumhaus", $string);
    $string = str_replace($geheimcode["Ventilator"],"Ventilator", $string);
    $string = str_replace($geheimcode["Unterricht"],"Unterricht", $string);
    $string = str_replace($geheimcode["Behördenwegweiser"],"Behördenwegweiser", $string);
    $string = str_replace($geheimcode["Fahrradschloss"],"Fahrradschloss", $string);
    $string = str_replace($geheimcode["Kettenschaltung"],"Kettenschaltung", $string);
    $string = str_replace($geheimcode["Montag"],"Montag", $string);
    $string = str_replace($geheimcode["Freude"],"Freude", $string);
    $string = str_replace($geheimcode["Kaugummi"],"Kaugummi", $string);
    $string = str_replace($geheimcode["Brezeln"],"Brezeln", $string);
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
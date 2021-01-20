<?php
    include "Spieler.php";
    $mannschaft = new Mannschaft();
    for($i = 1; $i<17; $i+=1){
        $mannschaft->addAngreifer(new Angreifer($i));
    }
    for($i = 1; $i<2; $i+=1){
        $mannschaft->addGoalie(new Goalie($i*10,$i));
    }
    for($i = 1; $i<5; $i+=1){
        $mannschaft->addVerteidiger(new Verteidiger($i));
    }
?>
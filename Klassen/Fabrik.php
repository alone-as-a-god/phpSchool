<?php
    class Fabrik{
        private $standort = "Bruneck";
        private $mitarbeiterAnzahl;

        function produktHerstellen($produkt){
            echo "Produkt ".$produkt."hergestellt<br>";
        }
        function mitarbeiterAnzahlAendern($neueAnzahl){
            $this->mitarbeiterAnzahl = $neueAnzahl;
            echo "<br>Neue Mitarbeiteranzahl ".$this->mitarbeiterAnzahl;
        }
        function standortAusgeben(){
            echo "Der Standort ist ".$this->standort;
        }
    }

    $fabrik = new Fabrik();
    $fabrik->produktHerstellen("Despacito");
    $fabrik->standortAusgeben();
    $fabrik->mitarbeiterAnzahlAendern("3");
?>
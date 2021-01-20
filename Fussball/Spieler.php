<?php
    class Spieler{
        private $name;
        function zeigeName(){
            echo "Mein Name ist ".$this->name;
        }
        function __construct($name){
            $this->name = $name;
        }
        function __toString(){
            if(is_null($this->name)) {
                return 'NULL';
            }
            return $this->name;
        }
    }
    class Goalie extends Spieler{
        private $koerperGroesse;
        function __construct($groesse, $name){
            $this->koerperGroesse = $groesse;
            parent::__construct($name);
        }
    }
    class Angreifer extends Spieler{
        function jogTraining(){
            echo "Ich, ".$this->name.", trainiere gerade<br>";
        }
        
    }
    class Verteidiger extends Spieler{
        
    }

    class Mannschaft{
        public $goalieArray = [];
        public $angreiferArray = [];
        public $verteidigerArray=[];

        function addGoalie($goalie){
            if(count($this->goalieArray)<1) {
                $this->goalieArray[] = $goalie;
                echo "Added Goalie ".$goalie."<br>";
            }else{
                echo "We already have enough goalies lol<br>";
            }
        }
        function addAngreifer($angreifer){
            if(count($this->angreiferArray)<16){
                $this->angreiferArray[] = $angreifer;
                echo "Added angreifer ".$angreifer."<br>";
            }else{
                echo "We already have enough angreifer lol<br>";
            }
        }
        function addVerteidiger($verteidiger){
            if(count($this->verteidigerArray)<4){
                $this->verteidigerArray[] = $verteidiger;
                echo "Added Verteidiger ".$verteidiger."<br>";
            }else{
                echo "We already have enough verteidigers lol<br>";
            }
        }
    }
?>
<?php
    $db = new mysqli("localhost","root","","filmedatenbank");
    print_r($db->connect_error);
    $sqlitedb = new SQLite3("testDB.db");
    if($sqlitedb){
        echo "johoi";
    }else{
        echo "net johoi";
    };
    
    $sqlitedb->exec("INSERT INTO Test (id, name) VALUES ('LELELE','HABIBI')");
    $results2 = $sqlitedb->query("SELECT * FROM Test");
    print_r($results2);

    while($zeile = $results2->fetchArray()){
        echo "<br>".$zeile["id"]." ".$zeile["name"];
    }
    
?>
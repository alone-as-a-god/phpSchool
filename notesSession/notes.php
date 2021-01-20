<?php
    session_start();
    if ($_REQUEST){
        if(isset($_REQUEST["mytextarea"])){
            $text = $_REQUEST["mytextarea"].PHP_EOL; 
            $filename = $_SESSION["username"].".txt";
            $file = fopen($filename,"a");
            fwrite($file, $text); 
        }elseif(isset($_REQUEST["myUsername"])){
            $_SESSION["username"] = $_REQUEST["myUsername"];
        }       
    }
    
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $file = fopen($username.".txt","a");
        echo "logged in lmao";
        echo '<form method="post">
                    <textarea name="mytextarea"></textarea>
                    <input type="submit" value="Go!" />
             </form>';
    }else{     
        echo '<form method="login">
            <textarea name="myUsername"></textarea>
            <input type="submit" value="login" />
        </form>';
        
    }   
    
?>

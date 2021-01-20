<?php
    
    if(isset($_GET["username"])){
        $user = $_GET["username"] ;
        $file = fopen($_GET["username"].".txt","a");
        
        echo "Your notes were last modified on ".date("F d Y H:i:s.", filemtime($_GET["username"].".txt"));
    }else{
        echo "error";
        die();
    }   
    if ($_POST) 
    {
        $text = $_POST["mytextarea"].PHP_EOL; 
        $filename = $user.".txt";
        fwrite($file, $text); 
    }
?>
<form method="post">
    <textarea name="mytextarea"></textarea>
    <input type="submit" value="Go!" />
</form>

<?php
  session_start();
  $dirBefore = "";
  $defDir = false;
  if(isset($_GET['dir'])){
      $directory = $_GET['dir'];
      if(isset($_SESSION[$directory])){
        $directory = $_SESSION[$directory];
        echo $directory;
      }
      $dirBefore = $directory . "/";
  }else{
      $directory = getcwd(); 
      $defDir = true;
  }
  $files = scandir($directory);
  $files = array_diff($files, array(".", ".."));

  foreach ($files as $file){
    $url = "";
    if((is_dir($dirBefore . "\\" . $file)) || (is_dir($file))){
      $url = "http://localhost/Uebungen/ordnerSessions/index.php?dir=";
    }
    if($defDir){
      echo "<li><a href='" . $url .  $dirBefore . $file . "'>" . $file . " "  .filesize($file) . " Bytes" . "</a></li>";
    } else {
      echo "<li><a href='" . $url .  $dirBefore . $file . "'>" . $file . "= " .filesize($dirBefore . "\\" . $file) . " Bytes" . "</a></li>";
    }
  }
?>
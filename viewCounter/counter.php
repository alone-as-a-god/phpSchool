<?php
    $counter = (int)file_get_contents("counter.txt");

    $lines = file("ips.txt", FILE_IGNORE_NEW_LINES);
    $ip = $_SERVER['REMOTE_ADDR'];
    if(in_array($ip, $lines)){
        echo "You already visited this site, therefore your click wasn't counted <br>";
    }else{
        $data = $ip.PHP_EOL;
        $fp = fopen("ips.txt","a");
        fwrite($fp,$data);
        $counter += 1;
    }
    
    file_put_contents("counter.txt", $counter);
    echo "Seitenaufrufe= " . $counter;
    echo "<br>";

    
    echo "IP: " .$ip;

    
?>
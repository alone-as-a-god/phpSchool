<?php
require_once "config.php";
// Array with names


$sql ="SELECT password FROM users";
$result = $conn->query($sql);
$count = mysqli_num_rows($result);

while($row = mysqli_fetch_array($result)){
    $a[]=$row['password'];
}
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
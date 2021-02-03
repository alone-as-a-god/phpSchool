<?php
require_once "postconfig.php";  //Loads the php file once (so it wont execute the same queries twice)
session_start();
    
$sql ="SELECT * FROM posts";
$result = $conn->query($sql);
$count = mysqli_num_rows($result);

while($row = mysqli_fetch_array($result)){
    echo $row["author"]." posted: ".$row["content"]."<br>".$row["likes"]." likes";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twatter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>

</head>
<body>
    
</body>
</html>
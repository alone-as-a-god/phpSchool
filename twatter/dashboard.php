<?php
require_once "postconfig.php";  //Loads the php file once (so it wont execute the same queries twice)
session_start();
    
$sql ="SELECT * FROM posts";
$result = $conn->query($sql);
$count = mysqli_num_rows($result);

function createNewPost() {
    echo "lmao";
    header("Location: newpost.php");
    exit();
}


echo $_POST["button".$row["id"]];

while($row = mysqli_fetch_array($result)){
    echo $row["time"].": ". $row["author"].": ".$row["content"]."<br>"."<form action='' method='POST'>"."<input type='button' name='button[".$row['id']."]' value='".$row['likes']." likes'></form>"."<br><br>";
}

if($_SERVER['REQUEST_METHOD']=="POST"){

    if(!empty($_POST["button"])){

        echo key($_POST["button"]); 
        
    }
    if(!empty($_POST["newPost"])){
        createNewPost();
    }
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
    <script>
        function showHint(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "gethint.php?q=" + str, true);
                xmlhttp.send();
            }
        }
</script>

</head>
<body>
    <form action="newpost.php">
        <input type="submit" id="myBtn" name="newPost" style="position:fixed;right:30;bottom:30;height:40px" value="Create new Post">
    </form>
    

    
</body>
</html>
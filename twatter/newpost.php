<?php
require_once "postconfig.php";  //Loads the php file once (so it wont execute the same queries twice)
session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $content = $_POST["content"];
        if(!empty($content)){
            
            $username = $_SESSION["username"];
            if(empty($username)){
                header("Location: home.php");
                exit();
            }else{
                $sql = "INSERT INTO posts(author, content, time) VALUES (?,?,now())";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss",$username, $content);
                $stmt->execute();
            }
        }else{
            echo "post content cannot be empty";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
    <div class="wrapper">
        <h2>Create New Post</h2>
        <form method="post">
            <div class="form-group">
                <label>Your post:</label>
                <input type="text" name="content" class="form-control">    
            </div>    
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Post">
            </div>
        </form>
    </div>    
</body>
</html>
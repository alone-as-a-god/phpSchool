<?php
require_once "config.php";  //Loads the php file once (so it wont execute the same queries twice)
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tempUsername = trim($_POST["username"]);
        $tempPassword = trim($_POST["password"]);
        if(!empty($tempUsername)&& !empty($tempPassword)){
            $sql = "SELECT * FROM users where username=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $_POST["username"]);
            $stmt->execute();
            $result = $stmt->get_result()->fetch_assoc();
            if($result!=null){
                $fetchedUsername = $result["username"];
                $sql = "SELECT password FROM users where username='".$fetchedUsername."'";
                $fetchedPass = $conn->query($sql);
                if(mysqli_num_rows($fetchedPass)==1){
                    $newPass = $fetchedPass->fetch_assoc()["password"];
                    if($tempPassword === $newPass){
                        echo "login successful";
                    }else{
                        echo "wrong password";
                    }
                    
                }else{
                    die("error".mysqli_num_rows($fetchedPass));
                }       
                
            }else{
                echo "username not found";
            }
            //print_r($result);
            
            
        }else{
            echo "please enter all the required fields";
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
        <h2>Login</h2>
        <form method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
                
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" onkeyup="showHint(this.value)">
                <label id="txtHint">Suggestions: </label>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>
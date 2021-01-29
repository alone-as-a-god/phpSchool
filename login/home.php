<?php
require_once "config.php";  //Loads the php file once (so it wont execute the same queries twice)
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty(trim($_POST["username"]))&& !empty(trim($_POST["password"]))){
            $sql = "SELECT * FROM users where username=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $_POST["username"]);
            $stmt->execute();
            $result = $stmt->get_result()->fetch_assoc();
            if($result!=null){
                $fetchedUsername = $result["username"];
                $sql = "SELECT password FROM users where id=1 OR username='".$fetchedUsername."'";
                $fetchedPass = $conn->query($sql);
                if($fetchedPass){
                    print_r($fetchedPass);
                }else{
                    die($fetchedUsername);
            
            }
            //print_r($result);
            
            
        }else{
            echo "please enter all the required fields";
        }
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
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>    
</body>
</html>
<?php
require_once "postconfig.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tempUsername = trim($_POST["username"]);
        $tempPassword = trim($_POST["password"]);
        $confirmPassword = trim($_POST["confirm_password"]);
        if(!empty($tempUsername)&&!empty($tempPassword)&&!empty($confirmPassword)){
            if($tempPassword == $confirmPassword){
                $sql = "SELECT * FROM users where username=?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $tempUsername);
                $stmt->execute();
                $result = $stmt->get_result()->fetch_assoc();
                if($result==null){
                    $sql = "INSERT INTO users(username, password) values(?,?)";
                    $stmt = $conn -> prepare($sql);
                    $stmt->bind_param("ss", $tempUsername, $tempPassword);
                    $stmt->execute();
                    echo "user created successfully. You can now login";
                }else{
                    echo "that username is already taken lmao";
                }
            }else{
                echo "passwords dont match";
            }
        }else{
            echo "Please fill out all the required fields";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="home.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>
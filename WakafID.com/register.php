<?php
    include "service/database.php";
    
    $register_massege = "";

    if(isset($_POST['Registrasi'])) {
        $username = $_POST['username'] ;
        $password = $_POST['password'] ;

        $sql = "INSERT INTO users (username,password) VALUES
        ('$username','$password')";

        if($db->query($sql)){
            $register_massege = "your account is available, please login";
        }else{
            $register_massege = "your account is available, please login";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333a2f;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #ebeddf;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            box-shadow: 0 0 25px rgb(236, 234, 234);
            transition: box-shadow 0.10s;
        
        }
        input[type="text"],
        input[type="password"],
        button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #333a2f;
            color: #ccc;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php include "layout/main.html"?>
</body>
</html>
<?php

  ini_set('display_errors', 'On');
    $con = mysqli_connect("localhost", "root", "password", "database");

    if(isset($_POST["name"]) && isset($_POST["username"]) && isset($_POST["age"]) && isset($_POST["password"]))
    {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $age = $_POST["age"];
    $password = $_POST["password"];
    }
    $statement = mysqli_prepare($con, "INSERT INTO user(name, username, age, password) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssis", $name, $username, $age, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
   echo json_encode($response);
  // print_r(json_encode($response));
?>

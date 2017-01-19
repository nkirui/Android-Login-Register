<?php
   ini_set('display_errors', 'On');
   $con = mysqli_connect("localhost", "root", "password", "database");
    
if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
}
    $statement = mysqli_prepare($con, "SELECT * FROM user WHERE username = ? AND password = ?");
    mysqli_stmt_bind_param($statement, "ss", $username, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $user_id, $name, $username, $age, $password);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response[""] = $name;
        $response[""] = $username;
        $response[""] = $age;
        $response[""] = $password;
    }
    
    //echo json_encode($response);
    print_r(json_encode($response));
?>


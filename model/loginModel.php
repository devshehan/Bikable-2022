<?php 
    // make a connection with database

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "bikable";

    $conn = mysqli_connect($host,$username,$password,$database);
    // $result = mysqli_query($conn,"SELECT * FROM users");

    $superEmail = mysqli_real_escape_string($conn,$_POST["userEmail"]);
    $superPasswd = mysqli_real_escape_string($conn,$_POST["userPassword"]);

    $sql = "SELECT * FROM users WHERE email='{$superEmail}' AND password='{$superPasswd}'";
    
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        echo "success";
    }else{
        echo "fail";
    }



    // $data = array();
    // while($row = mysqli_fetch_object($result)){
    //     array_push($data,$row);
    // }

    // echo json_encode($data);
    exit();

?>
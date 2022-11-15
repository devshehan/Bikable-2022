<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "bikable";


    //make a connection between database
    $conn = mysqli_connect($host,$username,$password,$database);


    $position  = "admin";
    //write sql query
    $sql = "SELECT * FROM users where role='{$position}' ";

    //send query to the database and get result back
    $result = mysqli_query($conn,$sql);

    //put those result on array
    $data = array();
    while( $row = mysqli_fetch_object($result)){
        array_push($data,$row);
    }

    //to send data array to ajax callback need to convert into the json format
    echo json_encode($data);
    exit();

?>
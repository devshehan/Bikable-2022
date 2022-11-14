<?php 

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "bikable";

    // make a connection with database.
    $conn = mysqli_connect($host,$username,$password,$database);

    // take data from the form that we recieved from the XMLHttpRequest
    $firstName = mysqli_escape_string($conn,$_POST["first_name"]);
    $lastName = mysqli_escape_string($conn,$_POST["last_name"]);
    $email = mysqli_escape_string($conn,$_POST["email"]);
    $phoneNumber = mysqli_escape_string($conn,$_POST["phone_number"]);
    $adminPasswd = mysqli_escape_string($conn,$_POST["password"]);
    $nic_number = mysqli_escape_string($conn,$_POST["nic_number"]);


    $status = 1;
    $role = "admin";

    $sql = "INSERT INTO users ( first_name, last_name, phone_number, email, password, nic, status, role )
        VALUES ( '{$firstName}', '{$lastName}', '{$phoneNumber}', '{$email}', '{$adminPasswd}', '{$nic_number}', '{$status}', '$role' )";


    mysqli_query($conn,$sql);
    echo "success";

    exit();

?>
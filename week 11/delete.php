<?php
    $servername = 'localhost';
    $username = 'billgates';
    $password = '123';
    $db = 'task11';

    $conn = new mysqli($servername, $username, $password, $db);
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $admin = $_COOKIE['admin'];
        if($admin == 1){
            $sql = "DELETE FROM `cars` WHERE id = ".$id."";
            mysqli_query($conn,$sql);
            echo 'deleted';
        }
        else{
            echo 'u cant' . '<br>';
            echo 'ur admin index is ' . $admin;
        }
    }
    mysqli_close($con);
?>
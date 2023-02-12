<?php 

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'littleblog';

    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if ($conn->connect_errno!=0){
        header('Location: ../index.php');
        $conn->close();
    }

?>
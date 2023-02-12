<?php 
    
    if(!isset($_POST['submit'])){
        header('Location: ../index.php');
        exit();
    }

    $author = htmlentities($_POST['author'], ENT_QUOTES, "UTF-8");
    $title = htmlentities($_POST['title'], ENT_QUOTES, "UTF-8");
    $text = htmlentities($_POST['textArea'], ENT_QUOTES, "UTF-8");

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../picture/" . $filename;

    require('connection.php');

    $query = "INSERT INTO posts(author, filename, title, content) VALUES ('$author', '$filename', '$title', '$text')";

    mysqli_query($conn, $query);

    if(move_uploaded_file($tempname, $folder)){
        header('Location: ../index.php');
    }
    else{
        header('Location: ../sites/posts.php');
    }

    $conn->close();

?>
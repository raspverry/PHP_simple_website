<?php 
    $conn = mysqli_connect('localhost', 'root');

    if($conn){
        echo "connected";
    }
    else{
        echo "failed";
    }

    mysqli_select_db($conn, 'photography');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $query = "INSERT INTO users (name, email, number) VALUES ('$name', '$email', '$number')";

    mysqli_query($conn, $query);
    header('location: index.php');

?>
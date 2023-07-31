<?php
//established database connect
$connection =mysqli_connect("localhost", "db_user_name","db_password","db_name");

//check connect
if(mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

//Process data
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pass"];

    //Escape the data
    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    //Insert data
    $query = "INSERT INTO Students (name, email, password) VALUES ('$name', '$email', '$password')";

    if (mysqli_query($connection, $query)) {
        echo "Registered Succesfull!";
    } else {
        echo "Error : " . $query . "<br>" . mysqli_error($connection);
    }
}

//close connection
mysqli_close($connection);
?>
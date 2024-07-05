<?php
echo "<h1>Entered Login.php</h1>";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo '<h1>Entered POST</h1>';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $host = "localhost";
    $dbusername = "root";
    $dbname = "auth";
    $dbpassword="";
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if($conn->connect_error){
        die("Connection failed:". $conn->connect_error);

    }
    //validate login authentication
    $query = "SELECT * FROM login WHERE username='$username'AND password='$password'";
    $result = $conn->query($query);
    if($result->num_rows==1){
        //login success
        header("Location: dot.html");
        exit();
    }
    else{
        header("Location: error.html");
        exit();
    }
    $conn->close();


}

?>
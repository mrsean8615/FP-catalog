<?php


function connectDB() {
        $servername = "yourseverhost";
        $username = "username";
        $password = "password";
        $database = "db";
        
    // Create connection
        $conn = new mysqli($servername, $username, $password, $database);
        return $conn;

}
?>

<?php


function connectDB() {
        $servername = "catalogdb.cvrkscuruxt3.us-west-1.rds.amazonaws.com";
        $username = "admin";
        $password = "youaintgetthis";
        $database = "ecom";
        
    // Create connection
        $conn = new mysqli($servername, $username, $password, $database);
        return $conn;

}
?>

<?php
    function opencon(){
        $user = "root";
        $host = "localhost";
        $db = "bwm";
        $pass = "";

        $mysql = new mysqli($host,$user,$pass,$db);
        if($mysql->connect_error){
            die("FAILED TO CONNECT");
        }
        return $mysql;
    }
    function closecon($conn){
        $conn->close();
    }
?>
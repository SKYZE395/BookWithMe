<?php
    include "dbcon.php";
    session_start();
    $mysql = opencon();        

    $selectedseat = $_POST["selected"];
    $swappedseat = $_POST["swapped"];
    $id = $_POST["id"];
    $bid = $_POST["bid"];
    $user = $_POST["user"];
    $event = $_POST["event"];
    $swappedacc = $_POST["swappedaccount"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($swappedacc===""){
            header("Location: updateseat.php/?user=$user&reqfrom=$swappedacc$&bid=$bid&event=$event&id=$id&oseat=$selectedseat&rseat=$swappedseat&action=ACCEPT");
        }
        else{
            $qry = "insert into requests values('$user','$swappedacc','$event','$id','$bid','$selectedseat','$swappedseat','ACTION_PENDING')";
            if(mysqli_query($mysql,$qry)){
                header("Location: view_events.php");
            }
            else{
                echo "error";
            }
        }
    ?>
</body>
</html>
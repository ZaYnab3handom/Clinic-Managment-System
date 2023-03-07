<?php 
//Open database
include_once("../dbConnection.php");
$doctortId = $_GET["user"];
$usersql = "SELECT * FROM users WHERE national_id = $doctortId";
$userresult = mysqli_query($connection, $usersql);
$Udata = mysqli_fetch_array($userresult);



$doctor_id = $_GET["user"];
    if(isset($_POST["savebtn"])){
        $dayDate = $_POST["dayDate"];
        $start = $_POST["start"];
        $end = $_POST["end"];
        $room_no=$_POST["room_no"];

        //insert new schedule
        $sql = "insert into schedule (doctor_id, dayDate, start, end)
        values ('$doctortId','$dayDate','$start','$end'";
        $result = mysqli_query($connection, $sql);

        
    }
?>

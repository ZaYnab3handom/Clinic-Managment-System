<?php 
//Open database
// id	dayDate	start	end	doctor_id
include_once("../dbConnection.php");
    if(isset($_POST["savebtn"])){
        $dayDate = $_POST["dayDate"];
        $start = $_POST["start"];
        $end = $_POST["end"];
        $doctorID=$_POST["doctorID"];
        //insert new schedule
        // $sql = "insert into schedule (doctor_id, dayDate, start, end)
        // values ('$doctorID','$dayDate','$start','$end'";
        // $result = mysqli_query($connection, $sql);

        for($i=0;$i<count($dayDate);$i++){
           
            if($dayDate[$i]){
                $sql = "insert into schedule (doctor_id, dayDate, start, end)
                values ('$doctorID','$dayDate[$i]','$start[$i]','$end[$i]')";
                $result = mysqli_query($connection, $sql);
            }
        }
    }
?>

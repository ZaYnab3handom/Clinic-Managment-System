
<?php
$SID = $_GET["sId"];

        include_once("../dbConnection.php");

        $readSql = "select * from schedule inner Join Users on doctor_id=national_id WHERE id=$SID "; 
        $readResult = mysqli_query($connection, $readSql);
        $Sdata = mysqli_fetch_array($readResult);

        $dayDate = $_POST["dayDate"];
        $start = $_POST["start"];
        $end = $_POST["end"];

        $sql = "update schedule set dayDate='$dayDate', start='$start' , end='$end') WHERE doctor_id=$SID";
        $result = mysqli_query($connection, $sql);

         
  ?>

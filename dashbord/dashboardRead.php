<?php
    include_once("../dbConnection.php");

    $q="select COUNT(user_id) from `patient`";
    $readResult = mysqli_query($connection, $q);
    $data = mysqli_fetch_row($readResult);
    $patient=$data[0];
    function display()
    {
        global $patient;
        echo $patient;
    }
    $q="select COUNT(user_id) from `doctor`";
    $readResult = mysqli_query($connection, $q);
    $data = mysqli_fetch_row($readResult);
    $doctor=$data[0];
    function DoctorDisplay()
    {
        global $doctor;
        echo $doctor;   
    }

    $q="select COUNT(id) from appointment";
    $readResult = mysqli_query($connection, $q);
    $data = mysqli_fetch_row($readResult);
    $appointm=$data[0];
    function appointmentDisplay()
    {
        global $appointm;
        echo $appointm;   
    }
    
    /* table */

    $q="select * from appointmentusers order by datetime DESC";
    $result = mysqli_query($connection, $q);
    function tabledisplay()
    {
        global $result;
        while($data = mysqli_fetch_array($result)) 
        {
            echo"<tr>";
            echo "<td>".$data['id']."</td>";
            echo" <td>".$data['patienName']."</td>";
            echo "<td>".$data['doctorName']."</td>";
            echo "<td>".$data["departmentName"]."</td>";
            echo "<td>".$data["datetime"]."</td>";
            echo"</tr>";
        }
    }
    
   
?>
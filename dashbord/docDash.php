<?php

if(isset( $_SESSION['NId']) && $_SESSION['userType']!='Patient'  )
{
    $user=$_SESSION['userName'];
    global $user;
}

    include_once("../dbConnection.php");
    $q="select patienName,state FROM `appointmentusers`WHERE doctorName='$user'";
    $Result = mysqli_query($connection, $q);
    function display()
    {
        global $Result;
        while($data = mysqli_fetch_array($Result)) 
        {
            echo"<tr>";
            echo" <td>".$data['patienName']."</td>";
            echo "<td>".$data['state']."</td>";
            echo"</tr>";
        }
    }

    $q="sELECT COUNT(id) FROM `appointmentusers` WHERE state='Done'AND doctorName='$user'";
    $readResult = mysqli_query($connection, $q);
    $data = mysqli_fetch_row($readResult);
    $confirm=$data[0];
    function confirm()
    {
        global $confirm;
        echo $confirm;   
    }

    $q="sELECT COUNT(id) FROM `appointmentusers` WHERE state='Draft' AND doctorName='$user'";
    $readResult = mysqli_query($connection, $q);
    $data = mysqli_fetch_row($readResult);
    $draft=$data[0];
    function draft()
    {
        global $draft;
        echo $draft;   
    }

?>
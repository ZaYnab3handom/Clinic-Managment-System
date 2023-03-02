<?php
include_once("../dbConnection.php");
//read appointment data form database
$appId = $_GET["user"];
$appsql = "select * from appointmentusers where id = $appId";
$appresult = mysqli_query($connection, $appsql);
$data = mysqli_fetch_array($appresult);
$currentDate = date("d-m-Y");
$getage = date_diff(date_create($data["birthDate"]), date_create($currentDate));
$age=$getage->format("%y");
if(isset($_POST["savebtn"])){
    //get appFormData
    $doctorId = 29608030400141;

    //get current time 
    date_default_timezone_set('Africa/Cairo');
    $t=time();
    $appdate=date("Y-m-d",$t);
    $apptime=date("h:i:s",$t);

   
    $consType = $_POST["consultationt"];
    $BookedOnline = $_POST["BookedOnline"];
    $status=$_POST["status"];


   //udate  appointment 
   $updateAppsql = "update appointment set doctor_id='$doctorId',
   date='$appdate', time='$apptime',consultation_type='$consType', booked_online='$BookedOnline',
   state='$status' where id=$appId";
   $updateResult = mysqli_query($connection, $updateAppsql);
  


}


?>
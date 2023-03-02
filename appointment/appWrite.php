<?php

// id	
// date	
// time	
// patient_Id	
// doctor_id	
// consultation_type	
// booked_online	
// state	
//date time consultationt BookedOnline status patientname doctorName

    $con =include_once("../dbConnection.php");
    $patientId = $_GET["user"];
    $getPatienData = "select name,birthDate from users where national_id = $patientId";
    $getresult = mysqli_query($connection, $getPatienData);
    $currentDate = date("d-m-Y");
    $patientName;
    $age;
    while($data = mysqli_fetch_array($getresult)) {
        $GLOBALS['patientName']= $data["name"];
      $getage = date_diff(date_create($data["birthDate"]), date_create($currentDate));
      $GLOBALS['age']=$getage->format("%y");
    //   echo  $GLOBALS['patientName'], $GLOBALS['age'];
    
    }
    function getPatientName(){
        echo  "<input type='text' id='patientname' name='patientname' value=  '$GLOBALS[patientName]' >";
    }
    function getPatientAge(){
        echo "<input type='text' id='patientage' name='patientage' value=  '$GLOBALS[age]' >"; 

    }
   
    if(isset($_POST["savebtn"])){
        //record to set in prescrition table
        // print_r($_POST);
        $patientId = $_GET["user"];
        
        // $patientName = 29608030400141;
        //$doctorName = $_POST["doctorName"]; get patient id from name by search
        $doctorId = 29608030400141;

        //get current time 
        date_default_timezone_set('Africa/Cairo');
        $t=time();
        $appdate=date("Y-m-d",$t);
        $apptime=date("h:i:s",$t);

       
        $consType = $_POST["consultationt"];
        $BookedOnline = $_POST["BookedOnline"];
        $status=$_POST["status"];


       //insert new appontment to app table
        $sql = "insert into appointment 
        (patient_Id	, doctor_id, date,time, consultation_type, booked_online, state)
        values ('$patientId','$doctorId','$appdate','$apptime','$consType','$BookedOnline','$status' )";
        $result = mysqli_query($connection, $sql);

    
    }
   
      

    
    

?>

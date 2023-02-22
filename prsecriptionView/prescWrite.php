<?php 
    if(isset($_POST["savebtn"])){
        //record to set in prescrition table
        
        //get appointment id from appointment page
        // $appoitmentId = $_GET["user"];
        $appoitmentId = 1;

        //get current time 
        date_default_timezone_set('Africa/Cairo');
        $t=time();
        $prescription_time=date("h:i:s",$t);

        $disease = $_POST["disease"];
        $medicalTest = $_POST["medicalTest"];
        $xray = $_POST["xrays"];
        $followUpDate=$_POST["follwdate"];
        $notes=$_POST["notes"];

        //record to set in precription line
        // $prescrptionId = $_GET["user"];
        // $medicineName = $_POST["medicineName"];
        // $dosage = $_POST["dosage"];
        // $allowSubsistuation=$_POST["allowSubsistuation"];
        // $comment=$_POST["comment"];

        

        //  connectio to database 
            include_once("../dbConnection.php");
        // query 
            $sql = "insert into prescription 
            (appoimtment_id, prescription_time, disease
            ,medical_test, x_rays, followup_date, notes)
             values ( '$appoitmentId', '$prescription_time', '$disease'
             ,'$medicalTest','$xray', '$followUpDate','$notes' )";
        // excute query 
        $result = mysqli_query($connection, $sql);

        echo "User Added Successfully";

    }
?>
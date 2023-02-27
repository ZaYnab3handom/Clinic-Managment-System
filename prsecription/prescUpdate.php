<?php
include_once("../dbConnection.php");
//read prescription form data
$prescid = $_GET["user"];
$prescsql = "select * from prescription where appointment_id = $prescid";
$prescresult = mysqli_query($connection, $prescsql);
$data = mysqli_fetch_array($prescresult);

//read related prescription line
$prescLinesql = "select medicine_name,dosage_detail,comment from prescription_line
where prescription_id  = $prescid";
$prescLineresult = mysqli_query($connection, $prescLinesql);
function drawPrescriptionLine(){
    if( $GLOBALS['prescLineresult']) {
        while($row =  mysqli_fetch_assoc($GLOBALS['prescLineresult'])){
            echo "<tr>";    
            echo "<td> <input type='text' name='medicineName[]' value='$row[medicine_name]'> </td>";
            echo "<td ><input type='text' name='dosage[]' value=$row[dosage_detail]></td>";
            echo"<td ><input type='checkbox' name ='allowSubsistuation[]'value='1' ></td>";
            echo"<td><input type='text' name ='comment[]' value=$row[comment]></td>";
            echo "<tr>";    
                 }}
}

    if(isset($_POST["savebtn"])){
        //record to set in prescrition table
        // print_r($_POST);
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
        //$prescrptionId =1;
        $medicineName = $_POST["medicineName"];
        $dosage = $_POST["dosage"];
        $allowSubsistuation=$_POST["allowSubsistuation"];
        $comment=$_POST["comment"];


       //update  Prescription 
       $updatePrescsql = "update prescription set prescription_time='$prescription_time',
        disease='$disease', medical_test='$medicalTest',x_rays='$xray', followup_date='$followUpDate',
        notes='$notes' where appointment_id=$appoitmentId";
        $prescResult = mysqli_query($connection, $updatePrescsql);

        //Update prescription lines 
        for($i=0;$i<count($medicineName);$i++){
         
            if($medicineName[$i]){
            $updatePrescLinesql = "update prescription_line set medicine_name='$medicineName[$i]'
            ,dosage_detail='$dosage[$i]', comment='$comment[$i]' where prescription_id=$appoitmentId";
             $updatePrescLineResult = mysqli_query($connection, $updatePrescLinesql);}
             header("Location:prescriptionList.html");



        }
    }


// $presclinedata = mysqli_fetch_assoc($prescLineresult);
// if($prescLineresult) {
//     while($row =  mysqli_fetch_assoc($prescLineresult)){
//         echo $row['medicine_name'];
//          echo $row['dosage_detail'];
//          echo $row['comment'];

//     }
// }



?>


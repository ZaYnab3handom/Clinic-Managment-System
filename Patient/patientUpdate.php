<?php
include_once("../dbConnection.php");
//read prescription form data
$Patientid = $_GET["user"];
$Patientsql = "SELECT * FROM users JOIN patient WHERE users.national_id=patient.user_id=user, users.adress_id=adress.id";
$Patientresult = mysqli_query($connection, $Patientsql);
$data = mysqli_fetch_array($Patientresult);

//read related prescription line
/*$prescLineresult = mysqli_query($connection, $prescLinesql);
function drawPatientTable(){
    if( $GLOBALS['prescLineresult']) {
        while($row =  mysqli_fetch_assoc($GLOBALS['prescLineresult'])){
            echo "<tr>";    
            echo "<td> <input type='text' name='medicineName[]' value='$row[medicine_name]'> </td>";
            echo "<td ><input type='text' name='dosage[]' value=$row[dosage_detail]></td>";
            echo"<td ><input type='checkbox' name ='allowSubsistuation[]'value='1' ></td>";
            echo"<td><input type='text' name ='comment[]' value=$row[comment]></td>";
            echo "<tr>";    
                 }}
}*/

    if(isset($_POST["savebtn"])){

        $patientName = $_POST["patientName"];
        $mobile = $_POST["mobile"];
        $nationalId = $_POST["nationalId"];
        $Birthdate = $_POST["Birthdate"];
        $employeeId=$_POST["employeeId"];
        $ChronicDisease=$_POST["ChronicDisease"];
        $PastSurger=$_POST["PastSurger"];
        $street=$_POST["street"];
        $apartment=$_POST["apartment"];
        $city=$_POST["city"];
        $country=$_POST["country"];
        $Email=$_POST["Email"];
        $Password=$_POST["Password"];
        $RepeatPassword=$_POST["RepeatPassword"];
        $type="patient";
        $gender=$_POST["gender"];
        $Blood=$_POST["Blood"];


       //update  Prescription 
       $updateUsersSql = "update users set patientName='$$patientName', mobile='$mobile', 
       nationalId='$nationalId',Birthdate='$Birthdate', Email='$Email',gender='$gender',Blood='$Blood'  where nationalId=$nationalId";
        $usersResult = mysqli_query($connection, $updateUsersSql);
    
        $updateAdressSql= "update adress set apartment='$apartment',city='$city', country='$country', street='$street' where id=$nationalId";
        $adressResult = mysqli_query($connection, $updateAdressSql);

        $updatePatientSql= "update patient set ChronicDisease='$ChronicDisease',PastSurger='$$PastSurger',employeeId='$employeeId'
        where id=$nationalId";
        $adressResult = mysqli_query($connection, $updateAdressSql);
        
    }





?>


<?php
include_once("../dbConnection.php");
$sql = "select user_id FROM patient";
$allPatientsIds = mysqli_query($connection, $sql);
$patiensIds=array();

if (mysqli_num_rows($allPatientsIds) > 0) {
while($row = mysqli_fetch_assoc($allPatientsIds)) {
    array_push($patiensIds,$row["user_id"]); 
}
} else {
echo "0 results";
}

 if(isset($_POST["savebtn"])){
    $patientId = $_POST["national_id"];
    if(in_array($patientId, $patiensIds)){
        header("Location:appointment_form.html?user=$patientId");
    }
    else{ echo "<p style='color: red;'> No Matching National Id ,Please Check your Enterd Nationa_id </p>  
        <P>or</p>  
         <a class='btn btn-primary w-50 py-3' href='signUp.html'> Register As a patient </a> ";}
  

mysqli_close($connection);

}

?>
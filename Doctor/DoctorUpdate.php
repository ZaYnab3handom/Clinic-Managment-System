<?php
include("../dbConnection.php");
//read Doctor data
$doctortId = $_GET["national_id"];
//echo $doctortId;
$usersql = "SELECT * FROM users INNER JOIN adress ON users.national_id=adress.user_id WHERE national_id=$doctortId";
$userresult = mysqli_query($connection, $usersql);
$Udata = mysqli_fetch_array($userresult);
$Doctorsql="SELECT * FROM doctor INNER JOIN department ON doctor.department_id=department.id WHERE user_id=$doctortId";
$Doctorresult = mysqli_query($connection, $Doctorsql);
$Ddata = mysqli_fetch_array($Doctorresult);


if(isset($_POST["savebtn"])){

    //check if the Doctor is male or female
    if ( isset($_POST['gender']) ){
        $gender = $_POST['gender'];
        if ( $gender == 'M' ){
            $gender="M";
        }else if ( $gender == 'F' ){
            $gender="F";
            }
        else $gender=$Udata['gender'];
        }

        $doctorName = $_POST["doctorName"];
        $mobile = $_POST["mobile"];
        $nationalId = $_POST["nationalId"];
        $Birthdate = $_POST["Birthdate"];
        $street=$_POST["street"];
        $apartment=$_POST["apartment"];
        $city=$_POST["city"];
        $country=$_POST["country"];
        $email=$_POST["email"];
        $Password=$_POST["password"];
        $RepeatPassword=$_POST["repeatpassword"];
        $department=$_POST["department"];
        $type="Doctor";

    if ($Password==$RepeatPassword){
        //update  user 
        $updateUsersSql = "update users set name='$$patientName', mobile='$mobile', 
        nationalId='$nationalId',birthDate='$Birthdate', Email='$Email',gender='$gender'ً WHERE national_id =$doctortId";
        $usersResult = mysqli_query($connection, $updateUsersSql);
    
        $updateAdressSql= "update adress set user_id='$nationalId' apartment='$apartment', city='$city', country='$country', street='$street' WHERE users_id=$doctortId";
        $adressResult = mysqli_query($connection, $updateAdressSql);

        $updatePatientSql= "update doctor set  user_id='$nationalId',department_id='$$department' WHERE user_id=$doctortId";
        $adressResult = mysqli_query($connection, $updatePatientSql);
        
    }
}
?>


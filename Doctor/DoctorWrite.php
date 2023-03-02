<?php 
    if(isset($_POST["savebtn"])){
        //check if the Doctoris  male or female
        if ( isset($_POST['gender']) ){
            $gender = $_POST['gender'];
            if ( $gender == 'M' ){
                $gender="M";
            }else if ( $gender == 'F' ){
                $gender="F";
            }
        }
        //save data added from the Doctor
        $patientName = $_POST["patientName"];
        $mobile = $_POST["mobile"];
        $nationalId = $_POST["nationalId"];
        $Birthdate = $_POST["Birthdate"];
        $department=$_POST["department"];
        $street=$_POST["street"];
        $apartment=$_POST["apartment"];
        $city=$_POST["city"];
        $country=$_POST["country"];
        $Email=$_POST["Email"];
        $Password=$_POST["Password"];
        $RepeatPassword=$_POST["RepeatPassword"];
        $type="Doctor";
        if ($Password==$RepeatPassword){
            //Open database
            include_once("../dbConnection.php");
            //insert new user as a Doctor
            $sql = "insert into users (national_id, name, birthDate, gender, type, mobile, email, password)
            values ('$nationalId','$patientName','$Birthdate','$gender','$type','$mobile','$Email','$Password')";
            $result = mysqli_query($connection, $sql);
            //insert Department data
            $sql1 = "insert into department (name)
            values ('$department')";
            $result = mysqli_query($connection, $sql1);
            //insert Doctor adress
            $sql2 ="insert into adress (id, apartment, street, city, country)
            values('$nationalId', '$apartment' ,'$street', '$city', '$country')";
            $result = mysqli_query($connection, $sql2);
            echo "User added";
        }else
        echo "error";



       
    } 

?>

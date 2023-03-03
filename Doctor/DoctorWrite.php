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
        $doctorName = $_POST["doctorName"];
        $mobile = $_POST["mobile"];
        $nationalId = $_POST["nationalId"];
        $Birthdate = $_POST["Birthdate"];
        $department=$_POST["department"];
        $street=$_POST["street"];
        $apartment=$_POST["apartment"];
        $city=$_POST["city"];
        $country=$_POST["country"];
        $email=$_POST["email"];
        $Password=$_POST["password"];
        $RepeatPassword=$_POST["repeatpassword"];
        $type="Doctor";
        if ($Password==$RepeatPassword){
            //Open database
            include_once("../dbConnection.php");
            //insert new user as a Doctor
            $sql = "insert into users (national_id, name, birthDate, gender, type, mobile, email, password)
            values ('$nationalId','$doctorName','$Birthdate','$gender','$type','$mobile','$email','$Password')";
            $result = mysqli_query($connection, $sql);
            //insert doctor
            $sql1 = "insert into doctor (user_id)
            values ('$nationalId')";
            $result = mysqli_query($connection, $sql1);
            //insert Department data
            $sql2 = "insert into department (name)
            values ('$department')";
            $result = mysqli_query($connection, $sql2);
            //insert Doctor adress
            $sql3 ="insert into adress (user_id, apartment, street, city, country)
            values('$nationalId', '$apartment' ,'$street', '$city', '$country')";
            $result = mysqli_query($connection, $sql3);
        }

        function addSchedule(){
            $dayDate=$_POST["dayDate"];
            $start=$_POST["start"];
            $end=$_POST["end"];
            $room_no=$_POST["room_no"];
            $doctor_id=$_GET["user"];
            
            $sql4 = "insert into schedule (dayDate, start, end, room_no, doctor_id)
            values ('$dayDate','$start','$end','$room_no','$doctor_id')";
            $result = mysqli_query($connection, $sql4);
        }



       
    } 

?>

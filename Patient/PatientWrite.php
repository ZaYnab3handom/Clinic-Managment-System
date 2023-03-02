<?php 
    if(isset($_POST["savebtn"])){
        //check if the patient is male or female
        if ( isset($_POST['gender']) ){
            $gender = $_POST['gender'];
            if ( $gender == 'M' ){
                $gender="M";
            }else if ( $gender == 'F' ){
                $gender="F";
            }
        }
        //know the blood type of the patient
        if ( isset($_POST['Blood']) ){
            $Blood = $_POST['Blood'];
            if ( $Blood == 'A' ){
                $Blood="A";
            }else if ( $Blood == 'B' ){
                $Blood="B";
            }else if ( $Blood == 'AB' ){
                $Blood="AB";
            }else if ( $Blood == 'O' ){
                $Blood="O";
            }
        }
        //know the company of the patient
        if ( isset($_POST['company']) ){
            $company = $_POST['company'];
            if ( $company == 'a' ){
                $company="sugarCanel";
            }else if ( $company == 'b' ){
                $company="Department2";
            }else if ( $company == 'c' ){
                $company="Department3";
            }
        }
        //save data added from the Patient
        $patientName = $_POST["patientName"];
        $mobile = $_POST["mobile"];
        $nationalId = $_POST["nationalId"];
        $birthDate = $_POST["birthDate"];
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
        if ($Password==$RepeatPassword){
            //Open database
            include_once("../dbConnection.php");
            //insert new user as a patient
            $sql = "insert into users (national_id, name, birthDate, gender, type, mobile, email, password)
            values ('$nationalId','$patientName','$Birthdate','$gender','$type','$mobile','$Email','$Password')";
            $result = mysqli_query($connection, $sql);
            //insert patient data
            $sql1 = "insert into patient (company, employee_id, blood_type, chronic_disease	, past_surgery, user_id)
            values ('$company','$employeeId','$Blood','$ChronicDisease','$PastSurger','$nationalId')";
            $result = mysqli_query($connection, $sql1);
            //insert patient adress
            $sql2 ="insert into adress (id, apartment, street, city, country)
            values('$nationalId', '$apartment' ,'$street', '$city', '$country')";
            $result = mysqli_query($connection, $sql2);
            echo "User added";
        }else
        echo "error";



       
    } 

?>

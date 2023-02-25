<?php 
    if(isset($_POST["savebtn"])){
        //record to set in prescrition table
        print_r($_POST);
        //check if the patient male or female
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
        $Birthdate = $_POST["Birthdate"];
        $employeeId=$_POST["employeeId"];
        $ChronicDisease=$_POST["ChronicDisease"];
        $PastSurger=$_POST["PastSurger"];
        $street=$_POST["street"];
        $city=$_POST["city"];
        $Governorate=$_POST["Governorate"];
        $PastSurger=$_POST["PastSurger"];


       //insert new patient
       include_once("../dbConnection.php");
        $sql = "insert into patient (national-id, name, birthdate, gender, mobile, company, employee id, blood type, chronic disease, past surgery, adress)
        values ('$nationalId','$patientName','$Birthdate',$gender','$mobile','$company','$employeeId','$Blood','$ChronicDisease','$PastSurger','$city')";
        $result = mysqli_query($connection, $sql);
        //insert adress
        echo "User added";
    } 

?>
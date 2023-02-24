<?php 
     include_once("../dbConnection.php");
    if(isset($_POST["savebtn"])){
        //record to set in prescrition table
        print_r($_POST);
        //get appointment id from appointment page
        // $appoitmentId = $_GET["user"];
        $appoitmentId = 2;

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


       //insert new Prescription to prescription table
        $sql = "insert into prescription 
        (appoimtment_id, prescription_time, disease,medical_test, x_rays, followup_date, notes)
        values ('$appoitmentId','$prescription_time','$disease','$medicalTest','$xray','$followUpDate','$notes' )";
        $result = mysqli_query($connection, $sql);

        //insert prescription lines to prescription line table 
        for($i=0;$i<count($medicineName);$i++){
            // if($allowSubsistuation[$i]=="on"){
            //     $allowSubsistuation[$i]=1;
            // }
            // else{
            //     $allowSubsistuation[$i]=0;
            // }
            $sql2 = "insert into prescription_line 
            (prescription_id, medicine_name, dosage_detail, comment)
             values ( '$appoitmentId', '$medicineName[$i]', '$dosage[$i]','$comment[$i]' )";
             $result = mysqli_query($connection, $sql2);

            //  $sql2 = "insert into prescription_line 
            // (prescription_id, medicine_name, dosage_detail
            // ,allow_subsistuation, comment)
            //  values ( '$appoitmentId', '$medicineName[$i]', '$dosage[$i]'
            //  ,'$allowSubsistuation[$i]','$comment[$i]' )";
            //  $result = mysqli_query($connection, $sql2);


        }
    }

        //Read From Prescription Table
    
        $readSql = "select * from prescription"; 
        $readResult = mysqli_query($connection, $readSql);
        while($data = mysqli_fetch_array($readResult)) {
            echo "<tr>";    
                echo"<td>checkBox</td>";
                echo "<td>".$data["id"]."</td>";
                echo"<td>Patient</td>";
                echo" <td>Department</td>";
                echo" <td>Doctor</td>";
                echo "<td>".$data["prescription_time"]."</td>";
                echo "<td>".$data["followup_date"]."</td>";
                echo "<td> <a href='delete.php?user=$data[id]'> Delete </a> </td>";
                echo "<td> <a href='edit.php?user=$data[id]'> Edit </a> </td>";
            echo "</tr>";   }
      
       
    //Delete 
    // $id = $_GET["user"];
    //  $sql = "delete from users where id = $id"; 
    //  $result = mysqli_query($connection, $sql);
    //  header("Location:list.php");
    
           


?>
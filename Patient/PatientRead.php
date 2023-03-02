<?php 
  
       include_once("../dbConnection.php");
        //Read From Patient
        $readSql = "SELECT * FROM users INNER JOIN patient ON users.national_id=patient.user_id 
        INNER JOIN adress ON users.national_id=adress.user_id WHERE users.type='patient';"; 
        $readResult1 = mysqli_query($connection, $readSql);
        $currentDate = date("d-m-Y");

        while($data = mysqli_fetch_array($readResult1)) {
            echo "<tr>";
            echo "<td>".$data["national_id"]."</td>";
            echo "<td>".$data["name"]."</td>";
            echo "<td>".$data["gender"]."</td>";
            echo "<td>".$data["mobile"]."</td>";
            $age = date_diff(date_create($data["birthDate"]), date_create($currentDate));
            echo "<td>".$age->format("%y")."</td>";
            echo "<td>".$data["blood_type"]."</td>";
            echo "<td> <a href='patientUpdateForm.html?user=$data[national_id]'></a> </td>";
            echo "<td> <a href='../appointment/appointmentForm.html?user=$data[user_id]'> Create Appointment</a></td>";
            echo "</tr>";
        
        }

?>

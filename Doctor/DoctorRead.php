<?php 
  
       include_once("../dbConnection.php");
        //Read From Doctor
        $readSql = "SELECT * FROM users INNER JOIN doctor ON users.national_id=doctor.user_id
        INNER JOIN department ON department.id=doctor.department_id
        INNER JOIN adress ON users.adress_id=adress.id"; 
        $readResult1 = mysqli_query($connection, $readSql);
        $currentDate = date("d-m-Y");

        while($data = mysqli_fetch_array($readResult1)) {
            echo "<tr>";
            echo "<td>".$data["name"]."</td>";
            echo "<td>".$data["department.name"]."</td>";
            echo "<td>".$data["schedule.dayDate"]."</td>";
            echo "<td>".$data["schedule.start"]."</td>";
            echo "<td>".$data["schedule.end"]."</td>";
            echo "<td>".$data["schedule.room_no"]."</td>";
            echo "<td> <a href='patientUpdateForm.html?user=$data[nationalId]'></a> </td>";
            echo "<td> <a href='../appointment/appointmentForm.html?user=$data[user_id]'>Add Schedule</a></td>";
            echo "</tr>";
        
        }

?>

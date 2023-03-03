<?php 
  
       include_once("../dbConnection.php");
        //Read From Doctor
        $readSql = "SELECT * FROM users INNER JOIN adress ON users.national_id=adress.user_id 
        INNER JOIN doctor ON users.national_id=doctor.user_id INNER JOIN schedule ON users.national_id=schedule.doctor_id
        INNER JOIN department ON doctor.department_id=department.id WHERE users.type='Doctor'"; 
        $readResult1 = mysqli_query($connection, $readSql);

        while($data = mysqli_fetch_array($readResult1)) {
            echo "<tr>";
            echo "<td>".$data["name"]."</td>";
            echo "<td>".$data["department.name"]."</td>";
            echo "<td>".$data["schedule.dayDate"]."</td>";
            echo "<td>".$data["schedule.start"]."</td>";
            echo "<td>".$data["schedule.end"]."</td>";
            echo "<td>".$data["schedule.room_no"]."</td>";
            echo "<td> <a href='doctorUpdateForm.html?user=$data[nationalId]'>edit</a> </td>";
            echo "<td> <a href='../appointment/appointmentForm.html?user=$data[user_id]'>Add Schedule</a></td>";
            echo "</tr>";
        
        }

?>

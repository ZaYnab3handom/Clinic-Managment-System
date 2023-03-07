<?php 
       include_once("../dbConnection.php");
        //Read From Doctor
        $readSql = "SELECT *, users.name AS doc_name FROM users 
        INNER JOIN adress ON users.national_id=adress.user_id 
        INNER JOIN doctor ON doctor.user_id=users.national_id /*INNER JOIN schedule ON doctor_id=users.national_id*/
        INNER JOIN department on doctor.department_id=department.id WHERE type='Doctor'"; 
        $readResult1 = mysqli_query($connection, $readSql);

        while($data = mysqli_fetch_array($readResult1)) {
            echo "<tr>";
            echo "<td>".$data["doc_name"]."</td>";
            echo "<td>".$data["name"]."</td>";
           /* echo "<td>".$data["dayDate"]."</td>";
            echo "<td>".$data["start"]."</td>";
            echo "<td>".$data["end"]."</td>";
            echo "<td>".$data["room_no"]."</td>";*/
            echo "<td> <a href='editdoctor.html?national_id=$data[national_id]'>edit</a> </td>";
            echo "<td> <a href='../schedule/schedule.html?user=$data[national_id]'>Add Schedule</a></td>";
            echo "<td> <a href='DoctorDelete.php?national_id=$data[national_id]'>delete</a> </td>";

            echo "</tr>";
        
        }

?>

<?php 
       include_once("../dbConnection.php");
        //Read From Doctor
        $readSql = "SELECT * FROM users WHERE type='Doctor'"; 
        $readResult1 = mysqli_query($connection, $readSql);

        while($data = mysqli_fetch_array($readResult1)) {
            echo "<tr>";
            echo "<td>".$data["name"]."</td>";
            echo "<td>".$data["name"]."</td>";
            /*echo "<td>".$data["schedule.dayDate"]."</td>";
            echo "<td>".$data["schedule.start"]."</td>";
            echo "<td>".$data["schedule.end"]."</td>";
            echo "<td>".$data["schedule.room_no"]."</td>";*/
            echo "<td> <a href='editdoctor.html?national_id=$data[national_id]'>edit</a> </td>";
            echo "<td> <a href='../appointment/appointmentForm.html?user=$data[national_id]'>Add Schedule</a></td>";
            echo "</tr>";
        
        }

?>

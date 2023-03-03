
<?php
//Read From Prescription Table
        include_once("../dbConnection.php");

        $readSql = "select * from presusers order by prescription_time desc "; 
        $readResult = mysqli_query($connection, $readSql);
        
        while($data = mysqli_fetch_array($readResult)) {
            echo "<tr>";    
                echo "<td>".$data['appointment_id']."</td>";
                echo"<td>".$data['patienName']."</td>";
                echo" <td>".$data['departmentName']."</td>";
                echo" <td>".$data['doctorName']."</td>";
                echo "<td>".$data["prescription_time"]."</td>";
                echo "<td>".$data["followup_date"]."</td>";
                echo "<td> <a href='prescDelete.php?user=$data[appointment_id]'> Delete </a> </td>";
                echo "<td> <a href='prescUpdateForm.html?user=$data[appointment_id]'> Edit </a> </td>";
                echo "<td> <a href='prescriptionForm.php?user=$data[appointment_id]'> Edit </a> </td>";
            echo "</tr>";   }
      
  ?>

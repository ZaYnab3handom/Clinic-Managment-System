
<?php
//Read From Prescription Table
        include_once("../dbConnection.php");

        $readSql = "select * from presusers order by appointment_id desc "; 
        $readResult = mysqli_query($connection, $readSql);
        
        while($data = mysqli_fetch_array($readResult)) {
            echo "<tr>";    
                echo "<td>".$data['appointment_id']."</td>";
                echo"<td>".$data['patienName']."</td>";
                echo" <td>".$data['departmentName']."</td>";
                echo" <td>".$data['doctorName']."</td>";
                echo "<td>".$data["prescription_time"]."</td>";
                echo "<td>".$data["followup_date"]."</td>";
                echo "<td> <a href='prescDelete.php?user=$data[appointment_id]'> <i class='bi bi-trash-fill'></i> </a> </td>";
                echo "<td> <a href='prescUpdateForm.html?user=$data[appointment_id]'> <i class='bi bi-pencil-square'></i>  </a> </td>";
                echo "<td> <a href='prescUpdateForm.html?user=$data[appointment_id]'> <i class='bi bi-box-arrow-up-right'></i> </a> </td>";
            echo "</tr>";   }
      
  ?>

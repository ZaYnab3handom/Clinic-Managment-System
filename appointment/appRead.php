
<?php
//Read From appointmet Table
        include_once("../dbConnection.php");

        $readSql = "select * from appointmentusers order by datetime desc"; 
        $readResult = mysqli_query($connection, $readSql);
        while($data = mysqli_fetch_array($readResult)) {
            echo "<tr>";    
                echo "<td>".$data['id']."</td>";
                echo" <td>".$data['patienName']."</td>";
                echo "<td>".$data['doctorName']."</td>";
                echo "<td>".$data["departmentName"]."</td>";
                echo "<td>".$data["datetime"]."</td>";
                echo "<td>".$data["consultation_type"]."</td>";
                echo "<td>".$data["booked_online"]."</td>";
                echo "<td>".$data["state"]."</td>";
                echo "<td> <a href='../prsecription/prescriptionForm.html?appId=$data[id]'> <i class='bi bi-file-earmark-medical-fill'></i> </a> </td>";
                echo "<td> <a href='appDelete.php?user=$data[id]'>  <i class='bi bi-trash-fill'></i>  </a> </td>";
                echo "<td> <a href='appUpdateForm.html?user=$data[id]'> <i class='bi bi-pencil-square'></i>  </a> </td>";
                echo "<td> <a href='appUpdateForm.html?user=$data[id]'> <i class='bi bi-box-arrow-up-right'></i>  </a> </td>";

            echo "</tr>";  
            // print_r($data);
         }
        
  ?>

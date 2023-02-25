
<?php
//Read From Prescription Table
        include_once("../dbConnection.php");

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
                echo "<td> <a href='prescDelete.php?user=$data[id]'> Delete </a> </td>";
                echo "<td> <a href='prescEdit.php?user=$data[id]'> Edit </a> </td>";
                echo "<td> <a href='prescriptionForm.php?user=$data[id]'> Edit </a> </td>";
            echo "</tr>";   }
      
  ?>
<?php 
  
       include_once("../dbConnection.php");
        //Read From Patient
        $readSql = "select * from users"; 
        $readResult1 = mysqli_query($connection, $readSql);
        $readSql = "select * from patient"; 
        $readResult = mysqli_query($connection, $readSql);
        $data2 = mysqli_fetch_array($readResult);

        while($data = mysqli_fetch_array($readResult1)) {
            echo "<tr>";
            echo "<td>".$data["national_id"]."</td>";
            echo "<td>".$data["name"]."</td>";
            echo "<td>".$data["gender"]."</td>";
            echo "<td>".$data["mobile"]."</td>";
            $age= date('Y-m-d')-$data["birthDate"];
            echo "<td>".$age."</td>";
            echo "<td>".$data2["blood_type"]."</td>";

            echo "<td> <a href='delete'</a> </td>";
            echo "<td> <a href='edit'></a> </td>";

            echo "</tr>";
        
        }
      
       
   
    
           

?>
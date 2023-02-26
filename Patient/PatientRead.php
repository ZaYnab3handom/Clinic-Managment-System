<?php 
  
       include_once("../dbConnection.php");
        //Read From Patient
        $readSql = "select * from patient"; 
        $readResult = mysqli_query($connection, $readSql);
        while($data = mysqli_fetch_array($readResult)) {
            echo "<tr>";
            echo "<td>".$data["national-id"]."</td>";
            echo "<td>".$data["name"]."</td>";
            echo "<td>".$data["gender"]."</td>";
            echo "<td>".$data["mobile"]."</td>";
            echo "<td>".$data["age"]."</td>";
            echo "<td>".$data["blood type"]."</td>";

            echo "<td> <a href='delete.php?user=$data[id]'> <i class='bi bi-trash text-danger'></i> </a> </td>";
            echo "<td> <a href='edit.php?user=$data[id]'> <i class='bi bi-pencil-square text-warning'></i> </a> </td>";

            echo "</tr>";
        
        }
      
       
   
    
           

?>
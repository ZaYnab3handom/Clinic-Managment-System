<?php 
  
       include_once("../dbConnection.php");
        //Read From Patient
        $readSql = "SELECT * FROM users JOIN patient WHERE users.national_id=patient.user_id"; 
        $readResult1 = mysqli_query($connection, $readSql);
        $currentDate = date("d-m-Y");

        while($data = mysqli_fetch_array($readResult1)) {
            echo "<tr>";
            echo "<td>".$data["national_id"]."</td>";
            echo "<td>".$data["name"]."</td>";
            echo "<td>".$data["gender"]."</td>";
            echo "<td>".$data["mobile"]."</td>";
            $age = date_diff(date_create($data["birthDate"]), date_create($currentDate));
            echo "<td>".$age->format("%y")."</td>";
            echo "<td>".$data["blood_type"]."</td>";
            echo "<td> <a href='edit'></a> </td>";
            echo "<td> <a href='edit'></a> </td>";

            echo "</tr>";
        
        }

?>

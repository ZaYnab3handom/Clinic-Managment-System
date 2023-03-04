<?php 
  
       include_once("../dbConnection.php");
        //Read From Doctor
        $userSql = "SELECT * FROM users INNER JOIN adress ON users.national_id=adress.user_id 
        INNER JOIN doctor ON users.national_id=doctor.user_id
        INNER JOIN department ON doctor.department_id=department.id WHERE users.type='Doctor'"; 
        $userResult = mysqli_query($connection, $userSql);
        $Udata = mysqli_fetch_array($userResult)
        $adressSql = "SELECT * FROM users INNER JOIN adress ON users.national_id=adress.user_id 
        INNER JOIN doctor ON users.national_id=doctor.user_id
        INNER JOIN department ON doctor.department_id=department.id WHERE users.type='Doctor'"; 
        $Adata = mysqli_query($connection, $adressSql);
        $adressSql = "SELECT * FROM users INNER JOIN adress ON users.national_id=adress.user_id 
        INNER JOIN doctor ON users.national_id=doctor.user_id
        INNER JOIN department ON doctor.department_id=department.id WHERE users.type='Doctor'"; 
        $Adata = mysqli_query($connection, $adressSql);

        while($data = mysqli_fetch_array($readResult1)) {
            echo "<tr>";
            echo "<td>".$data["users.name"]."</td>";
            echo "<td>".$data["department.name"]."</td>";
            echo "<td>".$data["schedule.dayDate"]."</td>";
            echo "<td>".$data["schedule.start"]."</td>";
            echo "<td>".$data["schedule.end"]."</td>";
            echo "<td>".$data["schedule.room_no"]."</td>";
            echo "<td> <a href='doctorUpdateForm.html?id=$data[user_id]'>edit</a> </td>";
            echo "<td> <a href='../appointment/appointmentForm.html?user=$data[user_id]'>Add Schedule</a></td>";
            echo "</tr>";
        
        }

?>

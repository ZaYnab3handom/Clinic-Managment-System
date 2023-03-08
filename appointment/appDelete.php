<?php 
if(isset( $_SESSION['NId']) && $_SESSION['userType']!='Patient'  ){ 

     include_once("../dbConnection.php");
    $id = $_GET["user"];
    //delet the prescription
     $sql = "delete from appointment where id = $id"; 
     $result = mysqli_query($connection, $sql);

     //delete the related prescription line
     //done By cascading Delete
     header("Location:appointmentList.html");
} else{
     header("Location: ../login.html?acesserror=Access Denied Please Log In");
   } 
     
 

    ?>

<?php
if(isset( $_SESSION['NId']) && $_SESSION['userType']!='patient'  ){ 

$SID = $_GET["sId"];

        include_once("../dbConnection.php");

        $readSql = "select * from schedule inner Join Users on doctor_id=national_id WHERE id=$SID"; 
        $readResult = mysqli_query($connection, $readSql);
        $Sdata = mysqli_fetch_array($readResult);
        if(isset($_POST["savebtn"])){
        $dayDate = $_POST["dayDate"];
        $start = $_POST["start"];
        $end = $_POST["end"];

        $sql = "update schedule set dayDate='$dayDate', start='$start' , end='$end' WHERE id=$SID";
        $result = mysqli_query($connection, $sql);
        }
      }else{
            header("Location: ../login.html?acesserror=Access Denied Please Log In");
          }  
  ?>

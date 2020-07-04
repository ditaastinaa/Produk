<?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "root", "", "ta");  
 if(isset($_POST["id_trayek"]))  
 {  
      $query = "SELECT * FROM data_trayek WHERE id_trayek = '".$_POST["id_trayek"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>
 
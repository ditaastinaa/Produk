<?php
// include database connection file
include_once("../../dbconfig.php");
 
// Get id from URL to delete that user
$id_trayek = $_GET['id_trayek'];
 
// Delete user row from table based on given id
$result = mysqli_query($connect, "UPDATE data_trayek SET keterangan = 'DISETUJUI' WHERE id_trayek=$id_trayek");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:data_trayek.php");
?>
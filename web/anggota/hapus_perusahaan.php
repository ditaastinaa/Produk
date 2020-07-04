<?php
// include database connection file
include '../../dbconfig.php';
 
// Get id from URL to delete that user
$id_perusahaan = $_GET['id_perusahaan'];
 
// Delete user row from table based on given id
$result = mysqli_query($connect, "DELETE FROM data_perusahaan WHERE id_perusahaan=$id_perusahaan");
 
// After delete redirect to Home, so that latest user list will be displayed.
echo "<script>alert('Data berhasil dihapus')</script>";
header('Refresh: 0; URL=perusahaan.php');
?>
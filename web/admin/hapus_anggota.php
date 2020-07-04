<?php
session_start()
if(!isset($_SESSION['id_admin'])) header("location:../../index.php");
// include database connection file
include_once("../../dbconfig.php");
 
// Get id from URL to delete that user
$id_anggota = $_GET['id_anggota'];
 
// Delete user row from table based on given id
$result = mysqli_query($connect, "DELETE FROM user_anggota WHERE id_anggota='$id_anggota'");
 
// After delete redirect to Home, so that latest user list will be displayed.
echo "<script>alert('Data berhasil dihapus')</script>";
header('Refresh: 0; URL=anggota.php');
?>
<?php
include("../../dbconfig.php");
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$query = mysqli_query($connect, "SELECT * FROM data_perusahaan WHERE namaperusahaan = '$id'");
	$data = mysqli_fetch_array($query);
	$arr = array($data['kedudukan'],$data['alamat'],$data['pimpinan']);
	echo json_encode($arr);
}
?>
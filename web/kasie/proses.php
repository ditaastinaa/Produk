<?php
include("../../dbconfig.php");
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$query = mysqli_query($connect, "SELECT * FROM data_kapal WHERE namakapal = '$id'");
	$data = mysqli_fetch_array($query);
	$arr = array($data['bendera'],$data['kapasitas'],$data['bahan'],$data['tahun']);
	echo json_encode($arr);
}
?>
<?php
include("../../dbconfig.php");
$id = $_POST['id'];
?>
<select name="pelabuhan" id="pelabuhan">
	<option value="">- Pilih Pelabuhan -</option>
	<?php
		$sql_pelabuhan = mysqli_query($connect, "SELECT * FROM data_pelabuhan WHERE jenis = '$id'") or die(mysqli_error($connect));
		while ($user_data = mysqli_fetch_array($sql_pelabuhan)) {
			echo '<option value = "'.$user_data['nama_pel'].'">'.$user_data['nama_pel'].'</option>';
			}
	?>
</select>
<?php
include("../../dbconfig.php");
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$kapal = mysqli_query($connect, "SELECT * FROM data_kapal WHERE namaperusahaan = '$id'");
?>
	<select name='nama'>
		<option value="">Pilih Kapal</option>
		<?php while($data = mysqli_fetch_array($kapal)){ ?>
			<option value="<?php echo $data['namakapal']; ?>"><?php echo $data['namakapal']; ?></option>
		<?php } ?>
	</select>
	
	<script>
		$("select[name=nama]").on("change", function(){
			var kapal = $(this).val();
			$.ajax({
				type: "POST",
				url: "proses.php",
				data: {
					id : kapal
				}
			}).done(function(msg){
				var res = JSON.parse(msg);
				$("input[name=bendera]").val(res[0]).attr("readonly","readonly");
				$("input[name=kapasitas]").val(res[1]).attr("readonly","readonly");
				$("input[name=bahan]").val(res[2]).attr("readonly","readonly");
				$("input[name=tahun]").val(res[3]).attr("readonly","readonly");
			})
		});
	</script>
<?php }
?>
<?php  
 $connect = mysqli_connect("localhost", "root", "", "ta");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $nama = mysqli_real_escape_string($connect, $_POST["nama"]);  
      $namaperusahaan = mysqli_real_escape_string($connect, $_POST["namaperusahaan"]);  
      $tujuan = mysqli_real_escape_string($connect, $_POST["tujuan"]);  
      $berangkat = mysqli_real_escape_string($connect, $_POST["berangkat"]);
	  $pelabuhan = mysqli_real_escape_string($connect, $_POST["pelabuhan"]);	  
      $keterangan = mysqli_real_escape_string($connect, $_POST["keterangan"]); 
	  $kapasitas = mysqli_real_escape_string($connect, $_POST["kapasitas"]); 
	  $jumlah = mysqli_real_escape_string($connect, $_POST["jumlah"]);	  
      $p_faktor = $jumlah / $kapasitas * 100; 	  
      if($_POST["id"] != '')  
      {  
           $query = "  
           UPDATE data_trayek   
           SET nama='$nama',   
           namaperusahaan='$namaperusahaan',   
           tujuan='$tujuan',
		   pelabuhan='$pelabuhan',
           jumlah = '$jumlah',
		   p_faktor='$p_faktor',
           berangkat = '$berangkat',
		   kapasitas = '$kapasitas',
           keterangan = '$keterangan'   
           WHERE id_trayek='".$_POST["id"]."'";  
           $message = 'Data Updated';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM data_trayek ORDER BY id_trayek DESC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
						  <th>Nama Kapal</th>
						  <th>Tujuan</th>
						  <th>Jam Keberangkatan</th>
						  <th>Keterangan</th>
						  <th>View</th>
						  <th>Edit</th>
						  <th>Action</th>					    
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))   
           {
                $output .= '  
                     <tr>  
							<td>' . $row["nama"] . '</td>
							<td>' . $row["tujuan"] . '</td>
							<td>' . $row["berangkat"] . '</td>
							<td>' . $row["keterangan"] . '</td>
							<td align="center"><input type="button" name="view" value="&#xf06e" id="' . $row["id_trayek"]. '"  class="fa fa-eye view_data btn btn-primary" />
							<td align="center"><input type="button" name="edit" value="&#xf044" id="' . $row["id_trayek"]. '"  class="fa fa-edit btn btn-info  edit_data" />
							</td>
							<td>';
							  if($row["keterangan"] != "DISETUJUI"){
								  $output .= '<a href="approve.php?id_trayek=' . $row["id_trayek"]. '" class="btn btn-success"><span class="fa fa-check"></span></a>';
							  }
							$output .= '<a href="hapus_trayek.php?id_trayek=' . $row["id_trayek"]. '" class="btn btn-danger" onclick="return confirm("Anda yakin mau menghapus item ini ?")""><span class="fa fa-trash"></span></a>
							</td>
					</tr>';
				 
           }
           $output .= '</table>';  
      }  
      echo $output;  
 }
 ?>
 <script>
 $('.view_data').click(function(){
     // membuat variabel id, nilainya dari attribut id pada button
     // id="'.$row['id'].'" -> data id dari database ya sob, jadi dinamis nanti id nya
     var id = $(this).attr("id");
     
     // memulai ajax
     $.ajax({
          url: 'detail_trayek.php',	// set url -> ini file yang menyimpan query tampil detail data siswa
          method: 'post',		// method -> metodenya pakai post. Tahu kan post? gak tahu? browsing aja :)
          data: {id_trayek:id},		// nah ini datanya -> {id:id} = berarti menyimpan data post id yang nilainya dari = var id = $(this).attr("id");
          success:function(data){		// kode dibawah ini jalan kalau sukses
               $('#trayek_detail').html(data);	// mengisi konten dari -> <div class="modal-body" id="data_siswa">
               $('#dataModal').modal("show");	// menampilkan dialog modal nya
          }
     });
});
 </script>
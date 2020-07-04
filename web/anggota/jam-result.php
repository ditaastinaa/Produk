<?php
include("../../dbconfig.php");
$id = $_POST['id'];
$jam_sebelum = date("H:i:s", strtotime($id)-60*60);
$jam_sesudah = date("H:i:s", strtotime($id)+60*60);
$query = mysqli_query($connect, "SELECT berangkat,nama,pelabuhan FROM data_trayek WHERE berangkat BETWEEN '$jam_sebelum' AND '$jam_sesudah'");
$query2 = mysqli_query($connect, "SELECT berangkat,nama,pelabuhan FROM data_trayek WHERE berangkat = '$id%'");
?>
<div class="row" style="font-size: 12px;">
    <div class="col-6 table-responsive">
        <div class="text-center"><b>Kapal yang Sama</b></div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Jam Berangkat</th>
                    <th>Nama Kapal</th>
                    <th>Nama Pelabuhan</th>
                </tr>
            </thead>
            <tbody>
                <?php while($data=mysqli_fetch_array($query)){ ?>
                <tr>
                    <td><?php echo date('H:i', strtotime ($data['berangkat'])); ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['pelabuhan']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-6 table-responsive">
        <div class="text-center"><b>Trayek di Jam yang Sama</b></div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Jam Berangkat</th>
                    <th>Nama Kapal</th>
                    <th>Nama Pelabuhan</th>
                </tr>
            </thead>
            <tbody>
                <?php while($data=mysqli_fetch_array($query2)){ ?>
                <tr>
                    <td><?php echo date('H:i', strtotime ($data['berangkat'])); ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['pelabuhan']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
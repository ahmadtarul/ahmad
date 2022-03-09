
<?php
	include 'koneksi.php';
	$id_catatan = $_GET['id_catatan'];
	$data = mysqli_query($koneksi,"select * from catatan where id_catatan='$id_catatan'");
	while($d = mysqli_fetch_array($data)){
		?>
	
<div class="card">
    <div class="card-header">
        <a href="user.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                 <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>

	

    <div class="card-body">
        <form method="post" action="update_catatan.php">
            <div class="form-group">
               <label>Tanggal Perjalanan</label> 
               <input name="tanggal" class="form-control" type="date" value="<?php echo $d['tanggal']; ?>" required>
            </div>
            <div class="form-group">
               <label>Waktu Perjalanan</label> 
               <input name="waktu" class="form-control" type="time" value="<?php echo $d['waktu']; ?>" required>
            </div>
            <div class="form-group"> 
               <label>Lokasi Perjalanan</label> 
               <input name="lokasi" class="form-control" type="text" value="<?php echo $d['lokasi']; ?>" required>
            </div>
            <div class="form-group">
               <label>Suhu Tubuh</label> 
               <input name="suhu" class="form-control" type="text" value="<?php echo $d['suhu']; ?>" required>
            </div>
            <div class="form-group">
                <button type="submit" value="simpan" class="btn btn-primary"><i class="fa fa-save"></i>SIMPAN</button>
                <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i>KOSONGKAN</button>
            </div>
        </form>
    </div>
</div>
<?php 
	}
	?>
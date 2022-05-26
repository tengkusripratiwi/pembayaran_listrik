
<!DOCTYPE html>
<html>
<head>
	<?php include('head_ref.php') ?>
</head>
<body>
	<?php include('nav.php') ?>
	<?php include('header.php') ?>
	<p>
	<h3>Edit Penggunaan</h3>

	<?php 
		$id=$_GET['id'];
		include "koneksi.php";
		$no=1;
		$data=mysqli_query($koneksi, "select *, penggunaans.id id_penggunaan from penggunaans INNER JOIN pelanggans ON penggunaans.pelanggan_id=pelanggans.id WHERE penggunaans.id='$id'");
		$hasil=mysqli_fetch_array($data);

	 ?>

	<a href="penggunaan.php"><button>Kembali</button></a>

	<form method="post" action="action/simp_edit_penggunaan.php">
		<table>
			<tr>
			
				<td><input type="hidden" name="id" required value="<?php echo $id; ?>"></td>
			</tr>

			<tr>
				<td>Nama Pelanggan</td>
				<td>:</td>
				<td>
					<select name="pelanggan_id">
						<option value="">pilih nama pelanggan</option>
						<?php
						include "koneksi.php"; 
							$pelanggan="select*from pelanggans";
							$q_pelanggan=mysqli_query($koneksi,$pelanggan);
							while($h_pelanggan=mysqli_fetch_assoc($q_pelanggan)){
						 ?>
						 <option value="<?php echo $h_pelanggan['id']; ?>"<?php if($h_pelanggan['id']==$hasil['pelanggan_id'])echo "selected"; ?>>
						 	<?php echo $h_pelanggan['nama_pelanggan']; ?>
						 </option>	
						<?php } ?>	
						
					</select>
				</td>
			</tr>

			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><input type="date" name="tanggal" required value="<?php echo $hasil['tanggal']; ?>"></td>
			</tr>

			<tr>
				<td>Meter Awal</td>
				<td>:</td>
				<td><input type="varchar" name="meter_awal" required value="<?php echo $hasil['meter_awal']; ?>"></td>
			</tr>

			<tr>
				<td>Meter Akhir</td>
				<td>:</td>
				<td><input type="varchar" name="meter_akhir" required value="<?php echo $hasil['meter_akhir']; ?>"></td>
			</tr>

			

			<tr>
				<td></td>
				<td></td>
				<td>
					<button type="submit">Simpan</button>
					<button type="reset">Reset</button>
				</td>
			</tr>
		</table>		
	</form>
<p>
<?php include('footer.php') ?>
<?php include('js.php') ?>
</body>
</html>
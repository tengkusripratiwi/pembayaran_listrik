<!DOCTYPE html>
<html>
<head>
	<?php include('head_ref.php') ?>
</head>
<body>
	<?php include('nav.php') ?>
	<?php include('header.php') ?>
	<p>
	<h3>Tambah Tagihan</h3>
	<a href="pelanggan.php"><button>Kembali</button></a>

	<form method="post" action="action/simp_tagihan.php">
		<table>
			<tr>
				
				<td><input type="hidden" name="id" required></td>
			</tr>

			<tr>
				<td>Meter Awal</td>
				<td>:</td>
				<td>
					<select name="penggunaan_id">
						<option value="">pilih Meter awal</option>
						<?php
						include "koneksi.php"; 
							$penggunaan="select*from penggunaans";
							$q_penggunaan=mysqli_query($koneksi,$penggunaan);
							while($h_penggunaan=mysqli_fetch_assoc($q_penggunaan)){
						 ?>
						 <option value="<?php echo $h_penggunaan['id']; ?>">
						 	<?php echo $h_penggunaan['meter_awal']; ?>
						 </option>	
						<?php } ?>	
						
					</select>
				</td>
			</tr>

			<tr>
				<td>Meter Akhir</td>
				<td>:</td>
				<td>
					<select name="penggunaan_id">
						<option value="">pilih Meter Akhir</option>
						<?php
						include "koneksi.php"; 
							$penggunaan="select*from penggunaans";
							$q_penggunaan=mysqli_query($koneksi,$penggunaan);
							while($h_penggunaan=mysqli_fetch_assoc($q_penggunaan)){
						 ?>
						 <option value="<?php echo $h_penggunaan['id']; ?>">
						 	<?php echo $h_penggunaan['meter_akhir']; ?>
						 </option>	
						<?php } ?>	
						
					</select>
				</td>
			</tr>

			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><input type="date" name="tanggal" required></td>
			</tr>

			<tr>
				<td>Jumlah Meter</td>
				<td>:</td>
				<td><input type="varchar" name="jumlah_meter" required></td>
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
<!DOCTYPE html>
<html>
<head>
<?php include('head_ref.php') ?>
</head>
<body>

<?php include('nav.php') ?>
<?php include('header.php') ?>
<p>
	<h3>Tambah Pelanggan</h3>
	<a href="pelanggan.php"><button>Kembali</button></a>

	<form method="post" action="action/simp_pelanggan.php">
		<table>
			<tr>
				
				<td><input type="hidden" name="id" required></td>
			</tr>

			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="varchar" name="username" required></td>
			</tr>

			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" required></td>
			</tr>

			<tr>
				<td>Nomor Kwh</td>
				<td>:</td>
				<td><input type="varchar" name="nomor_kwh" required></td>
			</tr>

			<tr>
				<td>Nama Pelanggan</td>
				<td>:</td>
				<td><input type="varchar" name="nama_pelanggan" required></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="varchar" name="alamat" required></td>
			</tr>

			<tr>
				<td>Daya</td>
				<td>:</td>
				<td>
					<select name="tarif_id">
						<option value="">pilih daya</option>
						<?php
						include "koneksi.php"; 
							$tarif="select*from tarifs";
							$q_tarif=mysqli_query($koneksi,$tarif);
							while($h_tarif=mysqli_fetch_assoc($q_tarif)){
						 ?>
						 <option value="<?php echo $h_tarif['id']; ?>">
						 	<?php echo $h_tarif['daya_tarifperkwh']; ?>
						 </option>	
						<?php } ?>	
						
					</select>
				</td>
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
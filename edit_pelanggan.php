
<!DOCTYPE html>
<html>
<head>
	<?php include('head_ref.php') ?>
</head>
<body>
<?php include('nav.php') ?>
<?php include('header.php') ?>
<p>
	<h1 style="text-align: center;">Edit pelanggan</h1>

	<!-- edit pelanggan -->
	
	<?php 
		$id=$_GET['id'];
		include 'koneksi.php';
		$no=1;
		$data=mysqli_query($koneksi, "select *, tarifs.id id_tarif, pelanggans.id id_pelanggan from pelanggans INNER JOIN tarifs ON pelanggans.tarif_id=tarifs.id WHERE pelanggans.id='$id'");
			$hasil=mysqli_fetch_array($data);
	?>
			

	<a href="pelanggan.php"><button>Kembali</button></a>

	<form method="post" action="action/simp_edit_pelanggan.php">
		<table>
			<tr>
				
				<td><input type="hidden" name="id" required value="<?php echo $id;  ?>"></td>
			</tr>

			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="varchar" name="username" required value="<?php echo $hasil['username'];  ?>"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="varchar" name="password" required value="<?php echo $hasil['password'];  ?>"></td>
			</tr>

			<tr>
				<td>Nomor Kwh</td>
				<td>:</td>
				<td><input type="varchar" name="nomor_kwh" required value="<?php echo $hasil['nomor_kwh'];  ?>"></td>
			</tr>

			<tr>
				<td>Nama Pelanggan</td>
				<td>:</td>
				<td><input type="varchar" name="nama_pelanggan" required value="<?php echo $hasil['nama_pelanggan'];  ?>"></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="varchar" name="alamat" required value="<?php echo $hasil['alamat'];  ?>"></td>
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
						 <option value="<?php echo $h_tarif['id']; ?>" <?php if($h_tarif['id']==$hasil['id_tarif']) echo "selected"; ?>>
						 	<?php echo $h_tarif['daya_tarifperkwh']; ?>
						 </option>	
						<?php } ?>	
						
					</select>
				</td>
			</tr>


			
				<td></td>
				<td></td>
				<td>
					<button type="submit">Simpan</button>
					<button type="reset">Reset</button>
				</td>
			<
		</table>		
	</form>
<p>
<?php include('footer.php') ?>
<?php include('js.php') ?>


</body>
</html>
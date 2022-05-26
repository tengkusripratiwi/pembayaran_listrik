<!DOCTYPE html>
<html>
<head>
	<?php include('head_ref.php') ?>
</head>
<body>
<?php include('nav.php') ?>
<?php include('header.php') ?>
<p>
	<h3>Tambah Pembayaran</h3>
	<a href="Pembayaran.php"><button>Kembali</button></a>

	<form method="post" action="action/simp_pembayaran.php">
		<table>
			<tr>
				
				<td><input type="hidden" name="id" required></td>
			</tr>

			<tr>
				<td>Jumlah Meter</td>
				<td>:</td>
				<td>
					<select name="tagihan_id">
						<option value="">pilih Jumlah Meter</option>
						<?php
						include "koneksi.php"; 
							$tagihan="select*from tagihans";
							$q_tagihan=mysqli_query($koneksi,$tagihan);
							while($h_tagihan=mysqli_fetch_assoc($q_tagihan)){
						 ?>
						 <option value="<?php echo $h_tagihan['id']; ?>">
						 	<?php echo $h_tagihan['jumlah_meter']; ?>
						 </option>	
						<?php } ?>	
						
					</select>
				</td>
			</tr>

			<tr>
				<td>Tanggal Pembayaran</td>
				<td>:</td>
				<td><input type="date" name="tanggal_pembayaran" required></td>
			</tr>

			<tr>
				<td>Biaya Admin</td>
				<td>:</td>
				<td><input type="varchar" name="biaya_admin" required></td>
			</tr>

			<tr>
				<td>Total Bayar</td>
				<td>:</td>
				<td><input type="varchar" name="total_bayar" required></td>
			</tr>

			<tr>
				<td>Admin</td>
				<td>:</td>
				<td>
					<select name="admin_id">
						<option value="">pilih nama admin</option>
						<?php
						include "koneksi.php"; 
							$admin="select*from admins";
							$q_admin=mysqli_query($koneksi,$admin);
							while($h_admin=mysqli_fetch_assoc($q_admin)){
						 ?>
						 <option value="<?php echo $h_admin['id']; ?>">
						 	<?php echo $h_admin['nama_admin']; ?>
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
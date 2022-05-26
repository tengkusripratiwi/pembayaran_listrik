<!DOCTYPE html>
<html>
<head>
	<?php include('head_ref.php') ?>
</head>
<body>
	<?php include('nav.php') ?>
	<?php include('header.php') ?>
	<p>
	<h3>Edit Pembayaran</h3>
	<?php
		$id=$_GET['id']; 
		include 'koneksi.php';
		$no=1;
		$data=mysqli_query($koneksi,"select *, admins.id id_admin, tagihans.id id_tagihan, pembayarans.id id_pembayaran from pembayarans INNER JOIN tagihans ON pembayarans.tagihan_id=tagihans.id INNER JOIN admins ON pembayarans.admin_id=admins.id WHERE pembayarans.id='$id'");
		$hasil=mysqli_fetch_array($data);


	 ?>


	<a href="Pembayaran.php"><button>Kembali</button></a>

	<form method="post" action="action/simp_edit_pembayaran.php">
		<table>
			<tr>	
				
				<td><input type="hidden" name="id" required value="<?php echo $id; ?>"></td>
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
						 <option value="<?php echo $h_tagihan['id']; ?>" <?php if($h_tagihan['id']==$hasil['id_tagihan']) echo "selected" ?>>
						 	<?php echo $h_tagihan['jumlah_meter']; ?>
						 </option>	
						<?php } ?>	
						
					</select>
				</td>
			</tr>

			<tr>
				<td>Tanggal Pembayaran</td>
				<td>:</td>
				<td><input type="date" name="tanggal_pembayaran" required value="<?php echo $hasil['tanggal_pembayaran']; ?>"></td>
			</tr>

			<tr>
				<td>Biaya Admin</td>
				<td>:</td>
				<td><input type="varchar" name="biaya_admin" required value="<?php echo $hasil['biaya_admin']; ?>"></td>
			</tr>

			<tr>
				<td>Total Bayar</td>
				<td>:</td>
				<td><input type="varchar" name="total_bayar" required value="<?php echo $hasil['total_bayar']; ?>"></td>
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
						 <option value="<?php echo $h_admin['id']; ?>" <?php if($h_admin['id']==$hasil['id_admin']) echo "selected"; ?>>
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
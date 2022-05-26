<!DOCTYPE html>
<html>
<head>
	<?php include('head_ref.php') ?>
</head>
<body>
	<?php include('nav.php') ?>
	<?php include('header.php') ?>
	<p>
	<h3>Edit Tagihan</h3>

	<?php 
		$id=$_GET['id'];
		include "koneksi.php";
		$no=1;
		$data=mysqli_query($koneksi, "select *, tagihans.id id_tagihan from tagihans INNER JOIN penggunaans ON tagihans.penggunaan_id=penggunaans.id WHERE tagihans.id='$id'");
		$hasil=mysqli_fetch_array($data);

	 ?>


	<a href="tagihan.php"><button>Kembali</button></a>

	<form method="post" action="action/simp_edit_tagihan.php">
		<table>
			<tr>
				
				<td><input type="hidden" name="id" required value="<?php echo $id; ?>"></td>
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
						 <option value="<?php echo $h_penggunaan['id']; ?>"<?php if($h_penggunaan['id']==$hasil['penggunaan_id']) echo "selected"; ?>>
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
						 <option value="<?php echo $h_penggunaan['id']; ?>"<?php if($h_penggunaan['id']==$hasil['penggunaan_id']) echo "selected"; ?>>
						 	<?php echo $h_penggunaan['meter_akhir']; ?>
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
				<td>Jumlah Meter</td>
				<td>:</td>
				<td><input type="varchar" name="jumlah_meter" required value="<?php echo $hasil['jumlah_meter']; ?>"></td>
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
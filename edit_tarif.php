<!DOCTYPE html>
<html>
<head>
	<?php include('head_ref.php') ?>
</head>
<body>
	<?php include('nav.php') ?>
	<?php include('header.php') ?>
	<p>
	<h3>Edit Tarif</h3>

	<!-- edit tarif -->
	<?php 
		$id=$_GET['id'];
		include "koneksi.php";
		$no=1;
		$data=mysqli_query($koneksi, "select * from tarifs WHERE tarifs.id='$id'");
		$hasil=mysqli_fetch_array($data);

	 ?>


	<a href="tarif.php"><button>Kembali</button></a>

	<form method="post" action="action/simp_edit_tarif.php">
		<table>
			<tr>
				<td><input type="hidden" name="id" required value="<?php echo $id; ?>"></td>
			</tr>

			<tr>
				<td>Daya Tarif PerKwh</td>
				<td>:</td>
				<td><input type="varchar" name="daya_tarifperkwh" required value="<?php echo $hasil['daya_tarifperkwh']; ?>"></td>
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

<?php include('footer.php') ?>
<?php include('js.php') ?>
</body>
</html>
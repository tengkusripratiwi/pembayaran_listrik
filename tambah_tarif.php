<!DOCTYPE html>
<html>
<head>
	<?php include('head_ref.php') ?>
</head>
<body>
	<?php include('nav.php') ?>
	<?php include('header.php') ?>
	<p>
	<h3>Tambah Tarif</h3>
	<a href="tarif.php"><button>Kembali</button></a>

	<form method="post" action="action/simp_tarif.php">
		<table>
			<tr>
				
				<td><input type="hidden" name="id" required></td>
			</tr>

			<tr>
				<td>Daya Tarif PerKwh</td>
				<td>:</td>
				<td><input type="varchar" name="daya_tarifperkwh" required></td>
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
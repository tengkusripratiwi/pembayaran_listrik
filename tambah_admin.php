<!DOCTYPE html>
<html>
<head>
	<?php include('head_ref.php') ?>
</head>
<body>
	<?php include('nav.php') ?>
	<?php include('header.php') ?>
	<p>
	<h3>Tambah Admin</h3>
	<a href="admin.php"><button>Kembali</button></a>

	<form method="post" action="action/simp_admin.php">
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
				<td>Nama Admin</td>
				<td>:</td>
				<td><input type="varchar" name="nama_admin" required></td>
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
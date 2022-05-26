
<!DOCTYPE html>
<html>
<head>
	<?php include('head_ref.php') ?>
</head>
<body>
	<?php include('nav.php') ?>
	<?php include('header.php') ?>
	<p>
	<h3>Edit Admin</h3>

	<?php
		$id=$_GET['id']; 
		include 'koneksi.php';
		$no=1;
		$data=mysqli_query($koneksi,"select * from admins WHERE admins.id='$id'");
		$hasil=mysqli_fetch_array($data);


	 ?>

	<a href="admin.php"><button>Kembali</button></a>

	<form method="post" action="action/simp_edit_admin.php">
		<table>
			<tr>
				<td><input type="varchar" name="id" required value="<?php echo $id; ?>"></td>
			</tr>

			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="varchar" name="username" required value="<?php echo $hasil['username']; ?>"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" required value="<?php echo $hasil['password']; ?>"></td>
			</tr>

			<tr>
				<td>Nama Admin</td>
				<td>:</td>
				<td><input type="varchar" name="nama_admin" required value="<?php echo $hasil['nama_admin']; ?>"></td>
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
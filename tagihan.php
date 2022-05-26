<!DOCTYPE html>
<html>
<head>
		<?php include('head_ref.php'); ?>
		<?php include('css.php'); ?>
</head>
<body>
	<?php include('nav.php'); ?>
	<?php include('header.php') ?>

	<h1 style="text-align: center;">Tabel Tagihan</h1>
	<!-- tambah pelanggan  -->
	
		<a class='btn btn-success' href="tambah_tagihan.php">Tambah</a>
	

	<!-- cari pelanggan -->
	<form action="tagihan.php" method="post" style="float: right;">
		<input type="text" placeholder="cari jumlah meter" name="search">
		<button class="btn btn-primary md-2" type="submit">cari</button>
	</form>

	<!-- data pelanggan -->
	<table cellpadding="1" cellspacing="0" border="1" width="100%" class="table table-striped table-bordered">
		<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Meter Awal</th>
			<th>Meter Akhir</th>				
			<th>Jumlah Meter</th>
			<th>Hapus/Edit</th>
		</tr>
		</thead>

		<?php 
			include 'koneksi.php';
			$query =  "select *, penggunaans.id id_penggunaan, tagihans.id id_tagihan,tagihans.tanggal tgl_tagihan from tagihans INNER JOIN penggunaans ON tagihans.penggunaan_id=penggunaans.id";
			if(isset($_POST['search'])){
				$query = "select *, penggunaans.id id_penggunaan, tagihans.id id_tagihan,tagihans.tanggal tgl_tagihan from tagihans INNER JOIN penggunaans ON tagihans.penggunaan_id=penggunaans.id WHERE tagihans.jumlah_meter LIKE '%$_POST[search]%'";
			}

			$no=1;
			$data=mysqli_query($koneksi, $query);
			while($d=mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['tgl_tagihan'] ?></td>
				<td><?php echo $d['meter_awal'] ?></td>
				<td><?php echo $d['meter_akhir'] ?></td>			
				<td><?php echo $d['jumlah_meter'] ?></td>
				<td>
					<a class='btn btn-warning' href="edit_tagihan.php?id=<?php echo $d['id_tagihan']; ?>">Edit</a>
					<a class='btn btn-danger' href="action/hapus_tagihan.php?acuan=<?php echo $d['id_tagihan']; ?>">Hapus</a>
				</td>
			</tr>
			<?php
			}
		 ?>

	</table>
<?php include('footer.php'); ?>	
<?php include('js.php'); ?>
</body>
</html>
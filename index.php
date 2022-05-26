<!DOCTYPE html>
<html>
<head>
	<?php include('head_ref.php'); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php include('css.php') ?>
</head>
<body>
<?php include('nav.php') ?>
<?php include('header.php') ?>


	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col">

					<div class="col">
            			<div class="label">Dashboard</div>
          			</div>

					<div class="row">

						<div class="col" align="center" style="background-color: #1233aeee; color: white;">
							Data Tarif
							 <?php
							 include 'koneksi.php';
				              $sql_tarif = "select * from tarifs";
				              $q_tarif = mysqli_query($koneksi,$sql_tarif)or die("Gagl Data Tarif");
				              $jumlah_tarif = mysqli_num_rows($q_tarif);
				            ?>
				            <p><?php echo $jumlah_tarif; ?></p>	
						</div>

						<div class="col" align="center" style="background-color: #1233aeee; color: white;">
							Data Pelanggan
							 <?php
							 include 'koneksi.php';
				              $sql_pelanggan = "select *, tarifs.id id_tarif, pelanggans.id id_pelanggan from pelanggans INNER JOIN tarifs ON pelanggans.tarif_id=tarifs.id";
				              $q_pelanggan = mysqli_query($koneksi,$sql_pelanggan)or die("Gagl Data Pelanggan");
				              $jumlah_pelanggan = mysqli_num_rows($q_pelanggan);
				            ?>
				            <p><?php echo $jumlah_pelanggan; ?></p>	
						</div>

						<div class="col" align="center" style="background-color: #1233aeee; color: white;">
							Data Penggunaan
							 <?php
							 include 'koneksi.php';
				              $sql_penggunaan = "select *, pelanggans.id id_pelanggan, penggunaans.id id_penggunaan from penggunaans INNER JOIN pelanggans ON penggunaans.pelanggan_id=pelanggans.id";
				              $q_penggunaan = mysqli_query($koneksi,$sql_penggunaan)or die("Gagl Data Tarif");
				              $jumlah_penggunaan = mysqli_num_rows($q_penggunaan);
				            ?>
				            <p><?php echo $jumlah_penggunaan; ?></p>	
						</div>

						<div class="col" align="center" style="background-color: #1233aeee; color: white;">
							Data Tagihan
							 <?php
							 include 'koneksi.php';
				              $sql_tagihan = "select *, penggunaans.id id_penggunaan, tagihans.id id_tagihan,tagihans.tanggal tgl_tagihan from tagihans INNER JOIN penggunaans ON tagihans.penggunaan_id=penggunaans.id";
				              $q_tagihan = mysqli_query($koneksi,$sql_tagihan)or die("Gagl Data Tarif");
				              $jumlah_tagihan = mysqli_num_rows($q_tagihan);
				            ?>
				            <p><?php echo $jumlah_tagihan; ?></p>	
						</div>


						<div class="col" align="center" style="background-color: #1233aeee; color: white;">
							Data Pembayaran
							 <?php
							 include 'koneksi.php';
				              $sql_pembayaran = "select *, admins.id id_admin, tagihans.id id_tagihan, pembayarans.id id_pembayaran from pembayarans INNER JOIN tagihans ON pembayarans.tagihan_id=tagihans.id INNER JOIN admins ON pembayarans.admin_id=admins.id";
				              $q_pembayaran = mysqli_query($koneksi,$sql_pembayaran)or die("Gagl Data Tarif");
				              $jumlah_pembayaran = mysqli_num_rows($q_pembayaran);
				            ?>
				            <p><?php echo $jumlah_pembayaran; ?></p>	
						</div>

						<div class="col" align="center" style="background-color: #1233aeee; color: white;">
							Data Admin
							 <?php
							 include 'koneksi.php';
				              $sql_admin = "select * from admins";
				              $q_admin = mysqli_query($koneksi,$sql_admin)or die("Gagl Data admin");
				              $jumlah_admin = mysqli_num_rows($q_admin);
				            ?>
				            <p><?php echo $jumlah_admin; ?></p>	
						</div>

						 <p>

				          <div class="row">
				         Aplikasi Pembayaran Listrik merupakan aplikasi sederhana untuk memudahkan pelanggan melakukan pembayaran dengan  mudah. Dengan adanya aplikasi ini, pelanggan mudah untuk membayara listrik dimana saja dan kapan saja.Aplikasi Pembayaran Listrik merupakan aplikasi sederhana untuk memudahkan pelanggan melakukan pembayaran dengan  mudah. Dengan adanya aplikasi ini, pelanggan mudah untuk membayara listrik dimana saja dan kapan saja.Aplikasi Pembayaran Listrik merupakan aplikasi sederhana untuk memudahkan pelanggan melakukan pembayaran dengan  mudah. Dengan adanya aplikasi ini, pelanggan mudah untuk membayara listrik dimana saja dan kapan saja.Aplikasi Pembayaran Listrik merupakan aplikasi sederhana untuk memudahkan pelanggan melakukan pembayaran dengan  mudah. Dengan adanya aplikasi ini, pelanggan mudah untuk membayara listrik dimana saja dan kapan saja.
				        </div>

				        </p>
						
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include('footer.php'); ?>
<?php include('js.php') ?>
</body>
</html>
<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
  <head>
	<title>Beasiswa - Analitic Hierarchy Process</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript"> 
			$(function(){
				var url = window.location.href; 
				$(".container a").each(function() {
					if(url == (this.href)) { 
						$(this).closest("li").addClass("active");
					}
				});
			});
	</script>		
  </head>
  <body>
  <div class="container">
	<?php include "menu.php"; ?>
	 		<div class="row-fluid">
			
				<div class="span12">
						<div class="alert alert-info">
						  <b>Laporan Akhir dari Rekomendasi Data Mahasiswa Penerima Beasiswa</b>
						</div>
					
					<table class="table table-bordered">
						<tr bgcolor='#cecece'>
							<th>No</th>
							<th>Nama Mahasiswa</th>
							<th>Nilai IPK</th>
							<th>Penghasilan Ortu</th>
							<th>Tanggungan Ortu</th>
							<th>Usia</th>
							<th>Nilai</th>
							<th>Keputusan</th>
						</tr>

							<?php
								include "koneksi.php";
								$mhs = mysql_query("SELECT * FROM laporan_hasil ORDER BY nilai_ipk DESC");
								$mhs = mysql_query("SELECT * FROM laporan_hasil ORDER BY penghasilan_ortu DESC");
								$mhs = mysql_query("SELECT * FROM laporan_hasil ORDER BY tanggungan_ortu DESC");
								$mhs = mysql_query("SELECT * FROM laporan_hasil ORDER BY usia DESC");
								$mhs = mysql_query("SELECT * FROM laporan_hasil ORDER BY nilai DESC");
								$no=1;
								while ($mh = mysql_fetch_array($mhs)){
								if ($no >= 1 AND $no <= 5){
									$keputusan = '<span style="color:green">Diterima</span>';
								}else{
									$keputusan = '<span style="color:red">Ditolak</span>';
								}
									echo "
										<tr>
											<td>$no</td>
											<td>$mh[nama_mhs]</td>
											<td>$mh[nilai_ipk]</td>
											<td>$mh[penghasilan_ortu]</td>
											<td>$mh[tanggungan_ortu]</td>
											<td>$mh[usia]</td>
											<td>$mh[nilai]</td>
											<td>$keputusan</td>
										</tr>
									";
								$no++; 
								}
							?>
					</table>
					<div class="alert alert-danger">
						  Data Konsultasi anda Sengaja tidak kami simpan pada halaman ini, takutnya nanti terjadi penumpukan data yang asal-asalan.
						</div>
				</div>
			
	</div>
	
	<div class="row-fluid">
		<div class="footer text-center"><small></small></div>
	</div>
  </div>
	
	
  </body>
</html>





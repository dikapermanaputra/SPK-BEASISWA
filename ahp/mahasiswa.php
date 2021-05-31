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
						  <b>Rekomendasi Data Mahasiswa Penerima Beasiswa</b>
						</div>
					
					<table class="table table-bordered">
						<tr bgcolor='#cecece'>
							<th>Nama Mahasiswa</th>
							<th>Nilai IPK</th>
							<th>Penghasilan Ortu</th>
							<th>Tanggungan Ortu</th>
							<th>Usia</th>
						</tr>
						<form method='POST' action='update-mahasiswa.php'>
							<?php
								include "koneksi.php";
								$mhs = mysql_query("SELECT * FROM mahasiswa");
								$no=1;
								while ($mh = mysql_fetch_array($mhs)){
									echo "
										<tr>
											<input name='id[$no]' style='width:93%' type='hidden' value='$mh[id_mahasiswa]'>
											<td><input name='nama_mhs[$no]' style='width:93%' type='text' value='$mh[nama_mhs]'></td>
											<td><input name='nilai_ipk[$no]' style='width:93%' type='text' value='$mh[nilai_ipk]'></td>
											<td><input name='penghasilan_ortu[$no]' style='width:93%' type='text' value='$mh[penghasilan_ortu]'></td>
											<td><input name='tanggungan_ortu[$no]' style='width:93%' type='text' value='$mh[tanggungan_ortu]'></td>
											<td><input name='usia[$no]' style='width:93%' type='text' value='$mh[usia]'></td>
										</tr>
									";
								$no++; 
								}
								echo "<tr><td colspan='5'><input style='float:right;' class='btn btn-primary' type='submit' value='Update Data'></td></tr>";
							?>
						</form>
					</table>
				</div>
			
	</div>
	
	<div class="row-fluid">
		<div class="footer text-center"><small></small></div>
	</div>
  </div>
	
	
  </body>
</html>





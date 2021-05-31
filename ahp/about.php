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
				<?php
					include "koneksi.php";
					$statis = mysql_query("SELECT * FROM statis where id_statis=1");
					$r = mysql_fetch_array($statis);
					$isi = nl2br($r['isi']);
				?>
						<div class="alert alert-info">
						  <b><?php echo $r['judul'] ?></b>
						</div>
					
					<img style='width:260px; float:left; padding-right:10px;' src='images/beasiswa.jpg'>
					<?php echo $isi ?><br><br>
					<table class="table table-bordered">
						<tr bgcolor='#cecece'>
							<th style=" text-align:center;">Intensitas Kepentingan</th><th style="text-align:center;">Definisi</th>
						</tr>
						<tr>
							<td style="text-align:center;">1</td><td>Sama Pentingnya</td>
						</tr>
						<tr>
							<td style="text-align:center;">3</td><td>Agak lebih Penting yang satu Atas lainnya</td>
						</tr>
						<tr>
							<td style="text-align:center;">5</td><td>Cukup Penting</td>
						</tr>
						<tr>
							<td style="text-align:center;">7</td><td>Sangat Penting</td>
						</tr>
						<tr>
							<td style="text-align:center;">9</td><td>Sangat Mutlak penting</td>
						</tr>
						<tr>
							<td style="text-align:center;">2,4,6,8</td><td>Nilai-Nilai Diantara dua Pertimbangan yang berdekatan</td>
						</tr>
					</table>
				</div>
			
			</div>
	
	<div class="row-fluid">
		<div class="footer text-center"><small></small></div>
	</div>
  </div>
	
	
  </body>
</html>





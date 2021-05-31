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
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/highcharts.js" type="text/javascript"></script>
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
					<div class="tabbable"> <!-- Only required for left/right tabs -->
					  <ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Pair Comparation Kriteria</a></li>
						<li><a href="#tab2" data-toggle="tab">Pair Comparation 1</a></li>
						<li><a href="#tab3" data-toggle="tab">Pair Comparation 2</a></li>
						<li><a href="#tab4" data-toggle="tab">Pair Comparation 3</a></li>
						<li><a href="#tab5" data-toggle="tab">Pair Comparation 4</a></li>
					  </ul>
					<?php
						include "koneksi.php";
						$mhs1 = mysql_query("SELECT * FROM mahasiswa where id_mahasiswa=1");
						$mhs2 = mysql_query("SELECT * FROM mahasiswa where id_mahasiswa=2");
						$mhs3 = mysql_query("SELECT * FROM mahasiswa where id_mahasiswa=3");
						$mhs4 = mysql_query("SELECT * FROM mahasiswa where id_mahasiswa=4");
						$mh1 = mysql_fetch_array($mhs1);
						$mh2 = mysql_fetch_array($mhs2);
						$mh3 = mysql_fetch_array($mhs3);
						$mh4 = mysql_fetch_array($mhs4);
					?>
						  <div class="tab-content">
							<div class="tab-pane active" id="tab1">
							<b>Matrik Kriteria</b>
							 <form method="post" action="proses.php#tab6" id="test" name="test">
							  <table class="table table-bordered">
							  	<tr>
									<td></td><td>Nilai IPK</td>
									<td>Penghasilan Ortu</td>
									<td>Jml Tanggungan Ortu</td>
									<td>Usia</td>
								</tr>
								<tr>
									<td>Nilai IPK</td>
									<td><input type="text" name="data1" value="1" disabled class="span12" /></td>
									<td><select name="kualitas1" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
									<td><select name="kualitas2" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
									<td><select name="kualitas3" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
								</tr>
								<tr>
									<td>Penghasilan Ortu</td>
									<td><input type="text" name="data1" value="0" disabled  class="span12" /></td>
									<td><input type="text" name="data2" value="1" disabled class="span12"/></td>
									<td><select name="kehadiran1" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
									<td><select name="kehadiran2" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
								</tr>
								<tr>
									<td>Jml Tanggungan Ortu</td>
									<td><input type="text" name="data1" value="0" disabled class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="1" disabled  class="span12"/></td>
									<td><select name="pengetahuan1" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
								</tr>
								<tr>
									<td>Usia</td>
									<td><input type="text" name="data1" value="0" disabled class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data4" value="1" disabled class="span12"/></td>
								</tr>
							  </table>
						
												 
							</div>
							
							<!--  Ke 2!-->
							<div class="tab-pane" id="tab2">
							
							 <b>Matriks Kriteria Nilai IPK</b>
							  <table class="table table-bordered">
								<tr>
									<td width="100px"></td><td><?php echo $mh1['nama_mhs']; ?></td>
									<td><?php echo $mh2['nama_mhs']; ?></td>
									<td><?php echo $mh3['nama_mhs']; ?></td>
									<td><?php echo $mh4['nama_mhs']; ?></td>
								</tr>
								<tr>
									<td><?php echo $mh1['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="1" disabled class="span12" /></td>
									<td><select name="a1" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
									<td><select name="a2" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
									<td><select name="a3" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $mh2['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="0" disabled  class="span12" /></td>
									<td><input type="text" name="data2" value="1" disabled class="span12"/></td>
									<td><select name="b1" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
									<td><select name="b2" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $mh3['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="0" disabled class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="1" disabled  class="span12"/></td>
									<td><select name="c1" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $mh4['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="0" disabled class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data4" value="1" disabled class="span12"/></td>
								</tr>
							  </table>
							 
						
							
							</div>
							<div class="tab-pane" id="tab3">
						
							 <b>Matriks Kriteria Penghasilan Ortu</b>
							 
							  <table class="table table-bordered">
								<tr>
									<td width="100px"></td><td><?php echo $mh1['nama_mhs']; ?></td>
									<td><?php echo $mh2['nama_mhs']; ?></td>
									<td><?php echo $mh3['nama_mhs']; ?></td>
									<td><?php echo $mh4['nama_mhs']; ?></td>
								</tr>
								<tr>
									<td><?php echo $mh1['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="1" disabled class="span12" /></td>
									<td><select name="ook1" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
									<td><select name="ook2" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
									<td><select name="ook3" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $mh2['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="0" disabled  class="span12" /></td>
									<td><input type="text" name="data2" value="1" disabled class="span12"/></td>
									<td><select name="oook1" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
									<td><select name="oook2" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $mh3['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="0" disabled class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="1" disabled  class="span12"/></td>
									<td><select name="kkk" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $mh4['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="0" disabled class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data4" value="1" disabled class="span12"/></td>
								</tr>
							  </table>
							
							 
							</div>
							
							<div class="tab-pane" id="tab4">
						
							 <b>Matriks Kriteria Jml Tanggungan Ortu</b>
							  <table class="table table-bordered">
								<tr>
									<td width="100px"></td><td><?php echo $mh1['nama_mhs']; ?></td>
									<td><?php echo $mh2['nama_mhs']; ?></td>
									<td><?php echo $mh3['nama_mhs']; ?></td>
									<td><?php echo $mh4['nama_mhs']; ?></td>
								</tr>
								<tr>
									<td><?php echo $mh1['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="1" disabled class="span12" /></td>
									<td><select name="ok1" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
									<td><select name="ok2" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
									<td><select name="ok3" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $mh2['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="0" disabled  class="span12" /></td>
									<td><input type="text" name="data2" value="1" disabled class="span12"/></td>
									<td><select name="okk1" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
									<td><select name="okk2" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $mh3['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="0" disabled class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="1" disabled  class="span12"/></td>
									<td><select name="okkk" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $mh4['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="0" disabled class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data4" value="1" disabled class="span12"/></td>
								</tr>
							  </table>
								
							 
							</div>
							<div class="tab-pane" id="tab5">
						
							 <b>Matriks Kriteria Usia</b>
							  <table class="table table-bordered">
								<tr>
									<td width="100px"></td><td><?php echo $mh1['nama_mhs']; ?></td>
									<td><?php echo $mh2['nama_mhs']; ?></td>
									<td><?php echo $mh3['nama_mhs']; ?></td>
									<td><?php echo $mh4['nama_mhs']; ?></td>
								</tr>
								<tr>
									<td><?php echo $mh1['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="1" disabled class="span12" /></td>
									<td><select name="k1" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
									<td><select name="k2" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
									<td><select name="k3" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $mh2['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="0" disabled  class="span12" /></td>
									<td><input type="text" name="data2" value="1" disabled class="span12"/></td>
									<td><select name="kk1" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
									<td><select name="kk2" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $mh3['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="0" disabled class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="1" disabled  class="span12"/></td>
									<td><select name="ak3" class="span12" >
										<option value="0" selected="selected">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
									</select></td>
								</tr>
								<tr>
									<td><?php echo $mh4['nama_mhs']; ?></td>
									<td><input type="text" name="data1" value="0" disabled class="span12" /></td>
									<td><input type="text" name="data2" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data3" value="0" disabled class="span12"/></td>
									<td><input type="text" name="data4" value="1" disabled class="span12"/></td>
								</tr>
							  </table>
								<input style="float:right;" type="submit" class="btn btn-primary" name="simpan" value="PROSES" />
							 </form>
							
							</div>
							
								 <?php

								if(isset($_POST['simpan'])){ ?>
									<div class="tab-pane" id="tab6">
									<?php $kualitas1=$_POST['kualitas1'];
									$kualitas2=$_POST['kualitas2'];
									$kualitas3=$_POST['kualitas3'];
									$kehadiran1=$_POST['kehadiran1'];
									$kehadiran2=$_POST['kehadiran2'];
									$pengetahuan1=$_POST['pengetahuan1'];

									$a1=1/$kualitas1;
									$a2=1/$kualitas2;
									$a3=1/$kualitas3;
									$b1=1/$kehadiran1;
									$b2=1/$kehadiran2;
									$c1=1/$pengetahuan1;
									$a1 = number_format($a1, 2, '.', '');
									$a2 = number_format($a2, 2, '.', '');
									$a3 = number_format($a3, 2, '.', '');
									$b1 = number_format($b1, 2, '.', '');
									$b2 = number_format($b2, 2, '.', '');
									$c1 = number_format($c1, 2, '.', '');


									$jumlah1=1+$a1+$a2+$a3;
									$jumlah2=$kualitas1+1+$b1+$b2;
									$jumlah3=$kualitas2+$kehadiran1+1+$c1;
									$jumlah4=$kualitas3+$kehadiran2+$pengetahuan1+1;

									$jumlah1 = number_format($jumlah1, 2, '.', '');
									$jumlah2 = number_format($jumlah2, 2, '.', '');
									$jumlah3 = number_format($jumlah3, 2, '.', '');
									$jumlah4 = number_format($jumlah4, 2, '.', '');


									$prioritiv1=0.25*(1/$jumlah1+$kualitas1/$jumlah2+$kualitas2/$jumlah3+$kualitas3/$jumlah4);
									$prioritiv2=0.25*($a1/$jumlah1+1/$jumlah2+$kehadiran1/$jumlah3+$kehadiran2/$jumlah4);
									$prioritiv3=0.25*($a2/$jumlah1+$b1/$jumlah2+1/$jumlah3+$pengetahuan1/$jumlah4);
									$prioritiv4=0.25*($a3/$jumlah1+$b2/$jumlah2+$c1/$jumlah3+1/$jumlah4);
									$jumlah5=$prioritiv1+$prioritiv2+$prioritiv3+$prioritiv4;
									$prioritiv1 = number_format($prioritiv1, 2, '.', '');
									$prioritiv2 = number_format($prioritiv2, 2, '.', '');
									$prioritiv3 = number_format($prioritiv3, 2, '.', '');
									$prioritiv4 = number_format($prioritiv4, 2, '.', '');
									$jumlah5 = number_format($jumlah5, 2, '.', '');



									?>
								<table class="table table-bordered">
								<tr bgcolor=#cecece>
									<td></td><td>Nilai IPK</td>
									<td>Penghasilan Ortu</td>
									<td>Jml Tanggungan Ortu</td>
									<td>Usia</td>
									<td>Priority Verctor</td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Nilai IPK</td>
									<td><input type="text" name="data1" value="1" disabled class="span12" /></td>
									<td><?php echo $kualitas1; ?></td>
									<td><?php echo $kualitas2; ?></td>
									<td><?php echo $kualitas3; ?></td>
									<td><?php echo $prioritiv1;
										 ?></td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Penghasilan Ortu</td>
									<td><?php echo $a1; ?></td>
									<td><input type="text" name="data2" value="1" disabled class="span12"/></td>
									<td><?php echo $kehadiran1; ?></td>
									<td><?php echo $kehadiran2; ?></td>
									<td><?php echo $prioritiv2;
										 ?></td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Jml Tanggungan Ortu</td>
									<td><?php echo $a2; ?></td>
									<td><?php echo $b1; ?></td>
									<td><input type="text" name="data3" value="1" disabled  class="span12"/></td>
									<td><?php echo $pengetahuan1; ?></td>
									<td><?php echo $prioritiv3;
										 ?></td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Usia</td>
									<td><?php echo $a3; ?></td>
									<td><?php echo $b2; ?></td>
									<td><?php echo $c1; ?></td>
									<td><input type="text" name="data4" value="1" disabled class="span12"/></td>
									<td><?php 
											  echo $prioritiv4;
										 ?></td>
								</tr>
								<tr bgcolor=lightblue>
									<td><b>Jumlah</b></td>
									<td><?php 
											  echo $jumlah1; ?></td>
									<td><?php 
											  echo $jumlah2; ?></td>
									<td><?php 
											  echo $jumlah3; ?></td>
									<td><?php 
											  echo $jumlah4; ?></td>
									<td><?php 
											  echo $jumlah5; ?></td>
								</tr>
							  </table>	
							  <table class="table">
								<tr>
									<td><p><b>Principle Eigen value(max)</b></p></td><td><p><b style="float:right;">
									<?php $principle1=(($jumlah1*$prioritiv1)+($jumlah2*$prioritiv2)+($jumlah3*$prioritiv3)+($jumlah4*$prioritiv4));
										  $principle1 = number_format($principle1, 2, '.', '');

									 echo $principle1; ?></b></p></td>
								</tr>
								<tr>
									<td><p><b>Consistency index(CI)</b></p></td><td><p><b style="float:right;">
									<?php $ci=($principle1-4)/(4-1);
										  $ci = number_format($ci, 2, '.', '');
										echo $ci; ?></b></p></td>
								</tr>
								<tr>
									<td><p><b>Consistency Ratio(CR)</b></p></td><td><p><b style="float:right;">
									<?php $cr=$ci/0.9;
										$cr = number_format($cr, 2, '.', '');
										echo $cr."%"; ?></b></p>	</td>
								</tr>
							  </table>
							  
							  
							  <?php
									$aa1=$_POST['a1'];
									$aa2=$_POST['a2'];
									$aa3=$_POST['a3'];
									$bb1=$_POST['b1'];
									$bb2=$_POST['b2'];
									$cc1=$_POST['c1'];

									$nn1=1/$aa1;
									$nn2=1/$aa2;
									$nn3=1/$aa3;
									$mm1=1/$bb1;
									$mm2=1/$bb2;
									$oo1=1/$cc1;
									$nn1 = number_format($nn1, 2, '.', '');
									$nn2 = number_format($nn2, 2, '.', '');
									$nn3 = number_format($nn3, 2, '.', '');
									$mm1 = number_format($mm1, 2, '.', '');
									$mm2 = number_format($mm2, 2, '.', '');
									$oo1 = number_format($oo1, 2, '.', '');


									$jmll1=1+$aa1+$aa2+$aa3;
									$jmll2=$nn1+1+$bb1+$bb2;
									$jmll3=$nn2+$mm1+1+$oo1;
									$jmll4=$nn3+$mm2+$cc1+1;

									$jmll1 = number_format($jmll1, 2, '.', '');
									$jmll2 = number_format($jmll2, 2, '.', '');
									$jmll3 = number_format($jmll3, 2, '.', '');
									$jmll4 = number_format($jmll4, 2, '.', '');


									$priov1=0.25*(1/$jmll1+$nn1/$jmll2+$nn2/$jmll3+$nn3/$jmll4);
									$priov2=0.25*($aa1/$jmll1+1/$jmll2+$mm1/$jmll3+$mm2/$jmll4);
									$priov3=0.25*($aa2/$jmll1+$bb1/$jmll2+1/$jmll3+$cc1/$jmll4);
									$priov4=0.25*($aa3/$jmll1+$bb2/$jmll2+$cc1/$jmll3+1/$jmll4);
									$jumlahh5=$priov1+$priov2+$priov3+$priov4;
									$priov1 = number_format($priov1, 2, '.', '');
									$priov2 = number_format($priov2, 2, '.', '');
									$priov3 = number_format($priov3, 2, '.', '');
									$priov4 = number_format($priov4, 2, '.', '');
									$jumlahh5 = number_format($jumlahh5, 2, '.', '');



									?>
								<table class="table table-bordered">
								<tr bgcolor=#cecece>
									<td></td><td>Nilai IPK</td>
									<td>Penghasilan Ortu</td>
									<td>Jml Tanggungan Ortu</td>
									<td>Usia</td>
									<td>Priority Verctor</td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Nilai IPK</td>
									<td><input type="text" name="data1" value="1" disabled class="span12" /></td>
									<td><?php echo $aa1; ?></td>
									<td><?php echo $aa2; ?></td>
									<td><?php echo $aa3; ?></td>
									<td><?php echo $priov1;
										 ?></td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Penghasilan Ortu</td>
									<td><?php echo $aa1; ?></td>
									<td><input type="text" name="data2" value="1" disabled class="span12"/></td>
									<td><?php echo $bb1; ?></td>
									<td><?php echo $bb2; ?></td>
									<td><?php echo $priov2;
										 ?></td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Jml Tanggungan Ortu</td>
									<td><?php echo $aa2; ?></td>
									<td><?php echo $bb1; ?></td>
									<td><input type="text" name="data3" value="1" disabled  class="span12"/></td>
									<td><?php echo $cc1; ?></td>
									<td><?php echo $priov3;
										 ?></td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Usia</td>
									<td><?php echo $aa3; ?></td>
									<td><?php echo $bb2; ?></td>
									<td><?php echo $cc1; ?></td>
									<td><input type="text" name="data4" value="1" disabled class="span12"/></td>
									<td><?php 
											  echo $priov4;
										 ?></td>
								</tr>
								<tr bgcolor=lightblue>
									<td><b>Jumlah</b></td>
									<td><?php 
											  echo $jmll1; ?></td>
									<td><?php 
											  echo $jmll2; ?></td>
									<td><?php 
											  echo $jmll3; ?></td>
									<td><?php 
											  echo $jmll4; ?></td>
									<td><?php 
											  echo $jumlahh5; ?></td>
								</tr>
							  </table>	
							  <table class="table">
								<tr>
									<td><p><b>Principle Eigen value(max)</b></p></td><td><p><b style="float:right;">
									<?php $princip1=(($jmll1*$priov1)+($jmll2*$priov2)+($jmll3*$priov3)+($jmll4*$priov4));
										  $princip1 = number_format($princip1, 2, '.', '');

									 echo $princip1; ?></b></p></td>
								</tr>
								<tr>
									<td><p><b>Consistency index(CI)</b></p></td><td><p><b style="float:right;">
									<?php $cii=($princip1-4)/(4-1);
										  $cii = number_format($cii, 2, '.', '');
										echo $cii; ?></b></p></td>
								</tr>
								<tr>
									<td><p><b>Consistency Ratio(CR)</b></p></td><td><p><b style="float:right;">
									<?php $crr=$cii/0.9;
										$crr = number_format($crr, 2, '.', '');
										echo $crr."%"; ?></b></p>	</td>
								</tr>
							  </table>
								
								
								 <?php
								
									$ook1=$_POST['ook1'];
									$ook2=$_POST['ook2'];
									$ook3=$_POST['ook3'];
									$oook1=$_POST['oook1'];
									$oook2=$_POST['oook2'];
									$kkk=$_POST['kkk'];

									$nnnn1=1/$ook1;
									$nnnn2=1/$ook2;
									$nnnn3=1/$ook3;
									$mmmm1=1/$oook1;
									$mmmm2=1/$oook2;
									$oooo1=1/$kkk;
									$nnnn1 = number_format($nnnn1, 2, '.', '');
									$nnnn2 = number_format($nnnn2, 2, '.', '');
									$nnnn3 = number_format($nnnn3, 2, '.', '');
									$mmmm1 = number_format($mmmm1, 2, '.', '');
									$mmmm2 = number_format($mmmm2, 2, '.', '');
									$oooo1 = number_format($oooo1, 2, '.', '');


									$jmllll1=1+$ook1+$ook2+$ook3;
									$jmllll2=$nnnn1+1+$oook1+$oook2;
									$jmllll3=$nnnn2+$mmmm1+1+$oooo1;
									$jmllll4=$nnnn3+$mmmm2+$kkk+1;

									$jmllll1 = number_format($jmllll1, 2, '.', '');
									$jmllll2 = number_format($jmllll2, 2, '.', '');
									$jmllll3 = number_format($jmllll3, 2, '.', '');
									$jmllll4 = number_format($jmllll4, 2, '.', '');


									$priovvv1=0.25*(1/$jmllll1+$nnnn1/$jmllll2+$nnnn2/$jmllll3+$nnnn3/$jmllll4);
									$priovvv2=0.25*($ook1/$jmllll1+1/$jmllll2+$mmmm1/$jmllll3+$mmmm2/$jmllll4);
									$priovvv3=0.25*($ook2/$jmllll1+$oook1/$jmllll2+1/$jmllll3+$kkk/$jmllll4);
									$priovvv4=0.25*($ook3/$jmllll1+$oook2/$jmllll2+$kkk/$jmllll3+1/$jmllll4);
									$jumlahhhh5=$priovvv1+$priovvv2+$priovvv3+$priovvv4;
									$priovvv1 = number_format($priovvv1, 2, '.', '');
									$priovvv2 = number_format($priovvv2, 2, '.', '');
									$priovvv3 = number_format($priovvv3, 2, '.', '');
									$priovvv4 = number_format($priovvv4, 2, '.', '');
									$jumlahhhh5 = number_format($jumlahhhh5, 2, '.', '');



									?>
								<table class="table table-bordered">
								<tr bgcolor=#cecece>
									<td></td><td>Nilai IPK</td>
									<td>Penghasilan Ortu</td>
									<td>Jml Tanggungan Ortu</td>
									<td>Usia</td>
									<td>Priority Verctor</td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Nilai IPK</td>
									<td><input type="text" name="data1" value="1" disabled class="span12" /></td>
									<td><?php echo $ook1; ?></td>
									<td><?php echo $ook2; ?></td>
									<td><?php echo $ook3; ?></td>
									<td><?php echo $priovvv1;
										 ?></td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Penghasilan Ortu</td>
									<td><?php echo $ook1; ?></td>
									<td><input type="text" name="data2" value="1" disabled class="span12"/></td>
									<td><?php echo $oook1; ?></td>
									<td><?php echo $oook2; ?></td>
									<td><?php echo $priovvv2;
										 ?></td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Jml Tanggungan Ortu</td>
									<td><?php echo $ook2; ?></td>
									<td><?php echo $oook1; ?></td>
									<td><input type="text" name="data3" value="1" disabled  class="span12"/></td>
									<td><?php echo $kkk; ?></td>
									<td><?php echo $priovvv3;
										 ?></td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Usia</td>
									<td><?php echo $ook3; ?></td>
									<td><?php echo $oook2; ?></td>
									<td><?php echo $kkk; ?></td>
									<td><input type="text" name="data4" value="1" disabled class="span12"/></td>
									<td><?php 
											  echo $priovvv4;
										 ?></td>
								</tr>
								<tr bgcolor=lightblue>
									<td><b>Jumlah</b></td>
									<td><?php 
											  echo $jmllll1; ?></td>
									<td><?php 
											  echo $jmllll2; ?></td>
									<td><?php 
											  echo $jmllll3; ?></td>
									<td><?php 
											  echo $jmllll4; ?></td>
									<td><?php 
											  echo $jumlahhhh5; ?></td>
								</tr>
							  </table>	
							  <table class="table">
								<tr>
									<td><p><b>Principle Eigen value(max)</b></p></td><td><p><b style="float:right;">
									<?php $princippp1=(($jmllll1*$priovvv1)+($jmllll2*$priovvv2)+($jmllll3*$priovvv3)+($jmllll4*$priovvv4));
										  $princippp1 = number_format($princippp1, 2, '.', '');

									 echo $princippp1; ?></b></p></td>
								</tr>
								<tr>
									<td><p><b>Consistency index(CI)</b></p></td><td><p><b style="float:right;">
									<?php $ciiii=($princippp1-4)/(4-1);
										  $ciiii = number_format($ciiii, 2, '.', '');
										echo $ciiii; ?></b></p></td>
								</tr>
								<tr>
									<td><p><b>Consistency Ratio(CR)</b></p></td><td><p><b style="float:right;">
									<?php $crrrr=$ciiii/0.9;
										$crrrr = number_format($crrrr, 2, '.', '');
										echo $crrrr."%"; ?></b></p>	</td>
								</tr>
							  </table>
							
								 <?php
						
									$ok1=$_POST['ok1'];
									$ok2=$_POST['ok2'];
									$ok3=$_POST['ok3'];
									$okk1=$_POST['okk1'];
									$okk2=$_POST['okk2'];
									$okkk=$_POST['okkk'];

									$nnn1=1/$ok1;
									$nnn2=1/$ok2;
									$nnn3=1/$ok3;
									$mmm1=1/$okk1;
									$mmm2=1/$okk2;
									$ooo1=1/$okkk;
									$nnn1 = number_format($nnn1, 2, '.', '');
									$nnn2 = number_format($nnn2, 2, '.', '');
									$nnn3 = number_format($nnn3, 2, '.', '');
									$mmm1 = number_format($mmm1, 2, '.', '');
									$mmm2 = number_format($mmm2, 2, '.', '');
									$ooo1 = number_format($ooo1, 2, '.', '');


									$jmlll1=1+$ok1+$ok2+$ok3;
									$jmlll2=$nnn1+1+$okk1+$okk2;
									$jmlll3=$nnn2+$mmm1+1+$okkk;
									$jmlll4=$nnn3+$mmm2+$ooo1+1;

									$jmlll1 = number_format($jmlll1, 2, '.', '');
									$jmlll2 = number_format($jmlll2, 2, '.', '');
									$jmlll3 = number_format($jmlll3, 2, '.', '');
									$jmlll4 = number_format($jmlll4, 2, '.', '');


									$priovv1=0.25*(1/$jmlll1+$nnn1/$jmlll2+$nnn2/$jmlll3+$nnn3/$jmlll4);
									$priovv2=0.25*($ok1/$jmlll1+1/$jmlll2+$mmm1/$jmlll3+$mmm2/$jmlll4);
									$priovv3=0.25*($ok2/$jmlll1+$okk1/$jmlll2+1/$jmlll3+$okkk/$jmlll4);
									$priovv4=0.25*($ok3/$jmlll1+$okk2/$jmlll2+$okkk/$jmlll3+1/$jmlll4);
									$jumlahhh5=$priovv1+$priovv2+$priovv3+$priovv4;
									$priovv1 = number_format($priovv1, 2, '.', '');
									$priovv2 = number_format($priovv2, 2, '.', '');
									$priovv3 = number_format($priovv3, 2, '.', '');
									$priovv4 = number_format($priovv4, 2, '.', '');
									$jumlahhh5 = number_format($jumlahhh5, 2, '.', '');



									?>
								<table class="table table-bordered">
								<tr bgcolor=#cecece>
									<td></td><td>Nilai IPK</td>
									<td>Penghasilan Ortu</td>
									<td>Jml Tanggungan Ortu</td>
									<td>Usia</td>
									<td>Priority Verctor</td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Nilai IPK</td>
									<td><input type="text" name="data1" value="1" disabled class="span12" /></td>
									<td><?php echo $ok1; ?></td>
									<td><?php echo $ok2; ?></td>
									<td><?php echo $ok3; ?></td>
									<td><?php echo $priovv1;
										 ?></td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Penghasilan Ortu</td>
									<td><?php echo $ok1; ?></td>
									<td><input type="text" name="data2" value="1" disabled class="span12"/></td>
									<td><?php echo $okk1; ?></td>
									<td><?php echo $okk2; ?></td>
									<td><?php echo $priovv2;
										 ?></td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Jml Tanggungan Ortu</td>
									<td><?php echo $ok2; ?></td>
									<td><?php echo $okk1; ?></td>
									<td><input type="text" name="data3" value="1" disabled  class="span12"/></td>
									<td><?php echo $okkk; ?></td>
									<td><?php echo $priovv3;
										 ?></td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Usia</td>
									<td><?php echo $ok3; ?></td>
									<td><?php echo $okk2; ?></td>
									<td><?php echo $okkk; ?></td>
									<td><input type="text" name="data4" value="1" disabled class="span12"/></td>
									<td><?php 
											  echo $priovv4;
										 ?></td>
								</tr>
								<tr bgcolor=lightblue>
									<td><b>Jumlah</b></td>
									<td><?php 
											  echo $jmlll1; ?></td>
									<td><?php 
											  echo $jmlll2; ?></td>
									<td><?php 
											  echo $jmlll3; ?></td>
									<td><?php 
											  echo $jmlll4; ?></td>
									<td><?php 
											  echo $jumlahhh5; ?></td>
								</tr>
							  </table>	
							  <table class="table">
								<tr>
									<td><p><b>Principle Eigen value(max)</b></p></td><td><p><b style="float:right;">
									<?php $principp1=(($jmlll1*$priovv1)+($jmlll2*$priovv2)+($jmlll3*$priovv3)+($jmlll4*$priovv4));
										  $principp1 = number_format($principp1, 2, '.', '');

									 echo $principp1; ?></b></p></td>
								</tr>
								<tr>
									<td><p><b>Consistency index(CI)</b></p></td><td><p><b style="float:right;">
									<?php $ciii=($principp1-4)/(4-1);
										  $ciii = number_format($ciii, 2, '.', '');
										echo $ciii; ?></b></p></td>
								</tr>
								<tr>
									<td><p><b>Consistency Ratio(CR)</b></p></td><td><p><b style="float:right;">
									<?php $crrr=$ciii/0.9;
										$crrr = number_format($crrr, 2, '.', '');
										echo $crrr."%"; ?></b></p>	</td>
								</tr>
							  </table>
						
							 <?php
							
									$k1=$_POST['k1'];
									$k2=$_POST['k2'];
									$k3=$_POST['k3'];
									$kk1=$_POST['kk1'];
									$kk2=$_POST['kk2'];
									$ak3=$_POST['ak3'];

									$nl1=1/$k1;
									$nl2=1/$k2;
									$nl3=1/$k3;
									$nll1=1/$kk1;
									$nll2=1/$kk2;
									$nls=1/$ak3;
									$nl1 = number_format($nl1, 2, '.', '');
									$nl2 = number_format($nl2, 2, '.', '');
									$nl3 = number_format($nl3, 2, '.', '');
									$nll1 = number_format($nll1, 2, '.', '');
									$nll2 = number_format($nll2, 2, '.', '');
									$nls = number_format($nls, 2, '.', '');


									$jum1=1+$k1+$k2+$k3;
									$jum2=$nl1+1+$kk1+$kk2;
									$jum3=$nl2+$nll1+1+$ak3;
									$jum4=$nl3+$nll2+$nls+1;

									$jum1 = number_format($jum1, 2, '.', '');
									$jum2 = number_format($jum2, 2, '.', '');
									$jum3 = number_format($jum3, 2, '.', '');
									$jum4 = number_format($jum4, 2, '.', '');

									$pri1=0.25*(1/$jum1+$nl1/$jum2+$nl2/$jum3+$nl3/$jum4);
									$pri2=0.25*($k1/$jum1+1/$jum2+$nll1/$jum3+$nll2/$jum4);
									$pri3=0.25*($k2/$jum1+$kk1/$jum2+1/$jum3+$ak3/$jum4);
									$pri4=0.25*($k3/$jum1+$kk2/$jum2+$nls/$jum3+1/$jum4);
									$ju5=$pri1+$pri2+$pri3+$pri4;
									$pri1 = number_format($pri1, 2, '.', '');
									$pri2 = number_format($pri2, 2, '.', '');
									$pri3 = number_format($pri3, 2, '.', '');
									$pri4 = number_format($pri4, 2, '.', '');
									$ju5 = number_format($ju5, 2, '.', '');



									?>
								<table class="table table-bordered">
								<tr bgcolor=#cecece>
									<td></td><td>Nilai IPK</td>
									<td>Penghasilan Ortu</td>
									<td>Jml Tanggungan Ortu</td>
									<td>Usia</td>
									<td>Priority Verctor</td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Nilai IPK</td>
									<td><input type="text" name="data1" value="1" disabled class="span12" /></td>
									<td><?php echo $k1; ?></td>
									<td><?php echo $k2; ?></td>
									<td><?php echo $k3; ?></td>
									<td><?php echo $pri1;
										 ?></td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Penghasilan Ortu</td>
									<td><?php echo $nl1; ?></td>
									<td><input type="text" name="data2" value="1" disabled class="span12"/></td>
									<td><?php echo $kk1; ?></td>
									<td><?php echo $kk2; ?></td>
									<td><?php echo $pri2;
										 ?></td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Jml Tanggungan Ortu</td>
									<td><?php echo $nl2; ?></td>
									<td><?php echo $nl3; ?></td>
									<td><input type="text" name="data3" value="1" disabled  class="span12"/></td>
									<td><?php echo $ak3; ?></td>
									<td><?php echo $pri3;
										 ?></td>
								</tr>
								<tr>
									<td bgcolor=#cecece>Usia</td>
									<td><?php echo $nl3; ?></td>
									<td><?php echo $nll2; ?></td>
									<td><?php echo $nls; ?></td>
									<td><input type="text" name="data4" value="1" disabled class="span12"/></td>
									<td><?php 
											  echo $pri4;
										 ?></td>
								</tr>
								<tr bgcolor=lightblue>
									<td><b>Jumlah</b></td>
									<td><?php 
											  echo $jum1; ?></td>
									<td><?php 
											  echo $jum2; ?></td>
									<td><?php 
											  echo $jum3; ?></td>
									<td><?php 
											  echo $jum4; ?></td>
									<td><?php 
											  echo $ju5; ?></td>
								</tr>
							  </table>	
							  <table class="table">
								<tr>
									<td><p><b>Principle Eigen value(max)</b></p></td><td><p><b style="float:right;">
									<?php $prins=(($jum1*$pri1)+($jum2*$pri2)+($jum3*$pri3)+($jum4*$pri4));
										  $prins = number_format($prins, 2, '.', '');

									 echo $prins; ?></b></p></td>
								</tr>
								<tr>
									<td><p><b>Consistency index(CI)</b></p></td><td><p><b style="float:right;">
									<?php $kons=($prins-4)/(4-1);
										  $kons = number_format($kons, 2, '.', '');
										echo $kons; ?></b></p></td>
								</tr>
								<tr>
									<td><p><b>Consistency Ratio(CR)</b></p></td><td><p><b style="float:right;">
									<?php $ncr=$kons/0.9;
										$ncr = number_format($ncr, 2, '.', '');
										echo $ncr."%"; ?></b></p>	</td>
								</tr>
							  </table>
							  </div>
							  <div class="tab-pane" id="tab7">
							  <!--	<script type="text/javascript">
						var chart1;
						$(document).ready(function() {

							 chart1 = new Highcharts.Chart({
							 chart: {
								renderTo: 'container',
								type: 'column'
							 },   
							 title: {
								text: 'Grafik Hasil keputusan '
							 },
							 xAxis: {
								categories: ['Alternatif','okok']
							 },
							 yAxis: {
								title: {
								   text: 'Jumlah'
								}
							 },
								  series:[{name:'Indra Kusuma',data: [<?php //echo $jum1; ?>]},
										  {name:'Ahmad Eko',data: [<?php //echo $jum2; ?>]},
										  {name:'Budi',data: [<?php //echo $jum3; ?>]},
										  {name:'Dina',data: [<?php //echo $jum4; ?>]}
										  

										  ]
						  });

						});

					</script>
					-->
					<div id="container">
						<table class="table table-bordered">
								<tr bgcolor=#cecece>
									<td>Nama Mahasiswa</td><td>Hasil / Nilai</td>
								</tr>
								<tr>
									<td><?php echo $mh1['nama_mhs']; ?></td><td><?php echo $jum1; ?></td>
								</tr>
								<tr>
									<td><?php echo $mh2['nama_mhs']; ?></td><td><?php echo $jum2; ?></td>
								</tr>
								<tr>
									<td><?php echo $mh3['nama_mhs']; ?></td><td><?php echo $jum3; ?></td>
								</tr>
								<tr>
									<td><?php echo $mh4['nama_mhs']; ?></td><td><?php echo $jum4; ?></td>
								</tr>
						</table>
						
					</div>
							  </div>
								<?php 
								$waktu = date("Y-m-d H:i:s");
								if (isset($_POST['simpan'])){
									 
								/*
									    mysql_query("INSERT INTO laporan_hasil(nama_mhs,nilai_ipk,penghasilan_ortu,tanggungan_ortu,usia,nilai,waktu) 
												VALUES('$mh1[nama_mhs]','$mh1[nilai_ipk]','$mh1[penghasilan_ortu]','$mh1[tanggungan_ortu]','$mh1[usia]','$jum1','$waktu')");
										mysql_query("INSERT INTO laporan_hasil(nama_mhs,nilai_ipk,penghasilan_ortu,tanggungan_ortu,usia,nilai,waktu) 
												VALUES('$mh2[nama_mhs]','$mh2[nilai_ipk]','$mh2[penghasilan_ortu]','$mh2[tanggungan_ortu]','$mh2[usia]','$jum2','$waktu')");
										mysql_query("INSERT INTO laporan_hasil(nama_mhs,nilai_ipk,penghasilan_ortu,tanggungan_ortu,usia,nilai,waktu) 
												VALUES('$mh3[nama_mhs]','$mh3[nilai_ipk]','$mh3[penghasilan_ortu]','$mh3[tanggungan_ortu]','$mh3[usia]','$jum3','$waktu')");
										mysql_query("INSERT INTO laporan_hasil(nama_mhs,nilai_ipk,penghasilan_ortu,tanggungan_ortu,usia,nilai,waktu) 
												VALUES('$mh4[nama_mhs]','$mh4[nilai_ipk]','$mh4[penghasilan_ortu]','$mh4[tanggungan_ortu]','$mh4[usia]','$jum4','$waktu')");
								*/				
								}
								
								}

							 ?>
							
						  </div>
				
				</div>

	</div>

	<div class="row-fluid">
		<div class="footer text-center"><small></small></div>
	</div>
  </div>


  </body>
</html>





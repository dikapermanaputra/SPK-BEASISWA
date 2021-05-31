<?php
	include("koneksi.php");
	$id=$_GET['id'];
	$sql=mysql_query("delete from kriteria where id=$id");
	if($sql){ 
		header("location:insert_kriteria.php");
	 }
?>
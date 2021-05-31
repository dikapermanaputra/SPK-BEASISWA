<?php
	include("koneksi.php");
	$id=$_GET['id'];
	$sql=mysql_query("delete from prioritas where id_prioritas=$id");
	if($sql){ 
		header("location:insert_prioritas.php");
	 }
?>
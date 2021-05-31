<?php

include "koneksi.php";
  $id       = $_POST[id];
  $jml_data = count($id);
  $nama_mhs   = $_POST[nama_mhs];
  $nilai_ipk   = $_POST[nilai_ipk];
  $penghasilan_ortu   = $_POST[penghasilan_ortu];
  $tanggungan_ortu   = $_POST[tanggungan_ortu];
  $usia   = $_POST[usia];
  
  for ($i=1; $i <= $jml_data; $i++){
	mysql_query("INSERT INTO mahasiswa (nama_mhs,
										nilai_ipk,
										penghasilan_ortu,
										tanggungan_ortu,
										usia) 
								VALUES ('".$nama_mhs[$i]."',
										'".$nilai_ipk[$i]."',
										'".$penghasilan_ortu[$i]."',
										'".$tanggungan_ortu[$i]."',
										'".$usia[$i]."')");
  /*
    mysql_query("UPDATE mahasiswa SET nama_mhs 			= '".$nama_mhs[$i]."',
									  nilai_ipk 		= '".$nilai_ipk[$i]."',
									  penghasilan_ortu	= '".$penghasilan_ortu[$i]."',
									  tanggungan_ortu	= '".$tanggungan_ortu[$i]."',
									  usia				= '".$usia[$i]."'
                                  WHERE id_mahasiswa	= '".$id[$i]."'");
								  */
}

	 echo "<script>window.alert('Sukses Simpan data Mahasiswa. . .');
        window.location=('mahasiswa.php')</script>";
?>
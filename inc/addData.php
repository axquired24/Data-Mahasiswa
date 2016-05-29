<script>
	$("document").ready(function(){
		$(".addData").toggleClass("active");
	});
</script><span>Tambah Data Mahasiswa </span>
<form id="formAdd" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <thead>
    <th align="left" colspan="2">Form Tambah Data Mahasiswa</th>
  </thead>
  <tbody>  
  <tr>
    <td>NIM</td>
    <td>: <input type="text" name="nim" placeholder="NIM" size="50" required></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>: <input type="text" name="nama" placeholder="Nama Mahasiswa" size="50" required></td>
  </tr>
  <tr>
    <td>Jurusan</td>
    <td>: <input type="text" name="jurusan" placeholder="Jurusan" size="50" required></td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>: <input type="text" name="kelas" placeholder="Kelas" size="50" required></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="STOR" value="&radic; Tambah"> <input type="reset"></td>
  </tr>
  </tbody>  
</table>
</form>

<?php
if($_POST[STOR]){
	$nama = htmlentities($_POST[nama]);
	$nim = htmlentities($_POST[nim]);
	$jurusan = htmlentities($_POST[jurusan]);
	$kelas = htmlentities($_POST[kelas]);
	
	$add = mysql_query("INSERT INTO mhs VALUES('','$nim','$nama','$jurusan','$kelas')");
	if($add){
		echo("
			<script>alert('Data [ $nama ] berhasil ditambahkan')</script>
			<meta http-equiv=refresh content='0; url=?n=viewData' >
		");
	}else{
		echo("
			<script>alert('ERROR | Data gagal di input')</script>
			<meta http-equiv=refresh content='0; url=?n=addData' >
		");	
	}
}

?>
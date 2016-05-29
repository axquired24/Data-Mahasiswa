<script>
	$("document").ready(function(){
		$(".editData").toggleClass("active");
	});
</script>
<span>Tambah Data Mahasiswa </span>
<?php
	$id = $_GET[idEdit];
	$q = mysql_query("SELECT * FROM mhs WHERE id='$id'");
	while($ed=mysql_fetch_array($q)){
	
?>
<form id="formAdd" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <thead>
    <th align="left" colspan="2">Form Tambah Data Mahasiswa</th>
  </thead>
  <tbody>  
  <tr>
    <td>NIM</td>
    <td>: <input type="text" name="nim" placeholder="NIM" size="50" value="<?php echo $ed[nim]; ?>" required></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>: <input type="text" name="nama" placeholder="Nama Mahasiswa" size="50" value="<?php echo $ed[nama]; ?>" required></td>
  </tr>
  <tr>
    <td>Jurusan</td>
    <td>: <input type="text" name="jurusan" placeholder="Jurusan" size="50" value="<?php echo $ed[jurusan] ?>" required></td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>: <input type="text" name="kelas" placeholder="Kelas" size="50" value="<?php echo $ed[kelas] ?>" required></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="UPDATE" value="&radic; Update"> <input type="reset"></td>
  </tr>
  </tbody>  
</table>
</form>

<?php
} // tutup while diatas
if($_POST[UPDATE]){
	$nama = htmlentities($_POST[nama]);
	$nim = htmlentities($_POST[nim]);
	$jurusan = htmlentities($_POST[jurusan]);
	$kelas = htmlentities($_POST[kelas]);
	
	$update = mysql_query("UPDATE mhs SET nim='$nim', nama='$nama', jurusan='$jurusan', kelas='$kelas' WHERE id='$id'");
	if($update){
		echo("
			<script>alert('Data [ $nama ] berhasil di Update')</script>
			<meta http-equiv=refresh content='0; url=?n=viewData' >
		");
	}else{
		echo("
			<script>alert('ERROR | Data gagal di update')</script>
			<meta http-equiv=refresh content='0; url=?n=addData' >
		");	
	}
}

?>
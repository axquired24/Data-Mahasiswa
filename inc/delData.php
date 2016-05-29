<?php
$id = $_GET[idDel];
$nama=$_GET[nama];
$del = mysql_query("DELETE FROM mhs where id='$id'");
if($del){
	echo("
		<script>alert('Data [$nama] berhasil dihapus')</script>
		<meta http-equiv=refresh content='0; url=?n=viewData'>
		");
}

?>
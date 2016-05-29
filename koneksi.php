<?php
$h='localhost';
$u='root';
$p='root';
$db='tgs_sql';
$k=mysql_connect($h,$u,$p) or die("tidak terkoneksi");
$dB_sel=mysql_select_db($db) or die("db tidak dipilih");
?>
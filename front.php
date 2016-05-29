<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Mahasiswa | Lihat Data</title>
<link href="defaultCSS.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery.js"></script>
</head>

<body>
	<div id="headTop"><strong>Data</strong> Mahasiswa ~</div>
    <div id="contenMid">
    	<div class="leftMenu">
        	<span>Tools</span>
        	<a id="menuU" class="addData" href="?n=addData"> Tambah Data Mahasiswa</a>
        	<a id="menuU" class="viewData" href="?n=viewData"> Daftar Mahasiswa</a>
        	<a id="menuU" class="editData" href="#"> Edit Data Mahasiswa</a>
        	<a id="menuU" class="exit" href="./"> Exit</a>
        </div>
        <div class="rightContent">
        	<?php
				$nmFile = $_GET[n];
				if(isset($nmFile)){
					include("inc/".$nmFile.".php");					
				}else{
					include("inc/viewData.php");
				}
			?>
        </div>
    </div>
    <div id="signFoot">&copy; 2013 Axquired <strong>Apps</strong></div>
</body>
</html>

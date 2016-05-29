<script>
	$("document").ready(function(){
		$(".viewData").toggleClass("active");
	});
</script>
<span>Daftar Nama mahasiswa</span>
<?php echo("
    <table width='100%' border='0' cellspacing='0' cellpadding='5'>
      <thead>
        <th>No.</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Kelas</th>
        <th>Pilihan</th>
      </thead>
      <tbody>
      ");
      $q = mysql_query("SELECT * FROM mhs ORDER BY nim ASC");
      $num = 1;
      while ($dat = mysql_fetch_array($q)){
      echo("				  
      <tr>
        <td align=center>".$num++."</td>
        <td align=center>$dat[nim]</td>
        <td align=center>$dat[nama]</td>
        <td align=center>$dat[jurusan]</td>
        <td align=center>$dat[kelas]</td>
        <td align=center><a href=?n=editData&idEdit=$dat[id]><button>Edit</button></a> <a href=?n=delData&idDel=$dat[id]&nama=$dat[nama]><button>Hapus</button></a></td>
      </tr>
      ");
      }
      echo("
      <tr>
        <td colspan=6 align=right><button>Prev &larr;</button> <button>Next &rarr;</button></td>
      </tr>
      </tbody>
    </table>            
"); ?>

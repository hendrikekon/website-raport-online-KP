<?php

include "conn.php";

?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Hasil Nilai UTS & UAS</h1>
</div>
<!-- end page-heading -->



<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
    <th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
    <th class="topleft"></th>
    <td id="tbl-border-top">&nbsp;</td>
    <th class="topright"></th>
    <th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
    <td id="tbl-border-left"></td>
    <td>
    <!--  start content-table-inner ...................................................................... START -->
    <div id="content-table-inner">
    		



      	<!--  start product-table ..................................................................................... -->
        
        <!--  start step-holder -->
		<div id="step-holder">
			
		  <div class="step-no-off">1</div>
			<div class="step-light-left"><a href="?page=guru_input_utsuas">Pilih Mata Pelajaran</a></div>
			<div class="step-light-right">&nbsp;</div>
            
            <div class="step-no-off">2</div>
			<div class="step-light-left">Input Nilai Siswa</div>
			<div class="step-light-right">&nbsp;</div>
            
            
			<div class="step-no">3</div>
			<div class="step-dark-left">Selesai</div>
			<div class="step-dark-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
    	<?php
		
		$id_guru=$_GET['id_guru'];
		$id_kelas=$_GET['id_kelas'];
		$kd_mapel=$_GET['kd_mapel'];
		
		$guru=mysql_fetch_array(mysql_query("select * from guru where id_guru='$id_guru'"));
		$kelas=mysql_fetch_array(mysql_query("select * from kelas where id_kelas='$id_kelas'"));
		$pelajaran=mysql_fetch_array(mysql_query("select * from mata_pelajaran where kd_mapel='$kd_mapel'"));
		
		$nama_guru=$guru['nama_guru'];
		$nama_kelas=$kelas['nama_kelas'];
		$nama_pelajaran=$pelajaran['nama_pelajaran'];
		
		?>
    
    
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        <tr>
          <th valign="top">Nama Guru</th>
          <td><input type="text" class="inp-form" name="nama_guru" value="<?php echo $nama_guru;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
         <tr>
          <th valign="top">Pelajaran</th>
          <td><input type="text" class="inp-form" name="pelajaran" value="<?php echo $nama_pelajaran;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
        <tr>
          <th valign="top">Kelas</th>
          <td><input type="text" class="inp-form" name="kelas" value="<?php echo $nama_kelas;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
      </table>
      <br />
      
        <form id="mainform" action="home.php?page=guru_input_nilai_utsuas" method="post">
        <table border="0" width="48%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th width="10%" class="table-header-repeat line-left minwidth-1"><a href="">Nomor</a>	</th>
            <th width="60%" class="table-header-repeat line-left minwidth-1"><a href="">Nama Siswa</a></th>
            <th width="60%" class="table-header-repeat line-left minwidth-1"><a href="">NIS</a></th>
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Nilai UTS</a></th>
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Nilai UAS</a></th>
        </tr>
        
        
        <?php
		$view=mysql_query("SELECT * FROM nilai_uts_uas, siswa WHERE nilai_uts_uas.id_siswa=siswa.id_siswa and nilai_uts_uas.id_guru='$id_guru' and nilai_uts_uas.id_kelas='$id_kelas' and nilai_uts_uas.kd_mapel='$kd_mapel' order by siswa.nama asc");
		
		$i = 1;
		while($row=mysql_fetch_array($view)){
			?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $row['nama'];?></td>
				<td><?php echo $row['nisn'];?></td>
				<td><?php echo $row['n_uts'];?></td>
        <td><?php echo $row['n_uas'];?></td>
			</tr>
			<?php
			$i++;
		}
			$jumSis = $i-1;
		?>
        <input type="hidden" name="jumlah" value="<?php echo $jumSis ?>" />
        </table>
        <!--  end product-table................................... --> 
        </form>
		
        
        
	<div class="clear"></div>
     
    </div>
    <!--  end content-table-inner ............................................END  -->
    </td>
    <td id="tbl-border-right"></td>
</tr>
<tr>
    <th class="sized bottomleft"></th>
    <td id="tbl-border-bottom">&nbsp;</td>
    <th class="sized bottomright"></th>
</tr>
</table>
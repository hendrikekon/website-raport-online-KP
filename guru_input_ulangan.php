<?php

include "conn.php";

if(isset($_GET['id_guru'])){
	
	$id_guru=$_GET['id_guru'];
	$kd_mapel=$_GET['kd_mapel'];
	$id_kelas=$_GET['id_kelas'];
	
	$query=mysql_query("select * from ulangan where id_guru='$id_guru' and kd_mapel='$kd_mapel' and id_kelas='$id_kelas'");
	$cek=mysql_num_rows($query);
	
	if($cek=='0'){
		//kalo belum ada mode input
		?><script language="javascript">document.location.href="?page=guru_input_nilai_ulangan&id_guru=<?php echo $id_guru;?>&kd_mapel=<?php echo $kd_mapel;?>&id_kelas=<?php echo $id_kelas;?>";</script><?php
	}else{
		//kalo sudah ada mode update
		?><script language="javascript">document.location.href="?page=guru_update_nilai_ulangan&id_guru=<?php echo $id_guru;?>&kd_mapel=<?php echo $kd_mapel;?>&id_kelas=<?php echo $id_kelas;?>";</script><?php
	}
	
}else{
	unset($_POST['id_guru']);
}


?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Input Nilai Ulangan</h1>
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
			<div class="step-no">1</div>
			<div class="step-dark-left">Pilih Mata Pelajaran</div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">2</div>
			<div class="step-light-left">Input Nilai Siswa</div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no-off">3</div>
			<div class="step-light-left">Selesai</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
        
        
        <form id="mainform" action="">
        <table border="0" width="48%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th width="10%" class="table-header-repeat line-left minwidth-1"><a href="">Nomor</a>	</th>
            <th width="60%" class="table-header-repeat line-left minwidth-1"><a href="">Nama Mata Pelajaran</a></th>
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Kelas</a></th>
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Tahun Ajaran</a></th>
        </tr>
        
        
        <?php
		$id_guru=$_SESSION['id_guru'];
		$view=mysql_query("select * from pengajar, mata_pelajaran, kelas, guru where pengajar.kd_mapel=mata_pelajaran.kd_mapel and pengajar.id_kelas=kelas.id_kelas and pengajar.id_guru=guru.id_guru and pengajar.id_guru='$id_guru'");
    
		
		$no=0;
		while($row=mysql_fetch_array($view)){
		?>	
		<tr>
            <td><?php echo $no=$no+1;?></td>
            <td><a href="?page=guru_input_ulangan&id_guru=<?php echo $id_guru;?>&kd_mapel=<?php echo $row['kd_mapel'];?>&id_kelas=<?php echo $row['id_kelas'];?>" style="text-decoration:underline" title="Pilih Mata Pelajaran"><?php echo $row['nama_pelajaran'];?></a></td>
            <td><?php echo $row['nama_kelas'];?></td>
            <td><?php echo $row['id_th_ajaran'];?></td>
        </tr>
        </tr>
		<?php
		}
		?>
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

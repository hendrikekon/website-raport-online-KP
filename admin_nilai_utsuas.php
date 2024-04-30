<?php 

include "conn.php";

?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Nilai UTS & UAS</h1>
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
  

    
    

      <br />
      
        <table border="0" width="48%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th width="10%" class="table-header-repeat line-left minwidth-1"><a href="">Id</a></th>
            <th width="60%" class="table-header-repeat line-left minwidth-1"><a href="">Nama Siswa</a></th>
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Kelas</a></th>
            <th width="60%" class="table-header-repeat line-left minwidth-1"><a href="">Nama Pelajaran</a></th>
            <th width="20%" class="table-header-repeat line-left minwidth-1"><a href="">Nilai UTS</a></th>
            <th width="20%" class="table-header-repeat line-left minwidth-1"><a href="">Nilai UAS</a></th>
        </tr>
        
        
        <?php

    $view=mysql_query("select id_nilai, nama, nama_kelas, nama_pelajaran, n_uts, n_uas from nilai_uts_uas, mata_pelajaran, siswa, kelas where nilai_uts_uas.kd_mapel=mata_pelajaran.kd_mapel and nilai_uts_uas.id_siswa=siswa.id_siswa and nilai_uts_uas.id_kelas=kelas.id_kelas");
    
    $i = 1;
    while($row=mysql_fetch_array($view)){
        ?>
      <tr>
        <td><?php echo $row['id_nilai'];?></td>
        <td><?php echo $row['nama'];?></td>
        <td><?php echo $row['nama_kelas'];?></td>
        <td><?php echo $row['nama_pelajaran'];?></td>
        <td><?php echo $row['n_uts'];?></td>
        <td><?php echo $row['n_uas'];?></td>
      </tr>
      <?php
      $i++;
      
   
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
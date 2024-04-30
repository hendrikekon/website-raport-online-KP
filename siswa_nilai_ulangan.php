<?php 

include "conn.php";

?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Nilai Ulangan</h1>
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
  
      <?php
    
    $id_siswa=$_SESSION['id_siswa'];
    $siswa=mysql_fetch_array(mysql_query("select nama, nisn from siswa where id_siswa='$id_siswa'"));
    
    $nama=$siswa['nama'];
    $nisn=$siswa['nisn'];

    ?>
    
    
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        <tr>
          <th valign="top">Nama Siswa</th>
          <td><input type="text" class="inp-form" name="nama" value="<?php echo $nama;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
         <tr>
          <th valign="top">NISN</th>
          <td><input type="text" class="inp-form" name="nisn" value="<?php echo $nisn;?>" disabled="disabled"/></td>
          <td></td>
        </tr>

      </table>
      <br />
      
      <a href="report_ulangan.php">[=] Cetak</a>

        <table border="0" width="48%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th width="10%" class="table-header-repeat line-left minwidth-1"><a href="">Id Ulangan</a></th>
            <th width="60%" class="table-header-repeat line-left minwidth-1"><a href="">Nama Pelajaran</a></th>
            <th width="60%" class="table-header-repeat line-left minwidth-1"><a href="">Tahun Ajaran</a></th>
            <!-- <th width="60%" class="table-header-repeat line-left minwidth-1"><a href="">Ulangan ke</a></th> -->
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Nilai</a></th>
        </tr>
        
        
        <?php

    $view=mysql_query("select * from ulangan, mata_pelajaran, kelas where id_siswa='$id_siswa' and ulangan.kd_mapel=mata_pelajaran.kd_mapel and ulangan.id_kelas=kelas.id_kelas");
    
    $i = 1;
    while($row=mysql_fetch_array($view)){
        ?>
      <tr>
        <td><?php echo $row['id_ulangan'];?></td>
        <td><?php echo $row['nama_pelajaran'];?></td>
        <td><?php echo $row['id_th_ajaran'];?></td>
        <!-- <td><?php // $row['ulangan_ke'];?></td> -->
        <td><?php echo $row['nilai'];?></td>
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
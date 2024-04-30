<?php 

include "conn.php";

?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Catatan Pesensi</h1>
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
      
        <table border="0" width="48%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th width="10%" class="table-header-repeat line-left minwidth-1"><a href="">Id</a></th>
            <th width="60%" class="table-header-repeat line-left minwidth-1"><a href="">bulan</a></th>
            <th width="60%" class="table-header-repeat line-left minwidth-1"><a href="">Tahun Ajaran</a></th>
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Jumlah Masuk</a></th>
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Sakit</a></th>
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Izin</a></th>
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Alasan</a></th>
        </tr>
        
        
        <?php

    $view=mysql_query("select id_presensi, bulan, id_th_ajaran, jml_presensi, sakit, izin, alasan from presensi where id_siswa='$id_siswa'");
    
    $i = 1;
    while($row=mysql_fetch_array($view)){
        ?>
      <tr>
        <td><?php echo $row['id_presensi'];?></td>
        <td><?php echo $row['bulan'];?></td>
        <td><?php echo $row['id_th_ajaran'];?></td>
        <td><?php echo $row['jml_presensi'];?></td>
        <td><?php echo $row['sakit'];?></td>
        <td><?php echo $row['izin'];?></td>
        <td><?php echo $row['alasan'];?></td>
      </tr>
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
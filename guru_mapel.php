<?php 

include "conn.php";

?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Daftar Mata Pelajaran</h1>
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
    
    $id_guru=$_SESSION['id_guru'];
   
    ?>
    
    
      <br />
      
        <table border="0" width="48%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th width="10%" class="table-header-repeat line-left minwidth-1"><a href="">Kode Mapel</a></th>
            <th width="60%" class="table-header-repeat line-left minwidth-1"><a href="">Mata Pelajaran</a></th>
        </tr>
        
        
        <?php

    $viewgurumapel=mysql_query("select kd_mapel, nama_pelajaran from mata_pelajaran");
    
    $i = 1;
    while($row=mysql_fetch_array($viewgurumapel)){
        ?>
      <tr>
        <td><?php echo $row['kd_mapel'];?></td>
        <td><?php echo $row['nama_pelajaran'];?></td>
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
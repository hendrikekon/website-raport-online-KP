<?php 

include "conn.php";

?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Tahun Ajaran</h1>
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

      <nav>
      <a href="?page=admin_tambah_thn_ajaran">[+] Tambah Data</a>
      </nav>


        <table border="0" width="70%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Id Tahun Ajaran</a></th>
            <th width="40%" class="table-header-repeat line-left minwidth-1"><a href="">Tahun Ajaran</a></th>
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Semester</a></th>
            <th width="60%" class="table-header-repeat line-left minwidth-1"><a href="">Keterangan</a></th>
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Aksi</a></th>
        </tr>
        
        
        <?php

    $view=mysql_query("select * from thn_ajaran");
    
    $i = 1;
    while($row=mysql_fetch_array($view)){
        ?>
      <tr>
        <td><?php echo $row['id_th_ajaran'];?></td>
        <td><?php echo $row['tahun_ajaran'];?></td>
        <td><?php echo $row['semester'];?></td>
        <td><?php echo $row['keterangan'];?></td>


        <td> <a href="?page=admin_update_thn_ajaran&update=Update&id_th_ajaran=<?php echo $row['id_th_ajaran']; ?>">Edit</button></a>
            <!-- <a href="?page=admin_update_thn_ajaran&id_th_ajaran=<?php //echo $id_th_ajaran;?>">Ubah</a> -->
            <a> - </a>
            <a href="?page=admin_thn_ajaran"<?php echo $row['id_th_ajaran'];?>>Hapus</a></td>;



        <!--<script language="javascript">document.location.href="?page=admin_update_thn_ajaran&id_th_ajaran=<?php //echo $id_th_ajaran;?>";-->



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
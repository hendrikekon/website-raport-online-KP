<?php 

include "conn.php";

?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Pofil</h1>
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

    $guru=mysql_fetch_array(mysql_query("select * from guru where id_guru='$id_guru'"));

    $nip=$guru['nip'];
    $nama=$guru['nama_guru'];
    $tempat_lahir=$guru['tempat_lahir'];
    $tgl_lahir=$guru['tgl_lahir'];
    $jns_kelamin=$guru['jns_kelamin'];
    $alamat=$guru['alamat'];
    $no_telp=$guru['no_telp'];
    $username=$guru['username'];
    $password=$guru['password'];
    ?>
    
    
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        <tr>
          <th valign="top">Id Guru</th>
          <td><?php echo $id_guru; ?></td>
          <td></td>
        </tr>
        <tr>
          <th valign="top">Nip</th>
          <td><?php echo $nip; ?></td>
          <td></td>
        </tr>
        <tr>
          <th valign="top">Nama Guru</th>
          <td><?php echo $nama_guru; ?></td>
          <td></td>
        </tr>
         <tr>
          <th valign="top">Tempat Lahir</th>
          <td><?php echo $tempat_lahir; ?></td>
          <td></td>
        </tr>
        <tr>
          <th valign="top">Tanggal Lahir</th>
          <td><?php echo $tgl_lahir; ?></td>
          <td></td>
        </tr>
        <tr>
          <th valign="top">Jenis Kelamin</th>
          <td><?php echo $jns_kelamin; ?></td>
          <td></td>
        </tr>
        <tr>
          <th valign="top">Alamat</th>
          <td><?php echo $alamat; ?></td>
          <td></td>
        </tr>
         <tr>
          <th valign="top">No Telp</th>
          <td><?php echo $no_telp; ?></td>
          <td></td>
        </tr>
        <tr>
          <th valign="top">Username</th>
          <td><input type="text" class="inp-form" name="username" value="<?php echo $username;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
        <tr>
          <th valign="top">Password</th>
          <td><input type="text" class="inp-form" name="password" value="<?php echo $password;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
      </table>
      <br />
      
 

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

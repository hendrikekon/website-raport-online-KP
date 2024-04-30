<?php 

include "conn.php";

?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Pofil Admin</h1>
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
    $id_admin=$_SESSION['id_admin'];

    $admin=mysql_fetch_array(mysql_query("select * from user_admin where id_admin='$id_admin'"));

    $id_admin=$admin['id_admin'];
    $nama_admin=$admin['nama_admin'];
    $username=$admin['username'];
    $password=$admin['password'];
    ?>
    
    
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        <tr>
          <th valign="top">Id siswa</th>
          <td><?php echo $id_admin; ?></td>
          <td></td>
        </tr>
        <tr>
          <th valign="top">Nama Admin</th>
          <td><?php echo $nama_admin; ?></td>
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

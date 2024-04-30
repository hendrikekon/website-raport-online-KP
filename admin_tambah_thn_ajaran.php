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

<body>
  <form method="post" action="?page=admin_tambah_thn_ajaran">    
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">

        <tr>
        <h6>*GUNAKAN HURUF KAPITAL (CAPS LOCK) UNTUK INPUT</h6>
        <td> </td> 
                
        </tr> 
            <th valign="top"></th>
            <td>Contoh id: 2019-2020-GJL | (2019-2020)adalah tahun ajaran (GJL)adalah semester</td>  
        
        <tr>        
            <th valign="top">Id Tahun Ajaran</th>      
            <td><input type="text" name="id_th_ajaran"></td>      
        </tr>

            <th valign="top"></th>    
            <td>Contoh tahun ajaran: 2019 / 2020</td> 
        <tr>        
            <th valign="top">Tahun Ajaran</th>  
            <td><input type="text" name="tahun_ajaran"></td>      
        </tr>      
        
        <tr>        
            <th valign="top">Semester</th> 
            <td>
            <select name="semester" id="semester">
                <option value="GANJIL">GANJIL</option>
                <option value="GENAP">GENAP</option>
            </select>
            </td>
        </tr>      
        
        <tr>        
            <th valign="top">Keterangan</th>          
            <td><textarea name="keterangan"></textarea></td>
        </tr>      
        <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add">
                <a href="?page=admin_thn_ajaran"><input type="button" value="Batal"></a></td>
            </tr>

    </table>

        <!-- <hr>    
        <input type="submit" value="Simpan">    
        <a href="?page=admin_thn_ajaran"><input type="button" value="Batal"></a> -->
        <!--  end product-table................................... --> 
        </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_th_ajaran = $_POST['id_th_ajaran'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $semester = $_POST['semester'];
        $keterangan = $_POST['keterangan'];


        // Insert user data into table
        $insajaran = "insert into thn_ajaran values('$id_th_ajaran','$tahun_ajaran','$semester','$keterangan')";
        $hasil=mysql_query($insajaran);   
        // Show message when user added
        echo "User added successfully. <a href='?page=admin_thn_ajaran'>View Users</a>";
    }
    ?>
    
  </body>      
        
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
<?php 

include "conn.php";

?>


<?php

 $id_th_ajaran = $_GET['id_th_ajaran'];


$view = mysql_query(" SELECT * From thn_ajaran where id_th_ajaran = '$id_th_ajaran'");


    while($row=mysql_fetch_array($view)){
        ?>
    <tr>
    <td><?php echo $row['id_th_ajaran']; ?></td>
    <td><?php echo $row['tahun_ajaran']; ?></td>
    <td><?php echo $row['semester']; ?></td>
    <td><?php echo $row['keterangan']; ?></td>
    </tr>
    


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
  <form method="post" action="?page=admin_update_thn_ajaran">    
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">

        <tr>
        <h6>*GUNAKAN HURUF KAPITAL (CAPS LOCK) UNTUK INPUT</h6>
        <td> </td> 
                
        </tr> 
        <!-- <tr>        
            <th valign="top">Id Tahun Ajaran</th>      
            <td><input type="text" name="id_th_ajaran" id ="id_th_ajaran" value="<?php //echo $row['id_th_ajaran']; ?>"></td>      
        </tr> -->

            <th valign="top"></th>    
            <td>Contoh tahun ajaran: 2019 / 2020</td> 
        <tr>        
            <th valign="top">Tahun Ajaran</th>  
            <td><input type="text" id="tahun_ajaran" name="tahun_ajaran" value="<?php echo $row['tahun_ajaran'];?>"></td>
        </tr>      
        
        <tr>        
            <th valign="top">Semester</th> 
            <td>
            <select name="semester" id="semester" value="<?php echo $row['semester'];?>">
                <option value="GANJIL">GANJIL</option>
                <option value="GENAP">GENAP</option>
            </select>
            </td>
        </tr>      
        
        <tr>        
            <th valign="top">Keterangan</th>          
            <td><input name="keterangan" id="keterangan" value="<?php echo $row['keterangan']; ?>"></textarea></td>
        </tr>      
        <tr> 
            <td><input type="submit" name="update" value="Update">
                <a href="?page=admin_thn_ajaran"><input type="button" value="Batal"></a></td>
        </tr>

    </table>

<?php

//    <!-- 
    // $id_th_ajaran = $row['id_th_ajaran'];
    // $tahun_ajaran = $row['tahun_ajaran'];
    // $semester = $row['semester'];
    // $keterangan = $row['keterangan']; -->
}
?>
        <!-- <hr>    
        <input type="submit" value="Simpan">    
        <a href="?page=admin_thn_ajaran"><input type="button" value="Batal"></a> -->
        <!--  end product-table................................... --> 
        </form>

    <?php 

if(isset($_POST['Update']))
{   
    $id_th_ajaran = $_GET['id_th_ajaran'];

    $tahun_ajaran=$_POST['tahun_ajaran'];
    $semester=$_POST['semester'];
    $keterangan=$_POST['keterangan'];

    // update user data
    $updajaran = "update thn_ajaran set tahun_ajaran='$tahun_ajaran',semester='$semester',keterangan='$keterangan' where id_th_ajaran='$id_th_ajaran',)";
        $hasil=mysql_query($updajaran); 

    // Redirect to homepage to display updated user in list
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
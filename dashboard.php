<?php  

if($_SESSION['domain']=='guru'){
	$id_guru=$_SESSION['id_guru'];
	$username=ucwords($_SESSION['username']);
	
	$data=mysql_fetch_array(mysql_query("select * from guru where id_guru='$id_guru'"));

	$kelamin=$data['jns_kelamin'];
	
	if($kelamin=='laki-laki'){
		$sapaan='Pak ';
	}else{
		$sapaan='Ibu ';
	}
	
	$pengguna=$sapaan.$username;
}else{
	$pengguna=ucwords($_SESSION['username']);
}

?>

<div id="page-heading">
    <h1>Assalamu'alaikum, Selamat Datang <?php echo $pengguna;?> </h1>
</div>
<!-- end page-heading -->

<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<!-- <tr>
    <th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
    <th class="topleft"></th>
    <td id="tbl-border-top">&nbsp;</td>
    <th class="topright"></th>
    <th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr> -->
    <td id="tbl-border-left"></td>
    <td>
     start content-table-inner ...................................................................... START
    <div id="content-table-inner">
    		
            <div id="message-green">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="green-left">Selamat Datang Sistem Penilaian Nilai Siswa Online. Waktu Akses [ <?php echo $_SESSION['waktu'];?> ]</td>
                <td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
          
			<!--  start message-yellow -->
            <!--
            <div id="message-yellow">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="yellow-left">You have a new message. <a href="">Go to Inbox.</a></td>
                <td class="yellow-right"><a class="close-yellow"><img src="images/table/icon_close_yellow.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            -->
            <!--  end message-yellow -->
            
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                <div id="table-content">
                <p align="center"><img src="images/visi misi.png"></p>
                Visi :
                <br />
                Terwujudnya generasi islam yang berkualitas, berakhlak mulia, menguasai iptek serta berwawasan luas.
 
                <br />
                <br />
                Misi:
                <br />
                a. Mewujudkan penghayatan, keterampilan dan pengalaman terhadap ajaran agama islam menuju terbentuknya insan yang beriman dann bertakwa.
                <br />
                b. Mewujudkan proses belajar mengajar dan bimbingan secara aktif, kreatif, efektif dan menyenangkan dengan pendekatan ilmu pengetahuan.
                <br />
                c. Mewujudkan pendidikan yang berkarakter, berakhlakul karimah, cerdas, sehat, disiplin, dan bertanggung jawab.
                <br />
                d. Memberikan layananpengembangan minat dari bakat peserta didikdengan dengan pengembangan diri sertaprogram ekstrakulikuler.
 
                <br />

                <!-- end id-form  -->
              </td>

            </tr>

          </table>

      

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

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />

<div class="navbar">
  <div class="topnav-left">
    <a class="active" href="?page=dashboard">Home</a>
  </div>
  

  <div class="dropdown">
    <button class="dropbtn">Data Kelas
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="?page=siswa_kelas_siswa">Kelas</a>
      <a href="?page=siswa_wali_kelas">Wali Kelas</a>
      <a href="?page=siswa_guru">Guru</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Data Nilai
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="?page=siswa_presensi">Pesensi</a>
      <a href="?page=siswa_nilai_ulangan">Ulangan</a>
      <a href="?page=siswa_nilai_utsuas">UTS & UAS</a>
    </div>
  </div> 
  <div class="topnav-right">
    <a href="?page=siswa_profil">Profil</a>
    <a href="logout.php" id="logout" onclick="return confirm('Apakah Anda yakin?')">Logout</a>
  </div>
</div>


</body>
</html>
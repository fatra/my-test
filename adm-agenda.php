<html lang="en">

<head>
  <title>Official Site of Batu TV</title>
  <link rel="stylesheet" href="style.css" type="text/css" />	    
</head>
<?php 
include("cnn/koneksi.php");
if($_COOKIE['nama']==""){
header('Location: login.php');
}
?>
<body bgcolor="white">
<div align="center">
<div id="header-adm">
<div id="menu-adm">
<a href="index.php" class="button orange" id="button">Home</a>
<a href="adm-agenda.php" class="button orange" id="button">Agenda</a>
<a href="adm-program.php" class="button orange" id="button">Program Acara</a>
</div>
</div>
<?php

// jumlah data yang akan ditampilkan per halaman

$dataPerPage = 10;

// apabila $_GET['page'] sudah dkodeefinisikan, gunakan nomor halaman tersebut, 
// sedangkan apabila belum, nomor halamannya 1.
if(isset($_GET['del']) && ($_GET['del']!=""))
{
$kode=$_GET['del'];
	$sql = "DELETE FROM agenda WHERE kode = ".$kode."";
	$result = mysql_query($sql) or die('Error del');
	echo 'Delete Sucsses'; 
}

if(isset($_GET['add']) && ($_POST['tgl']!=""))
{
$kode=$_GET['add'];
$tgl=$_POST['tgl'];
$title=$_POST['title'];
$desc=$_POST['desc'];
	$sql = "INSERT INTO agenda () values ('$kode','$title','$desc','$tgl')";
	$result = mysql_query($sql) or die(mysql_error());
	echo 'Insert Sucsses'; 
}

?>
<div id="wrap-ag">
<div id="kotak-ag">
<div id="bginfo">	<h2>Update Agenda</h2></div>
<form kode="form1" name="form1" method="post" action="adm-agenda.php?add=x">
  <p>Tanggal<br>
    <input type="text" name="tgl" value="2011-12-30"/>
  </p>
  <p>Judul<br>
    <input type="text" name="title" value=""/>
  </p>
  <p>Deskripsi<br>
    <textarea name="desc" cols="50" rows="5"></textarea>
  </p>
  
  <p>
    <input type="submit" name="Submit" value="Post" />
  </p>
</form>
</div>
<?php 

if(isset($_GET['page']))
{
    $noPage = $_GET['page'];
} 
else $noPage = 1;

// perhitungan offset

$offset = ($noPage - 1) * $dataPerPage;

// query SQL untuk menampilkan data perhalaman sesuai offset

$query = "SELECT * FROM agenda ORDER BY tgl DESC LIMIT 0, $dataPerPage";

$result = mysql_query($query) or die(mysql_error());

// menampilkan data 
?><div id="adm-agenda"><div id="bginfo">	<h2>Daftar Agenda</h2></div><?php 
while($data = mysql_fetch_array($result))
{
$date=date_create($data['tgl']);
$date=date_format($date, 'l, d F Y');
echo '
		<p><a>'.$data['title'].'<br />'.$data['desc'].'<hr></a></p><span><tbl><a href=edit-agenda.php?edit='.$data['kode'].'>Edit</a></tbl><tbl><a href=adm-agenda.php?del='.$data['kode'].'>Hapus</a></tbl></span>
		<center><tgl><b>'.$date.'</b><hr></tgl></center>';
}
   //<a href=agenda.php?del=".$data['kode'].">Finish</a></td>";

// mencari jumlah semua data dalam tabel guestbook

$query   = "SELECT COUNT(*) AS jumData FROM agenda";
$hasil  = mysql_query($query);
$data     = mysql_fetch_array($hasil);

$jumData = $data['jumData'];
echo '<div id="paging"><br>Jumlah Item : '.$jumData.'<br>';
// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data

$jumPage = ceil($jumData/$dataPerPage);

// menampilkan link previous

if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'>&lt;&lt; Prev</a>";

// memunculkan nomor halaman dan linknya

for($page = 1; $page <= $jumPage; $page++)
{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage)) 
         {   
            if (($showPage == 1) && ($page != 2))  echo "..."; 
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            if ($page == $noPage) echo " <b>".$page."</b> ";
            else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a> ";
            $showPage = $page;          
         }
}

// menampilkan link next
if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Next &gt;&gt;</a>";

?>
</div>
</div>
</div>
<div id="footer">
	<div id="foot">
		<div id="copyright" align="center"><span>www.BatuTelevisi.com</span> by <a href="http://www.facebook.com/groups/140423629371788" rel="cc:attributionURL">DDF Creation</a>.</div>
  </div>
		</div>
</body>
</html>
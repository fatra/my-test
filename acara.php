<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Official Site of Batu TV</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Batu Tv Online Streaming, by DDF creation" />
<meta name="keywords" content="batu tv, video streaming, televisi lokal streaming" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="shortcut icon" href="images/icon.png" />
<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/other.js"></script>
<script type="text/javascript" src="js/gaia.js"></script>
<script language="JavaScript" src="engine/swfobject.js" type="text/javascript"></script>
</head>
<body>
<div id="back" align="center">
	<div id="head">
		<div id="header">
		
	<div id ="cu3ox" style="margin-top:-10px;height:180;">
		<div id ="cu3ox" style="width:960px;height:180px;margin:0 auto;">
		<div id ="cu3ox1"></div>
		<script language="JavaScript" type="text/javascript">
		swfobject.createSWF(
		{data:"engine/cu3ox.swf", width:"100%", height:"100%" },
		{FlashVars:"images=data/images1&cfgsuffix=1",menu:true, allowFullScreen:false, allowScriptAccess:'sameDomain', wmode:"transparent", bgcolor:'#FFFFFF', devicefont:false, scale:'noscale', loop:true, play:true, quality:'high'}, "cu3ox1");
		</script><a style="display:none" href="http://cu3ox.com">Flash Photo Show by cu3ox.com v1.6</a><noscript>
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" 
		codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" 
		width="100%" height="100%" id="cu3ox1" align="middle">
		<param name="allowScriptAccess" value="sameDomain" /><param name="allowFullScreen" value="false" />
		<param name="movie" value="cu3ox.swf" /><param name="quality" value="high"/><param name="scale" value="noscale"/>
		<param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" />
		<param name="FlashVars" value="images=data/images1&cfgsuffix=1" />
		<embed src="engine/cu3ox.swf" quality="high" scale="noscale" bgcolor="#ffffff" width="100%" height="100%" name="cu3ox" wmode="transparent"
		align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" 
		pluginspage="http://get.adobe.com/flashplayer/" />
		</object></noscript>
		</div>
	</div>

	<div id="menu" align="center">
		<ul>
		<li><a href="index.php">Home</a></li>
		<li class="submenu"><a href="profil.php">About</a>
			<ul>
				<li><a class="active" href="profil.php">Profil</a></li>
				<li><a href="jangkauan.php">Jangkauan</a></li>
			</ul></li>
		<li class="submenu"><a href="#">Services</a>
			<ul>
				<li><a href="acara.php">Program Acara</a></li>
				<li><a href="agenda.php">Agenda</a></li>
			</ul></li>
	</ul>
		</div>
		<!--Menu END -->
		</div>
	</div>
	
	
	<div id="backbody" align="center">
		<div id="bgbody">
		<div id="body">
		
		<!-- Sisi Kiri -->
		<div id="lside" align="left">
			<div id="acara">
			<h2><div id="bginfo" align="center">Program Acara Batu TV</div></h2>
			<div id="d_isiagenda">
			<!-- Isi -->
				<?php 
				
				require_once('cnn/koneksi.php');
				
				if(isset($_GET['d'])){
				    $id = $_GET['d'];
					require_once('cnn/acara_saja.php');
					}
				else{
					require_once('cnn/semua_acara.php');
					}
				
				?>
			<!-- END -->
			</div>
			</div>
			
		</div>
		<!-- END Sisi Kiri -->
		
		
		<!-- Sisi Kanan -->
		<div id="rside" align="left">
			<div id="agenda">
			<h2><div id="bginfo" align="center">Agenda Terbaru</div></h2>
				<div id="isiagenda">
						
					<?php 
					
					require_once('cnn/agenda.php');
					
					?>

				</div>
			</div>
			
			<div id="link">
			  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="260" height="100" title="website Kota Batu">
                <param name="movie" value="data/batukota.swf" />
                <param name="quality" value="high" />
                <embed src="data/batukota.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="260" height="100"></embed>
		      </object>
			</div>
			
			
			<div id="banner">
				<!--
				<div id="gbbanner"></div>
				<div id="gbbanner"></div>
				-->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="260" height="500">
  <param name="movie" value="data/space ads.swf" />
  <param name="quality" value="high" />
  <embed src="data/space ads.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="260" height="500"></embed>
</object>
			</div>
		</div>
		<!-- END Sisi Kanan -->
		
		<div id="bginform" align="center">
		<div id="inform">
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="950" height="200">
        <param name="movie" value="data/footer.swf" />
        <param name="quality" value="high" />
        <embed src="data/footer.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="950" height="200"></embed>
      </object>
	  
		</div>
		</div>
		</div>
		
		
		</div>
	</div>
	
	<div id="footer">
	<div id="foot">
	<div id="copyright" align="center"><span>www.BatuTelevisi.com</span> by <a href="http://www.facebook.com/groups/140423629371788" rel="cc:attributionURL">DDF Creation</a>. </div>
		
		<div id="feed">
			<div class="twitter">
			<a href="#"><img class="t1" alt="Twitter" src="images/t1.gif" /></a>
			<a href="#"><img class="t2" alt="Twitter" src="images/t2.gif" /></a>
			</div>
			<div class="facebook">
			<a href="#"><img class="fb1" alt="FaceBook" src="images/fb1.gif" /></a>
			<a href="#"><img class="fb2" alt="FaceBook" src="images/fb2.gif" /></a>
			</div>
			<div class="rss">
			<a href="#"><img class="rss1" alt="Rss" src="images/rss1.gif" /></a>
			<a href="#"><img class="rss2" alt="Rss" src="images/rss2.gif" /></a>
			</div>
		</div>
	</div>
	</div>
</div>
</body>
</html>
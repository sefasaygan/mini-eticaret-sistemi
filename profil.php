<?php
$title="Profil | irockthe80s.com";
 require_once "php/header.php"; 
 if(empty($_SESSION["kullanici"])){ 
@header("Location: index.php");

 }
 ?>

		
	</div></div>
    <div class="column column-9">
	<div class="icerik">
<div class="ustyazi">
		 Profilim
</div>
		
		<div class="panelimsi">
		<ul>
			<li> <a href="profil.php">PANEL</a></li>
			<li> <a href="ad-urunler.php">ÜRÜNLER</a></li>
			<li> <a href="ad-ayarlar.php">AYARLAR</a></li>
		</ul>

		</div>
		<h1>Hoşgeldiniz <?php echo $_SESSION["kullanici"]; ?></h1> 
		<h6>Bu panelden Ürün Ekleyebilir ve işlemleri yapabilirsiniz.</h6>		 

	</div>
	
		</div>
	</div>
	

</div>

<div class="altkisim">Copright 2019 Tüm hakları saklıdır. <a href="https://sayganweb.com">Sefa SAYĞAN</a></div>

</body>
</php>
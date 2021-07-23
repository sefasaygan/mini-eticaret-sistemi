<?php
$title="Anasayfa | irockthe80s.com";
 require_once "php/header.php"; ?>

		<div class="row">
			 <div class="bolum">
			 	
				<img src="img/BMTH-12.jpg" width="100%" height="170px">
				<img src="img/linkin_park.jpg" width="100%" height="170px">
				<img src="img/bullet.jpg" width="100%" height="170px">
				<img src="img/Breaking-Benjamin.jpg" width="100%" height="170px">
			 </div>
		</div>
	</div>
</div>
    <div class="column column-9">


	<div class="icerik">
<div class="ustyazi">
			Anasayfa / Beğenilenler
</div>
		 <div class="row">
			<?php
$vt = new Veritabanim();
$sorgu = $vt->select("urunler","where kategori='bmth'");
if($sorgu != null) foreach( $sorgu as $satir ) { 
 	$urun=$satir['id'];
			 ?>
			<div class="urun">
				<h3><?php echo $satir["baslik"];  ?></h3>
				<img src="<?php echo $satir['resim'];  ?>">
				<p><small><?php echo $satir["icerik"];  ?></small></p>
				<p>Fiyat: <b><?php echo $satir["fiyat"];  ?> TL</b></p>
				<p><?php echo (isset($_COOKIE['urun'][$urun]) ? '<a href="?cikart='.$urun.'">[sepetten çıkart]</a>' : '<a href="?ekle='.$urun.'">[sepete ekle]</a>'); ?></p>

			 </div>
			<?php } ?>
			  </div>

	 <div class="row">
			<?php
$vt = new Veritabanim();
$sorgu = $vt->select("urunler","where kategori='linkin'");
if($sorgu != null) foreach( $sorgu as $satir ) { 
 	$urun=$satir['id'];
			 ?>
			<div class="urun">
				<h3><?php echo $satir["baslik"];  ?></h3>
				<img src="<?php echo $satir['resim'];  ?>">
				<p><small><?php echo $satir["icerik"];  ?></small></p>
				<p>Fiyat: <b><?php echo $satir["fiyat"];  ?> TL</b></p>
				<p><?php echo (isset($_COOKIE['urun'][$urun]) ? '<a href="?cikart='.$urun.'">[sepetten çıkart]</a>' : '<a href="?ekle='.$urun.'">[sepete ekle]</a>'); ?></p>

			 </div>
			<?php } ?>
			  </div>	
		
 <div class="row">
			<?php
$vt = new Veritabanim();
$sorgu = $vt->select("urunler","where kategori='benjamin'");
if($sorgu != null) foreach( $sorgu as $satir ) { 
 	$urun=$satir['id'];
			 ?>
			<div class="urun">
				<h3><?php echo $satir["baslik"];  ?></h3>
				<img src="<?php echo $satir['resim'];  ?>">
				<p><small><?php echo $satir["icerik"];  ?></small></p>
				<p>Fiyat: <b><?php echo $satir["fiyat"];  ?> TL</b></p>
				<p><?php echo (isset($_COOKIE['urun'][$urun]) ? '<a href="?cikart='.$urun.'">[sepetten çıkart]</a>' : '<a href="?ekle='.$urun.'">[sepete ekle]</a>'); ?></p>

			 </div>
			<?php } ?>
			  </div>

 <div class="row">
			<?php
$vt = new Veritabanim();
$sorgu = $vt->select("urunler","where kategori='bullet'");
if($sorgu != null) foreach( $sorgu as $satir ) { 
 	$urun=$satir['id'];
			 ?>
			<div class="urun">
				<h3><?php echo $satir["baslik"];  ?></h3>
				<img src="<?php echo $satir['resim'];  ?>">
				<p><small><?php echo $satir["icerik"];  ?></small></p>
				<p>Fiyat: <b><?php echo $satir["fiyat"];  ?> TL</b></p>
				<p><?php echo (isset($_COOKIE['urun'][$urun]) ? '<a href="?cikart='.$urun.'">[sepetten çıkart]</a>' : '<a href="?ekle='.$urun.'">[sepete ekle]</a>'); ?></p>

			 </div>
			<?php } ?>
			  </div>

	</div>
</div>
	
	</div>
	
		</div>

</div>

<div class="altkisim">Copyright 2019 Tüm Hakları Saklıdır. <a href="https://sayganweb.com">Sefa SAYĞAN</a></div>

</body>
</html>
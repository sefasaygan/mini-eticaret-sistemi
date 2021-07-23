<?php
$title="Ayarlar | irockthe80s.com";


 require_once "php/header.php";

  if(empty($_SESSION["kullanici"])){ 
@header("Location: index.php");

 } ?>


		
	</div></div>
    <div class="column column-9">
	<div class="icerik">
<div class="ustyazi">
		 Ayarlar
</div>
		
		<div class="panelimsi">
		<ul>
			<li> <a href="profil.php">PANEL</a></li>
			<li> <a href="ad-urunler.php">ÜRÜNLER</a></li>
			<li> <a href="ad-ayarlar.php">AYARLAR</a></li>
		</ul>

		</div>
		<?php 

$vt = new Veritabanim();
$sorgu = $vt->select("ayarlar","where id='1'");
if($sorgu != null)  foreach( $sorgu as $satir ) { 	$telefon=$satir['telefon'];
$tw=$satir['twitter'];
$face=$satir['face'];
$ins=$satir['instagram'];
$epost=$satir['eposta'];
$hak=$satir['hakkimizda'];
$adr=$satir['adres']; }
		?>
			 <table width="100%">
			 	<tr style="vertical-align: top;">
			 		<td width="40%" >
			 			<h3> Hakkımızda Sayfamız:</h1>
			 			<form action="" method="POST" class="formi">
			
			<textarea name="" ><?php echo $hak;?></textarea>
			
			<br>
		<button type="submit">Düzenle</button>		
					</form>
			 		</td><td>
			 			<h3> İletişim bölümü</h1>
<form action="" method="POST" class="formi">
			<label>Telefon:</label><br>
			<input type="text" value="<?php echo $telefon;?>"  name="baslik"><br>
			<label>Eposta :</label><br>
			<input type="text" value="<?php echo $epost;?>" name="baslik"><br>
			<label>Adres:</label><br>
			<input type="text" value="<?php echo $adr;?>"  name="baslik"><br>
			<h3> Sosyal Medya Linki </h1>
<label>Facebook Link:</label><br>
			<input type="text" value="<?php echo $face;?>" name="baslik"><br>
			<label>İnstagram Link:</label><br>
			<input type="text" value="<?php echo $ins;?>" name="baslik"><br>
			<label>Twitter Link:</label><br>
			<input type="text" value="<?php echo $tw;?>" name="baslik"><br>
			<br>
		<button type="submit">Düzenle</button>		
					</form>






			 		</td>
			 	</tr>
			 </table>

	</div>
	
		</div>
	</div>
	

</div>

<div class="altkisim">Copright 2019 Tüm hakları saklıdır. <a href="https://sayganweb.com">Sefa SAYĞAN</a></div>

</body>
</html>
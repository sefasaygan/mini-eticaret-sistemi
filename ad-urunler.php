<?php
$title="Ürünler | irockthe80s.com";
 require_once "php/header.php"; 
 if(empty($_SESSION["kullanici"])){ 
@header("Location: index.php");

 }
 ?>


		
	</div></div>
    <div class="column column-9">
	<div class="icerik">
<div class="ustyazi">
		 ÜRÜNLER
</div>
		
		<div class="panelimsi">
		<ul>
			<li> <a href="profil.php">PANEL</a></li>
			<li> <a href="ad-urunler.php">ÜRÜNLER</a></li>
			<li> <a href="ad-ayarlar.php">AYARLAR</a></li>
		</ul>

		</div>
			 <table width="100%">
			 	<tr style="vertical-align: top;">
			 		<td width="40%" >
			 			<h3> Ürün Ekle</h1>
			 			<form action="" method="POST" class="formi">
			<label>Ürün Başlığı :</label><br>
			<input type="text"  name="baslik"><br>
			<label>Ürün Fiyatı:</label><br>
			<input type="text"  name="baslik"><br>
			<label>Ürün Kısa Açıklama:</label><br>
			<input type="text"  name="baslik"><br>

			<label>Ürün resim :</label><br>
			<input type="file"  name="baslik"><br><br>
		<button type="submit">Ekle</button>		
					</form>
			 		</td><td>
			 			<h3> Ürün Listesi</h1>
<table width="100%"  class="tabs">
			 	<tr >
			 		<th width="10%">Sıra</th>
			 		<th width="10%">Ürün Resmi</th>
			 		<th width="30%">Ürün Başlığı</th>
			 		<th width="10%">Ürün Fiyatı</th>
			 		<th width="20%">Düzenle</th>
			 		<th width="20%">Sil</th>
			 	</tr>
			 	<tr>
			 		<td width="10%">1</td>
			 		<td width="10%"> <img src="img/bring.jpg" width="100%"></td>
			 		<td width="30%"> BRING ME THE HORIZON Kazak</td>
			 		<td width="10%"> 100TL</td>
			 		<td width="20%"><a >Düzenle</a></td>
			 		<td width="20%"><a >Sil</a></td>
			 	</tr>
			 	<tr>
			 		<td >2</td>
			 		<td > <img src="img/bring.jpg" width="100%"></td>
			 		<td >LINKIN PARK</td>
			 		<td >100TL</td>
			 		<td ><a >Düzenle</a></td>
			 		<td ><a >Sil</a></td>
			 	</tr>
			 	<tr>
			 		<td >3</td>
			 		<td > <img src="img/bring.jpg" width="100%"></td>
			 		<td >BULLET FOR MY VALLENTINE</td>
			 		<td >100TL</td>
			 		<td ><a >Düzenle</a></td>
			 		<td ><a >Sil</a></td>
			 	</tr>
			 	<tr>
			 		<td >4</td>
			 		<td > <img src="img/bring.jpg" width="100%"></td>
			 		<td >BREAKING BENJAMIN</td>
			 		<td >100TL</td>
			 		<td ><a >Düzenle</a></td>
			 		<td ><a >Sil</a></td>
			 	</tr>
</table>






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
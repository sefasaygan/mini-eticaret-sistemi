<?php
$title="Sepet | irockthe80s.com";
 require_once "php/header.php"; ?>

		<div class="row">
			 <div class="bolum">
			 	
				<img src="img/BMTH-12.jpg" width="100%" height="170px">
			 </div>
		</div>
	</div></div>
    <div class="column column-9">
	<div class="icerik">
<div class="ustyazi">
	 <?php if(@$_COOKIE['urun']){ echo "Sepette toplamda ".count($_COOKIE['urun'])." ürün var"; } else{echo "Şuan sepetinizde hiç ürün bulunmuyor";}?> 
</div>
		








		<table   class="sepet">
			<tr >
				 <th>Ürün adı</th>
				 <th>Ürün Fotoğrafı</th>
				 <th>Ürün fiyatı</th>
				 <th>Ürün adedi</th>
			</tr>





				<?php




$say=0;

$vt = new Veritabanim();
if ( isset($_COOKIE['urun']) ){
            foreach ( $_COOKIE['urun'] as $urun => $val ){

               @$yaz.=" id='".$urun."' OR ";
            }
        } 
        @$yaz= substr($yaz, 0, -3);  
 $sorgu = $vt->select("urunler","where  $yaz");
if($sorgu != null) foreach( $sorgu as $satir ) { 
	$say+=$satir["fiyat"];
 ?>
		
				<tr >
				 <td><?php echo $satir["baslik"];  ?></td> 
				 <td><img src="<?php echo $satir['resim'];  ?>" width="70px"></td>
				 <td><?php echo $satir["fiyat"];  ?> TL</td>
				 <td><a class="sepetts" href="?cikart=<?php echo $urun; ?>">[sepetten çıkart]</a></td>
			</tr>

			 </div>
			<?php 	} ?>
	
<tr >
				 <td></td> 
				 <td></td>
				 <td>Toplam <?php echo $say;  ?> TL</td>
				 <td></td>
			</tr>

		</table>
		<br>
		<a href="uyeol.php" class="satinal">SATIN AL</a>

<br><br><br><br><br><br><br><br>
	</div>
	
		</div>
	</div>
	

</div>

<div class="altkisim">Copright 2019 Tüm hakları saklıdır. <a href="https://sayganweb.com">Sefa SAYĞAN</a></div>

</body>
</html>


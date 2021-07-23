<?php 
$title="Giriş Yap veya Üye Ol | irockthe80s.com";
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
		 Giriş yap  veya  Üye Ol
</div>

<?php 


if(isset($_POST['giris'])){
	@$kullaniad=$_POST['kadi'];
	@$sifr=$_POST['sifre'];
		if($kullaniadi==$kullaniad && $sifre==$sifr){
			$_SESSION["kullanici"]=$kullaniadi;
			@header("Location: profil.php");
		}
		else{
			echo "Kullanıcı adı veya şifre yanlış";
		}

}

?>




<form action="uyeol.php" name="giris" method="POST">
			<table  class="formu" >
				<tr>
					<th colspan="2" style="background: black;">Giriş Yap</th>
				</tr>
				<tr>
					<td width="40%">Kullanıcı adı</td><td><input type="text"  name="kadi"></td>
				</tr>
				<tr>
					<td>Şifre</td><td><input type="password"  name="sifre"></td>
				</tr>
				<tr>
					<td></td><td><button name="giris" type="submit">Giriş Yap</button></td>
				</tr>
			</table>
						
					</form>


		<form action="" method="POST">
			<table  class="formu" >
				<tr>
					<th colspan="2" style="background: black;">Üye Ol</th>
				</tr>
				<tr>
					<td width="40%">Kullanıcı adı</td><td><input type="text"  name="baslik"></td>
				</tr>
				<tr>
					<td>Şifre</td><td><input type="password"  name="telefon"></td>
				</tr>
				<tr>
					<td>Eposta</td><td><input type="text"  name="eposta"></td>
				</tr>
				<tr>
					<td>Telefon</td><td><input type="text"  name="eposta"></td>
				</tr>
				<tr>
					<td>Adres</td><td><textarea></textarea></td>
				</tr>
				<tr>
					<td></td><td><button>Üye Ol</button></td>
				</tr>
			</table>
						
					</form>
				 

	</div>
	
		</div>
	</div>
	

</div>

<div class="altkisim">Copright 2019 Tüm hakları saklıdır. <a href="https://sayganweb.com">Sefa SAYĞAN</a></div>

</body>
</html>
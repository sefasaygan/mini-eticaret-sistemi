<?php @session_start();

 require_once "veritabani.php"; 
 require_once "ayar.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico|Staatliches|Roboto+Slab" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
	<meta charset="utf-8">
</head>
<body>

<div class="enbas"> 
	<a href="index.php">Facebook</a> | 
	<a href="index.php">İnstagram</a> | 
	<a href="index.php">Twitter</a>
</div>
<div class="baskismi" >
			<img src="img/logo.png"  class="logo" width="300px" >

		<ol class="menu">
			<li>
				<a href="index.php">
					<i class="fas fa-home"></i> anasayfa
				</a>
			</li>
			<li>
				<a href="hakkimizda.php">
					<i class="fas fa-comment-alt"></i> hakkımızda
				</a>
			</li>
			<li>
				<a href="iletisim.php">
					<i class="fas fa-file-signature"></i> iletişim
				</a>
			</li>
			<li>
				<a href="sepet.php">
					<i class="fas fa-shopping-basket"></i>
				</a>
			</li>
		</ol>

</div>


<div class="ortakisim" >
<div class="rows">
    <div class="column column-3">
<div class="kategori">

		<div class="row">
  <?php if(empty($_SESSION["kullanici"])){ ?>
			 <div class="bolum">
			 	<div class="ustyazis">Üye Girişi | Sipariş Takibi</div>
				<div class="giris">
					<form action="uyeol.php" name="giris"  method="POST">
						<input type="text" placeholder="Kullanıcı adı" name="kadi">
					 	<input type="password" placeholder="Şifre" name="sifre">
					 	<button name="giris" type="submit">Giriş</button> |
							<small><a href="uyeol.php"> ÜYE OL</a></small> |
					</form>
				</div>
			 </div>
			<?php  } else{ ?>
<div class="bolum">
			 	<div class="ustyazis">Giriş Yaptınız | Sipariş Takibi</div>
				<div class="giris">
					Merhabalar <?php echo $_SESSION["kullanici"]; ?>, Sitemize Hoşgeldiniz.<br><br>

			 <a href="profil.php"> PANEL</a> | 
					<a href="cikis.php">Çıkış Yap</a>
				</div>
			 </div>

<?php  } ?>
		</div><br>
		<div class="row">
			 <div class="bolum">
			 	<div class="ustyazis">Kategoriler</div>
				<ol class="katmenu">
					<li><a href="bmth.php"><i class="fas fa-guitar"> </i> Bring Me The Horizon</a></li>
					<li><a href="linkinpark.php"><i class="fas fa-guitar"> </i> Linkin Park</a></li>
					<li><a href="bfmv.php"><i class="fas fa-guitar"> </i> Bullet For My Vallentine</a></li>
					<li><a href="breaking.php"><i class="fas fa-guitar"> </i> Breaking Benjamin</a></li>
				</ol>
			 </div>
		</div><br>
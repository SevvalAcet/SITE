<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>İletisim</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<link href='img/icon.PNG' rel='icon' type='image/x-icon' />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<style type="text/css">
		form {
			margin-top: 150px;
		}
	</style>
</head>

<body>
	<div id="nav">
		<div id="nav-links" class="responsive">
			<ul>
				<li class="nav-item"><a class="nav-link nav-icon" href=""> <i class="fas fa-bars"></i></a></li>
				<li class="nav-item"><a class="nav-link" href="index.html" style="color: #6eb48c;">Anasayfa</a></li>
				<li class="nav-item"><a class="nav-link" href="index.php"></i> İletişim</a></li>
				<li class="nav-item"><a class="nav-link" href="kitap.html"> Kitap</a></li>
				<li class="nav-item"><a class="nav-link" href="galeri.html"> Galeri</a></li>
				<li class="nav-item"><a class="nav-link" href="song.html"> Müzik</a></li>
				<li class="nav-item"><a class="nav-link" href="udemy.html"></i> Udemy</a></li>
				<!--<img src="img/moon.png" id="icon">
        <img src="img/sun.png" id="icon">-->
			</ul>
		</div>
	</div>
	<section id="section-a" container>
		<div class="content">
			<p style=" font-style: italic; font-weight: bold; font-family: 'PT Serif',serif; font-size: 1.7rem;">
				herkesten ve her şeyden öte,<br>
				kendi yolunun yolcusu...
			</p>
			<hr class="star-light">
		</div>
	</section>

	<div style="width: auto;" class=" container">
		<form class="well span8" action="iletisim-post.php" method="post" enctype="multipart/form-data">
			<?php if (isset($_GET['success'])) : ?>
				<div class="alert alert-success">Mesajınız başarıyla iletildi.</div>
			<?php endif ?>

			<div class="row">
				<div class="span3">
					<label>Ad Soyad</label>
					<input class="span3" name="adi_soyadi" type="text" required="">

					<label>Telefon</label>
					<input class="span3" name="telefon" type="text" required="">

					<label>Email</label>
					<input class="span3" name="email" type="email" required="">
				</div>

				<div class="span4">
					<label>Mesaj</label>
					<textarea style="margin-top: 10px;" class="input-xlarge span5" id="message" name="mesaj" rows="8" required=""></textarea>
				</div>
				<div>
					<button style=" height: 30px;" class="btn btn-success pull-right " type="submit">Gönder</button>
				</div>
			</div>
		</form>
	</div>

</body>

</html>
<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<title>FishShop Jember</title>
	<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/font-awesome.css')); ?>">

</head>
<body>

	<div class="header-nav">
		<div class="grup-all">
			<div class="nav-top">
				<div class="head-title">
					<p>We are fish lover</p>
				</div>
				<div class="right-contact">
					<ul>
						<li><a href="£!">About</a></li>
						<li><a href="£!">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="head-search-nav">
				<div class="head-title-nav">
					<h1>FishShop</h1>
					<span style="font-size:30px;cursor:pointer;position: absolute;right: 4px;top: 28%;" onclick="openNav()">&#9776;</span>
				</div>
				<div class="search-box">
					<div class="search-icon"><i class="fa fa-search search-icon"></i></div>
					<form action="" class="search-form">
						<input type="text" placeholder="Search" id="search" autocomplete="off">
					</form>
					<svg class="search-border" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" viewBox="0 0 671 111" style="enable-background:new 0 0 671 111;"
					xml:space="preserve">
					<path class="border" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280"/>
					<path class="border" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280"/>
				</svg>
				<div class="go-icon"><i class="fa fa-arrow-right"></i></div>
			</div>
			<div class="right-side-nav">
				<a href="#!">
					<i class="fa fa-cart-plus" aria-hidden="true"></i>
				</a>
			</div>
			<div class="sign-login-side-right">
				<div class="icon-cart">
					<a href="#!">
						<i class="fa fa-cart-plus" aria-hidden="true"></i>
					</a>
				</div>
				<a href="#!"><h3>Login</h3></a> Or <a href="#!"><h3>Registerasi</h3></a>
			</div>
		</div>
	</div>
	<div class="menu-store">
		<nav>
			<ul>
				<li><a href="#!">Home</a></li>
				<li><a href="#!">Produk</a>
					<ul>
						<li><a href="/tabahproduk">Tambah Produk</a></li>
						<li><a href="#!">Ikan Hias</a></li>
						<li><a href="#!">Ikan Cupang</a></li>
					</ul>
				</li>
				<li><a href="#!">User</a>
					<ul>
						<li><a href="#!">Pekerja</a></li>
						<li><a href="#!">Pembeli</a></li>
					</ul>
				</li>
				<li><a href="#!">Order</a>
					<ul>
						<li><a href="#!">Pesanan</a></li>
						<li><a href="#!">Transaksi</a></li>
						<li><a href="#!">History</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>

<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a href="#">Home</a>
	<a href="#">Tambah Produk</a>
	<a href="#">Ikan Hias</a>
	<a href="#">Ikan Cupang</a>
	<a href="#">Pekerja</a>
	<a href="#">Pembeli</a>
	<a href="#">Pesanan</a>
	<a href="#">Transaksi</a>
	<a href="#">History</a>
</div>

<div class="content-jualan">
	<div class="head-title-transaksi">
		<h3>Produk ikan hias</h3>
	</div>
	<?php for($i = 0; $i <16 ; $i++): ?>
	<div class="col-xs-12 col-sm-6 col-md-3" id="solver-card">

		<div id="make-3D-space">
			<div id="product-card">
				<div id="product-front">
					<div class="shadow"></div>
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt.png" alt="" />
					<div class="image_overlay"></div>
					<a href="#!">
						<div id="view_details">View details</div>
					</a>
					<div class="stats">        	
						<div class="stats-container">
							<span class="product_price">$39</span>
							<a href="#!">
								<span class="product_name">Adidas Originals</span> 
							</a>   
							<p>Men's running shirt</p>                                            

							<div class="product-options">
								<strong>SIZES</strong>
								<span>XS, S, M, L, XL, XXL</span>
								<strong>COLORS</strong>
								<div class="colors">
									<div class="c-blue"><span></span></div>
									<div class="c-red"><span></span></div>
									<div class="c-white"><span></span></div>
									<div class="c-green"><span></span></div>
								</div>
							</div>                       
						</div>                         
					</div>
				</div>
				<div id="product-back">
					<div class="shadow"></div>
					<div id="carousel">
						<ul>
							<li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large.png" alt="" /></li>
							<li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large2.png" alt="" /></li>
							<li><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/t-shirt-large3.png" alt="" /></li>
						</ul>
						<div class="arrows-perspective">
							<div class="carouselPrev">
								<div class="y"></div>
								<div class="x"></div>
							</div>
							<div class="carouselNext">
								<div class="y"></div>
								<div class="x"></div>
							</div>
						</div>
					</div>
					<div id="flip-back">
						<div id="cy"></div>
						<div id="cx"></div>
					</div>
				</div>	  
			</div>	
		</div>	

	</div>
	<?php endfor; ?>
</div>

<div class="about-dev">
	<div class="kiri-about">
		<div class="image-about">
			<img src="<?php echo e(asset('image/space.jpg')); ?>" alt="">
		</div>
	</div>
	<div class="kanan-about">
		<div class="head-about">
			<h1>About Kita</h1>
		</div>
		<div class="card-kita">
			<div class="container-card-codepen">

				<div class="element-card">
					<div class="front-facing">
						<h1 class="abr">Rd</h1>
						<p class="title">P Manager</p>
						<span class="atomic-number">18</span>
						<span class="atomic-mass">9.18</span>
					</div>
					<div class="back-facing">
						<p>Nama : Faridani Islami Baidu'ah <br> Wanita satu satunya di project PPL :D</p>
						<p>
						<p><a class="btn" href="https://en.wikipedia.org/wiki/Silver" target="_blank">More info</a></p>
					</div>
				</div>

				<div class="element-card">
					<div class="front-facing">
						<h1 class="abr">Jun</h1>
						<p class="title">Analis</p>
						<span class="atomic-number">18</span>
						<span class="atomic-mass">9.18</span>
					</div>
					<div class="back-facing">
						<p>Nama : junior shefrian pamungkas <br> setiap hari kayak gini, yo meninggal brooo</p>
						<p>
						<p><a class="btn" href="https://en.wikipedia.org/wiki/Gold" target="_blank">More info</a></p>
					</div>
				</div>

				<div class="element-card">
					<div class="front-facing">
						<h1 class="abr">Ar</h1>
						<p class="title">Programer</p>
						<span class="atomic-number">18</span>
						<span class="atomic-mass">9.18</span>
					</div>
					<div class="back-facing">
						<p>Nama : M lazuardi imani <br> Hanya anak kos biasa yang ingin belajar banyak hal :D</p>
						<p><a class="btn" href="https://www.instagram.com/junior" target="_blank">More info</a></p>
					</div>
				</div>

				<div class="element-card">
					<div class="front-facing">
						<h1 class="abr">Il</h1>
						<p class="title">Designer</p>
						<span class="atomic-number">18</span>
						<span class="atomic-mass">9.18</span>
					</div>
					<div class="back-facing">
						<p>Nama : Ilham Erzan <br> Salam Designer lorr, kalo ndak jomblo enak ada yang nemeni design, kalo jomblo ya mening hell</p>
						<p>
						<p><a class="btn" href="https://www.instagram.com/ilhamer17" target="_blank">More info</a></p>
					</div>
				</div>

				<div class="element-card">
					<div class="front-facing">
						<h1 class="abr">Br</h1>
						<p class="title">Tester</p>
						<span class="atomic-number">18</span>
						<span class="atomic-mass">9.18</span>
					</div>
					<div class="back-facing">
						<p>Nama : Barep Jati kusuma <br> Hanya Untuk Belajar</p>
						<p>
						<p><a class="btn" href="https://www.instagram.com/Barep" target="_blank">More info</a></p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<footer>
	<div class="col-xs-6">Copyright © Sekarang(2018)</div>
	<div class="col-xs-6">Salam Damai To PPL-Agro</div>
</footer>

<script type="text/javascript" src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo e(asset('js/javascript.js')); ?>"></script>
</body>
</html>

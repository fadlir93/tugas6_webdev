<?php
	$json = file_get_contents("barang.json");
	$data_barang = json_decode($json, true);
	?>
	
<!DOCTYPE>
<html>
	<head>
		<title> Toko Game</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="custom.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
		<body>
		
			<div class="container-fluid">
				<nav class="navbar navbar-default" style="max-height: 25px">
					<a class="navbar-brand" href="#"><img src="gambar/iconhome.png" height="150%"></a>
					<ul class="nav navbar-nav navbar-left" style="padding: 0px 0px 0px 50px">
						<li><a href="#">Home</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">PS<span class="caret"></span></a>
							<ul class="dropdown-menu ">
								<li><a href="#">PS 2</a></li>
								<li><a href="#">PS 3</a></li>
								<li><a href="#">PS 4</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Nintendo<span class="caret"></span></a>
							<ul class="dropdown-menu ">
								<li><a href="#">Nintendo 3ds</a></li>
								<li><a href="#">Nintendo Wii</a></li>
								<li><a href="#">Nintendo Switch</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">PSP<span class="caret"></span></a>
							<ul class="dropdown-menu ">
								<li><a href="#">PS Vita Slim</a></li>
								<li><a href="#">PSP 3000</a></li>
								<li><a href="#">PSP GO</a></li>
							</ul>
						</li>
						<li class="judul" style="padding: 0px 0px 0px 150px"><img src="gambar/Screen%20Shot%202018-10-01%20at%2011.18.31%20PM.png" height="45px" width="300px"></li>
					</ul>
					<form class="navbar-form navbar-right" action="/action_page.php">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search" name="search">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit" style="margin: auto 0px 8px 0px; height: 33.5px">
									<i class="glyphicon glyphicon-search"></i>
								</button>
	        				</div>
		      			</div>
	    			</form>
				</nav>
			
				<div class='row'>
					<div class="col-sm-12"> 
						<div class="col-sm-4" style="border: 0px solid black">
							<div class="col-sm-12" style="background-color: #a80000">
								<h2 style="color: #ffffff">New Item's</h2>
							</div>
							<div class="col-sm-12" style="background-color: #a80000">
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
								    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								    <li data-target="#myCarousel" data-slide-to="1"></li>
								    <li data-target="#myCarousel" data-slide-to="2"></li>
								  </ol>
								
								  <!-- Wrapper for slides -->
								  <div class="carousel-inner">
								    <div class="item active">
								      <img src="gambar/ps4.jpg" alt="Los Angeles">
								    </div>
								
								    <div class="item">
								      <img src="gambar/psvita.jpg" alt="Chicago">
								    </div>
								
								    <div class="item">
								      <img src="gambar/nintendoswitch.jpg" alt="New York">
								    </div>
								  </div>
								
								  <!-- Left and right controls -->
								  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-left"></span>
								    <span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#myCarousel" data-slide="next">
								    <span class="glyphicon glyphicon-chevron-right"></span>
								    <span class="sr-only">Next</span>
								  </a>
								</div>
							</div>
							
							<div class="col-sm-12" style="margin: 11px 0px 0px 0px;border: 7px groove rgba(186, 0, 0, 1);font-size: xx-large;background-color: #bf0000;color: white">
							     <strong>Promo Murah Meriah</strong> 
							</div>
							<div class="col-sm-12" style="margin: 0px 0px 0px 0px;border: 7px groove rgba(186, 0, 0, 1);font-size: large;background-color: #c30000	">
							     <div style="border-bottom: 1px solid black;text-align: left;color: white">PS 3 Blue Edition Hanya Rp.2.000.000,-</div>
							     <div style="text-align: left;color: white">Nintendo WII Hanya Rp.900.000,-</div> 
							</div>
						</div>
						<div class="col-sm-8" >
							<?php
								foreach($data_barang as $barang) {		
									echo "<div class='col-sm-4'>".
										"<div class='gambar'>".$barang["gambar"]."</div>".
										"<div class='harga'>".$barang["harga"]."</div>".
										"<div class='nama'>".$barang["nama"]."</div>".
										"</div>";					
								}
							?>	
						</div>
					</div>
					<div class="col-sm-12">
						<div class="footer1">
							Get Connected with us on social network 
							<a href="https://www.facebook.com/"><img src="icon/facebook.png" width="2%"> </a>
							<a href="https://www.twitter.com/"><img src="icon/twitter.png" width="2%"> </a>
							<a href="https://www.instagram.com/"><img src="icon/Instagram.png" width="2%"></a>
						</div>
					</div>
				</div>
			</div>
		</body>
</html>
	
	
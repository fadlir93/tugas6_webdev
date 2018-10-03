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
				<?php include 'navbar.php' ?>
			
				<div class='row'>
					<div class="col-sm-12"> 
						<div class="col-sm-4" style="border: 0px solid black">
							<div class="col-sm-12" style="background-color: #a80000">
								<h2 style="color: #ffffff">New Item's</h2>
							</div>
							<div class="col-sm-12" style="background-color: #a80000">
								<?php include 'corousel.php' ?>
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
						<?php include 'footer.php'; ?>
					</div>
				</div>
			</div>
		</body>
</html>
	
	
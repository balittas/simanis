<!DOCTYPE html>
<html>
<head>
		<title>Database PUI Tanaman Serat</title>
		<meta charset="utf-8">
		<!-- <link href="gambar/logo.png" rel="shortcut icon"> -->
		<meta name="description" content="Balittas - Sistem Informasi Tanaman Pemanis">
		<meta name="author" content="Gusna Ikhsan">
		<!-- <link rel="stylesheet" href="webdesa.css"> -->
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/css/balittas.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/font-awesome-4.7.0/css/font-awesome.min.css">
		<link href="<?php echo base_url() ?>item img/Logo-Kementerian-Pertanian.png" rel="shortcut icon">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
	</head>
	<body>
		<header>	
		<?php
				if (!empty($Judul)) { ?>
					<div class="hidden-md hidden-lg" style="background-color: rgb(28,69,26); height: 70px;"></div>			
			<?php 
				} else if(!empty($Judul2)){?>
					<div class="hidden-md hidden-lg" style="background-color: rgb(28,69,26); height: 70px;"></div>		
				<?php }else{?>
						<div class="hidden-md hidden-lg" style="background-color: rgb(28,69,26); height: 70px;"></div>	
				<?php } ?>		
			<nav class="navbar navbar-inverse navbar-fixed-top navbarHover">
				<div class="container-fluid">
				    <div class="navbar-header" style="margin-top: 5px; margin-bottom: 3px;">						    
				      <a href="<?php echo base_url('') ?>"><img src="<?php echo base_url() ?>item_img/logoBalittas.png" style="width:280px;margin-top: 0px;margin-bottom: -6px;margin-left: 5px;"></a>
				      <button type="botton" class="navbar-toggle" data-toggle="collapse" data-target="#main" style="margin-top: 10px;">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
				    </div>		
				    <div class="collapse navbar-collapse no-touch">			    
					    <ul class="nav navbar-nav navbar-right" style="margin-top: 10px;margin-right: 75px;">
					    <a href="<?php echo base_url('') ?>" class="halaman" style="text-decoration-line: none;font-size: 14px;"><i style="font-size:14px; color:white;" class="glyphicon glyphicon-home "></i></a>
								
							  <div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Tanaman Pemanis <span class="caret"></div>
								<div class="dropdownHeader-content" style="margin: 0px 0px 0px 9px;">
								  	<div class="container-fluid">
									  <div class="row">
											<div class="col-sm-12 col-lg-12">
												<a href="<?php echo site_url('varietas/detail/tebu') ?>" class="halaman" style="margin-top: 10px;">Tebu</a>
												<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
												<a href="<?php echo site_url('varietas/detail/stevia') ?>" class="halaman">Stevia</a>
												<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
												<a href="<?php echo site_url('varietas/detail/gulabit') ?>" class="halaman" style="margin-bottom: 10px;">Gula Bit</a>
												
											</div>
											
										</div>
									  </div>							  	
									</div>
								</div>
							<div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Budidaya Tanaman Pemanis <span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -126px;">
								  	<div class="container-fluid">
								  	<div class="row">
								  			<div class="col-sm-12 col-lg-12">
								       			<a href="<?php echo site_url('budidaya/budidayatanamanserat/tebu') ?>" class="halaman" style="margin-top: 10px;">Budidaya Tebu</a>
								       			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								       			<a href="<?php echo site_url('budidaya/budidayatanamanserat/stevia') ?>" class="halaman">Budidaya Stevia</a>
								       			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								       			<a href="<?php echo site_url('budidaya/budidayatanamanserat/gulabit') ?>" class="halaman" style="margin-bottom: 10px;">Budidaya Gula Bit</a>
								  			</div>
										</div>
								  	</div>
							  	</div>
							</div>
							<div class="dropdownHeader">
							  	<div class="dropbtnHeader" style="font-family: Minion Pro">Produk <span class="caret"></div>
							  	<div class="dropdownHeader-content" style="margin: 0px 0px 0px -338px;">
								  	<div class="container-fluid">
								  		<div class="row">
								  			<div class="col-sm-12 col-lg-12">
								  				<a href="<?php echo site_url('produk/varietas') ?>" style="margin-top: 10px;">Varietas</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
												<a href="http://balittas.or.id/upbs-stok/" style="margin-top: 10px;">Benih Sumber</a>	
								  				<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
								  				<a href="<?php echo site_url('produk/alsin') ?>">Alat dan Mesin</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          			<a href="<?php echo site_url('produk/olahan') ?>">Produk Olahan</a>
							          			<hr style="margin: 4px 0px 5px 0px; border-color: rgba(28,69,26,1);">
							          			<a href="#" style="margin-bottom: 10px;">Formula (Coming Soon)</a>
								  			</div>
								  		</div>							  		
								  	</div>							  								          
							  	</div>
							</div>					      			      
					    </ul>				    
				    </div>
					<!-- For Mobile -->
				    <div class="collapse navbar-collapse no-touch" id="main">			    
					    <ul class="nav navbar-nav navbar-right hidden-md hidden-lg" style="margin-top: 8px;margin-right: 75px;">
					      	 <a href="#home" class="halaman" style="text-decoration-line: none;font-size: 14px;"><i style="font-size:14px; color:white; margin-left: 15px;" class="glyphicon glyphicon-home "></i></a>
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Tanaman Serat<span class="caret"></span></a>
						        <ul class="dropdown-menu">
						          	<li><a href="<?php echo site_url() ?>varietas/detail/kapas">Kapas</a></li>
						          	<li><a href="<?php echo site_url() ?>varietas/detail/kapuk">Kapuk</a></li>
						          	<li><a href="<?php echo site_url() ?>varietas/detail/kenaf">Kenaf</a></li>
						          	<li><a href="<?php echo site_url() ?>varietas/detail/kenaf">Rami</a></li>
						          	<li><a href="<?php echo site_url() ?>varietas/detail/rosela">Rosela</a></li>
						          	<li><a href="<?php echo site_url() ?>varietas/detail/agave">Agave</a></li>
						       	</ul>
					      	</li>
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Budidaya Tanaman Serat<span class="caret"></span></a>
						        <ul class="dropdown-menu">
				        	   <li><a href="<?php echo site_url('budidaya/budidayatanamanserat/kapas') ?>">Budidaya Kapas</a></li>
			                           <li><a href="<?php echo site_url('budidaya/budidayatanamanserat/kapuk') ?>">Budidaya Kapuk</a></li>
			                           <li><a href="<?php echo site_url('budidaya/budidayatanamanserat/kenaf') ?>">Budidaya Kenaf</a></li>
			                           <li><a href="<?php echo site_url('budidaya/budidayatanamanserat/rami') ?>">Budidaya Rami</a></li>
			                           <li><a href="<?php echo site_url('budidaya/budidayatanamanserat/rosela') ?>">Budidaya Rosela</a></li>
			                           <li><a href="<?php echo site_url('budidaya/budidayatanamanserat/agave') ?>">Budidaya Agave</a></li>
			                           <li><a href="<?php echo site_url('budidaya/budidayatanamanserat/abaka') ?>">Budidaya Abaka</a></li>
						       	</ul>
					      	</li>
					      	<li class="dropdown">
					        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Produk<span class="caret"></span></a>
						        <ul class="dropdown-menu">
						        	<li><a href="<?php echo site_url('produk/varietas')?>">Varietas</a></li>
									<li><a href="<?php echo site_url('produk/benih')?>">Benih Sumber</a></li>
						          	<li><a href="<?php echo site_url('produk/alsin')?>">Alat dan Mesin</a></li>
						          	<li><a href="<?php echo site_url('produk/olahan')?>">Produk Olahan</a></li>
									<li><a href="<?php echo site_url() ?>teknologibudidaya/pemupukan">Formula (Coming Soon)</a></li>
						       	</ul>
					      	</li>				      	
					    </ul>				    
				    </div>
				</div>
			</nav>	
			<!-- gambar tengah -->
			<!-- <div class="jumbotron">
				<img src="<?php echo base_url() ?>item_img/tembakauHeader.jpg" alt="" style="width: 100%;">
			</div> -->
			<!-- <div style="height: 50px; background-color: red;"></div> -->
			
		</header>
			
</body>

 <script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js"></script>
	 <script src="<?php echo base_url() ?>bootstrap/js/jquery-3.3.1.min.js"></script> 
    <script src="<?php echo base_url() ?>bootstrap/js/jquery.easing.1.3.js"></script> 
    <script src="<?php echo base_url() ?>bootstrap/js/script.js"></script>

</html>

<?php include 'header.php'; ?>
<section class="section-1">
	<div id="carousel-slide" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#carousel-slide" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-slide" data-slide-to="1"></li>
			<li data-target="#carousel-slide" data-slide-to="2"></li>
		</ul>
		<!-- The slideshow -->
		<div class="carousel-inner" style="height: 33%">
			<div class="carousel-item active">
				<img src="images/slide-1.png" alt="Primer slide">
				<div class="carousel-caption d-none d-md-block" style="	background: #34426E !important; opacity: 0.4; padding: 0;right: 10rem; width: auto !important; left: auto; padding-left: 1rem; padding-right: 1rem; border-top-left-radius: 1rem; border-top-right-radius: 1rem;bottom: 0;">
					<h4>Analizador automático de bioquimica</h4>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/slide-1.png" alt="Segundo slide" >
				<div class="carousel-caption d-none d-md-block" style="	background: #34426E !important; opacity: 0.4; padding: 0;right: 10rem; width: auto !important; left: auto; padding-left: 1rem; padding-right: 1rem; border-top-left-radius: 1rem; border-top-right-radius: 1rem;bottom: 0;">
					<h4>Analizador automático de Otra</h4>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/slide-1.png" alt="Tercer slide">
				<div class="carousel-caption d-none d-md-block" style="	background: #34426E !important; opacity: 0.4; padding: 0;right: 10rem; width: auto !important; left: auto; padding-left: 1rem; padding-right: 1rem; border-top-left-radius: 1rem; border-top-right-radius: 1rem;bottom: 0;">
					<h4>Analizador automático de Cosa</h4>
				</div>
			</div>
		</div>
		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#carousel-slide" data-slide="prev">
			<span class="carousel-control-icon fa fa-caret-left"></span>
		</a>
		<a class="carousel-control-next" href="#carousel-slide" data-slide="next">
			<span class=" carousel-control-icon fa fa-caret-right"></span>
		</a>
	</div>
</section>
<section class="section-2 services">
	<div class="row container-fluid">
		<div class="col-xs-12 col-md-6 col-lg-3">
			<a href="">
				<div class="card transparent">
					<div class="card-header transparent">
						<p class="text-center text-white">ULTRASONOGRAFÍA</p>
					</div>
					<div class="card-block transparent">
						<div class="card-fill">
							<img src="images/image-1.jpg" alt="">
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-xs-12 col-md-6 col-lg-3">
			<a href="">
				<div class="card transparent">
					<div class="card-header transparent">
						<p class="text-center text-white">RADIOLOGIA Y ENDOSCOPIA</p>
					</div>
					<div class="card-block transparent">
						<div class="card-fill">
							<img src="images/image-2.png" alt="">
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3">
			<a href="">
				<div class="card transparent">
					<div class="card-header transparent">
						<p class="text-center text-white">LABORATORIO</p>
					</div>
					<div class="card-block transparent">
						<div class="card-fill">
							<img src="images/image-3.png" alt="">
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3">
			<a href="">
				<div class="card transparent">
					<div class="card-header transparent">
						<p class="text-center text-white">HOSPITALIZACIÓN Y CIRUGIA</p>
					</div>
					<div class="card-block transparent">
						<div class="card-fill">
							<img src="images/image-4.png" alt="">
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>
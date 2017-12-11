<?php include 'header.php'; ?>
<section>
	<div id="carousel-slide" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#carousel-slide" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-slide" data-slide-to="1"></li>
			<li data-target="#carousel-slide" data-slide-to="2"></li>
		</ul>
		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/slide-1.png" alt="Primer slide">
				<div class="carousel-caption d-none d-md-block">
					<h4>Analizador automático de bioquimica</h3>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/slide-1.png" alt="Primer slide">
				<div class="carousel-caption d-none d-md-block">
					<h4>Analizador automático de Otra</h3>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/slide-1.png" alt="Primer slide">
				<div class="carousel-caption d-none d-md-block">
					<h4>Analizador automático de Cosa</h3>
				</div>
			</div>
		</div>
		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#carousel-slide" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#carousel-slide" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
</section>
<?php include 'footer.php'; ?>
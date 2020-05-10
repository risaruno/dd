<?php
	//include('./resources/conn1.php');

$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
        "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . ""; 

?>
<?php echo $__env->make('web/resources/resources', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
	<div class="wrapper">
		<nav class="navbar-header">
			<?php echo $__env->make('web/content/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</nav>
		<div class="content">
			<div class="slideshow">
					<div id="demo" class="carousel slide" data-ride="carousel">
						<ul class="carousel-indicators">
						  <li data-target="#demo" data-slide-to="0" class="active"></li>
						  <li data-target="#demo" data-slide-to="1"></li>
						  <li data-target="#demo" data-slide-to="2"></li>
						</ul>
					  	<div class="carousel-inner">
					    	<div class="carousel-item active">
					    		<img src="<?php echo e(asset('images/slider/1440x600.png')); ?>" alt="Slide 1">
						    </div>
						    <div class="carousel-item">
						      	<img src="<?php echo e(asset('images/slider/1500x500.png')); ?>" alt="Slide 2">
						    </div>
						    <div class="carousel-item">
						      	<img src="<?php echo e(asset('images/slider/960x960.png')); ?>" alt="Slide 3">
						    </div>
					  	</div>
					  	<a class="carousel-control-prev" href="#demo" data-slide="prev">
						  <span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
						  <span class="carousel-control-next-icon"></span>
						</a>
					</div>
			</div>
			<div class="program">
				<div class="container-fluid text-center">
					<h2 class="display">Programs</h2><hr>
					<div class="row row-th">
						<div class="coll">
							<ul class="list-group">
								<i class="fa fa-graduation-cap fa-lg" style="font-size: 50px; color: #00B354; "></i>
							</ul>
							<ul class="list-group">
								<h3>Education</h3>
							</ul>
							<ul class="list-group">
								<span>Dompet Dhuafa is committed to providing the widest possible access to education for the poor.</span>
							</ul>
							<ul class="list-group details">
							    <a href="#"><li class="list-group-item">Read More</li></a>
							</ul>
						</div>
						<div class="coll">
							<ul class="list-group">
								<i class="fa fa-heartbeat fa-lg" style="font-size: 50px; color: #00B354;"></i>
							</ul>
							<ul class="list-group">
								<h3>Health Care</h3>
							</ul>
							<ul class="list-group">
								<span>With the concept of productive endowments, Dompet Dhuafa opens access to the overall health of Indonesia.</span>
							</ul>
							<ul class="list-group details">
							    <a href="#"><li class="list-group-item">Read More</li></a>
							</ul>
						</div>
						<div class="coll">
							<ul class="list-group">
								<i class="fa fa-line-chart fa-lg" style="font-size: 50px; color: #00B354;"></i>
							</ul>
							<ul class="list-group">
								<h3>Economy</h3>
							</ul>
							<ul class="list-group">
								<span>Dompet Dhuafa empowers local potential-based communities to encourage the independence of the people.</span>
							</ul>
							<ul class="list-group details">
							    <a href="#"><li class="list-group-item">Read More</li></a>
							</ul>
						</div>
						<div class="coll">
							<ul class="list-group">
								<i class="fa fa-users fa-lg" style="font-size: 50px; color: #00B354;"></i>
							</ul>
							<ul class="list-group">
								<h3>Social</h3>
							</ul>
							<ul class="list-group">
								<span>Dompet Dhuafa responds quickly to community problems in accordance with their needs.</span>
							</ul>
							<ul class="list-group details">
							    <a href="#"><li class="list-group-item">Read More</li></a>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="thread">
				<div class="container-fluid">
					<h2 class="display">News</h2><hr>
					<div class="row row-th">
						<div class="card news">
						  	<img src="<?php echo e(asset('images/icon/DD White Bg.png')); ?>" class="card-img-top" alt="News 1">
						  	<div class="card-body">
						    	<h5 class="card-title">News 1</h5>
						    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    	<p class="card-text"><small class="text-muted">December 31th, 2019</small></p>
							</div>
							<ul class="list-group list-group-flush details">
							    <a href="#"><li class="list-group-item">See Details ></li></a>
							</ul>
						</div>
						<div class="card news">
						  	<img src="<?php echo e(asset('images/icon/DD White Bg.png')); ?>" class="card-img-top" alt="News 2">
						  	<div class="card-body">
						    	<h5 class="card-title">News 2</h5>
						    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    	<p class="card-text"><small class="text-muted">December 31th, 2019</small></p>
							</div>
							<ul class="list-group list-group-flush details">
							    <a href="#"><li class="list-group-item">See Details ></li></a>
							</ul>
						</div>
						<div class="card news">
						  	<img src="<?php echo e(asset('images/icon/DD White Bg.png')); ?>" class="card-img-top" alt="News 3">
						  	<div class="card-body">
						    	<h5 class="card-title">News 3</h5>
						    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    	<p class="card-text"><small class="text-muted">December 31th, 2019</small></p>
							</div>
							<ul class="list-group list-group-flush details">
							    <a href="#"><li class="list-group-item">See Details ></li></a>
							</ul>
						</div>
						<div class="card news">
						  	<img src="<?php echo e(asset('images/icon/DD White Bg.png')); ?>" class="card-img-top" alt="News 4">
						  	<div class="card-body">
						    	<h5 class="card-title">News 4</h5>
						    	<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						    	<p class="card-text"><small class="text-muted">December 31th, 2019</small></p>
							</div>
							<ul class="list-group list-group-flush details">
							    <a href="#"><li class="list-group-item">See Details ></li></a>
							</ul>
						</div>
					</div>
					<div class="more text-center">
						<a href="<?php echo $link ?>/news"><h3 class="list-group-item">Read More</h3></a>
					</div>
				</div>
			</div>
			<div class="quotes">
				<div class="container-fluid">
					<blockquote class="blockquote text-center">
						<p><em>“Taking pains to remove the pains of others is the true essence of generosity.”</em></p>
	  					<footer class="blockquote-footer">S Abu Bakr <cite title="Source Title">(R.A)</cite></footer>
					</blockquote>
				</div>
			</div>
		</div>
		<div class="footer">
			<?php echo $__env->make('web/content/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>

	</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\dd\local\resources\views/web/index.blade.php ENDPATH**/ ?>
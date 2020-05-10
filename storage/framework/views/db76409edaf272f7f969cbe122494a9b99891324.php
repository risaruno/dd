	<script>
		$(document).ready(function(){
		  $("#btn").click(function(){
		  	if ($(".link-text").is(":hidden")) {
		    	$(".link-text").show();
			} else if ($(".link-text") .is(":visible")) {
		    	$(".link-text").hide();
			}
		  });
		});
	</script>
	<div class="sidenav" id="sideNav">
		<a href="#" onclick="openNav()" id="btn"><i id="btn-i" class="fa fa-bars fa-lg"></i><img src="<?php echo e(asset('images/icon/DD.png')); ?>" class="logo" id="logo"></a>
		<div class="links" id="links">
			<a href="#home">
				<div class="row">
					<div class="col link-icon">
						<i class="icons fa fa-home fa-lg"></i>
					</div>
					<div class="col-8 link-text align-self-center">
						Home
					</div>
				</div>
			</a>
			<a href="#news">
				<div class="row">
					<div class="col link-icon">
						<i class="icons fa fa-newspaper-o fa-lg"></i>
					</div>
					<div class="col-8 link-text align-self-center">
						News
					</div>
				</div>
			</a>
			<a href="#donation">
				<div class="row">
					<div class="col link-icon">
						<i class="icons fa fa-handshake-o fa-lg"></i>
					</div>
					<div class="col-8 link-text align-self-center">
						Donation
					</div>
				</div>
			</a>
			<a href="#messages">
				<div class="row">
					<div class="col link-icon">
						<i class="icons fa fa-envelope-o fa-lg"></i>
					</div>
					<div class="col-8 link-text align-self-center">
						Message
					</div>
				</div>
			</a>
			<button class="dropdown-btn">
				<a href="#messages">
					<div class="row">
						<div class="col link-icon">
							<i class="icons fa fa-ellipsis-v fa-lg"></i>
						</div>
						<div class="col-8 link-text align-self-center">
							Pages
							<i id="icon" class="fa fa-caret-down"></i>
						</div>
					</div>
				</a></button>
			<div class="dropdown-container">
				<a href="#">News</a>
		    	<a href="#">Programs</a>
		    	<a href="#">Donation</a>
		    	<a href="#">Contact</a>
		    	<a href="#">About</a>
		    	<a href="#"><li class="fa fa-plus"></li></a>
		  	</div>
		</div>
	</div><?php /**PATH C:\xampp\htdocs\dd\local\resources\views/remote/menu.blade.php ENDPATH**/ ?>
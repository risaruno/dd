
<div class="sidenav" id="sideNav">
	<div class="head">
		<img src="<?php echo e(asset('images/icon/DD Korsel Green.png')); ?>" class="logo" id="logo">
		<span onclick="openNav()" id="btn">
			<i id="btn-i" class="fa fa-bars fa-lg"></i>
		</span>
	</div>
	<div class="links" id="links">
		<a class="link" href="<?php echo e(route('dashboard')); ?>">
			<div class="row">
				<div class="col link-icon"><i class="fa fa-home fa-lg"></i></div>
				<div class="col-8 link-text">Dashboard</div>
			</div>
		</a>
		<a class="link" href="<?php echo e(route('newsAdmin')); ?>">
			<div class="row">
				<div class="col link-icon"><i class="fa fa-newspaper-o fa-lg"></i></div>
				<div class="col-8 link-text">News</div>
			</div>
		</a>
		<a class="link" href="<?php echo e(route('donateAdmin')); ?>">
			<div class="row">
				<div class="col link-icon"><i class="fa fa-handshake-o fa-lg"></i></div>
				<div class="col-8 link-text">Donation</div>
			</div>
		</a>
		<a class="link" href="<?php echo e(route('msgAdmin')); ?>">
			<div class="row">
				<div class="col link-icon"><i class="fa fa-envelope-o fa-lg"></i></div>
				<div class="col-8 link-text">Message</div>
			</div>
		</a>
		<button id="dropdown-btn" class="link">
			<div class="row">
				<div class="col link-icon"><i class="fa fa-user-o fa-lg"></i></div>
				<div class="col-8 link-text">
					<?php echo e(Session::get('name')); ?>

					<i id="icon-arrow" class="fa fa-caret-down"></i>
				</div>
			</div>
		</button>
		<div class="dropdown-container" id="dropdown-container">
			<a href="<?php echo e(route('dashboard')); ?>">
				<div class="row">
					<div class="col link-icon">
						<i class="fa fa-vcard-o fa-lg"></i>
					</div>
					<div class="col-8 link-text-d">Profile</div>
				</div>	
			</a>
			<a href="<?php echo e(route('logout')); ?>">
				<div class="row">
					<div class="col link-icon">
						<i class="fa fa-sign-out fa-lg"></i>
					</div>
					<div class="col-8 link-text-d">Log Out</div>
				</div>	
			</a>
		</div>
	</div>
</div>
<script>

$(function () {
	setNavigation();
	setTitle();
});
function setNavigation() {
    var title = $(".title").text();
    $(".link-text").each(function () {
	    var menu = $(this).text();
    	if(title === menu){
			$(this).closest('.link').addClass('actived');
		}
    });
}
function setTitle() {
    var title = $(".title").text();
    if(title!=""){
	    $('title').prepend(title+" | ");
	}
}

</script><?php /**PATH /opt/lampp/htdocs/laravel/local/resources/views/remote/menu.blade.php ENDPATH**/ ?>
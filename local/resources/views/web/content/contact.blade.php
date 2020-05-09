@extends('/web/index')
@section('content')
<div class="page-title">
	<img src="{{ asset('images/title/title.png') }}" alt="Contact Us">
	<h1 id="title" class="title">Contact Us</h1>
</div>
<div class="contact">
	<div class="container-fluid">
		<h3 class="display text-center">Our Office</h3><hr>
		<div class="office">
			<div class="row">
				<div class="col-sm">
					<div id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d794.1120403095784!2d127.20781782923683!3d37.23707306644652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDE0JzEzLjUiTiAxMjfCsDEyJzMwLjEiRQ!5e0!3m2!1sen!2sid!4v1585650466715!5m2!1sen!2sid" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
				<div class="col-sm">
					<h3 class="display-lite">Address</h3>
					<p>Baekokdaero 1137 3rd floor, Cheoin-gu, Yongin-si, Gyeonggi-do, South Korea, 17052</p>
					<p>경기도 용인시 처인구 백옥대로 1137 3층 (김량장동 140-24), 17052</p>
					<h3 class="display-lite">Contact</h3>
					<P>
						Tel : 031 333 4364<br>
						Fax : 031 333 4365<br>
						Email : inbox@ddkorea.org
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<h3 class="display text-center">Social Media</h3><hr>
		<div class="social">
			<a href="https://web.facebook.com/ddkorsel" class="link" target="_blank"><i class="fa fa-facebook-square fa-lg"></i> Dompet Dhuafa Korea Selatan</a><br>
			<a href="https://instagram.com/ddkorea" class="link" target="_blank"><i class="fa fa-instagram fa-lg"></i> @ddkorea</a>
		</div>
	</div>
</div>
@endsection
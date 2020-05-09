@extends('/web/index')
@section('content')
<div class="page-title">
	<img src="{{ asset('images/title/title.png') }}" alt="News">
	<h1 id="title" class="title">News</h1>
</div>
<div class="thread">
	<div class="container-fluid">
		<div class="row row-th">
			@foreach($news as $n)
			<div class="card-group">
				<div class="card img">
					<img src="{{ asset($n->img) }}" class="card-img" alt="{{ $n->title }}">
					<div class="date-text">{{ $n->updated_at }}</div>
				</div>
				<div class="card">
					<div class="card-body body-news">
						<h5 class="card-title">{{ $n->title }}</h5>
						<p class="card-text">{!! \Illuminate\Support\Str::limit($n->text, $limit=250,$end="...") !!}</p>
						<p class="button-right"><a href="{{ route('news') }}/{{ $n->id }}" class="btn btn-success">See Details ></a></p>
					</div>
				</div>
			</div>
			@endforeach
			<div class="more">
				<a href="#"><h3 class="list-group-item">Load More <i class="fa fa-caret-down"></i></h3></a>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
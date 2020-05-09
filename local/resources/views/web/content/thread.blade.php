@extends('/web/index')
@section('content')
<div class="thread">
	<div class="container-fluid">
		@foreach($news as $n)
		<div class="row">
            <h1 id="title" class="thread-title">{{ $n->title }}</h1>
			<span class="thread-date">{{ $n->updated_at }}</span>
		    <img class="thread-img" src="{{ asset($n->img) }}" class="card-img" alt="{{ $n->title }}">
			<div class="text">{!! $n->text !!}</div>			
		</div>
		@endforeach
	</div>
</div>
</div>
@endsection
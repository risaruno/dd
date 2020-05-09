@extends('/web/index')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/slider.css') }}">
<div class="slideshow">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                @foreach($slider as $s)
                <li data-target="" data-slide-to="{{ $s->id }}" class="carousel-ind"></li>
                @endforeach
            </ul>
            <div class="carousel-inner">
                @foreach($slider as $s)
                <div class="carousel-item">
                    <img src="{{ asset($s->img) }}" alt="{{ $s->title }}">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
</div>
<script>
$(document).ready(function(){
    $(".carousel-item:first-child").addClass("active");
    $(".carousel-ind:first-child").addClass("active");
});
</script>
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
                <ul class="list-group card-details">
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
                <ul class="list-group card-details">
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
                <ul class="list-group card-details">
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
                <ul class="list-group card-details">
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
            @foreach($news as $n)
            <div class="card news">
                <img src="{{ asset($n->img) }}" class="card-img-top" alt="{{ $n->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $n->title }}</h5>
                    <p class="card-text text-right"><small class="text-muted">{{ $n->updated_at }}</small></p>
                </div>
                <ul class="list-group list-group-flush card-details">
                    <a href="{{ route('news') }}/{{$n->id}}">
                        <li class="list-group-item">
                            See details <i class="fa fa-caret-right"></i>
                        </li>
                    </a>
                </ul>
            </div>
            @endforeach
        </div>
        <div class="more text-center">
            <a href="{{ route('news')}}"><h3 class="list-group-item">Read More</h3></a>
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
@endsection
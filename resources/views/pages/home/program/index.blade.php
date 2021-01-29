@extends('index')
@section('content')
<section class="rekomendasi">
    <div class="container">
        <div class="title-rekomendasi">
            <h3>Rekomendasi Program</h3>
        </div>
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item"><a href="">All</a>
            <li class="list-group-item"><a href="">Drama</a></li>
            <li class="list-group-item"><a href="">Entertainment</a></li>
            <li class="list-group-item"><a href="">SCTV Sports</a></li>
            <li class="list-group-item"><a href="">Film Layar Lebar</a></li>
            <li class="list-group-item"><a href="">Liputan 6</a></li>
            <li class="list-group-item"><a href="">Religi</a></li>
            </li>
        </ul>
    </div>
    <div class="movie-rekomendasi" id="rekomendasi" class="carousel slide" data-ride="carousel">
        <div class="owl-carousel owl-theme carousel-inner">
            @foreach ($rekomendasi as $item)
            <div class="item carousel-item active">
                <img src="{{Storage::url($item->image)}}" alt="">
                {{$item->text}}
            </div>
            @endforeach

            {{-- <div class="item carousel-item active"><img src="img/one-championship-rev1.jpg" alt="">One
                Championship
            </div>
            <div class="item carousel-item active"><img src="img/sctv-miniseri-rev1.jpg" alt="">SCTV Miniseri
            </div>
            <div class="item carousel-item active"><img src="img/sctv-ftv.jpg" alt="">SCTV FTV</div>
            <div class="item carousel-item active"><img src="img/ftv-sctv.jpg" alt="">FTV SCTV</div> --}}
        </div>
    </div>
    <div class="transparent-left"></div>
    <div class="transparent-right"></div>
</section>

@endsection

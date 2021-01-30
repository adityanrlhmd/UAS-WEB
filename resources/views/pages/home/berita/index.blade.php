@extends('index')
@section('content')
<section class="news">
    <div class="container">
        <div class="row mb-4">
            <div class="col tittle-news">
                <h3>News</h3>
            </div>
        </div>
        <div class="row">
            @foreach ($news as $item)
            <div class="col-md-4 col-list ">
                <div class="card ">
                    <img src="{{Storage::url($item->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a
                            href="{{$item->link}}">
                            <h3>{{$item->text}}</h3>
                            <span class="link-blue"></span>
                            <span class="link-text">Selengkapnya</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

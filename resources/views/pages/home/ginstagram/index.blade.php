@extends('index')
@section('content')
<section class="galeri">
    <div class="container">
        <div class="row mb-5">
            <div class="col">
                <h3>Galeri Instagram</h3>
            </div>
        </div>
        <div class="row list-galeri">
            @foreach ($galeri as $item)
            <div class="col col-md-3 mb-3 pl-1  list-galeri-isi">
                <div class="card">
                    <a href="{{$item->link}}">
                        <img src="{{Storage::url($item->image)}}" alt="">
                        <div class="text">{{$item->text}}</div>
                    </a>
                </div>
            </div>
            @endforeach

            {{-- <div class="col col-md-3 mb-3 pl-1 list-galeri-isi">
                <div class="card">
                    <a href="">
                        <img src="img/galeri-2.jpg" alt="">
                        <div class="text">Karena stress punya mami galak, @larasati.nugroho dan pacarnya
                            berusaha
                            mencarikan jodoh buat mamany...</div>
                    </a>
                </div>
            </div>
            <div class="col col-md-3 mb-3 pl-1  list-galeri-isi">
                <div class="card">
                    <a href="">
                        <img src="img/galeri-3.jpg" alt="">
                        <div class="text">Bagaimana pun upaya Raisa untuk merebut kembali hatinya Mirza,
                            ternyata
                            masih belum mujur. Jenar bag...</div>
                    </a>
                </div>
            </div>
            <div class="col col-md-3 mb-3 pl-1  list-galeri-isi">
                <div class="card">
                    <a href="">
                        <img src="img/galeri-4.jpg" alt="">
                        <div class="text">Ah, Elang bisa aja, nih, ngeledekin Tania~
                            Yayang Rayhan beneran udah move on ke Anggi belum, ya??
                            ....</div>
                    </a>
                </div>
            </div>
            <div class="col col-md-3 mb-3 pl-1  list-galeri-isi">
                <div class="card">
                    <a href="">
                        <img src="img/galeri-5.jpg" alt="">
                        <div class="text">Gery sampai terheran-heran lihat perlakuan yang segitu perhatiannya
                            sama
                            Rimba. Kenapa Sasha baru se...</div>
                    </a>
                </div>
            </div>
            <div class="col col-md-3 mb-3 pl-1  list-galeri-isi">
                <div class="card">
                    <a href="">
                        <img src="img/galeri-6.jpg" alt="">
                        <div class="text">Gery sampai terheran-heran lihat perlakuan yang segitu perhatiannya
                            sama
                            Rimba. Kenapa Sasha baru se...</div>
                    </a>
                </div>
            </div>
            <div class="col col-md-3 mb-3 pl-1  list-galeri-isi">
                <div class="card">
                    <a href="">
                        <img src="img/galeri-7.jpg" alt="">
                        <div class="text">Aduuuh adu nyinyir Nikita sama Barbie ini emang gak ada matinyaaa..
                            Apalagi coba yang mau diributin...</div>
                    </a>
                </div>
            </div>
            <div class="col col-md-3 mb-3 pl-1  list-galeri-isi">
                <div class="card">
                    <a href="">
                        <img src="img/galeri-8.jpg" alt="">
                        <div class="text">Bahaya! Emosi Mila menggebu-gebu! Hal jahat apa yang mau ia lakuin ke
                            Jenar untuk memuaskan amarah?...</div>
                    </a>
                </div>
            </div> --}}
        </div>
    </div>
</section>

@endsection

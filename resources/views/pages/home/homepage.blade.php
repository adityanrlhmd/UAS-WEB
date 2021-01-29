@extends('index')
@section('content')
<main>
    <section class="gambar">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url(img/slide-1.jpg);">

                    <div class="carousel-caption d-none d-md-block">
                        <h3>Dia Bukan Manusia</h3>
                        <p> Vanda (Audi Marissa), Marwa (Esta Pramanita), Alin (Fiolina Teja), Elan (Anthony Xie),
                            dan
                            Nardo (Steven Tanady) sedang melakukan pendakian di se</p>
                        <a href="">Selengkapnya</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(img/slide-2.jpg);">

                    <div class="carousel-caption d-none d-md-block">
                        <h3>Samudra Cinta</h3>
                        <p> Cinta (Haico Van der Veken) dikisahkan sebagai seorang gadis yang sering mendapat
                            siksaan dari ibu tirinya (Debby Cynthia Dewi)</p>
                        <a href="">Selengkapnya</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(img/slide-3.jpg);">

                    <div class="carousel-caption d-none d-md-block">
                        <h3>Dari Jendela SMP</h3>
                        <p> Joko (Rey Bong) hidup bersama ibunya yang merupakan pembantu di sebuah SMP swasta. Wulan
                            (Sandrinna Michelle), teman sekelas Joko, cantik, rajin,</p>
                        <a href="">Selengkapnya</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(img/slide-4.jpg);">

                    <div class="carousel-caption d-none d-md-block">
                        <h3>Anak Band</h3>
                        <p> CAHAYA yang sedang berdagang dengan gerobak sayurnya serasa medapat durian runtuh saat
                            tiba-tiba GILANG, vokalis The Junas, grup band favorit Cah</p>
                        <a href="">Selengkapnya</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(img/slide-5.jpg);">

                    <div class="carousel-caption d-none d-md-block">
                        <h3>Cinta Tapi Benci</h3>
                        <p> Sebagian wasiat ayah Tatang (Ricky Harun), Karyo (Ridwan Ghani), dan Ucok (Lolox) telah
                            terpenuhi. Mereka pun hidup bahagia dengan kisah cinta ya</p>
                        <a href="">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="jadwal">
        <div class="container">
            <div class="row ">
                <div class="col text-center tittle-jadwal">
                    <h3>Jadwal TV</h3>
                </div>
            </div>
            <div class="row justify-content-md-center align-items-center">
                <div class="col kiri mb-4">
                    <div class="row">
                        <div class="col col-sm-6">
                            <div class="gambar-kiri px-3">
                                <img src="img/ftv-sctv.jpg" alt="">
                            </div>
                        </div>
                        <div class="col col-sm-6 my-auto">
                            <div class="box-kiri ">
                                <div class="isi-box-kiri">
                                    <h3>FTV Pagi Spesial</h3>
                                    <h5 style="margin:0;">08:00 - 10:00</h5>
                                    <p>Cerita unik dan menarik yang dikemas dalam cerita komedi romantis yang fresh
                                        dan
                                        menarik
                                        untuk
                                        diikuti. Dibintangi oleh artis-artis ternama Indonesia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col ">
                    <div class="row kanan my-auto mx-auto">
                        <div class="col tittle-kanan p-0" style="background: -webkit-gradient(linear, right top, left top, color-stop(1%, #63aad7), to(#125f97));
                        background: linear-gradient(to left, #63aad7 1%, #125f97 100%);">
                            <h3 style="text-align:center">Hari Ini </h3>
                        </div>
                    </div>
                    <div class="row kanan-isi my-auto mx-auto">
                        <div class="col p-0">
                            <div class="list-kanan">
                                @foreach ($jadwaltv as $item)
                                <p> {{$item->time}} &nbsp; <span id="garis"></span> {{$item->text}} </p>
                                {{-- <p> 01:15 &nbsp; <span id="garis"></span> Liputan 6 Malam </p>
                                <p> 01:45 &nbsp; <span id="garis"></span> Sinema Malam </p>
                                <p> 03:15 &nbsp; <span id="garis"></span> Sinema Dini Hari </p>
                                <p> 04:00 &nbsp; <span id="garis"></span> Kata Ustadz Solmed </p>
                                <p> 04:30 &nbsp; <span id="garis"></span> Liputan 6 Pagi </p>
                                <p> 06:00 &nbsp; <span id="garis"></span> Buser Pagi </p>
                                <p> 06:30 &nbsp; <span id="garis"></span> Status Selebriti </p>
                                <p> 08:00 &nbsp; <span id="garis"></span> FTV Spesial: Polisi Ganteng Mah Bebas </p>
                                <p> 10:00 &nbsp; <span id="garis"></span> FTV Pagi: Aku Hadiri Mantanku Menikah </p>
                                <p> 12:00 &nbsp; <span id="garis"></span> Liputan 6 Siang </p>
                                <p> 12:30 &nbsp; <span id="garis"></span> Start Blitz </p>
                                <p> 13:30 &nbsp; <span id="garis"></span> Magic Tumbler </p>
                                <p> 15:15 &nbsp; <span id="garis"></span> FTV Petang: Jatuh Cinta Pada Catatan
                                    Terakhir
                                </p>
                                <p> 16:30 &nbsp; <span id="garis"></span> Dari Jendela SMP </p>
                                <p> 18:45 &nbsp; <span id="garis"></span> Cinta Mulia </p>
                                <p> 21:30 &nbsp; <span id="garis"></span> Samudra Cinta </p> --}}
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <section class="quiz">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tittle-quiz">
                        <h3>Quiz</h3>
                    </div>
                </div>
            </div>
            <div class="row bawah">
                <div class="col col-8 kotak-quiz mx-auto">
                    <div class="row kotak-quiz-isi pt-5">
                        <div class="col kotak-quiz-isi-dalam mx-5 p-4 pb-4">
                            <p>Kuis SCTV</p>
                            <div class="text-right mt-5">
                                <a href="">MULAI &#8594;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection

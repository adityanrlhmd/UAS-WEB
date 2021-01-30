@extends('index')
@section('content')
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
@endsection

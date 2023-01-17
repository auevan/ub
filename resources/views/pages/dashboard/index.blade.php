@extends('layouts.main2')
@section('container')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    
{{-- <div class="page-heading">
<h3>Statistik Website</h3>
</div> --}}
<div class="page-content">
<section class="row">
<div class="col-12 col-lg-9">
    <div class="row">
        <div class="col-12">
            <div class="card" style="background-color: #435ebe">
                <div class="card-header" style="background-color: #435ebe">
                    <h5 class="text-white">Welcome Back :)</h5>
                </div>
                <div class="card-body text-white">
                    <div class="row">
                        <div class="col-md-7 mb-4">Hai, Ahmad. Terima kasih atas kontribusinya hari ini. Selamat beraktivitas, semangat!
                        <div>
                            <button class="btn btn-light mt-3 ms-auto text-black-50">Lihat Agenda</button>
                        </div>
                        </div>
                        <div class="col-md-5">
                            <img id="speaker" src="assets/img/sound.png" alt="Sound" class="img-icon me-4">
                            <div class="fx w-100">
                            <img id="fx-1" src="assets/img/fx.png" alt="Sound" class="img-icon-fx-1">
                            <img id="fx-2" src="assets/img/fx.png" alt="Sound" class="img-icon-fx-2">
                            <img id="fx-3" src="assets/img/fx.png" alt="Sound" class="img-icon-fx-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 col-lg-3">
    <div class="card">
        <div class="card-header">
            <h4>Coming Soon!</h4>
        </div>
        <div class="card-body" style="margin-top: -20px;">
            <h6 style="line-height: 23px;">Rapat Kerja</h6>
            <small>18 Januari 2023</small>
            <button class="btn btn-secondary w-100 mt-2">Selengkapnya</button>
            {{-- <div id="chart-visitors-profile"></div> --}}
        </div>
    </div>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4>Laporan Kas Anda</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                   <thead>
                    @foreach ($bulan as $bln)
                        <th>{{ $bln }}</th>
                    @endforeach
                   </thead>
                   <tbody>
                    @foreach ($bulan as $bln)
                        <th><i class="bi bi-check-circle-fill"></i></th>
                    @endforeach
                   </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>
</div>
</div>
</div>

<script>
    $(window).on('load', function(){
        $('#speaker').css('width', '80px')
        setTimeout(function(){
            $('#fx-1').addClass('fx-1')
            $('#fx-2').addClass('fx-2')
            $('#fx-3').addClass('fx-3')
        }, 2000)
    })
</script>

@endsection
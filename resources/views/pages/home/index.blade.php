@extends('layouts.main')
@section('container')

<section id="head" class="container-fluid ps-0 pe-0">
 <div id="particles-js" class="rounded-bt">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container mt-cus1">
      <div class="row w-100 mb-3">
        <div class="col-6 d-flex justify-content-end">
            <img src="/assets/img/umk_bw.png" width="80px">
        </div>
        <div class="col-6">
            <img src="/assets/img/ub_bw.png" width="80px">
        </div>
      </div>
   </div>
  </nav>
  <div class="justify-content-center row-m" id="judul">
   <h1 class="text-center text-white" style="font-family: serif;">
   	<a href="" class="typewrite text-white fr-40" data-period="2000" data-type='[ "Hi everyone, welcome to" ]' style="text-decoration:none;">
          <span class="wrap"></span></a>
   </h1>
   <div class="text-white text-center mt-3 b-1"><span class="bg-br ps-3 pe-3 pt-2 pb-2 fr-20" style="border-radius:20px">UMK Broadcasting Official Website</span>
   </div>
  </div>
 </div>
</section>

@endsection
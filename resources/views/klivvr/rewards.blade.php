@extends('klivvr.master-klivvr')
@section('content')
<!-- Start One Section -->
<section class="one">
    <div class="bg">
        <img src="{{ asset('img/klivvr/payment-header.png') }}" alt="paymentsign" class="paymrnt-sign">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <div class="text-wrapper  wow animate__animated animate__fadeInLeft" data-wow-delay=".5s">
                    <h1>Discounts and rewards from the brands you love </h1>
                    <p>Earn points as you spend and get discounts from your favorite brands.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Start card Section -->
<section class="cards">
    <div class="container">
        <div class="card">
            <img src="{{ asset('img/klivvr/cash.png') }}" alt="cash" class="wow animate__animated animate__flipOutX"
                data-wow-delay=".6s">
            <img src="{{ asset('img/klivvr/points.png') }}" alt="points" class="wow animate__animated animate__flipOutX"
                data-wow-delay=".6s">
        </div>
    </div>
</section>
<!-- Start logos Section -->
<section class="brands">
    <div class="container">
    <div class="text-wrapper">
        <h1>Sed diam nonumy eirmod <br>
            tempor invidunt ut labore</h1>
        <p> Lorem ipsum dolor sit amet, consetetur sadipscing elit</p>
    </div>
   
    <div class="row">
      
<div class="col-6 col-md-3">
    <div class="img-wrapper">
        <img src="{{ asset('img/klivvr/logo1.png') }}" alt="points">
        <img src="{{ asset('img/klivvr/logo11.png') }}" alt="points">
    </div>
 
</div>
<div class="col-6 col-md-3">
    <div class="img-wrapper">
    <img src="{{ asset('img/klivvr/logo2.png') }}" alt="points">
    <img src="{{ asset('img/klivvr/logo21.png') }}" alt="points">
    </div>

</div>
<div class="col-6 col-md-3">
    <div class="img-wrapper">
    <img src="{{ asset('img/klivvr/logo3.png') }}" alt="points">
    <img src="{{ asset('img/klivvr/logo32.png') }}" alt="points">
    </div>
</div>
<div class="col-6 col-md-3">
    <div class="img-wrapper">
    <img src="{{ asset('img/klivvr/logo4.png') }}" alt="points">
    <img src="{{ asset('img/klivvr/logo41.png') }}" alt="points">
    </div>
</div>
    </div>
</section>
<hr>
@include('klivvr.components.download')
@endsection

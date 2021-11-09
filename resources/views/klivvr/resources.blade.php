@extends('klivvr.master-klivvr')
@section('content')
<!-- Start One Section -->
<section class="one">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 ">
                <div class="text-wrapper wow animate__animated animate__fadeInLeft" data-wow-delay="0.5s">
                    <h1>Klivvr Media and Branding Assets</h1>
                    <p>From brand logos to product images and videos, we have the assets your story and news need.
                        <br>
                        <br>
                        <br>
                        For media inquiries and interview requests, please email media@klivvr.com.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 ">
                <div class="img-container">
                    <img src="{{ asset('img/klivvr/resources.svg') }}" alt="header-bg">
                </div>
            </div>
</section>
<!-- Start logo-cards Section -->
<section class="logo-cards">
    <div class="container">
        <div class="row">
            <h3 class="wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">Download Center</h3>
            <div class="col-12 col-md-6 ">
                <div class="logo wow animate__animated animate__fadeInLeft" data-wow-delay="0.7s">
                    <h2>Logo</h2>
                    <div class="img-container">
                        <img src="{{ asset('img/klivvr/hero.svg') }}" alt="logo">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 ">
                <div class="colors wow animate__animated animate__fadeInRight" data-wow-delay="0.7s">
                    <h2>Colors</h2>
                    <img src="{{ asset('img/klivvr/colors.svg') }}" alt="color">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Quick-cards Section -->
<section class="Quick-cards">
    <div class="container">
        <div class="row">
            <h3 class="wow animate__animated animate__fadeInUp" data-wow-delay="0.9s">Quick Resources</h3>
            <div class="col-12 col-md-6 ">
                <div class="logo  wow animate__animated animate__fadeInLeft" data-wow-delay="0.9s ">
                    <img src="{{ asset('img/klivvr/hero.svg') }}" alt="logo">
                </div>
            </div>
            <div class="col-12 col-md-6 ">
                <div class="colors wow animate__animated animate__fadeInRight" data-wow-delay="0.9s ">
                    <img src="{{ asset('img/klivvr/logo-colored.svg') }}" alt="logo">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 ">
                <div class="logo wow animate__animated animate__fadeInLeft" data-wow-delay="1s ">
                    <img src="{{ asset('img/klivvr/logo-white.png') }}" alt="logo">
                </div>
            </div>
            <div class="col-12 col-md-6 ">
                <div class="colors wow animate__animated animate__fadeInRight" data-wow-delay="1s ">
                    <img src="{{ asset('img/klivvr/logo-dark.svg') }}" alt="logo">
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<!-- Start varity-colors Section -->
<section class="varity-colors">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 ">
                <div class="purple ">
                </div>
                <p class="m-l  ">R 32 G 15 B 84 <br>
                    #200F54</p>
            </div>
            <div class="col-12 col-md-6 ">
                <div class="orange ">
                </div>
                <div class="d-flex  ">
                    <p>
                        R 242 G 202 B 83 <br>
                        #F2CA53
                    </p>
                    <p>
                        R 237 G 66 B 72 <br>
                        #ED4248
                    </p>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12 col-md-6 ">
                <div class="white ">
                </div>
                <p class="m-l wow ">
                    R 00 G 00 B 00 <br>
                    #FFFFFF
                </p>
            </div>


            <div class="col-12 col-md-6 ">
                <div class="green  ">
                </div>
                <div class="d-flex ">
                    <p>
                        R 202 G 255 B 172 <br>
                        #CAFFAC
                    </p>
                    <p>
                        R 00 G 207 B 161 <br>
                        #00CFA1
                    </p>
                </div>

            </div>

        </div>




        <div class="row">
            <div class="col-12 col-md-6 ">
                <div class="pink  ">
                </div>
                <div class="d-flex">
                    <p class="m ">
                        R 201 G 96 B 193 <br>
                        #C960C1
                    </p>
                    <p class="m ">
                        R 91 G 40 B 244 <br>
                        #5B28F4
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 ">
                <div class="blue wow  ">


                </div>
                <div class="d-flex ">
                    <p>R 137 G 228 B 255 <br>
                        #89E4FF</p>
                    <p>R 00 G 106 B <br>
                        #006AFF</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

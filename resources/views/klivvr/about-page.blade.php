@extends('klivvr.master-klivvr')
@section('content')

<section class="one">
   
    <div class="bg">
        <img src="{{ asset('img/klivvr/payment-header.png') }}" alt="paymentsign" class="paymrnt-sign">
    </div>
    <div class="container">
   
<div class="text-flex">
    <div class="rect-data ">

        <div class="text-wrapper">
            <h1>{{getContent("about")}}</h1>
            <p>aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita
                kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua.
            </p>
        </div>

    </div>

    </div>
</section>



<section class="company">
    <div class="container">

        <div class="row">
            <div class="col-12 col-md-6  order-md-1 order-2 ">
                <div class="text-wrapper ">
                    <h1>Who we are?</h1>
                    <p>We are a lifestyle companion app designed to make your life easier. Managing your finances is
                        just scratching
                        the surface of what we can do for you. We offer a multitude of other features to assist in
                        your day-to-day
                        activities from helping you organize your next grocery trip to helping you plan your
                        honeymoon.
                    </p>
                    <p> Klivvr officially launched in 2021 in Egypt with the goal of helping customers
                        reach financial freedom goals through a stunning yet simple user experience.</p>
                </div>
            </div>
            <div class="col-12 col-md-6  order-md-2 order-1 ">
                <div class="img-wrapper ">
                    <img src="{{ asset('img/klivvr/metal_card.png') }}" alt="card" class="metal-card">
                    <img src="{{ asset('img/klivvr/com.png') }}" alt="company">

                </div>
            </div>
        </div>
    </div>
</section>

<section class="brains">
    <div class="container">


        <div class="text-wrapper ">
            <svg xmlns="http://www.w3.org/2000/svg" width="119.311" height="177" viewBox="0 0 119.311 177">
                <path id="Path_767" data-name="Path 767"
                    d="M615.559,384a11.945,11.945,0,0,0-11.7,9.519.031.031,0,0,1,0,.015l-.1.588c0,.012,0,.021-.006.033L600.7,411.43l-1.225,6.964a65.157,65.157,0,0,1-50.639,52.191v0a.721.721,0,0,0,.126,1.431h0A35.96,35.96,0,0,1,582.521,514.5l-2.282,12.915-3.213,18.2a.19.19,0,0,1-.006.034l-.1.587c0,.012,0,.027-.006.039a12.1,12.1,0,0,0-.132,1.777A11.945,11.945,0,0,0,588.408,560c.1,0,.205,0,.309,0s.205,0,.309,0H627.57l.205,0a11.943,11.943,0,0,0,11.733-9.727v0l4.529-25.677,1.818-10.3a36.054,36.054,0,0,0,.563-6.364c0-18.53-18.735-34.41-33.835-35.858l-.056-.005a.759.759,0,0,1-.135-1.491l.962-.248a65.111,65.111,0,0,0,49.213-50.751l.443-2.509,3.341-18.927c.013-.064.022-.126.031-.19a11.8,11.8,0,0,0,.172-2.013A11.93,11.93,0,0,0,654.612,384Z"
                    transform="translate(-547.743 -383.5)" fill="none" stroke="#fff" stroke-width="1" />
            </svg>
            <div class="data-wrapper">
                <h3>Meet the brains behind Klivvr</h3>
                <p>aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
            </div>

        </div>

        <div class="all-members">
            <div class="member">
                <img src="{{ asset('img/klivvr/m11.png') }}" alt="man1">
                <div class="member-data ">
                    <a href="bio-page"></a>
                    <h3>Mohamed Nagaty</h3>
                    <p>CEO</p>
                </div>
            </div>

            <div class="member">
                <img src="{{ asset('img/klivvr/m12.png') }}" alt="man2">
                <div class="member-data ">
                    <h3>Mohamed Nagaty</h3>
                    <p>CEO</p>
                </div>
            </div>
            <div class="member">
                <img src="{{ asset('img/klivvr/m13.png') }}" alt="man3">
                <div class="member-data ">
                    <h3>Mohamed Nagaty</h3>
                    <p>CEO</p>
                </div>
            </div>

            <div class="member">
                <img src="{{ asset('img/klivvr/m14.png') }}" alt="man4">
                <div class="member-data ">
                    <h3>Mohamed Nagaty</h3>
                    <p>CEO</p>
                </div>
            </div>

            <div class="member">
                <img src="{{ asset('img/klivvr/m15.png') }}" alt="man1">
                <div class="member-data ">
                    <h3>Mohamed Nagaty</h3>
                    <p>CEO</p>
                </div>
            </div>

            <div class="member">
                <img src="{{ asset('img/klivvr/m16.png') }}" alt="man2">
                <div class="member-data ">
                    <h3>Mohamed Nagaty</h3>
                    <p>CEO</p>
                </div>
            </div>
            <div class="member">
                <img src="{{ asset('img/klivvr/m17.png') }}" alt="man3">
                <div class="member-data ">
                    <h3>Mohamed Nagaty</h3>
                    <p>CEO</p>
                </div>
            </div>

           
        </div>


    </div>

</section>

<div class="seprated">
    <div class="container">
        <div class="text-wrapper">
            <h1>Sed diam nonumy eirmod iam nonumy eirmod <br>
                tempor invidunt ut labore</h1>
            <p> Lorem ipsum dolor sit amet, consetetur sadipscing elit</p>
        </div>
    </div>
</div>

<section class="core">
    <div class="container">
    <div class="core-sign">
        <img src="{{ asset('img/klivvr/core.png') }}" alt="core-sign">
    </div>

        <div class="row">
            <div class="col-12 col-md-6  ">
                <div class="text-wrapper ">
                    <h5>Together we embody these</h5>
                    <h1>Core Values</h1>
                    <p>Here at Klivvr, we believe that a strong set of values is integral to a company’s success,
                        which is why we strive to meet our core values every day, whether internally or externally.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="text-wrapper ">
                    <h4>We put our customers first.</h4>
                    <h4>We strive for operational excellence.</h4>
                    <h4>We are our biggest critics.</h4>
                    <h4>We write in pencil.</h4>
                    <h4>We leave our titles at the door.</h4>
                    <h4>We don’t follow suit or wear one.</h4>
                    <h4>We see tomorrow and build today.</h4>
                </div>
            </div>
        </div>
</section>


@endsection

@extends('klivvr.master-klivvr')

@section('content')
<section id="intro">
    <div class="bg"></div>
    <div class="container">
        <div class="section-container">
            <div class="row">
                <div class="col-12 col-md-6  ">
                    <div class="data-wapper wow animate__animated animate__fadeInLeft " data-wow-delay=".5s">
                        <h1>
                            Your Path To <br>
                            Financial Freedom <br>
                            Starts Here.</h1>
                        <p> aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                            ipsum dolor sit amet, consetetur sadipscing elitr,
                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                            voluptua. </p>

                        <button type="button">Get Started</button>
                    </div>
                </div>
                <div class="col-12 col-md-6  ">

                    <div class="img-wrapper wow animate__animated animate__fadeInRight " data-wow-delay=".5s">
                        <img src="{{ getImage('mainImage')}}" alt="klivrr-card" class="phone">
                        <img src="{{ asset('img/klivvr/metal_card.png') }}" alt="card" class="card-animate" data-tilt>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="control">
    <div class="container">
        <div class="text-wrapper">
            <img src="{{ asset('img/klivvr/circle-k.png') }}" alt="card" class="cir-k">
            <h1>Take CONTROL OF YOUR MONEY</h1>
            <P>Clever Spending, Tracking, And Saving, <br>
                All Done In One Place</P>
        </div>

</section>

<section class="two">

    <div class="container">

        <div class="scene">
            <div class="row">

                <div class="col-12 col-md-6 order-2 order-md-1">

                    <div class="text-wrapper ">
                        <h3>Hassle-free spending <br> and receiving</h3>
                        <p>Easily pay and get paid. All done securely.</p>
                        <a href="#">Klivvr Payments
                            <svg id="Component_9_6" data-name="Component 9 – 6" xmlns="http://www.w3.org/2000/svg"
                                width="23" height="23" viewBox="0 0 23 23">
                                <path id="chevron-right-solid"
                                    d="M6.4,5.838,1.579,10.659a.6.6,0,0,1-.842,0L.174,10.1a.6.6,0,0,1,0-.841L3.994,5.417.173,1.578a.6.6,0,0,1,0-.841L.737.174a.6.6,0,0,1,.842,0L6.4,5A.6.6,0,0,1,6.4,5.838Z"
                                    transform="translate(8.873 6.083)" fill="#5b28f4" />
                                <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(0 23) rotate(-90)"
                                    fill="none" stroke="#5b28f4" stroke-width="1">
                                    <circle cx="11.5" cy="11.5" r="11.5" stroke="none" />
                                    <circle cx="11.5" cy="11.5" r="11" fill="none" />
                                </g>
                            </svg>



                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 ">


                    <div class="img-container ">
                        <img src="{{ asset('img/klivvr/m-free.png') }}" alt="event">
                        <div class="account-rec ">
                            {{-- <img src="{{ asset('img/klivvr/mark.png') }}" alt="mark"> --}}
                            <div class="data">
                                <h4>Payment Confirmed</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt
                                    ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>



                </div>



            </div>
        </div>



        <div class="scene repeat">
            <div class="row">

                <div class="col-12 col-md-6  ">


                    <div class="img-container l-2 ">
                        <img src="{{ asset('img/klivvr/w-reward.png') }}" alt="reward">

                    </div>




                </div>
                <div class="col-12 col-md-6  ">


                    <div class="text-wrapper ">
                        <h3>Discounts and rewards from <br> the brands you love</h3>
                        <p>Earn points as you spend and get discounts from your favorite brands.</p>
                        <a href="#">Klivvr Rewards
                            <svg id="Component_9_6" data-name="Component 9 – 6" xmlns="http://www.w3.org/2000/svg"
                                width="23" height="23" viewBox="0 0 23 23">
                                <path id="chevron-right-solid"
                                    d="M6.4,5.838,1.579,10.659a.6.6,0,0,1-.842,0L.174,10.1a.6.6,0,0,1,0-.841L3.994,5.417.173,1.578a.6.6,0,0,1,0-.841L.737.174a.6.6,0,0,1,.842,0L6.4,5A.6.6,0,0,1,6.4,5.838Z"
                                    transform="translate(8.873 6.083)" fill="#5b28f4" />
                                <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(0 23) rotate(-90)"
                                    fill="none" stroke="#5b28f4" stroke-width="1">
                                    <circle cx="11.5" cy="11.5" r="11.5" stroke="none" />
                                    <circle cx="11.5" cy="11.5" r="11" fill="none" />
                                </g>
                            </svg>



                        </a>
                    </div>




                </div>



            </div>
        </div>

    </div>
    </div>
</section>

<section class="third">


    <div class="data-warpper ">
        <h1>Your Card. Your Personality. </h1>
        <p>See What You Want To See. Klivvr Gives You The Option To Have A Metal Card With Your Initials.</p>

    </div>
</section>

@include('klivvr.components.download')
@endsection

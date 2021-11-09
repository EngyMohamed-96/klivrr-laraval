@extends('klivvr.master-klivvr')
@section('content')

   
     <section class="one">
        <div class="account-rec ">
            <h4>Reservation Confirmed</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 ">
                    <div class="img-text wow animate__animated animate__fadeInLeft" data-wow-delay=".5s">
                        <img src="{{asset('img/klivvr/booking-text.svg')}}" alt="text">
                    </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="img-container">
                        <img src="{{asset('img/klivvr/sign.svg')}}" alt="sign" class="sign">
                        <img src="{{asset('img/klivvr/header-booking.png')}}" alt="booking" class="h-booking">
                        <div class="tickets wow animate__animated animate__rotateInDownLeft ">
                            <img src="{{asset('img/klivvr/tickets.png')}}" alt="tickets">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

  

    <!-- Start booking-types Section -->
    <section class="booking-types">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3 ">
                    <div class="text-wrapper">
                        <h3>Travel</h3>
                        <p>Near, far, wherever you are. Klivvr has got your back.</p>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="col-6 col-md-3 ">
                    <div class="text-wrapper">
                        <h3>Events</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur </p>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="col-6 col-md-3 ">
                    <div class="text-wrapper">
                        <h3>Restaurants</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur </p>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="col-6 col-md-3 ">
                    <div class="text-wrapper">
                        <h3>Cinemas</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur </p>
                    </div>
                </div>
    </section>
    <!-- Start travel Section -->
    <section class="travel">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 ">
                    <div class="text-wapper">
                        <h3>Travel with Klivvr</h3>
                        <p>Near, far, wherever you are. Klivvr has got your back.</p>
                        <h5>No Crazy Fees</h5>
                        <p>We know traveling can be stressful,
                            which is why we want to make it as straightforward as possible. Enjoy unlimited use of your card
                            worldwide with low fees that only act to cover our costs.</p>
                        <div class="content">
                            <div class="left">
                                <h5>Opportunity Abroad</h5>
                                <p>Just landed? Check your Klivvr app for potential deals in your area.</p>
                            </div>
                            <div class="right">
                                <h5>Worldwide Compatibility</h5>
                                <p>Use your Klivvr card to withdraw money from any ATM in the world.</p>
                            </div>
                        </div>
                        <a href="#">Create your account
                            <svg id="Component_9_5" data-name="Component 9 – 5" xmlns="http://www.w3.org/2000/svg"
                                width="23" height="23" viewBox="0 0 23 23">
                                <path id="chevron-right-solid"
                                    d="M6.4,5.838,1.579,10.659a.6.6,0,0,1-.842,0L.174,10.1a.6.6,0,0,1,0-.841L3.994,5.417.173,1.578a.6.6,0,0,1,0-.841L.737.174a.6.6,0,0,1,.842,0L6.4,5A.6.6,0,0,1,6.4,5.838Z"
                                    transform="translate(8.873 6.083)" fill="#016bff" />
                                <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(0 23) rotate(-90)" fill="none"
                                    stroke="#016bff" stroke-width="1">
                                    <circle cx="11.5" cy="11.5" r="11.5" stroke="none" />
                                    <circle cx="11.5" cy="11.5" r="11" fill="none" />
                                </g>
                            </svg>
                            <img src="{{ asset('img/klivvr/icon.png') }}" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Event Section -->
    <div class="event">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6  ">
                    <div class="text-wrapper ">
                        <h3>Never Miss an Event</h3>
                        <p>Jamming out to your favorite artists is even more fun with Klivvr. Book your tickets on the app
                            and -</p>
                        <a href="#">Create your account
                            <svg id="Component_9_5" data-name="Component 9 – 5" xmlns="http://www.w3.org/2000/svg"
                                width="23" height="23" viewBox="0 0 23 23">
                                <path id="chevron-right-solid"
                                    d="M6.4,5.838,1.579,10.659a.6.6,0,0,1-.842,0L.174,10.1a.6.6,0,0,1,0-.841L3.994,5.417.173,1.578a.6.6,0,0,1,0-.841L.737.174a.6.6,0,0,1,.842,0L6.4,5A.6.6,0,0,1,6.4,5.838Z"
                                    transform="translate(8.873 6.083)" fill="#016bff" />
                                <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(0 23) rotate(-90)" fill="none"
                                    stroke="#016bff" stroke-width="1">
                                    <circle cx="11.5" cy="11.5" r="11.5" stroke="none" />
                                    <circle cx="11.5" cy="11.5" r="11" fill="none" />
                                </g>
                            </svg>
                            <img src="{{ asset('img/klivvr/icon.png') }}" alt="arrow">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="img-container ">
                        <img src="{{ asset('img/klivvr/event.png') }}" alt="event">
                        <div class="account-rec ">
                            <h4>Reservation Confirmed</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Event Section -->
    <div class="event">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6  order-md-1 order-2 ">
                    <div class="img-container ">
                        <img src="{{ asset('img/klivvr/dining.png') }}" alt="dining">
                    </div>
                </div>
                <div class="col-12 col-md-6  order-md-2 order-1  ">
                    <div class="text-wrapper ">
                        <h3>Dining out, The fun part.</h3>
                        <p>Reservations are so much easier with Klivvr. Make a reservation at your favorite restaurant on
                            the Klivvr app. </p>
                        <p>Don’t forget to tip! Don’t worry, you can do that through the app too. Once you’ve finished your
                            meal, just use the same feature to settle the bill.</p>
                        <a href="#">Create your account
                            <svg id="Component_9_5" data-name="Component 9 – 5" xmlns="http://www.w3.org/2000/svg"
                                width="23" height="23" viewBox="0 0 23 23">
                                <path id="chevron-right-solid"
                                    d="M6.4,5.838,1.579,10.659a.6.6,0,0,1-.842,0L.174,10.1a.6.6,0,0,1,0-.841L3.994,5.417.173,1.578a.6.6,0,0,1,0-.841L.737.174a.6.6,0,0,1,.842,0L6.4,5A.6.6,0,0,1,6.4,5.838Z"
                                    transform="translate(8.873 6.083)" fill="#016bff" />
                                <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(0 23) rotate(-90)" fill="none"
                                    stroke="#016bff" stroke-width="1">
                                    <circle cx="11.5" cy="11.5" r="11.5" stroke="none" />
                                    <circle cx="11.5" cy="11.5" r="11" fill="none" />
                                </g>
                            </svg>
                            <img src="{{ asset('img/klivvr/icon.png') }}" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start cinemas Section -->
    <div class="cinemas">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6  ">
                    <div class="text-wrapper ">
                        <h3>Cinemas</h3>
                        <p>Dying to catch a new movie? You can skip the lines and book your tickets straight on the Klivvr
                            app.</p>
                        <p>No movie is complete without popcorn which is why you can also order snacks on the app and have
                            them arrive
                            at your seat so you don’t have to miss a minute of the action.*</p>
                        <a href="#">Create your account
                            <svg id="Component_9_5" data-name="Component 9 – 5" xmlns="http://www.w3.org/2000/svg"
                                width="23" height="23" viewBox="0 0 23 23">
                                <path id="chevron-right-solid"
                                    d="M6.4,5.838,1.579,10.659a.6.6,0,0,1-.842,0L.174,10.1a.6.6,0,0,1,0-.841L3.994,5.417.173,1.578a.6.6,0,0,1,0-.841L.737.174a.6.6,0,0,1,.842,0L6.4,5A.6.6,0,0,1,6.4,5.838Z"
                                    transform="translate(8.873 6.083)" fill="#016bff" />
                                <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(0 23) rotate(-90)" fill="none"
                                    stroke="#016bff" stroke-width="1">
                                    <circle cx="11.5" cy="11.5" r="11.5" stroke="none" />
                                    <circle cx="11.5" cy="11.5" r="11" fill="none" />
                                </g>
                            </svg>
                            <img src="{{ asset('img/klivvr/icon.png') }}" alt="arrow">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="img-container ">
                        <img src="{{ asset('img/klivvr/cinema.png') }}" alt="cinema">
                        <div class="account-rec ">
                            <img src="{{ asset('img/klivvr/popcorn.png') }}" alt="popcorn">
                            <div class="data">
                                <h4>Order Recieved.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('klivvr.components.download') 
@endsection

<nav class="navbar ">
    <div class="navbar-wrapper">
        
        <div class="container">

            <div class="content">

                <a class="navbar-brand-home" href="/">
                    <img src="{{ asset('img/klivvr/logo-colored.svg') }}" alt="website logo">
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" width="1" height="40" viewBox="0 0 1 40">
                    <line id="Line_7" data-name="Line 7" y1="60" transform="translate(0.5)" fill="none" stroke="#c960c1"
                        stroke-width="1" />
                </svg>
                <div class="list-content">
                    <ul>
                        <li><a href="#"> Features<i class="fas fa-chevron-down"></i></a>
                    </li>
                    
                        <li><a href="#">Klivvr  <i class="fas fa-chevron-down"></i></a></li>
                    </ul>
                </div>
             
                <div class="btns">
                    <div class="sign">
                        <a href="login-page">Log in
                            {{-- <i class="fas fa-chevron-right"></i> </a> --}}
                        </a>
                    </div>
                    <div class="get">
                        <a href="">Get Started</a>
                    </div>
                    {{-- <form action="{{route('content.changeLocale',['page_name'=>$page_title])}}" method='post'>
                    @csrf
                        <select name="lang" id="languages" onchange = "this.form.submit()">
                            <option selected disabled> {{$rtl ? "English" : "العربية"}}</option>
                            <option value="en" id="english">English</option>
                            <option value="ar" id="arabic">العربية</option>
                        </select>
                    </form> --}}
                </div>
                <div class="k-drobdown">
                    <div class="container">
               <div class="dropdown-wrapper">
               <div class="l-data">
                <a href="#">  <h5> Features </h5> </a> 
                   <h6> <a href="#">Klivvr-Account</a> </h6>
                   <h6> <a href="#">Klivvr-saving</a> </h6>
                   <h6> <a href="#">Klivvr-tabs</a> </h6>
                   <h6> <a href="#">Insights&Budget</a> </h6>
                   <h6> <a href="#">Junior-Account</a> </h6>
               </div>
               <div class="c-data"> 
               <h6>Payment</h6>
                   <h6>Booking</h6>
                   <h6>Rewards</h6>

               </div>
               <div class="r-data">
                   <hr class="line">
               <h5>About-klivvr</h5>
                   <h6>Resources and Press</h6>

               </div>
               </div>
               </div>
               </div>

                <div class="burger-container">
                    <div id="burger">
                        <div class="bar topBar"></div>
                        <div class="bar btmBar"></div>
                    </div>
                </div>
               
            </div>
            

        </div>
    </div>
    <div class="full-menu">
        <div class="full-menu-container">
            <img src="{{ asset('img/klivvr/shape-bottom.png') }}" alt="shape-bottom" class="menu-shape">
            <div class="container">
                <div class="full-menu-data">
                    <div class="center">
                        <div class="accordion" id="accordionExample">
                            <!-- START ACCORDION ITEM -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Personal
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><a href="#">Data checker</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Our policies</a></li>
                                            <li><a href="#">Show Us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- END ACCORDION ITEM -->
                            <!-- ---------------------------------------------- -->
                            <!-- START ACCORDION ITEM -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Business
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><a href="#">Data checker 2</a></li>
                                            <li><a href="#">About us 2 </a></li>
                                            <li><a href="#">Our policies 2</a></li>
                                            <li><a href="#">Show Us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- END ACCORDION ITEM -->
                            <!-- ---------------------------------------------- -->
                            <!-- START ACCORDION ITEM -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Contact Us
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><a href="#">Data checker 3</a></li>
                                            <li><a href="#">About us 3 </a></li>
                                            <li><a href="#">Our policies 23</a></li>
                                            <li><a href="#">Show Us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- END ACCORDION ITEM -->
                            <!-- ---------------------------------------------- -->
                            <!-- START ACCORDION ITEM -->
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Sign in
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </h2>
                            <!-- END ACCORDION ITEM -->
                            <!-- ---------------------------------------------- -->
                            <!-- START ACCORDION ITEM -->

                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="get">
                                        <a href="">Get the app</a>
                                    </div>
                                </button>
                            </h2>
                            <!-- END ACCORDION ITEM -->
                            <!-- ---------------------------------------------- -->
                            <!-- START ACCORDION ITEM -->
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <form action="{{route('content.changeLocale',['page_name'=>$page_title])}}" method='post'>
                                        @csrf
                                            <select name="lang" id="languages" onchange = "this.form.submit()">
                                                <option selected disabled> {{$rtl ? "English" : "العربية"}}</option>
                                                <option value="en" id="english">English</option>
                                                <option value="ar" id="arabic">العربية</option>
                                            </select>
                                        </form>
                                </button>
                            </h2>
                            <!-- END ACCORDION ITEM -->
                        </div>
                    </div>
                    <div class="bottom">
                        <ul class="full-menu-socialIcons">
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

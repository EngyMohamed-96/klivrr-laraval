<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Page</title>
    @include('klivvr.templates.style')
</head>

<body class="{{ $page_title }}">
    <section class="login">
        {{-- <div class="container"> --}}
            <div class="row">
                <div class="col-12 col-md-6  ">
                    <form action="/action_page.php" method="post">
                        <div class="text-container">
                            <a class="navbar-brand" href="home-page">
                                <img src="{{ asset('img/klivvr/logo-colored.svg') }}" alt="logo">
                            </a>
                            <h1>{{getContent("welcome")}}</h1>
                            <label for="mobile"><b>{{getContent("phone")}}</b></label>
                            <input type="text" placeholder="{{getContent("mobile_placeholder")}}" required>
                            <label for="psw"><b>{{getContent("password")}}</b></label>
                            <input type="password" placeholder=" {{getContent("password_placeholder")}}" name="psw" required>
                            <div class="btns">
                                <label for=""><input type="checkbox" checked="checked" name="remember"> {{getContent("remember")}}</label>
                                <button type="text"> {{getContent("reset_password")}}</button>
                            </div>
                            <button type="submit" class="signbtn">{{getContent("sign")}}</button>
                            <div class="btn-sign">
                                <button type="submit"> <i class="fab fa-google "></i> {{getContent("google")}} </button>
                                <button type="submit"> <i class="fab fa-facebook"></i>
                                    {{getContent("facebook")}}
                                </button>
                            </div>
                            <label for="powered"> {{getContent("powered")}}</label>
                            <hr>
                            <div class="logos">
                                <img src="{{ asset('img/klivvr/master.png') }}" class="master">
                                <img src="{{ asset('img/klivvr/visa.png') }}" class="visa">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="img-container">
                        <img src="{{ asset('img/klivvr/login-girl.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

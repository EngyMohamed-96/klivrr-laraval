@php
$locale = Session::get('locale');
$rtl = ($locale == 'ar');
@endphp
<link href="http://fonts.cdnfonts.com/css/product-sans" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.rtl.min.css"
integrity="sha384-mUkCBeyHPdg0tqB6JDd+65Gpw5h/l8DKcCTV2D2UpaMMFd7Jo8A+mDAosaWgFBPl" crossorigin="anonymous"> -->

<!-- 
<link rel="stylesheet" href="./css/animate.min.css" />
<link rel="stylesheet" href="css/App-rtl.css"> -->
<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
<link rel="stylesheet" href="{{ $rtl ?  asset('css/app-rtl.css') : asset('css/app.css') }}" />

@php
$locale = Session::get('locale');
$rtl = ($locale == 'ar');
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page_title ?? 'Klivvr Website' }}</title>
    <!-- Start Style  -->
    @include("klivvr.templates.style")
</head>

<body class="{{ $page_title}}"> 
    @include('klivvr.components.navbar')
    @yield('content')
    @include('klivvr.components.footer')
    <!-- Start Script -->
    @include('klivvr.templates.script')
</body>
</html>





<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Mimocodes::printAttrs('html') }} {{ Mimocodes::printClasses('html') }}>
<head>
    <meta charset="utf-8"/>

    {{-- Title Section --}}
    <title>{{ config('app.name') }} | @yield('title', $page_title ?? '')</title>

    {{-- Meta Data --}}
    <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

    {{-- Fonts --}}
    {{ Mimocodes::getGoogleFontsInclude() }}

    {{-- Includable CSS --}}
    <link rel="stylesheet" href="{{ asset('/vendor/translation/css/main.css') }}">

    {{-- Global Theme Styles (used by all pages) --}}
    @foreach(config('layout.resources.css') as $style)
        <link href="{{ config('layout.self.rtl') ? asset(Mimocodes::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css"/>
    @endforeach

    {{-- Layout Themes (used by all pages) --}}
    @foreach (Mimocodes::initThemes() as $theme)
        <link href="{{ config('layout.self.rtl') ? asset(Mimocodes::rtlCssPath($theme)) : asset($theme) }}" rel="stylesheet" type="text/css"/>
    @endforeach

</head>

<body {{ Mimocodes::printAttrs('body') }} {{ Mimocodes::printClasses('body') }}>

@if (config('layout.page-loader.type') != '')
    @include('layout.partials._page-loader')
@endif

@include('layout.base._layout_lang')


<script>var HOST_URL = "{{ route('quick-search') }}";</script>

{{-- Global Config (global config for global JS scripts) --}}
<script>
    var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
</script>


@php($elementName='Translation')
@php($parentSection='Translation')
{{-- Global Theme JS Bundle (used by all pages)  --}}
@foreach(config('layout.resources.js') as $script)
    <script src="{{ asset($script) }}" type="text/javascript"></script>
@endforeach

{{-- Includable JS --}}
<script src="{{ asset('/vendor/translation/js/app.js') }}"></script>


</body>
</html>

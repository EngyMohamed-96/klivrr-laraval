{{-- Content --}}
@if (config('layout.content.extended'))
    <div id="app">
        @include('translation::notifications')
        @yield('body')
    </div>
@else
    <div class="d-flex flex-column-fluid">
        <div class="{{ Mimocodes::printClasses('content-container', false) }}">
            <div id="app">
                @include('translation::notifications')
                @yield('body')
            </div>
        </div>
    </div>
@endif

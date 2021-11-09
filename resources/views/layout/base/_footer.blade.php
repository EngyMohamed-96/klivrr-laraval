{{-- Footer --}}

<div class="footer bg-white py-4 d-flex flex-lg-column {{ Mimocodes::printClasses('footer', false) }}" id="kt_footer">
    {{-- Container --}}
    <div class="{{ Mimocodes::printClasses('footer-container', false) }} d-flex flex-column flex-md-row align-items-center justify-content-between">
        {{-- Copyright --}}
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold mr-2">{{ date("Y") }} &copy;</span>
            <a href="https://simdustry.de" target="_blank" class="text-dark-75 text-hover-primary">Simdustry</a>
        </div>

        {{-- Nav --}}
        <div class="nav nav-dark order-1 order-md-2">
            <a href="https://simdustry.de" target="_blank" class="nav-link pr-3 pl-0">About</a>
            <a href="https://simdustry.de" target="_blank" class="nav-link px-3">Team</a>
            <a href="https://simdustry.de" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
        </div>
    </div>
</div>

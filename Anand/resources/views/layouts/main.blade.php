@include('layouts.header')
<div class="px-5">
    @yield('imp-content')
</div>
<div>
    @yield('middle-section')
</div>
@yield("about-content")
@yield('team-section')
@include('layouts/footer')

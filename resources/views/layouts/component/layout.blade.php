@include('layouts.component.header_navbar')
<div id="app" class="container-fluid">
    <div class="row flex-column flex-md-row min-vh-100">
        @auth
            @include('layouts.component.left_navbar')
        @endauth
        <main class="col bg-faded flex-grow-1">
            @yield('content')
        </main>
    </div>
</div>
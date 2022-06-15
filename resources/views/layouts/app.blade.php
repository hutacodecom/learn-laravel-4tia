<!doctype html>
<html lang="en">
  <head>
        @include('partials.head')
  </head>
  <body>
    {{-- Navbar --}}
        @include('partials.navbar')
    {{-- End Navbar --}}
        <div class="container mt-5">
            @yield('content')
        </div>
    <!-- Optional JavaScript -->
        @include('partials.script')
  </body>
</html>
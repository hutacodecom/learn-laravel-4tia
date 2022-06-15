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
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
        @include('partials.script')
  </body>
</html>
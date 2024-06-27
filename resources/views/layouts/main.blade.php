<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Demo App</title>
  @include('layouts.css')
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('layouts.aside')
    <!--  Main wrapper -->
    <div class="body-wrapper">
      @include('layouts.navbar')
      <div class="container-fluid">
        @yield('content')
        
        @include('layouts.footer')
      </div>
    </div>
  </div>
  @include('layouts.js')
</body>

</html>
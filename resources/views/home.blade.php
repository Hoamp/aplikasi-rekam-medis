<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Demo App</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
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

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <h3>Selamat datang di klinik Dokter Agung Prihananto</h3>
                <hr>
                <h4>Visi</h4>
                <ul>
                  <li>------------</li>
                </ul>
                <h4>Misi</h4>
                <ol>
                  <li>-----------</li>
                  <li>-----------</li>
                  <li>-----------</li>
                </ol>
              </div>
              <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.295066235868!2d110.90839687460836!3d-7.542765174460313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a19e764484ec7%3A0x1f84c9d723e36347!2sPraktek%20Dr%20Agung%20Prihananto!5e0!3m2!1sid!2sid!4v1719589223579!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              </div>
            </div>

            
          </div>
        </div>


        @include('layouts.footer')
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('assets/js/app.min.js') }}"></script>
  <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>

</html>
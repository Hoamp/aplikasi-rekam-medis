    <!-- Sidebar Start -->
    <aside class="left-sidebar shadow" style="background-color: rgb(227, 221, 221) ">
        <!-- Sidebar scroll-->
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
              <img src="{{ asset('assets/images/logos/klinik.png') }}" width="80" alt="" />
              <h5>Klinik Dokter Agung Prihananto</h5>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Data Master</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('pasien.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Pasien</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('dokter.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Dokter</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('petugas.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Petugas</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('formulir.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Formulir</span>
                </a>
              </li>

              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Analisis</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('kelengkapan.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Kelengkapan</span>
                </a>
              </li>

              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Laporan</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('laporan.petugas.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Laporan Petugas</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('laporan.pasien.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Laporan Pasien</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('laporan.kelengkapan.index') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Laporan Kelengkapan</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!--  Sidebar End -->
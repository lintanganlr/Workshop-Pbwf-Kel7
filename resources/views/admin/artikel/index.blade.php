<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, artikel-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="/admin" class="app-brand-link">GlucoSync</a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item">
              <a href="/admin" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Dashboard</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Add Ons</span>
            </li>
            <!-- Pages -->
            <li class="menu-item">
              <a href="artikel" class="menu-link">
                <i class="menu-icon bx bx-book-open"></i>
                <div data-i18n="Basic">Artikel</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/admin" class="menu-link">
                <i class="menu-icon bx bx bxs-comment-detail"></i>
                <div data-i18n="Basic">Manage Review</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon bx bx-message-alt-add"></i>
                <div data-i18n="Account Settings">Pelayanan</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-account-settings-account.html" class="menu-link">
                    <div data-i18n="Account">Konsultasi Dokter</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-account.html" class="menu-link">
                    <div data-i18n="Account">Pembersihan Luka</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon bx bx-plus-medical"></i>
                <div data-i18n="Account Settings">Tenaga Medis</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-account-settings-account.html" class="menu-link">
                    <div data-i18n="Account">Dokter</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-account.html" class="menu-link">
                    <div data-i18n="Account">Perawat</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none ps-1 ps-sm-2"
                    placeholder="Search..."
                    aria-label="Search..." />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/images/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/images/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle ms-1">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
    <div class="container">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between pb-0">
                      <h6>Data artikel</h6>
                      <div>
                        <a href="{{ route('artikel.create') }}" class="btn bg-gradient-dark mb-3 me-2">
                            <i class="fas fa-plus"></i> Tambah artikel
                        </a>
                        <a class="btn btn-primary">
                            <i class="bi bi-arrow-bar-left"></i> Sampah
                        </a>
                    </div>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show col-md-12" id="success-alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                @endif
                @if(session('errors'))
                <div class="alert alert-danger alert-dismissible fade show col-md-12" id="success-alert">
                    {{ session('errors') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
                    <div class="card-body p-0 pt-0 pb-4">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                  <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID Artikel</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID User</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Upload</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul Artikel</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                <th class="text-secondary opacity-7"></th>
                              </tr>
                              <tbody>
                                @foreach ($artikels as $artikel )
                                     <tr>
                                         <th scope="row">{{ $artikel->id_artikel}}</th>
                                         <td>{{ $artikel->id_user }}</td>
                                         <td>{{ $artikel->tgl_artikel }}</td>
                                         <td>{{ $artikel->judul_artikel }}</td>
                                         <td>{{ $artikel->deskripsi }}</td>
                                         <td>
                                             @if($artikel->status == 1)

                                             <h6>Aktif</h6>
                                             @endif
                                         </td>
                                         {{-- <td>
                                             @if($artikel->status == 1)
                                             <a href="{{ route('',$artikel->id_artikel) }}"> <button class="btn btn-link text-dark px-4 mb-2">
                                                <i class="fas fa-pencil-alt text-dark me-2"></i>Edit</button>

                                                         <form action="{{ route('', $artikel->id_artikel) }}"
                                                             method="POST" style="display: inline-block;">
                                                             @csrf
                                                             @method('DELETE')
                                                             <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ?')"
                                                                         class="btn btn-link text-danger text-gradient px-4 mb-2"><i class="far fa-trash-alt me-2"></i>Delete</button>
                                                         </form>
                                                         @else
                                                         <form action ($artikel->id_artikel)"
                                                             method="POST" style="display: inline-block;">
                                                             @csrf
                                                             @method('PUT')
                                                             <button type="submit" onclick="return confirm('Apakah anda ingin memulihkan data ?')"
                                                             class="btn btn-success"><i class="bi bi-arrow-clockwise"></i></button>

                                                         @endif
                                         </td> --}}

                                     </tr>
                                 @endforeach

                             </tbody>
                          </table>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
    </div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>







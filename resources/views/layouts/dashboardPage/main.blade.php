<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blank Page &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                            data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="#">Stisla</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="#">St</a>
                    </div>
                    <ul class="sidebar-menu">
                        @if (Auth::user()->getRole() == 'admin')
                        <li class="menu-header">Menu Admin</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="far fa-eye"></i><span>Overview</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="index-0.html">Laporan Singkat Pelatihan</a></li>
                                <li><a class="nav-link" href="index.html">Laporan Singkat Data User</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i></i><span>Atur Instruktur</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="index-0.html">Lihat List Instruktur</a></li>
                                <li><a class="nav-link" href="index.html">Tambah Instruktur</a></li>
                                <li><a class="nav-link" href="index.html">cabut status Instruktur</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-book-open"></i><span>Atur Pelatihan</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="index-0.html">Lihat List Pelatihan</a></li>
                                <li><a class="nav-link" href="index.html">Tamabah&Hapus Pelatihan</a></li>
                                <li><a class="nav-link" href="index.html">Atur Instruktur Pelatihan</a></li>
                            </ul>
                        </li>
                            
                        @elseif(Auth::user()->getRole() == 'instruktur')
                        <li class="menu-header">Menu Instruktur</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-columns"></i> <span>Layout</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                                <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                                <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                            </ul>
                        </li>
                        <li class="active"><a class="nav-link" href="blank.html"><i class="far fa-square"></i>
                                <span>Blank Page</span></a></li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                                <span>Bootstrap</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="bootstrap-alert.html">Alert</a></li>
                                <li><a class="nav-link" href="bootstrap-badge.html">Badge</a></li>
                                <li><a class="nav-link" href="bootstrap-breadcrumb.html">Breadcrumb</a></li>
                                <li><a class="nav-link" href="bootstrap-buttons.html">Buttons</a></li>
                                <li><a class="nav-link" href="bootstrap-card.html">Card</a></li>
                                <li><a class="nav-link" href="bootstrap-carousel.html">Carousel</a></li>
                                <li><a class="nav-link" href="bootstrap-collapse.html">Collapse</a></li>
                                <li><a class="nav-link" href="bootstrap-dropdown.html">Dropdown</a></li>
                                <li><a class="nav-link" href="bootstrap-form.html">Form</a></li>
                                <li><a class="nav-link" href="bootstrap-list-group.html">List Group</a></li>
                                <li><a class="nav-link" href="bootstrap-media-object.html">Media Object</a></li>
                                <li><a class="nav-link" href="bootstrap-modal.html">Modal</a></li>
                                <li><a class="nav-link" href="bootstrap-nav.html">Nav</a></li>
                                <li><a class="nav-link" href="bootstrap-navbar.html">Navbar</a></li>
                                <li><a class="nav-link" href="bootstrap-pagination.html">Pagination</a></li>
                                <li><a class="nav-link" href="bootstrap-popover.html">Popover</a></li>
                                <li><a class="nav-link" href="bootstrap-progress.html">Progress</a></li>
                                <li><a class="nav-link" href="bootstrap-table.html">Table</a></li>
                                <li><a class="nav-link" href="bootstrap-tooltip.html">Tooltip</a></li>
                                <li><a class="nav-link" href="bootstrap-typography.html">Typography</a></li>
                            </ul>
                        </li>
                        @else
                        <li class="menu-header">Menu Peserta</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i>
                                <span>Components</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="components-article.html">Article</a></li>
                                <li><a class="nav-link beep beep-sidebar" href="components-avatar.html">Avatar</a></li>
                                <li><a class="nav-link" href="components-chat-box.html">Chat Box</a></li>
                                <li><a class="nav-link beep beep-sidebar" href="components-empty-state.html">Empty
                                        State</a></li>
                                <li><a class="nav-link" href="components-gallery.html">Gallery</a></li>
                                <li><a class="nav-link beep beep-sidebar" href="components-hero.html">Hero</a></li>
                                <li><a class="nav-link" href="components-multiple-upload.html">Multiple Upload</a></li>
                                <li><a class="nav-link beep beep-sidebar" href="components-pricing.html">Pricing</a>
                                </li>
                                <li><a class="nav-link" href="components-statistic.html">Statistic</a></li>
                                <li><a class="nav-link" href="components-tab.html">Tab</a></li>
                                <li><a class="nav-link" href="components-table.html">Table</a></li>
                                <li><a class="nav-link" href="components-user.html">User</a></li>
                                <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Wizard</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                                <span>Forms</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
                                <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
                                <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google
                                    Maps</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                                <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                                <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                                <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                                <li><a href="gmaps-marker.html">Marker</a></li>
                                <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                                <li><a href="gmaps-route.html">Route</a></li>
                                <li><a href="gmaps-simple.html">Simple</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i>
                                <span>Modules</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="modules-calendar.html">Calendar</a></li>
                                <li><a class="nav-link" href="modules-chartjs.html">ChartJS</a></li>
                                <li><a class="nav-link" href="modules-datatables.html">DataTables</a></li>
                                <li><a class="nav-link" href="modules-flag.html">Flag</a></li>
                                <li><a class="nav-link" href="modules-font-awesome.html">Font Awesome</a></li>
                                <li><a class="nav-link" href="modules-ion-icons.html">Ion Icons</a></li>
                                <li><a class="nav-link" href="modules-owl-carousel.html">Owl Carousel</a></li>
                                <li><a class="nav-link" href="modules-sparkline.html">Sparkline</a></li>
                                <li><a class="nav-link" href="modules-sweet-alert.html">Sweet Alert</a></li>
                                <li><a class="nav-link" href="modules-toastr.html">Toastr</a></li>
                                <li><a class="nav-link" href="modules-vector-map.html">Vector Map</a></li>
                                <li><a class="nav-link" href="modules-weather-icon.html">Weather Icon</a></li>
                            </ul>
                        </li>
                            
                        @endif
                    </ul>

                    
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>
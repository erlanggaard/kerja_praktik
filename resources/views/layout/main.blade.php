<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ahlibisnis.id &mdash; Monitoring</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('assets/modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/jquery-selectric/selectric.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('assets/modules/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/codemirror/lib/codemirror.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/codemirror/theme/duotone-dark.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/jquery-selectric/selectric.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
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
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi,{{Auth::user()->nama}}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{route('profil.view')}}" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>

                            {{-- <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a> --}}
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{route('home')}}">Ahlibisnis.id</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html"></a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dasboard</li>
                        <li class="nav-item dropdown ">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Produk</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('produk.produk') }}">Lihat Produk</a></li>
                                <li><a class="nav-link" href="{{ route('produk.create') }}">Tambah Produk</a></li>
                                <li><a class="nav-link" href="{{ route('produk.stock-produk') }}">Stok Produk</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown ">
                            <a href="#" class="nav-link has-dropdown"><i
                                    class="far fa-file-alt"></i><span>User</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ route('supplier.supplier') }}">Lihat Supplier</a></li>
                                <li><a class="nav-link" href="{{ route('pelanggan.pelanggan') }}">Lihat Pelanggan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown ">
                            <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i><span>Admin</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="produk-terjual">Produk Terjual</a></li>
                                <li><a class="nav-link" href="produk-tidakterjual">Produk Tidak Terjual</a></li>
                                <li><a class="nav-link" href="best_seller">Best Seller</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <a href="formchat" class="btn btn-primary btn-lg btn-block btn-icon-split">
                            <i class="fas fa-rocket"></i> Chat Pelanggan
                        </a>
                    </div>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('container')
                </section>
            </div>

            <footer class="main-footer">

                <div class="footer-left">
                    Copyright &copy; 2021 <div class="bullet"></div> <a href=""></a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>


    <!-- General JS Scripts -->
    <script src="{{asset('assets/modules/jquery.min.js')}}"></script>
    <script src="{{asset('assets/modules/popper.js')}}"></script>
    <script src="{{asset('assets/modules/tooltip.js')}}"></script>
    <script src="{{asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('assets/modules/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{asset('assets/modules/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/modules/chart.min.js')}}"></script>
    <script src="{{asset('assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/modules/summernote/summernote-bs4.js')}}"></script>
    <script src="{{asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
    <script src="{{asset('assets/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>


    <!-- Page Specific JS File -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabel_produk_terjual').DataTable({
                dom: 'Bfrtip',
                buttons: ['excel', 'pdf', 'print']
            });
            $('#tabel_pelanggan').DataTable({
                dom: 'Bfrtip',
                buttons: ['excel', 'pdf', 'print']
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="{{asset('assets/modules/summernote/summernote-bs4.js')}}"></script>
    <script src="{{asset('assets/modules/codemirror/lib/codemirror.js')}}"></script>
    <script src="{{asset('assets/modules/codemirror/mode/javascript/javascript.js')}}"></script>
    <script src="{{asset('assets/modules/jquery-selectric/jquery.selectric.min.js')}}"></script>

    @yield('specificJS')
    @stack('scripts')
</body>

</html>
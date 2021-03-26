<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ahlibisnis.id &mdash; Admin</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">


                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ade</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>

                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">ahlibisnis.id</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">St</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dasboard</li>
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Produk</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="index-0.html">Lihat Produk</a></li>
                                <li><a class="nav-link" href="index-0.html">Tambah Produk</a></li>
                                <li><a class="nav-link" href="index-0.html">Stok Produk</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i><span>Supplier</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="index-0.html">Lihat Supplier</a></li>
                                <li><a class="nav-link" href="index-0.html">Tambah Supplier</a></li>

                            </ul>
                        </li>

                    </ul>


                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-statistic-2">
                                <div class="card-stats">
                                    <div class="card-stats-title">Statistik Penjualan -
                                        <div class="dropdown d-inline">
                                            <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
                                            <ul class="dropdown-menu dropdown-menu-sm">
                                                <li class="dropdown-title">Select Month</li>
                                                <li><a href="#" class="dropdown-item">January</a></li>
                                                <li><a href="#" class="dropdown-item">February</a></li>
                                                <li><a href="#" class="dropdown-item">March</a></li>
                                                <li><a href="#" class="dropdown-item">April</a></li>
                                                <li><a href="#" class="dropdown-item">May</a></li>
                                                <li><a href="#" class="dropdown-item">June</a></li>
                                                <li><a href="#" class="dropdown-item">July</a></li>
                                                <li><a href="#" class="dropdown-item active">August</a></li>
                                                <li><a href="#" class="dropdown-item">September</a></li>
                                                <li><a href="#" class="dropdown-item">October</a></li>
                                                <li><a href="#" class="dropdown-item">November</a></li>
                                                <li><a href="#" class="dropdown-item">December</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-stats-items">
                                        <div class="card-stats-item">
                                            <div class="card-stats-item-count"></div>
                                            <div class="card-stats-item-label"></div>
                                        </div>
                                        <div class="card-stats-item">
                                            <div class="card-stats-item-count">12</div>
                                            <div class="card-stats-item-label">Terjual</div>
                                        </div>
                                        <div class="card-stats-item">
                                            <div class="card-stats-item-count"></div>
                                            <div class="card-stats-item-label"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-icon shadow-primary bg-primary">
                                    <i class="fas fa-archive"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Total Penjualan</h4>
                                    </div>
                                    <div class="card-body">
                                        59
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-statistic-2">
                                <div class="card-chart">
                                    <canvas id="balance-chart" height="80"></canvas>
                                </div>
                                <div class="card-icon shadow-primary bg-primary">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Balance</h4>
                                    </div>
                                    <div class="card-body">
                                        $187,13
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-statistic-2">
                                <div class="card-chart">
                                    <canvas id="sales-chart" height="80"></canvas>
                                </div>
                                <div class="card-icon shadow-primary bg-primary">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                                <div class="card-wrap">
                                    <div class="card-header">
                                        <h4>Sales</h4>
                                    </div>
                                    <div class="card-body">
                                        4,732
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Best Products</h4>
                                </div>
                                <div class="card-body">
                                    <div class="owl-carousel owl-theme" id="products-carousel">
                                        <div>
                                            <div class="product-item pb-3">
                                                <div class="product-image">
                                                    <img alt="image" src="../assets/img/products/product-4-50.png" class="img-fluid">
                                                </div>
                                                <div class="product-details">
                                                    <div class="product-name">iBook Pro 2018</div>
                                                    <div class="product-review">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="text-muted text-small">67 Sales</div>
                                                    <div class="product-cta">
                                                        <a href="#" class="btn btn-primary">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="product-item">
                                                <div class="product-image">
                                                    <img alt="image" src="../assets/img/products/product-3-50.png" class="img-fluid">
                                                </div>
                                                <div class="product-details">
                                                    <div class="product-name">oPhone S9 Limited</div>
                                                    <div class="product-review">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half"></i>
                                                    </div>
                                                    <div class="text-muted text-small">86 Sales</div>
                                                    <div class="product-cta">
                                                        <a href="#" class="btn btn-primary">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="product-item">
                                                <div class="product-image">
                                                    <img alt="image" src="../assets/img/products/product-1-50.png" class="img-fluid">
                                                </div>
                                                <div class="product-details">
                                                    <div class="product-name">Headphone Blitz</div>
                                                    <div class="product-review">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </div>
                                                    <div class="text-muted text-small">63 Sales</div>
                                                    <div class="product-cta">
                                                        <a href="#" class="btn btn-primary">Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card gradient-bottom">
                                <div class="card-header">
                                    <h4>Top 5 Products</h4>
                                    <div class="card-header-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Month</a>
                                        <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <li class="dropdown-title">Select Period</li>
                                            <li><a href="#" class="dropdown-item">Today</a></li>
                                            <li><a href="#" class="dropdown-item">Week</a></li>
                                            <li><a href="#" class="dropdown-item active">Month</a></li>
                                            <li><a href="#" class="dropdown-item">This Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body" id="top-5-scroll">
                                    <ul class="list-unstyled list-unstyled-border">
                                        <li class="media">
                                            <img class="mr-3 rounded" width="55" src="../assets/img/products/product-3-50.png" alt="product">
                                            <div class="media-body">
                                                <div class="float-right">
                                                    <div class="font-weight-600 text-muted text-small">86 Sales</div>
                                                </div>
                                                <div class="media-title">oPhone S9 Limited</div>
                                                <div class="mt-1">
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-primary" data-width="64%"></div>
                                                        <div class="budget-price-label">$68,714</div>
                                                    </div>
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-danger" data-width="43%"></div>
                                                        <div class="budget-price-label">$38,700</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3 rounded" width="55" src="../assets/img/products/product-4-50.png" alt="product">
                                            <div class="media-body">
                                                <div class="float-right">
                                                    <div class="font-weight-600 text-muted text-small">67 Sales</div>
                                                </div>
                                                <div class="media-title">iBook Pro 2018</div>
                                                <div class="mt-1">
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-primary" data-width="84%"></div>
                                                        <div class="budget-price-label">$107,133</div>
                                                    </div>
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-danger" data-width="60%"></div>
                                                        <div class="budget-price-label">$91,455</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3 rounded" width="55" src="../assets/img/products/product-1-50.png" alt="product">
                                            <div class="media-body">
                                                <div class="float-right">
                                                    <div class="font-weight-600 text-muted text-small">63 Sales</div>
                                                </div>
                                                <div class="media-title">Headphone Blitz</div>
                                                <div class="mt-1">
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-primary" data-width="34%"></div>
                                                        <div class="budget-price-label">$3,717</div>
                                                    </div>
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-danger" data-width="28%"></div>
                                                        <div class="budget-price-label">$2,835</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3 rounded" width="55" src="../assets/img/products/product-3-50.png" alt="product">
                                            <div class="media-body">
                                                <div class="float-right">
                                                    <div class="font-weight-600 text-muted text-small">28 Sales</div>
                                                </div>
                                                <div class="media-title">oPhone X Lite</div>
                                                <div class="mt-1">
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-primary" data-width="45%"></div>
                                                        <div class="budget-price-label">$13,972</div>
                                                    </div>
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-danger" data-width="30%"></div>
                                                        <div class="budget-price-label">$9,660</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3 rounded" width="55" src="../assets/img/products/product-5-50.png" alt="product">
                                            <div class="media-body">
                                                <div class="float-right">
                                                    <div class="font-weight-600 text-muted text-small">19 Sales</div>
                                                </div>
                                                <div class="media-title">Old Camera</div>
                                                <div class="mt-1">
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-primary" data-width="35%"></div>
                                                        <div class="budget-price-label">$7,391</div>
                                                    </div>
                                                    <div class="budget-price">
                                                        <div class="budget-price-square bg-danger" data-width="28%"></div>
                                                        <div class="budget-price-label">$5,472</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer pt-3 d-flex justify-content-center">
                                    <div class="budget-price justify-content-center">
                                        <div class="budget-price-square bg-primary" data-width="20"></div>
                                        <div class="budget-price-label">Selling Price</div>
                                    </div>
                                    <div class="budget-price justify-content-center">
                                        <div class="budget-price-square bg-danger" data-width="20"></div>
                                        <div class="budget-price-label">Budget Price</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/index.js"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\example-app\resources\views/layout/main.blade.php ENDPATH**/ ?>
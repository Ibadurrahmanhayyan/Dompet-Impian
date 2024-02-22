<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Menarra Finance Dashboard Page" />
    <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap, Chart JS" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Rachma | @rachmadzii" />

    <title>Menarra Finance - Dashboard</title>

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <!-- External CSS -->
    <link rel="stylesheet" href="assets/css/styles.css" type="text/css" media="screen" />

    <!-- CDN Fontawesome -->
    <script src="https://kit.fontawesome.com/32f82e1dca.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include_once 'navbar.php'; ?>

    <!-- Main Content -->
    <main class="content">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div>
                    <button class="sidebarCollapseDefault btn p-0 border-0 d-none d-md-block"
                        aria-label="Hamburger Button">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <button data-bs-toggle="offcanvas" data-bs-target=".sidebar" aria-controls="sidebar"
                        aria-label="Hamburger Button" class="sidebarCollapseMobile btn p-0 border-0 d-block d-md-none">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
                <div class="d-flex align-items-center justify-content-end gap-4">
                    <input type="text" placeholder="Cari" class="search form-control" />
                    <button class="btn btn-search d-flex justify-content-center align-items-center p-0" type="button">
                        <img src="assets/images/ic_search.svg" width="20px" height="20px" />
                    </button>
                    <img src="assets/images/OIP.jpeg" alt="Photo Profile" class="avatar" />
                </div>
            </div>
        </nav>
        <section class="p-3">
            <header>
                <h3>Azzam Hudiya Rahman</h3>
                <p>Data Keuangan Santri</p>
            </header>
            <div class="information d-flex flex-column gap-5">
                <div class="row px-1 mb-2 gap-5">
                    <div class="col-xl-4 col-12 card debit">
                        <p class="fw-semibold m-0">Azzam Hudiya Rahman</p>
                        <p class="number">Rp. 300.000,00</p>
                        <div>
                            <p class="fw-light m-0">Jumlah Uang Saku Santri</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12 card balance "
                        style="background-color: #3547ac; box-shadow: rgba(53, 71, 172, 0.5) 0px 20px 50px 0px; ">
                        <p style="color: #ffff; ">Catatan</p>
                        <h2 style="color: #ffff;">Terakhir diambil 20/02/2024</h2>

                    </div>
                    <div class="col-xl-4 col-12 card balance" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;">
                        <p>Tambahkan Uang Saku Ananda</p>
                        <button class="btn-donate">
                            Tambahkan Uang Saku
                        </button>

                    </div>

                </div>
                <div class="row px-1 d-flex justify-content-between">
                    <div class="col-xl-6 col-12 p-0 mb-5 mb-xl-0 revenue">
                        <h5>Grafik keuangan santri selama 6 bulan</h5>
                        <div>
                            <canvas id="chart-revenue" width="100%"></canvas>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12 p-0 ps-xl-4 transaction">
                        <h5>Transaksi yang dilakukan</h5>
                        <div class="d-flex flex-column gap-4">
                            <div class="d-flex flex-row gap-3">
                                <div class="icon-history">
                                    <img src="assets/images/ic_receive_act.svg" width="32" height="32" />
                                </div>
                                <div class="trans-history flex-fill">
                                    <div>
                                        <p class="m-0 title">Cukur</p>
                                        <p class="m-0 date">08 Januari 2024</p>
                                    </div>
                                    <p class="m-0 outcome">- Rp 20,000</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row gap-3">
                                <div class="icon-history">
                                    <img src="assets/images/ic_receive_act.svg" width="32" height="32" />
                                </div>
                                <div class="trans-history flex-fill">
                                    <div>
                                        <p class="m-0 title">Mengambil Uang saku</p>
                                        <p class="m-0 date">12 Januari 2024</p>
                                    </div>
                                    <p class="outcome m-0">- Rp 120,000</p>
                                </div>
                            </div>
                            <div class="d-flex flex-row gap-3">
                                <div class="icon-history">
                                    <img src="assets/images/ic_send_act.svg" width="32" height="32" />
                                </div>
                                <div class="trans-history flex-fill">
                                    <div>
                                        <p class="title m-0">Uang saku ditambahkan</p>
                                        <p class="date m-0">13 Januari 2024</p>
                                    </div>
                                    <p class="m-0 income">+ Rp 50,000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="assets/js/donut_chart.js"></script>
    <script src="assets/js/line_chart.js"></script>

    <script>
    $(document).ready(function() {
        $('.sidebarCollapseDefault').on('click', function() {
            $('.sidebar').toggleClass('active');
            $('.content').toggleClass('active');
        });
    });
    </script>
</body>

</html>
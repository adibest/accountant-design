<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>AccountMin - Simple Accountant Admin</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php include '../../parts/head.php'; ?>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            <?php include '../../parts/header.php'; ?>

            <div class="page-wrap">
                <div class="app-sidebar colored">
                  <div class="sidebar-header">
                      <a class="header-brand" href="index.html">
                          <div class="logo-img">
                             <img src="../../../src/img/brand-white.svg" class="header-brand-img" alt="lavalite">
                          </div>
                          <span class="text">AccountMin</span>
                      </a>
                      <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                      <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                  </div>

                  <?php include '../../parts/sidebar.php'; ?>
                </div>

                <div class="main-content">
                    <div class="container-fluid">
                      <div class="page-header">
                          <div class="row align-items-end">
                              <div class="col-lg-8">
                                  <div class="page-header-title">
                                      <i class="ik ik-trending-up bg-blue"></i>
                                      <div class="d-inline">
                                          <h5>Laporan</h5>
                                          <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4">
                                  <nav class="breadcrumb-container" aria-label="breadcrumb">
                                      <ol class="breadcrumb">
                                          <li class="breadcrumb-item">
                                              <a href="http://localhost/ProjectAkuntan/index.php"><i class="ik ik-home"></i></a>
                                          </li>
                                          <li class="breadcrumb-item active" aria-current="page">Laporan</li>
                                      </ol>
                                  </nav>
                              </div>
                          </div>

                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header">
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="umum-tab" data-toggle="tab" href="#umum" role="tab" aria-controls="umum" aria-selected="true">Umum</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="penjualan-tab" data-toggle="tab" href="#penjualan" role="tab" aria-controls="penjualan" aria-selected="false">Penjualan</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pembelian-tab" data-toggle="tab" href="#pembelian" role="tab" aria-controls="pembelian" aria-selected="false">Pembelian</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="produk-tab" data-toggle="tab" href="#produk" role="tab" aria-controls="produk" aria-selected="false">Produk</a>
                                </li>
                              </ul>
                            </div>
                            <div class="card-body">
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="umum" role="tabpanel" aria-labelledby="umum-tab">
                                  <div class="d-flex flex-wrap">
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Balance Sheet / Neraca
                                          </a>
                                        </h3>
                                        <p>
                                          Menampilan apa yang anda miliki (aset), apa yang anda hutang (liabilitas), dan apa yang anda sudah investasikan pada perusahaan anda (ekuitas).
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="http://localhost/ProjectAkuntan/views/reports/neraca">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Trial Balance / Neraca Saldo
                                          </a>
                                        </h3>
                                        <p>
                                          Menampilan apa yang anda miliki (aset), apa yang anda hutang (liabilitas), dan apa yang anda sudah investasikan pada perusahaan anda (ekuitas).
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="/reports/balance_sheet">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Adjusted Trial Balance / Neraca Saldo Penyesuaian
                                          </a>
                                        </h3>
                                        <p>
                                          Menampilan apa yang anda miliki (aset), apa yang anda hutang (liabilitas), dan apa yang anda sudah investasikan pada perusahaan anda (ekuitas).
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="/reports/balance_sheet">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Work Sheet / Neraca Lajur
                                          </a>
                                        </h3>
                                        <p>
                                          Menampilan apa yang anda miliki (aset), apa yang anda hutang (liabilitas), dan apa yang anda sudah investasikan pada perusahaan anda (ekuitas).
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="/reports/balance_sheet">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Ledger / Buku Besar
                                          </a>
                                        </h3>
                                        <p>
                                          Laporan ini menampilkan semua transaksi yang telah dilakukan untuk suatu periode. Laporan ini bermanfaat jika Anda memerlukan daftar kronologis untuk semua transaksi yang telah dilakukan oleh perusahaan Anda.
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="/reports/balance_sheet">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Cash Flow / Alur Kas
                                          </a>
                                        </h3>
                                        <p>
                                          Laporan ini menampilkan semua transaksi yang telah dilakukan untuk suatu periode. Laporan ini bermanfaat jika Anda memerlukan daftar kronologis untuk semua transaksi yang telah dilakukan oleh perusahaan Anda.
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="/reports/balance_sheet">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Income Statement / Laporan Laba-Rugi
                                          </a>
                                        </h3>
                                        <p>
                                          Menampilkan setiap tipe transaksi dan jumlah total untuk pendapatan dan pengeluaran anda.
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="/reports/balance_sheet">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Retained Earning / Laba yang Ditahan
                                          </a>
                                        </h3>
                                        <p>
                                          Daftar semua jurnal per transaksi yang terjadi dalam periode waktu. Hal ini berguna untuk melacak di mana transaksi Anda masuk ke masing-masing rekening
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="/reports/balance_sheet">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="penjualan" role="tabpanel" aria-labelledby="penjualan-tab">
                                  <div class="d-flex flex-wrap">
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Daftar Penjualan
                                          </a>
                                        </h3>
                                        <p>
                                          Menunjukkan daftar kronologis dari semua faktur, pemesanan, penawaran, dan pembayaran Anda untuk rentang tanggal yang dipilih.
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="/reports/balance_sheet">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Laporan Piutang Pelanggan
                                          </a>
                                        </h3>
                                        <p>
                                          Menampilkan tagihan yang belum dibayar untuk setiap pelanggan, termasuk nomor & tanggal faktur, tanggal jatuh tempo, jumlah nilai, dan sisa tagihan yang terhutang pada Anda.
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="/reports/balance_sheet">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Penjualan per Produk
                                          </a>
                                        </h3>
                                        <p>
                                          Menampilkan daftar kuantitas penjualan per produk, termasuk jumlah retur, net penjualan, dan harga penjualan rata-rata.
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="/reports/balance_sheet">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="pembelian" role="tabpanel" aria-labelledby="pembelian-tab">
                                  <div class="d-flex flex-wrap">
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Pembelian per Produk
                                          </a>
                                        </h3>
                                        <p>
                                          Menunjukkan daftar kronologis dari semua pembelian, pemesanan, penawaran, dan pembayaran Anda untuk rentang tanggal yang dipilih.
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="/reports/balance_sheet">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Laporan Hutang Supplier
                                          </a>
                                        </h3>
                                        <p>
                                          Menampilkan jumlah nilai yang Anda hutang pada setiap Supplier.
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="/reports/balance_sheet">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Pembelian per Produk
                                          </a>
                                        </h3>
                                        <p>
                                          Menampilkan daftar kuantitas pembelian per produk, termasuk jumlah retur, net pembelian, dan harga pembelian rata-rata.
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="/reports/balance_sheet">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="produk" role="tabpanel" aria-labelledby="produk-tab">
                                  <div class="d-flex flex-wrap">
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Penjualan per Produk
                                          </a>
                                        </h3>
                                        <p>
                                          Menampilkan daftar kuantitas penjualan per produk, termasuk jumlah retur, net penjualan, dan harga penjualan rata-rata.
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="/reports/balance_sheet">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                      <div class="report-item">
                                        <h3>
                                          <a data-placement="left" data-toggle="tooltop" href="/reports/balance_sheet">
                                            Pembelian per Produk
                                          </a>
                                        </h3>
                                        <p>
                                          Menampilkan daftar kuantitas pembelian per produk, termasuk jumlah retur, net pembelian, dan harga pembelian rata-rata.
                                        </p>
                                        <a class="btn btn-outline-primary btn-rounded" href="/reports/balance_sheet">
                                          Lihat Laporan
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                <<?php include '../../parts/footer.php'; ?>

            </div>
        </div>




        <<?php include '../../parts/modal.php'; ?>

        <<?php include '../../parts/script.php'; ?>
    </body>
</html>

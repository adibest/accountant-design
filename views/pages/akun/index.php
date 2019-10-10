<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ThemeKit - Admin Template</title>
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
                                      <i class="ik ik-menu bg-blue"></i>
                                      <div class="d-inline">
                                          <h5>Daftar Akun</h5>
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
                                          <li class="breadcrumb-item active" aria-current="page">Akun</li>
                                      </ol>
                                  </nav>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header d-flex justify-content-between flex-row">
                              <div class="left-container">
                                <h3>Hover Table</h3>
                                <span>use class <code>table-hover</code> inside table element</span>
                              </div>
                              <div class="right-container">
                                <button type="button" class="btn btn-outline-primary btn-rounded">Primary</button>
                              </div>
                            </div>
                            <div class="card-body">
                              <div id="data_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                  <div class="col-sm-12">
                                    <table id="data_table" class="table table-hover dataTable no-footer" role="grid" aria-describedby="data_table_info">
                                      <thead>
                                        <tr role="row">
                                          <th class="sorting_asc col-sm-1" tabindex="0" aria-controls="data_table" aria-sort="ascending" aria-label="Id: activate to sort column descending">Kode</th>
                                          <th class="sorting col-sm-2" aria-controls="data_table" aria-label="Nama: activate to sort column ascending">Nama</th>
                                          <th class="sorting col-sm-2" tabindex="0" aria-controls="data_table" aria-label="Kategori: activate to sort column ascending">Kategori</th>
                                          <th class="sorting col-sm-2" tabindex="0" aria-controls="data_table" aria-label="Status: activate to sort column ascending">Status</th>
                                          <th class="nosort sorting_disabled col-sm-5 d-block" aria-label="Aksi">Aksi</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr role="row" class="odd">
                                          <td class="sorting_1">001</td>
                                          <td>Erich Heaney</td>
                                          <td>erich@example.com</td>
                                          <td>erich@example.com</td>
                                          <td>
                                            asjak
                                          </td>
                                        </tr><tr role="row" class="even">
                                          <td class="sorting_1">002</td>
                                          <td>Abraham Douglas</td>
                                          <td>jgraham@example.com</td>
                                          <td>jgraham@example.com</td>
                                          <td>
                                            asjak
                                          </td>
                                        </tr><tr role="row" class="odd">
                                          <td class="sorting_1">003</td>
                                          <td>Roderick Simonis</td>
                                          <td>grant.simonis@example.com</td>
                                          <td>grant.simonis@example.com</td>
                                          <td>
                                            asjak
                                          </td>
                                        </tr><tr role="row" class="even">
                                          <td class="sorting_1">004</td>
                                          <td>Christopher Henry</td>
                                          <td>henry.chris@example.com</td>
                                          <td>henry.chris@example.com</td>
                                          <td>
                                            asjak
                                          </td>
                                        </tr><tr role="row" class="odd">
                                          <td class="sorting_1">005</td>
                                          <td>Sonia Wilkinson</td>
                                          <td>boyle.aglea@example.com</td>
                                          <td>boyle.aglea@example.com</td>
                                          <td>
                                            asjak
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                <?php include '../../parts/footer.php'; ?>

            </div>
        </div>




        <<?php include '../../parts/modal.php'; ?>

        <<?php include '../../parts/script.php'; ?>
    </body>
</html>

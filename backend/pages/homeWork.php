<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- fullcalendar CSS -->
  <!-- <link rel="stylesheet" href="../assets/fullcalendar/css/main.css">
  <link rel="stylesheet" href="../assets/fullcalendar/css/main.min.css"> -->

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

      <?php
      include('../body/sidebar.php');
      ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->

        <?php
        include('../body/navbar.php');
        ?>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">

            <div class="card mb-4">
              <h5 class="card-header">Javascript behavior</h5>
              <div class="card-body">
                <div class="row">
                  <!-- Custom content with heading -->
                  <div class="col-lg-12 mb-6 mb-xl-0">
                    <small class="text-light fw-semibold">Vertical</small>
                    <div class="mt-3">
                      <div class="row">
                        <div class="col-md-4 col-12 mb-3 mb-md-0">
                          <div class="list-group">
                            <a class="list-group-item list-group-item-action" id="list-home-list" data-bs-toggle="list" href="#list-home">Home</a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile">Profile</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages">Messages</a>
                            <a class="list-group-item list-group-item-action active" id="list-settings-list" data-bs-toggle="list" href="#list-settings">Settings</a>
                          </div>
                        </div>
                        <div class="col-md-8 col-12">
                          <div class="tab-content p-0">
                            <div class="tab-pane fade" id="list-home">
                              <div class="col-lg-12">
                                <small class="text-light fw-semibold">Custom content</small>
                                <div class="demo-inline-spacing mt-3">
                                  <div class="list-group">
                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start active">
                                      <div class="d-flex justify-content-between w-100">
                                        <h6>List group item heading</h6>
                                        <small>3 days ago</small>
                                      </div>
                                      <p class="mb-1">
                                        Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                                        blandit.
                                      </p>
                                      <small>Donec id elit non mi porta.</small>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
                                      <div class="d-flex justify-content-between w-100">
                                        <h6>List group item heading</h6>
                                        <small class="text-muted">3 days ago</small>
                                      </div>
                                      <p class="mb-1">
                                        Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                                        blandit.
                                      </p>
                                      <small class="text-muted">Donec id elit non mi porta.</small>
                                    </a>
                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
                                      <div class="d-flex justify-content-between w-100">
                                        <h6>List group item heading</h6>
                                        <small class="text-muted">3 days ago</small>
                                      </div>
                                      <p class="mb-1">
                                        Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                                        blandit.
                                      </p>
                                      <small class="text-muted">Donec id elit non mi porta.</small>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="list-profile">
                              Muffin lemon drops chocolate chupa chups jelly beans dessert jelly-o. Soufflé gummies
                              gummies. Ice cream powder marshmallow cotton candy oat cake wafer. Marshmallow
                              gingerbread tootsie roll. Chocolate cake bonbon jelly beans lollipop jelly beans halvah
                              marzipan danish pie. Oat cake chocolate cake pudding bear claw liquorice gingerbread
                              icing sugar plum brownie. Toffee cookie apple pie cheesecake bear claw sugar plum wafer
                              gummi bears fruitcake.
                            </div>
                            <div class="tab-pane fade" id="list-messages">
                              Ice cream dessert candy sugar plum croissant cupcake tart pie apple pie. Pastry
                              chocolate chupa chups tiramisu. Tiramisu cookie oat cake. Pudding brownie bonbon. Pie
                              carrot cake chocolate macaroon. Halvah jelly jelly beans cake macaroon jelly-o. Danish
                              pastry dessert gingerbread powder halvah. Muffin bonbon fruitcake dragée sweet sesame
                              snaps oat cake marshmallow cheesecake. Cupcake donut sweet bonbon cheesecake soufflé
                              chocolate bar.
                            </div>
                            <div class="tab-pane fade active show" id="list-settings">
                              Marzipan cake oat cake. Marshmallow pie chocolate. Liquorice oat cake donut halvah
                              jelly-o. Jelly-o muffin macaroon cake gingerbread candy cupcake. Cake lollipop lollipop
                              jelly brownie cake topping chocolate. Pie oat cake jelly. Lemon drops halvah jelly
                              cookie bonbon cake cupcake ice cream. Donut tart bonbon sweet roll soufflé gummies
                              biscuit. Wafer toffee topping jelly beans icing pie apple pie toffee pudding. Tiramisu
                              powder macaroon tiramisu cake halvah.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/ Custom content with heading -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Content wrapper -->
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

  <!-- fullcalendar JS -->
  <script src="../assets/fullcalendar/js/main.js"></script>
  <script src="../assets/fullcalendar/js/main.min.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
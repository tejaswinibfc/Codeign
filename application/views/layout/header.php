<!doctype html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" loader="disable">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

  <!-- META DATA -->
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="vexel – Laravel Bootstrap 5  Admin & Dashboard Template">
  <meta name="author" content="Spruko Technologies Private Limited">
  <meta name="keywords" content="admin panel template, admin dashboard template, admin panel, bootstrap admin template, dashboard, laravel, bootstrap dashboard, admin dashboard, admin panel laravel template, laravel framework, admin laravel, laravel admin panel.">

  <!-- TITLE -->
  <title><?= $title ?> </title>

  <!-- Favicon -->
  <link rel="icon" href="<?= base_url() ?>assets/images/brand/favicon.ico" type="image/x-icon">

  <!-- ICONS CSS -->
  <link href="<?= base_url() ?>assets/iconfonts/icons.css" rel="stylesheet">

  <!-- Main Theme Js -->
  <script src="<?= base_url() ?>assets/main.js"></script>

  <!-- BOOTSTRAP CSS -->
  <link id="style" href="<?= base_url() ?>assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Choices JS -->
  <script src="<?= base_url() ?>assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

  <!-- Simplebar Css -->
  <link href="<?= base_url() ?>assets/libs/simplebar/simplebar.min.css" rel="stylesheet">

  <!-- Color Picker Css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/libs/flatpickr/flatpickr.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/libs/%40simonwep/pickr/themes/nano.min.css">

  <!-- Choices Css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/libs/choices.js/public/assets/styles/choices.min.css">
  <!-- APP CSS & APP SCSS -->
  <link rel="preload" as="style" href="<?= base_url() ?>assets/app-e29e56ca.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/app-e29e56ca.css" />




</head>

<body class="app sidebar-mini">

  <!-- Switcher -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">Switcher</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fe fe-x fs-18"></i></button>
    </div>
    <div class="offcanvas-body">
      <nav class="border-bottom border-block-end-dashed">
        <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
          <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
          <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile" type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab" tabindex="0">
          <div class="">
            <p class="switcher-style-head">Theme Color Mode:</p>
            <div class="row switcher-style gx-0">
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-light-theme">
                    Light
                  </label>
                  <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme" checked>
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-dark-theme">
                    Dark
                  </label>
                  <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <p class="switcher-style-head">Directions:</p>
            <div class="row switcher-style gx-0">
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-ltr">
                    LTR
                  </label>
                  <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-rtl">
                    RTL
                  </label>
                  <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <p class="switcher-style-head">Navigation Styles:</p>
            <div class="row switcher-style gx-0">
              <div class="col-sm-4 col-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-vertical">
                    Vertical
                  </label>
                  <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical" checked>
                </div>
              </div>
              <div class="col-sm-4 col-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-horizontal">
                    Horizontal
                  </label>
                  <input class="form-check-input" type="radio" name="navigation-style" id="switcher-horizontal">
                </div>
              </div>
            </div>
          </div>
          <div class="navigation-menu-styles">
            <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
            <div class="row switcher-style gx-0 pb-2 gy-2">
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-menu-click">
                    Menu Click
                  </label>
                  <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-click">
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-menu-hover">
                    Menu Hover
                  </label>
                  <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-hover">
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-icon-click">
                    Icon Click
                  </label>
                  <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-click">
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-icon-hover">
                    Icon Hover
                  </label>
                  <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-hover">
                </div>
              </div>
            </div>
          </div>
          <div class="sidemenu-layout-styles">
            <p class="switcher-style-head">Sidemenu Layout Styles:</p>
            <div class="row switcher-style gx-0 pb-2 gy-2">
              <div class="col-sm-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-default-menu">
                    Default Menu
                  </label>
                  <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-default-menu" checked>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-closed-menu">
                    Closed Menu
                  </label>
                  <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-closed-menu">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-icontext-menu">
                    Icon Text
                  </label>
                  <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-icontext-menu">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-icon-overlay">
                    Icon Overlay
                  </label>
                  <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-icon-overlay">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-detached">
                    Detached
                  </label>
                  <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-detached">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-double-menu">
                    Double Menu
                  </label>
                  <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-double-menu">
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <p class="switcher-style-head">Page Styles:</p>
            <div class="row switcher-style gx-0">
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-regular">
                    Regular
                  </label>
                  <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular" checked>
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-classic">
                    Classic
                  </label>
                  <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <p class="switcher-style-head">Layout Width Styles:</p>
            <div class="row switcher-style gx-0">
              <div class="col-sm-4 col-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-full-width">
                    Full Width
                  </label>
                  <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width" checked>
                </div>
              </div>
              <div class="col-sm-4 col-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-boxed">
                    Boxed
                  </label>
                  <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <p class="switcher-style-head">Menu Positions:</p>
            <div class="row switcher-style gx-0">
              <div class="col-sm-4 col-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-menu-fixed">
                    Fixed
                  </label>
                  <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed" checked>
                </div>
              </div>
              <div class="col-sm-4 col-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-menu-scroll">
                    Scrollable
                  </label>
                  <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <p class="switcher-style-head">Header Positions:</p>
            <div class="row switcher-style gx-0">
              <div class="col-sm-4 col-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-header-fixed">
                    Fixed
                  </label>
                  <input class="form-check-input" type="radio" name="header-positions" id="switcher-header-fixed" checked>
                </div>
              </div>
              <div class="col-sm-4 col-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-header-scroll">
                    Scrollable
                  </label>
                  <input class="form-check-input" type="radio" name="header-positions" id="switcher-header-scroll">
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <p class="switcher-style-head">Loader:</p>
            <div class="row switcher-style gx-0">
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-loader-enable">
                    Enable
                  </label>
                  <input class="form-check-input" type="radio" name="page-loader" id="switcher-loader-enable" checked>
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-loader-disable">
                    Disable
                  </label>
                  <input class="form-check-input" type="radio" name="page-loader" id="switcher-loader-disable" checked>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
          <div>
            <div class="theme-colors">
              <p class="switcher-style-head">Menu Colors:</p>
              <div class="d-flex switcher-style pb-2">
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors" id="switcher-menu-light">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors" id="switcher-menu-dark" checked>
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors" id="switcher-menu-primary">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors" id="switcher-menu-gradient">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu" type="radio" name="menu-colors" id="switcher-menu-transparent">
                </div>
              </div>
              <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
            </div>
            <div class="theme-colors">
              <p class="switcher-style-head">Header Colors:</p>
              <div class="d-flex switcher-style pb-2">
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Light Header" type="radio" name="header-colors" id="switcher-header-light" checked>
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark Header" type="radio" name="header-colors" id="switcher-header-dark">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Color Header" type="radio" name="header-colors" id="switcher-header-primary">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors" id="switcher-header-gradient">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors" id="switcher-header-transparent">
                </div>
              </div>
              <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
            </div>
            <div class="theme-colors">
              <p class="switcher-style-head">Theme Primary:</p>
              <div class="d-flex flex-wrap align-items-center switcher-style">
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-primary-1" type="radio" name="theme-primary" id="switcher-primary">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-primary-2" type="radio" name="theme-primary" id="switcher-primary1">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary" id="switcher-primary2">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary" id="switcher-primary3">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary" id="switcher-primary4">
                </div>
                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                  <div class="theme-container-primary"></div>
                  <div class="pickr-container-primary"></div>
                </div>
              </div>
            </div>
            <div class="theme-colors">
              <p class="switcher-style-head">Theme Background:</p>
              <div class="d-flex flex-wrap align-items-center switcher-style">
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-bg-1" type="radio" name="theme-background" id="switcher-background">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-bg-2" type="radio" name="theme-background" id="switcher-background1">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background" id="switcher-background2">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-bg-4" type="radio" name="theme-background" id="switcher-background3">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-bg-5" type="radio" name="theme-background" id="switcher-background4">
                </div>
                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                  <div class="theme-container-background"></div>
                  <div class="pickr-container-background"></div>
                </div>
              </div>
            </div>
            <div class="menu-image mb-3">
              <p class="switcher-style-head">Menu With Background Image:</p>
              <div class="d-flex flex-wrap align-items-center switcher-style">
                <div class="form-check switch-select m-2">
                  <input class="form-check-input bgimage-input bg-img1" type="radio" name="theme-background" id="switcher-bg-img">
                </div>
                <div class="form-check switch-select m-2">
                  <input class="form-check-input bgimage-input bg-img2" type="radio" name="theme-background" id="switcher-bg-img1">
                </div>
                <div class="form-check switch-select m-2">
                  <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background" id="switcher-bg-img2">
                </div>
                <div class="form-check switch-select m-2">
                  <input class="form-check-input bgimage-input bg-img4" type="radio" name="theme-background" id="switcher-bg-img3">
                </div>
                <div class="form-check switch-select m-2">
                  <input class="form-check-input bgimage-input bg-img5" type="radio" name="theme-background" id="switcher-bg-img4">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center canvas-footer flex-wrap">
          <a href="https://themeforest.net/item/vexel-laravel-admin-dashboard-bootstrap-template/49495937" target="_blank" class="btn btn-primary m-1">Buy Now</a>
          <a href="https://themeforest.net/user/spruko/portfolio" class="btn btn-secondary m-1" target="_blank">Our Portfolio</a>
          <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1">Reset</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End switcher -->

  <!-- GLOBAL-LOADER -->
  <div id="loader">
    <img src="<?= base_url() ?>assets/images/loader.svg" class="loader-img" alt="Loader">
  </div>
  <!-- /GLOBAL-LOADER -->

  <!-- PAGE -->
  <div class="page">
    <div class="page-main">

      <!-- Main-Header -->
      <header class="app-header header sticky">

        <!-- Start::main-header-container -->
        <div class="main-header-container container-fluid">

          <!-- Start::header-content-left -->
          <div class="header-content-left align-items-center">

            <div class="header-element">
              <div class="horizontal-logo">
                <a href="index.html" class="header-logo">
                  <img src="<?= base_url() ?>assets/images/brand/desktop-logo.png" alt="logo" class="desktop-logo">
                  <img src="<?= base_url() ?>assets/images/brand/toggle-logo.png" alt="logo" class="toggle-logo">
                  <img src="<?= base_url() ?>assets/images/brand/desktop-dark.png" alt="logo" class="desktop-dark">
                  <img src="<?= base_url() ?>assets/images/brand/toggle-dark.png" alt="logo" class="toggle-dark">
                </a>
              </div>
            </div>
            <!-- Start::header-element -->
            <div class="header-element">
              <!-- Start::header-link -->
              <a href="javascript:void(0);" class="sidemenu-toggle header-link" data-bs-toggle="sidebar">
                <span class="open-toggle">
                  <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24">
                    <path d="M24 0v24H0V0h24z" fill="none" opacity=".87" />
                    <path d="M18.41 16.59L13.82 12l4.59-4.59L17 6l-6 6 6 6 1.41-1.41zM6 6h2v12H6V6z" />
                  </svg>
                </span>
                <span class="close-toggle">
                  <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24" fill="#000000">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                  </svg>
                </span>
              </a>
              <!-- End::header-link -->
            </div>
            <!-- End::header-element -->


            <div class="main-header-center  d-none d-lg-block  header-link">
              <input type="text" class="form-control" id="typehead" placeholder="Search for results..." autocomplete="off">
              <button class="btn pe-1"><i class="fe fe-search" aria-hidden="true"></i></button>
              <div id="headersearch" class="header-search">
                <div class="p-3">
                  <div class="">
                    <p class="fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
                    <div class="ps-2">
                      <a href="javascript:void(0);" class="search-tags"><i class="fe fe-search me-2"></i>People<span></span></a>
                      <a href="javascript:void(0);" class="search-tags"><i class="fe fe-search me-2"></i>Pages<span></span></a>
                      <a href="javascript:void(0);" class="search-tags"><i class="fe fe-search me-2"></i>Articles<span></span></a>
                    </div>
                  </div>
                  <div class="mt-3">
                    <p class="fw-semibold text-muted mb-2 fs-13">Apps and pages</p>
                    <ul class="ps-2">
                      <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                        <a href="calendar2.html"><span><i class='bi bi-calendar me-2 fs-14 bg-primary-transparent avatar rounded-circle '></i>Calendar</span></a>
                      </li>
                      <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                        <a href="email-inbox.html"><span><i class='bi bi-envelope me-2 fs-14 bg-primary-transparent avatar rounded-circle'></i>Mail</span></a>
                      </li>
                      <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                        <a href="buttons.html"><span><i class='bi bi-dice-1 me-2 fs-14 bg-primary-transparent avatar rounded-circle '></i>Buttons</span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="mt-3">
                    <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                    <ul class="ps-2">
                      <li class="p-1 align-items-center text-muted mb-1 search-app">
                        <a href="javascript:void(0);" class="text-primary"><u>http://spruko/html/spruko.com</u></a>
                      </li>
                      <li class="p-1 align-items-center text-muted mb-1 search-app">
                        <a href="javascript:void(0);" class="text-primary"><u>http://spruko/demo/spruko.com</u></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="py-3 border-top px-0">
                  <div class="text-center">
                    <a href="javascript:void(0);" class="text-primary text-decoration-underline fs-15">View all</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- header search -->



          </div>
          <!-- End::header-content-left -->

          <!-- Start::header-content-right -->
          <div class="header-content-right">
            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fe fe-more-vertical"></span>
            </button>
            <div class="navbar navbar-collapse responsive-navbar p-0">
              <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <div class="d-flex align-items-center">
                  <!-- Start::header-element -->




                  <!-- Start::header-element -->
                  <div class="header-element header-search ">
                    <!-- Start::header-link -->
                    <a href="javascript:void(0);" class="header-link d-lg-none d-block" data-bs-toggle="modal" data-bs-target="#searchModal">
                      <!-- <i class="bi bi-search-alt-2   ps-0"></i> -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24" width="24px">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                      </svg>
                    </a>
                    <!-- End::header-link -->
                  </div>
                  <!-- End::header-element -->

                  <!-- Start::header-element|main-profile-user -->
                  <div class="header-element main-profile-user">
                    <!-- Start::header-link|dropdown-toggle -->
                    <a href="javascript:void(0);" class="header-link dropdown-toggle d-flex align-items-center" id="mainHeaderProfile" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="me-2">
                        <img src="<?= base_url() ?>assets/images/users/21.jpg" alt="img" width="30" height="30" class="rounded-circle">
                      </span>
                      <div class="d-xl-block d-none lh-1">
                        <h6 class="fs-13 font-weight-semibold mb-0">Json Taylor</h6>
                        <span class="op-8 fs-10">Web Designer</span>
                      </div>
                    </a>
                    <!-- End::header-link|dropdown-toggle -->
                    <ul class="dropdown-menu pt-0 overflow-hidden dropdown-menu-end mt-1" aria-labelledby="mainHeaderProfile">
                      <li><a class="dropdown-item" href="<?=base_url()?>admin/Login/profile"><i class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                      <li><a class="dropdown-item" href="<?=base_url()?>admin/Login/dashboard"><i class="ti ti-inbox fs-18 me-2 op-7"></i>Dashboard</a></li>
                      <li><a class="dropdown-item" href="<?=base_url()?>admin/Login/index"><i class="ti ti-power fs-18 me-2 op-7"></i>Sign Out</a></li>
                    </ul>
                  </div>
                  <!-- End::header-element|main-profile-user -->


                </div>
              </div>
            </div>
            <!-- Start::header-element -->
            <div class="header-element">
              <!-- Start::header-link|switcher-icon -->
              <a href="javascript:void(0);" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="header-link-icon fa-spin">
                  <path d="M0 0h24v24H0V0z" fill="none" />
                  <path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" />
                </svg>
              </a>
              <!-- End::header-link|switcher-icon -->
            </div>
            <!-- End::header-element -->

          </div>
          <!-- End::header-content-right -->
        </div>
        <!-- End::main-header-container -->

      </header>
      <!-- End Main-Header -->

      <!--Main-Sidebar-->
      <aside class="app-sidebar sticky" id="sidebar">

        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
          <a href="index.html" class="header-logo">
            <img src="<?= base_url() ?>assets/images/brand/desktop-logo.png" alt="logo" class="desktop-logo">
            <img src="<?= base_url() ?>assets/images/brand/toggle-logo.png" alt="logo" class="toggle-logo">
            <img src="<?= base_url() ?>assets/images/brand/desktop-dark.png" alt="logo" class="desktop-dark">
            <img src="<?= base_url() ?>assets/images/brand/toggle-dark.png" alt="logo" class="toggle-dark">
          </a>
        </div>
        <!-- End::main-sidebar-header -->

        <!-- Start::main-sidebar -->
        <div class="main-sidebar" id="sidebar-scroll">

          <!-- Start::nav -->
          <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
              <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
              </svg>
            </div>
            <ul class="main-menu">
              <!-- Start::slide__category -->
              <li class="slide__category"><span class="category-name">Main</span></li>
              <!-- End::slide__category -->

              <!-- Start::slide -->
              <li class="slide">
                <a href="index.html" class="side-menu__item">
                  <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z" />
                  </svg>
                  <span class="side-menu__label">Dashboard</span>
                </a>
              </li>
              <!-- End::slide -->


              <!-- Start::slide -->
              <li class="slide has-sub">
                <a href="javascript:void(0);" class="side-menu__item">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="side-menu__icon">
                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                    <path d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z">
                    </path>
                  </svg>
                  <span class="side-menu__label">Pages</span>
                  <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class="slide-menu child1">
                  <li class="slide side-menu__label1">
                    <a href="javascript:void(0);">Pages</a>
                  </li>
                  <li class="slide">
                    <a href="profile.html" class="side-menu__item">Profile</a>
                  </li>

                </ul>
              </li>
              <!-- End::slide -->
            </ul>
            <!-- <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                </path>
              </svg></div> -->
          </nav>
          <!-- End::nav -->
        </div>
        <!-- End::main-sidebar -->

      </aside>
      <!-- End Main-Sidebar-->
      <!--app-content open-->
      <div class="main-content app-content mt-0">


        <!-- PAGE-HEADER -->
        <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
          <h1 class="page-title"><?= $title?></h1>
          <div>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="javascript:void(0);"><?= $title?></a></li>
              <li class="breadcrumb-item active" aria-current="page"><?= $title?></li>
            </ol>
          </div>
        </div>
        <!-- PAGE-HEADER END -->
        <?php if ($this->session->flashdata('error')) { ?>
			  <div class="container-fluid">
					<div class="row justify-content-end">
						<div class="col-3">
						<div class="toast align-items-center tx-fixed-white bg-secondary border-0 show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
					<div class="d-flex">
						<div class="toast-body">
							<?php echo $this->session->flashdata('error'); ?>
						</div>
						<button aria-label="Close" class="btn-close fs-20 ms-auto mt-2 pe-2 tx-fixed-white" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
					</div>
			  	</div>
						</div>
					</div>
					</div>
				
      <?php } ?>

      <?php if ($this->session->flashdata('success')) { ?>
			  <div class="container-fluid">
					<div class="row justify-content-end">
						<div class="col-3">
						<div class="toast align-items-center tx-fixed-white bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
					<div class="d-flex">
						<div class="toast-body">
							<?php echo $this->session->flashdata('success'); ?>
						</div>
						<button aria-label="Close" class="btn-close fs-20 ms-auto mt-2 pe-2 tx-fixed-white" data-bs-dismiss="toast"><span aria-hidden="true">×</span></button>
					</div>
			  	</div>
						</div>
					</div>
					</div>
				
      <?php } ?>
        <!-- CONTAINER -->

        <!-- main content start .....-->

        <!-- CONTAINER END -->

        <!-- </div> -->
        <!--app-content closed-->

        <!-- Country-selector modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <span class="input-group">
              <input type="search" class="form-control px-2 " placeholder="Search..." aria-label="Username">
              <a href="javascript:void(0);" class="input-group-text bg-primary text-white" id="Search-Grid"><i class="fe fe-search header-link-icon tx-fixed-white fs-18"></i></a>
            </span>
            <div class="mt-3">
              <div class="">
                <p class="fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
                <div class="ps-2">
                  <a href="javascript:void(0);" class="search-tags"><i class="fe fe-search me-2"></i>People<span></span></a>
                  <a href="javascript:void(0);" class="search-tags"><i class="fe fe-search me-2"></i>Pages<span></span></a>
                  <a href="javascript:void(0);" class="search-tags"><i class="fe fe-search me-2"></i>Articles<span></span></a>
                </div>
              </div>
              <div class="mt-3">
                <p class="fw-semibold text-muted mb-2 fs-13">Apps and pages</p>
                <ul class="ps-2">
                  <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                    <a href="calendar2.html"><span><i class="bi bi-calendar me-2 fs-14 bg-primary-transparent avatar rounded-circle"></i>Calendar</span></a>
                  </li>
                  <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                    <a href="email-inbox.html"><span><i class="bi bi-envelope me-2 fs-14 bg-primary-transparent avatar rounded-circle"></i>Mail</span></a>
                  </li>
                  <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                    <a href="buttons.html"><span><i class="bi bi-dice-1 me-2 fs-14 bg-primary-transparent avatar rounded-circle"></i>Buttons</span></a>
                  </li>
                </ul>
              </div>
              <div class="mt-3">
                <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                <ul class="ps-2">
                  <li class="p-1 align-items-center  mb-1 search-app">
                    <a href="javascript:void(0);" class="text-primary"><u>http://spruko/html/spruko.com</u></a>
                  </li>
                  <li class="p-1 align-items-center mb-1 search-app">
                    <a href="javascript:void(0);" class="text-primary"><u>http://spruko/demo/spruko.com</u></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="modal-footer d-block">
            <div class="text-center">
              <a href="javascript:void(0);" class="text-primary text-decoration-underline fs-15">View all
                results</a>
            </div>
          </div>
        </div>
        </div>

        
    </div>
        <!-- End Country-selector modal -->

        <!-- </div> -->
        <!-- END PAGE-->



</body>

</html>
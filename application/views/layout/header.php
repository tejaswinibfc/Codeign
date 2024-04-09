<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from codeigniter.spruko.com/noa/noa/index by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 05:11:27 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

  <!-- META DATA -->
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Noa – Bootstrap5 CodeIgniter Admin & Dashboard Template">
  <meta name="author" content="Spruko Technologies Private Limited">
  <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

  <!-- TITLE -->
  <title><?= $title ?></title>

  <!-- FAVICON -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/brand/favicon.ico" />

  <!-- BOOTSTRAP CSS -->
  <link id="style" href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- STYLE CSS -->
  <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/css/skin-modes.css" rel="stylesheet" />

  <!--- FONT-ICONS CSS -->
  <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet" />

  <!-- INTERNAL SWITCHER CSS -->
  <link href="<?= base_url() ?>assets/switcher/css/switcher.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/switcher/demo.css" rel="stylesheet" />

</head>

<body class="ltr app sidebar-mini light-mode">

  <!-- Switcher -->

  <!-- <div class="switcher-wrapper">
    <div class="demo_changer">
      <div class="form_holder sidebar-right1">
        <div class="row">
          <div class="predefined_styles">
            <div class="swichermainleft text-center">
              <div class="p-3 d-grid gap-2">
                <a href="index.html" class="btn ripple btn-primary mt-0">View Demo</a>
                <a href="#" class="btn ripple btn-secondary" data-bs-target=".buynow-btn" data-bs-toggle="modal">Buy Now</a>
                <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-pink">Our
                  Portfolio</a>
              </div>
            </div>
            <div class="swichermainleft">
              <h4>Navigation Style</h4>
              <div class="skin-body">
                <div class="switch_section">
                  <div class="switch-toggle d-flex">
                    <span class="me-auto">Vertical Menu</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                      <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle d-flex mt-2">
                    <span class="me-auto">Horizontal Click Menu</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch35" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle d-flex mt-2">
                    <span class="me-auto">Horizontal Hover Menu</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch111" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swichermainleft">
              <h4>LTR and RTL VERSIONS</h4>
              <div class="skin-body">
                <div class="switch_section">
                  <div class="switch-toggle d-flex">
                    <span class="me-auto">LTR Version</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
                      <label for="myonoffswitch23" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle d-flex mt-2">
                    <span class="me-auto">RTL Version</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch24" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch24" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swichermainleft">
              <h4>Light Theme Style</h4>
              <div class="skin-body">
                <div class="switch_section">
                  <div class="switch-toggle d-flex">
                    <span class="me-auto">Light Theme</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                      <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle d-flex">
                    <span class="me-auto">Light Primary</span>
                    <div class="">
                      <input class="wpx-30 h-30 input-color-picker color-primary-light" value="#8FBD56" id="colorID" oninput="changePrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor" name="lightPrimary">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swichermainleft">
              <h4>Dark Theme Style</h4>
              <div class="skin-body">
                <div class="switch_section">
                  <div class="switch-toggle d-flex mt-2">
                    <span class="me-auto">Dark Theme</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle d-flex mt-2">
                    <span class="me-auto">Dark Primary</span>
                    <div class="">
                      <input class="wpx-30 h-30 input-dark-color-picker color-primary-dark" value="#8FBD56" id="darkPrimaryColorID" oninput="darkPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
                    </div>
                  </div>
                  <div class="switch-toggle d-flex mt-2">
                    <span class="me-auto">Dark Custom Background</span>
                    <div class="">
                      <input class="wpx-30 h-30 input-transparent-color-picker color-bg-transparent" value="#3D571E" id="transparentBgColorID" oninput="transparentBgColor()" type="color" data-id5="body" data-id6="boxed-theme" name="transparentBackground">
                    </div>
                  </div>
                  <div class="switch-toggle">
                    <span class="">Background Image</span>
                    <div class="mt-1">
                      <a class="bg-img1" href="javascript:void(0);" onclick="bgImage(this)"><img src="<?= base_url() ?>assets/images/media/bg-img1.jpg" alt="Bg-Image" id="bgimage1"></a>
                      <a class="bg-img2" href="javascript:void(0);" onclick="bgImage(this)"><img src="<?= base_url() ?>assets/images/media/bg-img2.jpg" alt="Bg-Image" id="bgimage2"></a>
                      <a class="bg-img3" href="javascript:void(0);" onclick="bgImage(this)"><img src="<?= base_url() ?>assets/images/media/bg-img3.jpg" alt="Bg-Image" id="bgimage3"></a>
                      <a class="bg-img4" href="javascript:void(0);" onclick="bgImage(this)"><img src="<?= base_url() ?>assets/images/media/bg-img4.jpg" alt="Bg-Image" id="bgimage4"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swichermainleft menu-styles">
              <h4>Menu Styles</h4>
              <div class="skin-body">
                <div class="switch_section">
                  <div class="switch-toggle lightMenu d-flex">
                    <span class="me-auto">Light Menu</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle colorMenu d-flex mt-2">
                    <span class="me-auto">Color Menu</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle darkMenu d-flex mt-2">
                    <span class="me-auto">Dark Menu</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle gradientMenu d-flex mt-2">
                    <span class="me-auto">Gradient Menu</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch19" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swichermainleft header-styles">
              <h4>Header Styles</h4>
              <div class="skin-body">
                <div class="switch_section">
                  <div class="switch-toggle lightHeader d-flex">
                    <span class="me-auto">Light Header</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle  colorHeader d-flex mt-2">
                    <span class="me-auto">Color Header</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle darkHeader d-flex mt-2">
                    <span class="me-auto">Dark Header</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                    </p>
                  </div>

                  <div class="switch-toggle darkHeader d-flex mt-2">
                    <span class="me-auto">Gradient Header</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch20" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch20" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swichermainleft">
              <h4>Layout Width Styles</h4>
              <div class="skin-body">
                <div class="switch_section">
                  <div class="switch-toggle d-flex">
                    <span class="me-auto">Full Width</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                      <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle d-flex mt-2">
                    <span class="me-auto">Boxed</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swichermainleft">
              <h4>Layout Positions</h4>
              <div class="skin-body">
                <div class="switch_section">
                  <div class="switch-toggle d-flex">
                    <span class="me-auto">Fixed</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                      <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle d-flex mt-2">
                    <span class="me-auto">Scrollable</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swichermainleft leftmenu-styles">
              <h4>Sidemenu layout Styles</h4>
              <div class="skin-body">
                <div class="switch_section">
                  <div class="switch-toggle d-flex">
                    <span class="me-auto">Default Menu</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                      <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle d-flex mt-2">
                    <span class="me-auto">Icon with Text</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle d-flex mt-2">
                    <span class="me-auto">Icon Overlay</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle d-flex mt-2">
                    <span class="me-auto">Closed Sidemenu</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch16" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch16" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle d-flex mt-2">
                    <span class="me-auto">Hover Submenu</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch17" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                  <div class="switch-toggle d-flex mt-2">
                    <span class="me-auto">Hover Submenu Style 1</span>
                    <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch18" class="onoffswitch2-checkbox">
                      <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swichermainleft">
              <h4>Reset All Styles</h4>
              <div class="skin-body">
                <div class="switch_section my-4">
                  <button class="btn btn-danger btn-block" onclick="localStorage.clear();
                                            document.querySelector('html').style = '';
                                            names() ;
                                            resetData() ;" type="button">Reset All
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- End Switcher -->

  <!-- GLOBAL-LOADER -->
  <div id="global-loader">
    <img src="<?= base_url() ?>assets/images/loader.svg" class="loader-img" alt="Loader">
  </div>
  <!-- /GLOBAL-LOADER -->

  <!-- PAGE -->
  <div class="page">
    <div class="page-main">

      <!-- APP-HEADER -->
      <div class="app-header header sticky">
        <div class="container-fluid main-container">
          <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="index.html">
              <img src="<?= base_url() ?>assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
              <img src="<?= base_url() ?>assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
            <div class="main-header-center ms-3 d-none d-xl-block">
              <input class="form-control" placeholder="Search for results..." type="search">
              <button class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                  <path d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                </svg>
              </button>
            </div>
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
              <div class="dropdown d-xl-none d-md-block d-none">
                <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                  <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                    <path fill="" d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                  </svg>
                </a>
                <div class="dropdown-menu header-search dropdown-menu-start">
                  <div class="input-group w-100 p-2">
                    <input type="text" class="form-control" placeholder="Search....">
                    <div class="input-group-text btn btn-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                        <path d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <!-- SEARCH -->
              <button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
              </button>
              <div class="navbar navbar-collapse responsive-navbar p-0">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                  <div class="d-flex order-lg-2">
                    <div class="dropdown d-md-none d-flex">
                      <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                          <path d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                        </svg>
                      </a>
                      <div class="dropdown-menu header-search dropdown-menu-start">
                        <div class="input-group w-100 p-2">
                          <input type="text" class="form-control" placeholder="Search....">
                          <div class="input-group-text btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                              <path d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>



                    <!-- NOTIFICATION START  -->
                    <div class="dropdown d-md-flex notifications">
                      <a class="nav-link icon" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                          <path d="M18,14.1V10c0-3.1-2.4-5.7-5.5-6V2.5C12.5,2.2,12.3,2,12,2s-0.5,0.2-0.5,0.5V4C8.4,4.3,6,6.9,6,10v4.1c-1.1,0.2-2,1.2-2,2.4v2C4,18.8,4.2,19,4.5,19h3.7c0.5,1.7,2,3,3.8,3c1.8,0,3.4-1.3,3.8-3h3.7c0.3,0,0.5-0.2,0.5-0.5v-2C20,15.3,19.1,14.3,18,14.1z M7,10c0-2.8,2.2-5,5-5s5,2.2,5,5v4H7V10z M13,20.8c-1.6,0.5-3.3-0.3-3.8-1.8h5.6C14.5,19.9,13.8,20.5,13,20.8z M19,18H5v-1.5C5,15.7,5.7,15,6.5,15h11c0.8,0,1.5,0.7,1.5,1.5V18z" />
                        </svg>
                        <span class=" pulse"></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <div class="drop-heading border-bottom">
                          <div class="d-flex">
                            <h6 class="mt-1 mb-0 fs-15 text-dark">Notifications</h6>
                            <div class="ms-auto">
                              <span class="xm-title badge bg-secondary text-white fw-normal fs-11 badge-pill"> <a href="javascript:void(0);" class="showall-text text-white">Clear</a> </span>
                            </div>
                          </div>
                        </div>
                        <div class="notifications-menu ps3 overflow-hidden">
                          <a class="dropdown-item" href="chat.html">
                            <div class="notification-each d-flex">
                              <div class="me-3 notifyimg  bg-primary brround">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                  <path d="M17.4541016,11H6.5458984c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h10.9082031c0.276123,0,0.5-0.223877,0.5-0.5S17.7302246,11,17.4541016,11z M19.5,2h-15C3.119812,2.0012817,2.0012817,3.119812,2,4.5v11c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h12.7930298l3.8534546,3.8535156C21.2402344,21.9473267,21.3673706,22,21.5,22c0.276123,0,0.5-0.223877,0.5-0.5v-17C21.9987183,3.119812,20.880188,2.0012817,19.5,2z M21,20.2929688l-3.1464844-3.1464844C17.7597656,17.0526733,17.6326294,17,17.5,17h-13c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-11C3.0009155,3.671936,3.671936,3.0009155,4.5,3h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V20.2929688z M17.4541016,8H6.5458984c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h10.9082031c0.276123,0,0.5-0.223877,0.5-0.5S17.7302246,8,17.4541016,8z" />
                                </svg>
                              </div>
                              <div>
                                <span class="notification-label mb-1">New Message Received</span>
                                <span class="notification-subtext text-muted">2 hours ago</span>
                              </div>
                            </div>
                          </a>
                          <a class="dropdown-item" href="mail-inbox.html">
                            <div class="notification-each d-flex">
                              <div class="me-3 notifyimg  bg-secondary brround">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                  <path d="M17.5078125,22.9736328h-12.5c-2.2081909-0.0023804-3.9976196-1.7918091-4-4v-8.5c0-0.276123-0.223877-0.5-0.5-0.5s-0.5,0.223877-0.5,0.5v8.5c0.0032349,2.7600708,2.2399292,4.9967651,5,5h12.5c0.276123,0,0.5-0.223877,0.5-0.5S17.7839355,22.9736328,17.5078125,22.9736328z M21.0078125,3.9736328h-14c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v10c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-10C24.0059814,5.3175049,22.6639404,3.9754639,21.0078125,3.9736328z M7.0078125,4.9736328h14c0.3700562,0.0004883,0.7122192,0.1081543,1.0094604,0.2835693l-6.9489136,6.9489136c-0.5864868,0.5839844-1.534668,0.5839844-2.1210938,0L5.9985962,5.256958C6.2957764,5.081665,6.6378784,4.9740601,7.0078125,4.9736328z M23.0078125,16.9736328c-0.0014038,1.1039429-0.8959961,1.9985352-2,2h-14c-1.1040649-0.0012817-1.9987183-0.8959351-2-2v-10c0.0004272-0.3701782,0.1082153-0.7124634,0.2836914-1.0097656l6.9487305,6.9492188c0.4683838,0.4692993,1.1045532,0.7325439,1.7675781,0.7314453c0.6630249,0.0010986,1.2991333-0.262146,1.7675781-0.7314453l6.9488525-6.9489136c0.175415,0.2972412,0.2830811,0.6394043,0.2835693,1.0094604V16.9736328z" />
                                </svg>
                              </div>
                              <div>
                                <span class="notification-label mb-1">New Mail Received</span>
                                <span class="notification-subtext text-muted">1 week ago</span>
                              </div>
                            </div>
                          </a>
                          <a class="dropdown-item" href="cart.html">
                            <div class="notification-each d-flex">
                              <div class="me-3 notifyimg  bg-info brround">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                  <path d="M19.5,7H16V5.9169922c0-2.2091064-1.7908325-4-4-4s-4,1.7908936-4,4V7H4.5C4.4998169,7,4.4996338,7,4.4993896,7C4.2234497,7.0001831,3.9998169,7.223999,4,7.5V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7.5c0-0.0001831,0-0.0003662,0-0.0006104C19.9998169,7.2234497,19.776001,6.9998169,19.5,7z M9,5.9169922c0-1.6568604,1.3431396-3,3-3s3,1.3431396,3,3V7H9V5.9169922z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V8h3v2.5C8,10.776123,8.223877,11,8.5,11S9,10.776123,9,10.5V8h6v2.5c0,0.0001831,0,0.0003662,0,0.0005493C15.0001831,10.7765503,15.223999,11.0001831,15.5,11c0.0001831,0,0.0003662,0,0.0006104,0C15.7765503,10.9998169,16.0001831,10.776001,16,10.5V8h3V19z" />
                                </svg>
                              </div>
                              <div>
                                <span class="notification-label mb-1">New Order Received</span>
                                <span class="notification-subtext text-muted">1 day ago</span>
                              </div>
                            </div>
                          </a>
                          <a class="dropdown-item" href="blog-details.html">
                            <div class="notification-each d-flex">
                              <div class="me-3 notifyimg  bg-warning brround">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                  <path d="M8,13c-0.276123,0-0.5,0.223877-0.5,0.5v2c0,0.0001831,0,0.0003662,0,0.0005493C7.5001831,15.7765503,7.723999,16.0001831,8,16c0.0001831,0,0.0003662,0,0.0006104,0C8.2765503,15.9998169,8.5001831,15.776001,8.5,15.5v-2C8.5,13.223877,8.276123,13,8,13z M12,10c-0.276123,0-0.5,0.223877-0.5,0.5v5c0,0.0001831,0,0.0003662,0,0.0005493C11.5001831,15.7765503,11.723999,16.0001831,12,16c0.0001831,0,0.0003662,0,0.0006104,0c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5v-5C12.5,10.223877,12.276123,10,12,10z M19.4152832,5.2902832c-3.7055054-4.09552-10.02948-4.4117432-14.125-0.7062988c-4.09552,3.7055054-4.4117432,10.02948-0.7062988,14.125l-2.4375,2.4375c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546C2,21.776062,2.223877,21.999939,2.5,22H12c2.4794312-0.000061,4.8704224-0.9212646,6.7089844-2.5847168C22.8045654,15.7097778,23.1207275,9.3858032,19.4152832,5.2902832z M12,21H3.7069702l1.928772-1.9287109c0.000061-0.000061,0.0001221-0.0001221,0.0001221-0.0001831c0.1951904-0.1952515,0.1951294-0.5117188-0.0001221-0.7068481C3.9483643,16.6768799,3.0002441,14.3883667,3,12.0020142c-0.0005493-4.9700317,4.0279541-8.9994507,8.9979858-9c4.9699707-0.0005493,8.9994507,4.0279541,9,8.9979858C20.9985352,16.9699707,16.9700317,20.9994507,12,21z M16,8c-0.276123,0-0.5,0.223877-0.5,0.5v7c0,0.0001831,0,0.0003662,0,0.0005493C15.5001831,15.7765503,15.723999,16.0001831,16,16c0.0001831,0,0.0003662,0,0.0006104,0c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5v-7C16.5,8.223877,16.276123,8,16,8z" />
                                </svg>
                              </div>
                              <div>
                                <span class="notification-label mb-1">New Comment Received</span>
                                <span class="notification-subtext text-muted">1 day ago</span>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <div class="text-center p-3">
                          <a class="btn btn-primary">View All Notifications</a>
                        </div>
                      </div>
                    </div>
                    <!-- NOTIFICATIONS END -->

                    <!-- PROFILE START  -->
                    <div class="dropdown d-md-flex profile-1">
                      <a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex animate">
                        <span>
                          <img src="<?= base_url() ?>assets/images/faces/6.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                        </span>
                        <div class="text-center p-1 d-flex d-lg-none-max">
                          <h6 class="mb-0 ms-1" id="profile-heading">Elena<i class="user-angle ms-1 fa fa-angle-down "></i></h6>
                        </div>
                      </a>

                      <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <a class="dropdown-item" href="<?=base_url()?>admin/Login/profile">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path d="M14.6650391,13.3672485C16.6381226,12.3842773,17.9974365,10.3535767,18,8c0-3.3137207-2.6862793-6-6-6S6,4.6862793,6,8c0,2.3545532,1.3595581,4.3865967,3.3334961,5.3690186c-3.6583862,1.0119019-6.5859375,4.0562134-7.2387695,8.0479736c-0.0002441,0.0013428-0.0004272,0.0026855-0.0006714,0.0040283c-0.0447388,0.272583,0.1399536,0.5297852,0.4125366,0.5745239c0.272522,0.0446777,0.5297241-0.1400146,0.5744629-0.4125366c0.624939-3.8344727,3.6308594-6.8403931,7.465332-7.465332c4.9257812-0.8027954,9.5697632,2.5395508,10.3725586,7.465332C20.9594727,21.8233643,21.1673584,21.9995117,21.4111328,22c0.0281372,0.0001831,0.0562134-0.0021362,0.0839844-0.0068359h0.0001831c0.2723389-0.0458984,0.4558716-0.303833,0.4099731-0.5761719C21.2677002,17.5184937,18.411377,14.3986206,14.6650391,13.3672485z M12,13c-2.7614136,0-5-2.2385864-5-5s2.2385864-5,5-5c2.7600708,0.0032349,4.9967651,2.2399292,5,5C17,10.7614136,14.7614136,13,12,13z" />
                          </svg>
                          Profile
                        </a>

                        <a class="dropdown-item" href="<?=base_url()?>admin/Login/logout">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path d="M10.6523438,16.140625c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546c0,0.276123,0.2238159,0.5,0.499939,0.500061c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l4.4941406-4.4941406c0.000061-0.000061,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481L11.359314,7.1524048c-0.1937256-0.1871338-0.5009155-0.1871338-0.6947021,0c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702L14.2930298,11.5H2.5C2.223877,11.5,2,11.723877,2,12s0.223877,0.5,0.5,0.5h11.7930298L10.6523438,16.140625z M16.4199829,3.0454102C11.4741821,0.5905762,5.4748535,2.6099243,3.0200195,7.5556641C2.8970337,7.8029175,2.9978027,8.1030884,3.2450562,8.2260742C3.4923706,8.3490601,3.7925415,8.248291,3.9155273,8.0010376c0.8737793-1.7612305,2.300354-3.1878052,4.0615845-4.0615845C12.428833,1.730835,17.828064,3.5492554,20.0366821,8.0010376c2.2085571,4.4517212,0.3901367,9.8509521-4.0615845,12.0595703c-4.4517212,2.2085571-9.8510132,0.3901367-12.0595703-4.0615845c-0.1229858-0.2473145-0.4231567-0.3480835-0.6704102-0.2250977c-0.2473145,0.1229858-0.3480835,0.4230957-0.2250977,0.6704102c1.6773682,3.4109497,5.1530762,5.5667114,8.9541016,5.5537109c3.7976685,0.0003662,7.2676392-2.1509399,8.9560547-5.5526733C23.3850098,11.4996338,21.3657227,5.5002441,16.4199829,3.0454102z" />
                          </svg>
                          Log out
                        </a>
                      </div>
                    </div>
                    <!-- Profile end -->

                  </div>
                </div>
              </div>
              <div class="demo-icon nav-link icon fe-spin">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                  <path d="M11.5,7.9c-2.3,0-4,1.9-4,4.2s1.9,4,4.2,4c2.2,0,4-1.9,4-4.1c0,0,0-0.1,0-0.1C15.6,9.7,13.7,7.9,11.5,7.9z M14.6,12.1c0,1.7-1.5,3-3.2,3c-1.7,0-3-1.5-3-3.2c0-1.7,1.5-3,3.2-3C13.3,8.9,14.7,10.3,14.6,12.1C14.6,12,14.6,12.1,14.6,12.1z M20,13.1c-0.5-0.6-0.5-1.5,0-2.1l1.4-1.5c0.1-0.2,0.2-0.4,0.1-0.6l-2.1-3.7c-0.1-0.2-0.3-0.3-0.5-0.2l-2,0.4c-0.8,0.2-1.6-0.3-1.9-1.1l-0.6-1.9C14.2,2.1,14,2,13.8,2H9.5C9.3,2,9.1,2.1,9,2.3L8.4,4.3C8.1,5,7.3,5.5,6.5,5.3l-2-0.4C4.3,4.9,4.1,5,4,5.2L1.9,8.8C1.8,9,1.8,9.2,2,9.4l1.4,1.5c0.5,0.6,0.5,1.5,0,2.1L2,14.6c-0.1,0.2-0.2,0.4-0.1,0.6L4,18.8c0.1,0.2,0.3,0.3,0.5,0.2l2-0.4c0.8-0.2,1.6,0.3,1.9,1.1L9,21.7C9.1,21.9,9.3,22,9.5,22h4.2c0.2,0,0.4-0.1,0.5-0.3l0.6-1.9c0.3-0.8,1.1-1.2,1.9-1.1l2,0.4c0.2,0,0.4-0.1,0.5-0.2l2.1-3.7c0.1-0.2,0.1-0.4-0.1-0.6L20,13.1z M18.6,18l-1.6-0.3c-1.3-0.3-2.6,0.5-3,1.7L13.4,21H9.9l-0.5-1.6c-0.4-1.3-1.7-2-3-1.7L4.7,18l-1.8-3l1.1-1.3c0.9-1,0.9-2.5,0-3.5L2.9,9l1.8-3l1.6,0.3c1.3,0.3,2.6-0.5,3-1.7L9.9,3h3.5l0.5,1.6c0.4,1.3,1.7,2,3,1.7L18.6,6l1.8,3l-1.1,1.3c-0.9,1-0.9,2.5,0,3.5l1.1,1.3L18.6,18z" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /APP-HEADER -->

      <!-- APP-SIDEBAR -->
      <div class="sticky">
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <div class="app-sidebar">
          <div class="side-header">
            <a class="header-brand1" href="#">
              <img src="<?= base_url() ?>assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
              <img src="<?= base_url() ?>assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
              <img src="<?= base_url() ?>assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
              <img src="<?= base_url() ?>assets/images/brand/logo.jpg" class="header-brand-img light-logo1" alt="logo">
            </a><!-- LOGO -->
          </div>
          <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
              </svg>
            </div>
            <ul class="side-menu">
              <li>
                <h3>Menu</h3>
              </li>
              <li class="slide">
                <a class="side-menu__item has-link" data-bs-toggle="slide" href="<?= base_url()?>admin/Login/dashboard">
                  <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                    <path d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z" />
                  </svg>
                  <span class="side-menu__label">Dashboard</span>
                </a>
              </li>

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
              </svg>
            </div>
          </div>
        </div>
      </div> <!-- /APP-SIDEBAR -->

      <!-- APP CONTENT -->
      <!-- Main content start ..... -->
      <!-- APP CONTENT CLOSED-->


</body>

<!-- Mirrored from codeigniter.spruko.com/noa/noa/index by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 05:12:54 GMT -->

</html>
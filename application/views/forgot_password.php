<!doctype html>
<html lang="en" dir="ltr">
	
<!-- Mirrored from codeigniter.spruko.com/noa/noa/forgot-password by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 05:17:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Noa – CodeIgniter Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

		<!-- TITLE -->
		<title>Noa – CodeIgniter Bootstrap5 Admin & Dashboard Template</title>

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/images/brand/favicon.ico" />

        
        <!-- BOOTSTRAP CSS -->
        <link id="style" href="<?= base_url()?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- STYLE CSS -->
        <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet"/>
        <link href="<?= base_url()?>assets/css/skin-modes.css" rel="stylesheet" />

        <!--- FONT-ICONS CSS -->
        <link href="<?= base_url()?>assets/css/icons.css" rel="stylesheet"/>

        
        <!-- INTERNAL Switcher css -->
        <link href="<?= base_url()?>assets/switcher/css/switcher.css" rel="stylesheet" />
        <link href="<?= base_url()?>assets/switcher/demo.css" rel="stylesheet" />

	</head>

	
	<body class="ltr login-img">

	
		<!-- Switcher -->
        			<div class="switcher-wrapper">
				<div class="demo_changer">
					<div class="form_holder sidebar-right1">
						<div class="row">
							<div class="predefined_styles">
								<div class="swichermainleft text-center">
									<div class="p-3 d-grid gap-2">
										<a href="index.html" class="btn ripple btn-primary mt-0">View Demo</a>
										<a href="https://themeforest.net/item/noa-bootstrap-5-admin-dashboard-template/37408518" class="btn ripple btn-secondary">Buy Now</a>
										<a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-pink">Our
											Portfolio</a>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>LTR and RTL VERSIONS</h4>
									<div class="skin-body">
										<div class="switch_section">
											<div class="switch-toggle d-flex">
												<span class="me-auto">LTR Version</span>
												<p class="onoffswitch2"><input type="radio" name="onoffswitch7"
														id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
													<label for="myonoffswitch23" class="onoffswitch2-label"></label>
												</p>
											</div>
											<div class="switch-toggle d-flex mt-2">
												<span class="me-auto">RTL Version</span>
												<p class="onoffswitch2"><input type="radio" name="onoffswitch7"
														id="myonoffswitch24" class="onoffswitch2-checkbox">
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
												<p class="onoffswitch2"><input type="radio" name="onoffswitch1"
														id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
													<label for="myonoffswitch1" class="onoffswitch2-label"></label>
												</p>
											</div>
											<div class="switch-toggle d-flex">
												<span class="me-auto">Light Primary</span>
												<div class="">
													<input class="wpx-30 h-30 input-color-picker color-primary-light"
														value="#8FBD56" id="colorID" oninput="changePrimaryColor()" type="color"
														data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
														data-id7="transparentcolor" name="lightPrimary">
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
												<p class="onoffswitch2"><input type="radio" name="onoffswitch1"
														id="myonoffswitch2" class="onoffswitch2-checkbox">
													<label for="myonoffswitch2" class="onoffswitch2-label"></label>
												</p>
											</div>
											<div class="switch-toggle d-flex mt-2">
												<span class="me-auto">Dark Primary</span>
												<div class="">
													<input class="wpx-30 h-30 input-dark-color-picker color-primary-dark"
														value="#8FBD56" id="darkPrimaryColorID" oninput="darkPrimaryColor()"
														type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
														data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
												</div>
											</div>
											<div class="switch-toggle">
												<span class="">Background Image</span>
												<div class="mt-1">
													<a class="bg-img1" href="javascript:void(0);" onclick="bgImage(this)"><img
															src="<?= base_url()?>assets/images/media/bg-img1.jpg" alt="Bg-Image" id="bgimage1"></a>
													<a class="bg-img2" href="javascript:void(0);" onclick="bgImage(this)"><img
															src="<?= base_url()?>assets/images/media/bg-img2.jpg" alt="Bg-Image" id="bgimage2"></a>
													<a class="bg-img3" href="javascript:void(0);" onclick="bgImage(this)"><img
															src="<?= base_url()?>assets/images/media/bg-img3.jpg" alt="Bg-Image" id="bgimage3"></a>
													<a class="bg-img4" href="javascript:void(0);" onclick="bgImage(this)"><img
															src="<?= base_url()?>assets/images/media/bg-img4.jpg" alt="Bg-Image" id="bgimage4"></a>
												</div>
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
			</div>		<!-- End Switcher -->

		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="<?= base_url()?>assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->
		
		<!-- Switcher Icon-->
		<span class="demo-icon">
			<svg class="fe-spin" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M11.5,7.9c-2.3,0-4,1.9-4,4.2s1.9,4,4.2,4c2.2,0,4-1.9,4-4.1c0,0,0-0.1,0-0.1C15.6,9.7,13.7,7.9,11.5,7.9z M14.6,12.1c0,1.7-1.5,3-3.2,3c-1.7,0-3-1.5-3-3.2c0-1.7,1.5-3,3.2-3C13.3,8.9,14.7,10.3,14.6,12.1C14.6,12,14.6,12.1,14.6,12.1z M20,13.1c-0.5-0.6-0.5-1.5,0-2.1l1.4-1.5c0.1-0.2,0.2-0.4,0.1-0.6l-2.1-3.7c-0.1-0.2-0.3-0.3-0.5-0.2l-2,0.4c-0.8,0.2-1.6-0.3-1.9-1.1l-0.6-1.9C14.2,2.1,14,2,13.8,2H9.5C9.3,2,9.1,2.1,9,2.3L8.4,4.3C8.1,5,7.3,5.5,6.5,5.3l-2-0.4C4.3,4.9,4.1,5,4,5.2L1.9,8.8C1.8,9,1.8,9.2,2,9.4l1.4,1.5c0.5,0.6,0.5,1.5,0,2.1L2,14.6c-0.1,0.2-0.2,0.4-0.1,0.6L4,18.8c0.1,0.2,0.3,0.3,0.5,0.2l2-0.4c0.8-0.2,1.6,0.3,1.9,1.1L9,21.7C9.1,21.9,9.3,22,9.5,22h4.2c0.2,0,0.4-0.1,0.5-0.3l0.6-1.9c0.3-0.8,1.1-1.2,1.9-1.1l2,0.4c0.2,0,0.4-0.1,0.5-0.2l2.1-3.7c0.1-0.2,0.1-0.4-0.1-0.6L20,13.1z M18.6,18l-1.6-0.3c-1.3-0.3-2.6,0.5-3,1.7L13.4,21H9.9l-0.5-1.6c-0.4-1.3-1.7-2-3-1.7L4.7,18l-1.8-3l1.1-1.3c0.9-1,0.9-2.5,0-3.5L2.9,9l1.8-3l1.6,0.3c1.3,0.3,2.6-0.5,3-1.7L9.9,3h3.5l0.5,1.6c0.4,1.3,1.7,2,3,1.7L18.6,6l1.8,3l-1.1,1.3c-0.9,1-0.9,2.5,0,3.5l1.1,1.3L18.6,18z"/></svg>
		</span>

		<!-- PAGE -->
		<div class="page">
		    <div>
				<!-- CONTENT -->
				
				<!-- CONTAINER OPEN -->
				<div class="col mx-auto text-center">
					<a href="index.html">
						<img src="<?= base_url()?>assets/images/brand/logo.png" class="header-brand-img" alt="">
					</a>
				</div>
				<div class="col-12 container-login100">
					<div class="row">
						<div class="col col-login mx-auto">
							<form class="card shadow-none" method="post" action="<?=base_url()?>admin/Login/forgotPassword">
								<div class="card-body">
									<div class="text-center">
										<span class="login100-form-title">
											Forgot Password
										</span>
										<p class="text-muted">Enter the email address registered on your account</p>
									</div>
									<div class="pt-3" id="forgot">
										<div class="form-group">
											<label class="form-label" for="eMail">E-Mail:</label>
											<input class="form-control" id="eMail" name="email" placeholder="Enter Your Email" type="email">
										</div>
										<div class="submit">
											<button type="submit" class="btn btn-primary d-grid">Submit</button>
										</div>
										
									</div>

								</div>
								<div class="card-footer">
									<div class="d-flex justify-content-center my-3">
										<a href="javascript:void(0)" class="social-login  text-center me-4">
											<i class="fa fa-google"></i>
										</a>
										<a href="javascript:void(0)" class="social-login  text-center me-4">
											<i class="fa fa-facebook"></i>
										</a>
										<a href="javascript:void(0)" class="social-login  text-center">
											<i class="fa fa-twitter"></i>
										</a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
																																																																																																																																				
					<!-- CONTENT CLOSED-->
			</div>	
		</div>

		<!-- BUYNOW-MODAL -->
                   
        <div class="modal buynow buynow-btn ">
            <div class="modal-dialog modal-lg " role="document">
                <div class="modal-content modal-content-demo  cover-image"  data-bs-image-src="<?= base_url()?>assets/images/switcher/3.jpg">
                    <div class="modal-body  px-0">
                        <div class="row justify-content-center py-4 px-0 mx-3  Licenses-img">
                        <h3 class=" text-center mb-4 text-white">Licenses</h3>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                            <div class="col-sm-10 col-md-8 col-xl-5 col-lg-5">
                                <div class="card  border-0 regular-license">
                                    <div class="card-body imag-list cover-image"  data-bs-image-src="<?= base_url()?>assets/images/switcher/1.jpg">
                                        <div class="text-white">
                                            <img src="<?= base_url()?>assets/images/switcher/4.png" alt="" class="w-55 free-img">
                                            <div class="text-center">
                                                <div class="tx-26"><span class="font-weight-medium ">Regular</span> Licenses</div>
                                                <p class="fw-semi-bold mb-sm-2 mb-0">You <span class="text-success font-weight-semibold">can't charge </span> from your <br><span class="op-8">End Product  End Users</span> </p>
                                                <div class="dropdown">
                                                    <button class="btn btn-info w-lg dropdown-toggle mt-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Buy Now
                                                    </button>
                                                    <div class="dropdown-menu py-0">
                                                        <a class="dropdown-item  border-bottom px-3" target="_blank" href="https://1.envato.market/6b4dEQ">
                                                            <div>
                                                                <p class="tx-14 mb-0 lh-xs fw-semibold">Buy Now</p><span class="tx-12 op-7 ">6 months support</span>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item   px-3" target="_blank" href="https://1.envato.market/MX956K">
                                                            <div>
                                                                <p class="tx-14 mb-0 lh-xs fw-semibold">Buy Now</p><span class="tx-12 op-7 ">12 months support</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 col-md-8 col-xl-5 col-lg-5">
                                <div class="card border-0 ">
                                    <div class="card-body imag-list cover-image"  data-bs-image-src="<?= base_url()?>assets/images/switcher/2.jpg">
                                        <div class="text-white">
                                            <img src="<?= base_url()?>assets/images/switcher/5.png" alt="" class="w-55 free-img">
                                            <div class="text-center">
                                                <div class="tx-26"><span class="font-weight-medium ">Extended</span> Licenses</div>
                                                <p class="fw-semi-bold mb-sm-2 mb-0">You  <span class="text-warning font-weight-semibold">can charge</span> from your  <br><span class="op-8">End Product  End Users</span></p>
                                                <div class="dropdown">
                                                    <button class="btn btn-info w-lg dropdown-toggle mt-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Buy Now
                                                    </button>
                                                    <div class="dropdown-menu py-0">
                                                        <a class="dropdown-item  border-bottom px-3" target="_blank" href="https://1.envato.market/2r45d0">
                                                            <div>
                                                                <p class="tx-14 mb-0 lh-xs fw-semibold">Buy Now</p><span class="tx-12 op-7 ">6 months support</span>
                                                            </div>
                                                        </a>
                                                        <a class="dropdown-item   px-3" target="_blank" href="https://1.envato.market/7mZyjy">
                                                            <div>
                                                                <p class="tx-14 mb-0 lh-xs fw-semibold">Buy Now</p><span class="tx-12 op-7 ">12 months support</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="license-view">
                                <a href="https://spruko.com/licenses"  target="_blank"  class="modal-title text-center mb-3 tx-14 text-white">View license details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        <!-- END BUYNOW-MODAL -->
		
		<!-- SCRIPTS -->
		       
        <!-- JQUERY JS -->
        <script src="<?= base_url()?>assets/js/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="<?= base_url()?>assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="<?= base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- Perfect SCROLLBAR JS-->
        <script src="<?= base_url()?>assets/plugins/p-scroll/perfect-scrollbar.js"></script>

        <!-- STICKY JS -->
        <script src="<?= base_url()?>assets/js/sticky.js"></script>

        
	
        <!-- COLOR THEME JS -->
        <script src="<?= base_url()?>assets/js/themeColors.js"></script>

        <!-- CUSTOM JS -->
        <script src="<?= base_url()?>assets/js/custom.js"></script>

        <!-- SWITCHER JS -->
        <script src="<?= base_url()?>assets/switcher/js/switcher.js"></script>
		<!-- SCRIPTS CLOSED -->

	</body>

<!-- Mirrored from codeigniter.spruko.com/noa/noa/forgot-password by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 05:17:52 GMT -->
</html>

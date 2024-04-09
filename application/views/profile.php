<?php include 'layout/header.php'; ?>



<div class="app-content main-content mt-0">
	<div class="side-app">
		<!-- CONTAINER -->
		<div class="main-container container-fluid">

			<!-- CONTENT -->

			<!-- PAGE-HEADER -->
			<div class="page-header">
				<div>
					<h1 class="page-title">Profile</h1>
				</div>
				<div class="ms-auto pageheader-btn">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
						<li class="breadcrumb-item active" aria-current="page">Profile</li>
					</ol>
				</div>
			</div>
			<!-- PAGE-HEADER END -->

			<!-- ROW-1 OPEN -->
			<div class="row" id="user-profile">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="row align-items-center">
								<div class="col-lg-12 col-md-12 col-xl-6">
									<div class="d-flex flex-wrap align-items-center">
										<div class="profile-img-main rounded">
											<img src="<?= base_url() ?>assets/images/faces/6.jpg" alt="img" class="m-0 p-1 rounded hrem-6">
										</div>
										<div class="ms-4">
											<h4>Elena Gilbert</h4>
											<!-- <p class="text-muted mb-2">Member Since: November 2020</p> -->

										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="border-top">
							<div class="wideget-user-tab">
								<div class="tab-menu-heading">
									<div class="tabs-menu1">
										<ul class="nav">
											<li><a href="#profileMain" class="active show" data-bs-toggle="tab">Edit Profile</a></li>
											<li><a href="#changePassword" data-bs-toggle="tab">Change Password</a></li>


										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-content">
						<div class="tab-pane active show" id="profileMain">
							<div class="card">
								<div class="card-body border-0">
									<form method="post" action="<?php echo base_url()?>admin/Login/updateProfile" class="form-horizontal">
								
										<div class="row mb-4">
											<p class="mb-4 text-17">Personal Information</p>
											<input type="hidden" class="form-control" id="id"  name ="id" value="<?= $user_login ['userId']?> ">
											<div class="col-md-12 col-lg-12 col-xl-6">
											<div class="form-group">
													<label for="username" class="form-label">User Name</label>
													<input type="text" class="form-control" id="username"  name ="name" value="<?= $user_login ['userName']?> ">
												</div>
											</div>
											<div class="col-md-12 col-lg-12 col-xl-6">
												<div class="form-group">
													<label for="firstname" class="form-label">Email</label>
													<input type="text" class="form-control" id="firstname" name="email" placeholder="First Name" value="<?= $user_login ['email']?>">
												</div>
											</div>
											<div class="col-md-12 col-lg-12 col-xl-6">
												<div class="form-group">
													<label for="lastname" class="form-label">Address</label>
													<input type="text" class="form-control" id="lastname" name="" placeholder="" value="">
												</div>
											</div>
											<div class="col-md-12 col-lg-12 col-xl-6">
												<div class="form-group">
													<label for="nickname" class="form-label">Phone</label>
													<input type="text" class="form-control" id="nickname" name="" placeholder="" value="">
												</div>
											</div>
											<div class="form-group float-end">
												<div class="row row-sm">
													<div class="col-md-12  col-xl-6">
														<button type="submit" class="btn btn-info my-1">Submit</button>

													</div>
												</div>
											</div>
										</div>
									</form>
								</div>

							</div>
						</div>
						<div class="tab-pane" id="changePassword">
							<div class="card">
								<div class="card-body">
									<form class="form-horizontal" data-select2-id="11">
										<div class="mb-4 main-content-label">Change Password</div>
										<div class="form-group ">
											<div class="row row-sm">
												<div class="col-md-3">
													<label for="userName" class="form-label">Old Password</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control" id="userName" placeholder="User Name" value="Elena Gilbert">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row row-sm">
												<div class="col-md-3">
													<label for="eMail" class="form-label">New Password</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control" id="eMail" placeholder="Email" value="info@elenagilbert.in">
												</div>
											</div>
										</div>

										<div class="form-group ">
											<div class="row row-sm">
												<div class="col-md-3">
													<label for="eMail" class="form-label">Confirm Password</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control" id="eMail" placeholder="Email" value="info@elenagilbert.in">
												</div>
											</div>
										</div>

										<div class="form-group float-end">
											<button type="submit" class="btn btn-cyan  my-1">Submit</button>
										</div>
									</form>

								</div>


							</div>
						</div>




					</div>
				</div><!-- COL-END -->
			</div>
			<!-- ROW-1 CLOSED -->

			<!-- CONTENT CLOSED-->

		</div>
	</div>
	<!-- CONTAINER CLOSED -->
</div>

</div>
</div>

<?php include 'layout/footer.php'; ?>
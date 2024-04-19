<?php include 'layout/header.php'; ?>


<div class="main-container container-fluid">
	<div class="row">
		<div class="col-xxl-3 col-xl-4 col-lg-5 col-md-5">
			<div class="card text-center shadow-none border profile-cover__img">
				<div class="card-body">
					<div class="profile-img-1">
						<img src="<?= base_url() ?>assets/images/users/18.jpg" alt="img" id="profile-img">
						<a aria-label="anchor" href="#" class="rounded-pill avatar-icons bg-primary tx-fixed-white p-2">
							<input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
							<i class="fe fe-camera lh-base"></i>
						</a>
					</div>
					<div class="profile-img-content text-dark my-2">
						<div>
							<h5 class="mb-0"><?= $user_login['name']?></h5>
							<!-- <p class="text-muted mb-0">UI Developer</p> -->
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="col-xxl-9 col-xl-8 col-lg-7 col-md-7">
			<div class="card">
				<div class="card-header">
					<ul class="nav nav-pills gap-2" id="pills-tab" role="tablist">

						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="editprofile-tab" data-bs-toggle="pill" data-bs-target="#editprofile" type="button" role="tab" aria-controls="editprofile" aria-selected="false">Edit Profile</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="changepassword-tab" data-bs-toggle="pill" data-bs-target="#changepassword" type="button" role="tab" aria-controls="changepassword" aria-selected="false">Change Password</button>
						</li>

					</ul>
				</div>
				<div class="card-body p-0">
					<div class="tab-content" id="pills-tabContent">

						<div class="tab-pane fade show active" id="editprofile">
							<div class="row">
								<div class="col-xl-12">
									<form method="post" action="<?= base_url() ?>admin/Login/updateProfile">
										<div class="">
											<div class="p-5">
												<div class="mb-4 main-content-label">Personal Information</div>

												<div class="form-horizontal">

													<div class="form-group ">
														<div class="row">
															<div class="col-md-2">
																<label class="form-label">Name</label>
															</div>
															<div class="col-md-10">
																<input type="text" class="form-control" name="name" value="<?= $user_login['name'] ?>">
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row">
															<div class="col-md-2">
																<label class="form-label"> Email</label>
															</div>
															<div class="col-md-10">
																<input type="text" class="form-control" name="email" value="<?= $user_login['email'] ?>">
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row">
															<div class="col-md-2">
																<label class="form-label">Address</label>
															</div>
															<div class="col-md-10">
																<input type="text" class="form-control" name="address" value="<?= $user_login['address'] ?>">
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row">
															<div class="col-md-2">
																<label class="form-label">Mobile</label>
															</div>
															<div class="col-md-10">
																<input type="text" class="form-control" name="mobile" value="<?= $user_login['mobile'] ?>">
															</div>
														</div>
													</div>
									</form>
								</div>

							</div>
							<div class="card-footer d-flex justify-content-end">
								<button type="submit" class="btn ripple btn-primary w-sm">Save</button>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<div class="tab-pane fade show " id="changepassword">
				<div class="row">
					<div class="col-xl-12">
					<form method="post" action="<?= base_url() ?>admin/Login/changePassword">
						<div class="">
							<div class="p-5">
								<div class="mb-4 main-content-label">Change Password</div>
								<div class="form-horizontal">
				
									<div class="form-group ">
										<div class="row">
											<div class="col-md-2">
												<label class="form-label">Old Password</label>
											</div>
											<div class="col-md-10">
												<input type="password" class="form-control" name="old_password">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-2">
												<label class="form-label">New Password</label>
											</div>
											<div class="col-md-10">
												<input type="password" class="form-control" name="new_password">
											</div>
										</div>
									</div>
									<div class="form-group ">
										<div class="row">
											<div class="col-md-2">
												<label class="form-label">Confirm Password</label>
											</div>
											<div class="col-md-10">
												<input type="password" class="form-control"  name="confirm_password">
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="card-footer d-flex justify-content-end">
								<button type="submit" class="btn ripple btn-primary w-sm">Save</button>
							</div>
						</div>
</form>
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


<?php include 'layout/footer.php'; ?>
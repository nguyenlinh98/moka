<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			User Profile
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Examples</a></li>
			<li class="active">User profile</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<div class="row">
			<div class="col-md-3">

				<!-- Profile Image -->
				<div class="box box-primary">
					<div class="box-body box-profile">
						<img class="profile-user-img img-responsive img-circle" src="../img/user4-128x128.jpg" alt="User profile picture">

						<h3 class="profile-username text-center">Nguyễn Linh</h3>

						<p class="text-muted text-center">Software Engineer</p>

						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">
								<b>Followers</b> <a class="pull-right">1,322</a>
							</li>
							<li class="list-group-item">
								<b>Following</b> <a class="pull-right">543</a>
							</li>
							<li class="list-group-item">
								<b>Friends</b> <a class="pull-right">13,287</a>
							</li>
						</ul>

						<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-9">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li><a href="#activity" data-toggle="tab">quản lý thông tin tài khoản</a></li>
						<li class="active"><a href="#timeline" data-toggle="tab">Sửa thông tin tài khoản</a></li>
					</ul>
					<div class="tab-content">
						<div class="active tab-pane">
							<!-- Post -->
							<div class="row">
								<div class="col-md-12">
									<div class="box box-danger">
										<div class="box-header">
											<h3 class="box-title">Thông tin tài khoản</h3>
										</div>
										<div class="box-body">
											<!-- Date dd/mm/yyyy -->
											<div class="form-group">
												<label>Họ tên:</label>

												<div class="input-group">
													<div class="input-group-addon">
														<i class="fa fa-user"></i>
													</div>
													<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
												</div>
												<!-- /.input group -->
											</div>
											<!-- /.form group -->

											<!-- Date mm/dd/yyyy -->
											<div class="form-group">
												<div class="input-group">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
												</div>
												<!-- /.input group -->
											</div>
											<!-- /.form group -->

											<!-- phone mask -->
											<div class="form-group">
												<label>Số điện thoại:</label>

												<div class="input-group">
													<div class="input-group-addon">
														<i class="fa fa-phone"></i>
													</div>
													<input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
												</div>
												<!-- /.input group -->
											</div>
											<!-- /.form group -->

											<!-- IP mask -->
											<div class="form-group">
												<label>Email:</label>

												<div class="input-group">
													<div class="input-group-addon">
														<i class="fa fa-envelope"></i>
													</div>
													<input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<div class="tab-content" id="timeline">
						<div class="active tab-pane">
							<!-- Post -->
							<div class="box box-primary">
								<div class="box-header with-border">
									<h3 class="box-title">Edit</h3>
								</div>
								<!-- /.box-header -->
								<!-- form start -->
								<form role="form">
									<div class="box-body">
										<div class="form-group">
											<label for="exampleInputEmail1">Họ tên:</label>
											<input type="text" class="form-control" id="name" placeholder="Enter name">
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Email address</label>
											<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Password</label>
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										</div>
										<div class="form-group">
											<label for="exampleInputFile">File input</label>
											<input type="file" id="exampleInputFile">

											<p class="help-block">Example block-level help text here.</p>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox"> Check me out
											</label>
										</div>
									</div>
									<!-- /.box-body -->
									<div class="box-footer">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- /.nav-tabs-custom -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
	</section>
	<!-- /.content -->
</div>

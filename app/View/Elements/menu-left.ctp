<aside class="main-sidebar">

	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">

		<!-- Sidebar user panel (optional) -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="../../img/user2-160x160.jpg" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Linh dev</p>
				<!-- Status -->
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form (Optional) -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Tìm kiếm...">
				<span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
			</div>
		</form>
		<!-- /.search form -->

		<!-- Sidebar Menu -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">Menu</li>
			<!-- Optionally, you can add icons to the links -->
			<li><a href="<?php echo Router::url( '/pages/' ) ?>"><i class="fa fa-user-circle"></i><span>Quản lý tài khoản cá nhân</span></a></li>
			<li class="treeview">
				<a href="register.html"><i class="fa fa-users"></i> <span>Quản lý user</span>
					<span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php  echo Router::url('/user/add'); ?>">Thêm tài khoản</a></li>
					<li><a href="<?php  echo Router::url('/user'); ?>">Danh sách tài khoản</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-file"></i> <span>Quản lý bài viết</span>
					<span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#">Thêm bài viết</a></li>
					<li><a href="#">Danh sách bài viết</a></li>
				</ul>
			</li>
		</ul>
		<!-- /.sidebar-menu -->
	</section>
	<!-- /.sidebar -->
</aside>

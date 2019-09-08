<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
		<script type="text/javascript"
				src="http://maps.google.com/maps/api/js?language=ja&region=JP&key=AIzaSyCMjDhpsWSRu3IQEX01hxC2YcAYywECw2Y"></script>
	</title>
	<?php
//	echo $this->Html->meta('icon');

	echo $this->Html->css('cake.generic');
	echo $this->Html->css('AdminLTE.min');
	echo $this->Html->css('main');
	echo $this->Html->css(array('/components/bower_components/bootstrap/dist/css/bootstrap.min',
		'/components/bower_components/font-awesome/css/font-awesome.min',
		'/components/bower_components/Ionicons/css/ionicons.min',
		'/components/dist/css/AdminLTE.min',
		'/components/bower_components/font-awesome/css/font-awesome.min',
		'/components/bower_components/fullcalendar/dist/fullcalendar.min',
		'/components/bower_components/fullcalendar/dist/fullcalendar.print.min',
		'/components/bower_components/datatables.net-bs/css/dataTables.bootstrap.min',
		'/components/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min',
		'/components/bower_components/bootstrap-daterangepicker/daterangepicker',
		'/components/dist/css/AdminLTE.min',
		'/components/dist/css/skins/_all-skins.min',
		'/components/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min'
	));
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	echo $this->Html->script(array('/components/bower_components/jquery/dist/jquery.min',
		'/components/bower_components/bootstrap/dist/js/bootstrap.min',
		'/components/bower_components/jquery-ui/jquery-ui.min',
		'/components/bower_components/fastclick/lib/fastclick',
		'/components/dist/js/adminlte.min',
		'/components/dist/js/demo',
		'/components/bower_components/moment/moment',
		'/components/bower_components/fullcalendar/dist/fullcalendar.min',
		'/components/bower_components/ckeditor/ckeditor',
		'/components/bower_components/datatables.net/js/jquery.dataTables.min',
		'/components/bower_components/datatables.net-bs/js/dataTables.bootstrap.min',
		'/components/bower_components/jquery-slimscroll/jquery.slimscroll.min',
	));
	?>
</head>
<body>
<div id="container">
		<header class="main-header">
			<!-- Logo -->
			<a href="../index2.html" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>A</b>LT</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>MO</b>CA</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown messages-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-envelope-o"></i>
								<span class="label label-success">4</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 4 messages</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li><!-- start message -->
											<a href="#">
												<div class="pull-left">
													<?php
														 echo $this->Html->image('user2-160x160.jpg');
													?>
												</div>
												<h4>
													Support Team
													<small><i class="fa fa-clock-o"></i> 5 mins</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<!-- end message -->
										<li>
											<a href="#">
												<div class="pull-left">
													<?php echo $this->Html->image('user3-128x128.jpg');?>
												</div>
												<h4>
													AdminLTE Design Team
													<small><i class="fa fa-clock-o"></i> 2 hours</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="pull-left">
													<?php echo $this->Html->image('user3-128x128.jpg');?>
												</div>
												<h4>
													Developers
													<small><i class="fa fa-clock-o"></i> Today</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="pull-left">
													<?php echo $this->Html->image('user3-128x128.jpg');?>
												</div>
												<h4>
													Sales Department
													<small><i class="fa fa-clock-o"></i> Yesterday</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="pull-left">
													<?php echo $this->Html->image('user3-128x128.jpg');?>
												</div>
												<h4>
													Reviewers
													<small><i class="fa fa-clock-o"></i> 2 days</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
									</ul>
								</li>
								<li class="footer"><a href="#">See All Messages</a></li>
							</ul>
						</li>
						<!-- Notifications: style can be found in dropdown.less -->
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="label label-warning">10</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 10 notifications</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li>
											<a href="#">
												<i class="fa fa-users text-aqua"></i> 5 new members joined today
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
												page and may cause design problems
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-users text-red"></i> 5 new members joined
											</a>
										</li>

										<li>
											<a href="#">
												<i class="fa fa-shopping-cart text-green"></i> 25 sales made
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-user text-red"></i> You changed your username
											</a>
										</li>
									</ul>
								</li>
								<li class="footer"><a href="#">View all</a></li>
							</ul>
						</li>
						<!-- Tasks: style can be found in dropdown.less -->
						<li class="dropdown tasks-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-flag-o"></i>
								<span class="label label-danger">9</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 9 tasks</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li><!-- Task item -->
											<a href="#">
												<h3>
													Design some buttons
													<small class="pull-right">20%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
														 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">20% Complete</span>
													</div>
												</div>
											</a>
										</li>
										<!-- end task item -->
										<li><!-- Task item -->
											<a href="#">
												<h3>
													Create a nice theme
													<small class="pull-right">40%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
														 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">40% Complete</span>
													</div>
												</div>
											</a>
										</li>
										<!-- end task item -->
										<li><!-- Task item -->
											<a href="#">
												<h3>
													Some task I need to do
													<small class="pull-right">60%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
														 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">60% Complete</span>
													</div>
												</div>
											</a>
										</li>
										<!-- end task item -->
										<li><!-- Task item -->
											<a href="#">
												<h3>
													Make beautiful transitions
													<small class="pull-right">80%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
														 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">80% Complete</span>
													</div>
												</div>
											</a>
										</li>
										<!-- end task item -->
									</ul>
								</li>
								<li class="footer">
									<a href="#">View all tasks</a>
								</li>
							</ul>
						</li>
						<li class="dropdown tasks-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-sign-out"></i>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header text-center">
									<img src="../img/user2-160x160.jpg" class="img-circle" alt="User Image">

									<p>
										Nguyễn Linh - Web Developer
										<small>Member since Nov. 2012</small>
									</p>
								</li>
								<!-- Menu Body -->
								<li class="user-body">
									<div class="row">
										<div class="col-xs-4 text-center">
											<a href="#">Followers</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Sales</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Friends</a>
										</div>
									</div>
									<!-- /.row -->
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										<a href="profile.html" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="login.html" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header">
									<img src="../../img/user2-160x160.jpg" class="img-circle" alt="User Image">

									<p>
										Nguyễn Linh - Web Developer
										<small>Member since Nov. 2012</small>
									</p>
								</li>
								<!-- Menu Body -->
								<li class="user-body">
									<div class="row">
										<div class="col-xs-4 text-center">
											<a href="#">Followers</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Sales</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Friends</a>
										</div>
									</div>
									<!-- /.row -->
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										<a href="profile.html" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="login.html" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
	<div id="content">
		<?php echo $this->element('menu-left'); ?>
		<?php echo $this->Flash->render(); ?>

		<?php echo $this->fetch('content'); ?>
	</div>
	<div id="footer">
		<?php echo $this->Html->link(
			$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
			'https://cakephp.org/',
			array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
		);
		?>
		<p>
			<?php echo $cakeVersion; ?>
		</p>
	</div>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>

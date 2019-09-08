
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Tạo bài viết mới
			<small>add post</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">post</a></li>
			<li class="active">add</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header">
						<!-- tools box -->
						<div class="pull-right box-tools">
							<button type="button" class="btn btn-info btn-sm" data-widget="collapse"
									data-toggle="tooltip"
									title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
									title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
						<!-- /. tools -->
					</div>
					<!-- /.box-header -->
					<div class="box-body pad">
							<?php echo $this->Form->create('User'); ?>
							<fieldset>
								<legend><?php echo __('Thêm tài khoản'); ?></legend>
								<?php echo $this->Form->input('username');
								echo $this->Form->input('password');
								echo $this->Form->input('email');
								echo $this->Form->input('role', array(
									'options' => array('admin' => 'Admin', 'writer' => 'Writer','reader'=>'Reader')
								));
								?>
							</fieldset>
							<?php echo $this->Form->end(__('Submit')); ?>
					</div>
				</div>
			</div>
			<!-- /.col-->
		</div>
		<!-- ./row -->
	</section>
	<!-- /.content -->
</div>

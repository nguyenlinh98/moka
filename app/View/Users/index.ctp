<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Danh sách User
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Tables</a></li>
			<li class="active">Data tables</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title"></h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<?php
						if ($users == null) {
							echo "Empty Data";
						} else {
							?>
							<form id="formsearch" action="" method="get" class="form-inline">
								<label>Search:</label>
								<input type="text" name="username" class="form-control">
								<button type="submit" class="btn btn-primary" id="btn_search">Search</button>
								<!--	<span class="error">* --><?php //echo $nameErr;?><!--</span>-->
							</form>
							<br>
							<table class="table table-bordered table-striped " >
								<thead>
								<tr >
									<th>Mã</th>
									<th>Họ tên</th>
									<th>Email</th>
									<th>Role</th>
									<th>Created</th>
									<th>Modified</th>
									<th colspan="2">Hành động</th>
								</tr>
								</thead>
								<tbody>
								<?php
								foreach ($users as $user) {
									?>
									<tr>
										<td><?php echo $user['User']['id'];?></td>
										<td><?php echo $user['User']['username'];?></td>
										<td><?php echo $user['User']['email'];?></td>
										<td><?php echo $user['User']['role'];?></td>
										<td><?php echo $user['User']['created'];?></td>
										<td><?php echo $user['User']['modified'];?></td>
										<td>
											<button type="submit" class="btn btn-success">Sửa bài viết</button>
										</td>
										<td>
											<?php
											echo $this->Form->postLink(
												'delete',
												array('action' => 'delete', $user['User']['id']),
													array('confirm'=>'bạn có chắc muốn xóa!')
											);
											?>
										</td>
									</tr>
									<?php
								}
								?>
								<tfoot>
								<tr>
									<th>Mã</th>
									<th>Họ tên</th>
									<th>Email</th>
									<th>Role</th>
									<th>Created</th>
									<th>Modified</th>
									<th colspan="2">Hành động</th>
								</tr>
								</tfoot>
							</table>
							<?php
						}
						?>
						<?php
						echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled')); //Hiện thj nút Previous
						echo " | ".$this->Paginator->numbers()." | "; //Hiển thi các số phân trang
						echo $this->Paginator->next(' Next »', null, null, array('class' => 'disabled')); //Hiển thị nút next
						echo " Page ".$this->Paginator->counter(); // Hiển thị tổng trang
						?>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>


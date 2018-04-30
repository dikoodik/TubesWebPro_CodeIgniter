<!DOCTYPE html>
<html>
<head>
	<title>Dasboard Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>asset/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/aidat e/aidate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/aidsition/css/aidsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dasboard.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>
	<?php
	if ($this->session->flashdata('alert')=='sukses_insert'){
		echo "<script>alert('Sukses Insert Data');</script>";
	}else if ($this->session->flashdata('alert')=='sukses_edit'){
		echo "<script>alert('Sukses Edit Data');</script>";
	}else if ($this->session->flashdata('alert')=='sukses_hapus'){
		echo "<script>alert('Sukses Hapus Data');</script>";
	}
	?>
	<button class="btn btn-md btn-primary" onclick="location.href = '<?php echo site_url('admin_C/logout') ?>';" >Logout</button>

	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'welcome')" id="defaultOpen">Welcome</button>
		<button class="tablinks" onclick="openCity(event, 'Users')">Users</button>
		<button class="tablinks" onclick="openCity(event, 'Order')">Order</button>
		<button class="tablinks" onclick="openCity(event, 'Shoes')">Shoes</button>
		<button class="tablinks" onclick="openCity(event, 'Stroller')">Stroller</button>
		<button class="tablinks" onclick="openCity(event, 'Carseat')">Carseat</button>
		<button class="tablinks" onclick="openCity(event, 'Toys')">Toys</button>
		<button class="tablinks" onclick="openCity(event, 'Clothes')">Clothes</button>
	</div>

	<div id="welcome" class="tabcontent">
		<h3>Welcome to admin page!</h3>
		<p>Hello ... !</p>
	</div>

	<div id="Users" class="tabcontent">
		<h2 style="text-align: center;margin-bottom: 30px"> Data User BabyFirst</h2>
		<div class="container" style="margin-top: 20px;padding-left: 25px">
		</div>
		<div class="container" style="margin-top: 20px">
			<div class="col-md-12">
				<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>NO</th>
							<th>ID</th>
							<th>Username</th>
							<th>Email</th>
							<th>Password</th>
							<th>Name</th>
							<th>Address</th>
							<th>Image</th>
							<th> <center>Action</center></th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no=1;
						foreach ($users as $data) {
							?>
							<tr>
								<td><?php echo $no++;?></td>
								<td><?php echo $data->ID;?></td>
								<td><?php echo $data->username; ?></td>
								<td><?php echo $data->email; ?></td>
								<td><?php echo $data->password; ?></td>
								<td><?php echo $data->name; ?></td>	
								<td><?php echo $data->address; ?></td>
								<td><?php echo $data->image; ?></td>				
								<td style="text-align: center;">
									<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapususer<?php echo $data->ID; ?>"><i class="glyphicon glyphicon-trash"></i></button>
								</td>
							</tr>

							<div id="hapususer<?php echo $data->ID; ?>" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"></button>
											<h4 class="modal-title">Anda Ingin Menghapus?</h4>
											<?php echo form_open("homeadmin_C/hapususers"); ?>
											<input type="hidden" name="id" class="form-control" value="<?php echo $data->ID ?>" id="id" required>
										</div>
										<div class="modal-footer">
											<button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
											<input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
										</div>
										<?php echo form_close(); ?>
									</div>
								</div>
							</div>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="Order" class="tabcontent">
			<h3>Tokyo</h3>
			<p>Tokyo is the capital of Japan.</p>
		</div>

		<div id="Shoes" class="tabcontent">
			<h2 style="text-align: center;margin-bottom: 30px">Shoes</h2>
			<div class="container" style="margin-top: 20px;padding-left: 25px">
				<div class="col-md-12">
					<button class="btn btn-md btn-primary" data-toggle="modal" data-target="#tambahshoes">Add</button>
					<div id="tambahshoes" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"></button>
									<h4 class="modal-title">Add Shoes</h4>
								</div>
								<?php echo form_open("homeadmin_C/addshoes"); ?>
								<div class="modal-body">
									<div class="form-group">
										<label class="control-label" for="id">ID</label>
										<input type="text" name="id" class="form-control" id="id" required>
									</div>
									<div class="form-group">
										<label class="control-label" for="name">Name</label>
										<input type="text" name="name" class="form-control" id="name" required>
									</div>
									<div class="form-group">
										<label class="control-label" for="price">Price</label>
										<input type="text" name="price" class="form-control" id="price" required>
									</div>
									<div class="form-group">
										<label class="control-label" for="summary">Summary</label>
										<input type="summary" name="summary" class="form-control" id="summary" required>
									</div>
									<div class="form-group">
										<label class="control-label" for="stock">Stock</label>
										<input type="text" name="stock" class="form-control" id="stock" required>
									</div>
									<div class="form-group">
										<label class="control-label" for="img">Img</label>
										<input type="text" name="img" class="form-control" id="img" required>
									</div>
								</div>
								<div class="modal-footer">
									<button type="reset" class="btn btn-danger">Reset</button>
									<input type="submit" class="btn btn-primary" name="tambah" value="Simpan">
								</div>
								<?php echo form_close(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container" style="margin-top: 20px">
				<div class="col-md-12">
					<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th> No</th>
								<th> ID</th>
								<th> Name </th>
								<th> Price</th>
								<th> Summary</th>
								<th> Stock</th>
								<th> Category</th>
								<th> Img</th>
								<th> <center>Action</center></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no=1;
							foreach ($shoes as $data) {
								?>
								<tr>
									<td><?php echo $no++;?></td>
									<td><?php echo $data->ID;?></td>
									<td><?php echo $data->name; ?></td>
									<td><?php echo $data->price; ?></td>
									<td><?php echo $data->summary; ?></td>
									<td><?php echo $data->stock; ?></td>
									<td><?php echo $data->Category; ?></td>
									<td><?php echo $data->img; ?></td>			
									<td style="text-align: center;">
										<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editshoes<?php echo $data->ID ?>"><i class="glyphicon glyphicon-pencil"></i></button>
										<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapusshoes<?php echo $data->ID ?>"><i class="glyphicon glyphicon-trash"></i></button>
									</td>
								</tr>
								<div id="editshoes<?php echo $data->ID ?>" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"></button>
												<h4 class="modal-title">Edit Shoes</h4>
											</div>
											<?php echo form_open("homeadmin_C/editshoes"); ?>
											<div class="modal-body">
												<div class="form-group">
													<label class="control-label" for="id">ID</label>
													<input type="text" class="form-control" disabled value="<?php echo $data->ID; ?>" id="id">

												</div>
												<div class="form-group">
													<label class="control-label" for="name">Name</label>
													<input type="text" name="name" class="form-control" value="<?php echo $data->name ?>" id="name" required>
												</div>
												<div class="form-group">
													<label class="control-label" for="price">Price</label>
													<input type="text" name="price" class="form-control" value="<?php echo $data->price ?>" id="price" required>
												</div>
												<div class="form-group">
													<label class="control-label" for="summary">Summary</label>
													<input type="text" name="summary" class="form-control" value="<?php echo $data->summary ?>" id="summary" required>
												</div>
												<div class="form-group">
													<label class="control-label" for="stock">Stock</label>
													<input type="text" name="stock" class="form-control" value="<?php echo $data->stock ?>" id="stock" required>
												</div>
												<div class="form-group">
													<label class="control-label" for="img">Image</label>
													<input type="text" name="img" class="form-control" value="<?php echo $data->img; ?>" id="img" required>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
												<input type="submit" class="btn btn-primary" name="edit" value="Edit">
											</div>
											<?php echo form_close(); ?>
										</div>
									</div>
								</div>

								<div id="hapusshoes<?php echo $data->ID; ?>" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"></button>
												<h4 class="modal-title">Anda Ingin Menghapus?</h4>
												<?php echo form_open("homeadmin_C/hapusshoes"); ?>
												<input type="hidden" name="id" class="form-control" value="<?php echo $data->ID ?>" id="id" required>
											</div>
											<div class="modal-footer">
												<button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
												<input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
											</div>
											<?php echo form_close(); ?>
										</div>
									</div>
								</div>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div id="Stroller" class="tabcontent">
				<h2 style="text-align: center;margin-bottom: 30px">Stroller</h2>
				<div class="container" style="margin-top: 20px;padding-left: 25px">
					<div class="col-md-12">
						<button class="btn btn-md btn-primary" data-toggle="modal" data-target="#tambahstroller">Add</button>
						<div id="tambahstroller" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"></button>
										<h4 class="modal-title">Add Stroller</h4>
									</div>
									<?php echo form_open("homeadmin_C/addstroller"); ?>
									<div class="modal-body">
										<div class="form-group">
											<label class="control-label" for="id">ID</label>
											<input type="text" name="id" class="form-control" id="id" required>
										</div>
										<div class="form-group">
											<label class="control-label" for="name">Name</label>
											<input type="text" name="name" class="form-control" id="name" required>
										</div>
										<div class="form-group">
											<label class="control-label" for="price">Price</label>
											<input type="text" name="price" class="form-control" id="price" required>
										</div>
										<div class="form-group">
											<label class="control-label" for="summary">Summary</label>
											<input type="summary" name="summary" class="form-control" id="summary" required>
										</div>
										<div class="form-group">
											<label class="control-label" for="stock">Stock</label>
											<input type="text" name="stock" class="form-control" id="stock" required>
										</div>
										<div class="form-group">
											<label class="control-label" for="img">Img</label>
											<input type="text" name="img" class="form-control" id="img" required>
										</div>
									</div>
									<div class="modal-footer">
										<button type="reset" class="btn btn-danger">Reset</button>
										<input type="submit" class="btn btn-primary" name="tambah" value="Simpan">
									</div>
									<?php echo form_close(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container" style="margin-top: 20px">
					<div class="col-md-12">
						<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th> No</th>
									<th> ID</th>
									<th> Name </th>
									<th> Price</th>
									<th> Summary</th>
									<th> Stock</th>
									<th> Category</th>
									<th> Img</th>
									<th> <center>Action</center></th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no=1;
								foreach ($stroller as $data) {
									?>
									<tr>
										<td><?php echo $no++;?></td>
										<td><?php echo $data->ID;?></td>
										<td><?php echo $data->name; ?></td>
										<td><?php echo $data->price; ?></td>
										<td><?php echo $data->summary; ?></td>
										<td><?php echo $data->stock; ?></td>
										<td><?php echo $data->Category; ?></td>
										<td><?php echo $data->img; ?></td>			
										<td style="text-align: center;">
											<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editstroller<?php echo $data->ID ?>"><i class="glyphicon glyphicon-pencil"></i></button>
											<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapusstroller<?php echo $data->ID ?>"><i class="glyphicon glyphicon-trash"></i></button>
										</td>
									</tr>
									<div id="editstroller<?php echo $data->ID ?>" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"></button>
													<h4 class="modal-title">Edit Shoes</h4>
												</div>
												<?php echo form_open("homeadmin_C/editstroller"); ?>
												<div class="modal-body">
													<div class="form-group">
														<label class="control-label" for="id">ID</label>
														<input type="text" class="form-control" disabled value="<?php echo $data->ID; ?>" id="id">
													</div>
													<div class="form-group">
														<label class="control-label" for="name">Name</label>
														<input type="text" name="name" class="form-control" value="<?php echo $data->name ?>" id="name" required>
													</div>
													<div class="form-group">
														<label class="control-label" for="price">Price</label>
														<input type="text" name="price" class="form-control" value="<?php echo $data->price ?>" id="price" required>
													</div>
													<div class="form-group">
														<label class="control-label" for="summary">Summary</label>
														<input type="text" name="summary" class="form-control" value="<?php echo $data->summary ?>" id="summary" required>
													</div>
													<div class="form-group">
														<label class="control-label" for="stock">Stock</label>
														<input type="text" name="stock" class="form-control" value="<?php echo $data->stock ?>" id="stock" required>
													</div>
													<div class="form-group">
														<label class="control-label" for="img">Image</label>
														<input type="text" name="img" class="form-control" value="<?php echo $data->img; ?>" id="img" required>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
													<input type="submit" class="btn btn-primary" name="edit" value="Edit">
												</div>
												<?php echo form_close(); ?>
											</div>
										</div>
									</div>

									<div id="hapusstroller<?php echo $data->ID; ?>" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"></button>
													<h4 class="modal-title">Anda Ingin Menghapus?</h4>
													<?php echo form_open("homeadmin_C/hapusstroller"); ?>
													<input type="hidden" name="id" class="form-control" value="<?php echo $data->ID ?>" id="id" required>
												</div>
												<div class="modal-footer">
													<button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
													<input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
												</div>
												<?php echo form_close(); ?>
											</div>
										</div>
									</div>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div id="Carseat" class="tabcontent">
					<h2 style="text-align: center;margin-bottom: 30px">Carseat</h2>
					<div class="container" style="margin-top: 20px;padding-left: 25px">
						<div class="col-md-12">
							<button class="btn btn-md btn-primary" data-toggle="modal" data-target="#tambahcarseat">Add</button>
							<div id="tambahcarseat" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"></button>
											<h4 class="modal-title">Add Carseat</h4>
										</div>
										<?php echo form_open("homeadmin_C/addcarseat"); ?>
										<div class="modal-body">
											<div class="form-group">
												<label class="control-label" for="id">ID</label>
												<input type="text" name="id" class="form-control" id="id" required>
											</div>
											<div class="form-group">
												<label class="control-label" for="name">Name</label>
												<input type="text" name="name" class="form-control" id="name" required>
											</div>
											<div class="form-group">
												<label class="control-label" for="price">Price</label>
												<input type="text" name="price" class="form-control" id="price" required>
											</div>
											<div class="form-group">
												<label class="control-label" for="summary">Summary</label>
												<input type="summary" name="summary" class="form-control" id="summary" required>
											</div>
											<div class="form-group">
												<label class="control-label" for="stock">Stock</label>
												<input type="text" name="stock" class="form-control" id="stock" required>
											</div>
											<div class="form-group">
												<label class="control-label" for="img">Img</label>
												<input type="text" name="img" class="form-control" id="img" required>
											</div>
										</div>
										<div class="modal-footer">
											<button type="reset" class="btn btn-danger">Reset</button>
											<input type="submit" class="btn btn-primary" name="tambah" value="Simpan">
										</div>
										<?php echo form_close(); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container" style="margin-top: 20px">
						<div class="col-md-12">
							<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th> No</th>
										<th> ID</th>
										<th> Name </th>
										<th> Price</th>
										<th> Summary</th>
										<th> Stock</th>
										<th> Category</th>
										<th> Img</th>
										<th> <center>Action</center></th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach ($carseat as $data) {
										?>
										<tr>
											<td><?php echo $no++;?></td>
											<td><?php echo $data->ID;?></td>
											<td><?php echo $data->name; ?></td>
											<td><?php echo $data->price; ?></td>
											<td><?php echo $data->summary; ?></td>
											<td><?php echo $data->stock; ?></td>
											<td><?php echo $data->Category; ?></td>
											<td><?php echo $data->img; ?></td>			
											<td style="text-align: center;">
												<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editcarseat<?php echo $data->ID ?>"><i class="glyphicon glyphicon-pencil"></i></button>
												<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapuscarseat<?php echo $data->ID ?>"><i class="glyphicon glyphicon-trash"></i></button>
											</td>
										</tr>
										<div id="editcarseat<?php echo $data->ID ?>" class="modal fade" role="dialog">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"></button>
														<h4 class="modal-title">Edit Shoes</h4>
													</div>
													<?php echo form_open("homeadmin_C/editcarseat"); ?>
													<div class="modal-body">
														<div class="form-group">
															<label class="control-label" for="id">ID</label>
															<input type="text" class="form-control" disabled value="<?php echo $data->ID; ?>" id="id">
														</div>
														<div class="form-group">
															<label class="control-label" for="name">Name</label>
															<input type="text" name="name" class="form-control" value="<?php echo $data->name ?>" id="name" required>
														</div>
														<div class="form-group">
															<label class="control-label" for="price">Price</label>
															<input type="text" name="price" class="form-control" value="<?php echo $data->price ?>" id="price" required>
														</div>
														<div class="form-group">
															<label class="control-label" for="summary">Summary</label>
															<input type="text" name="summary" class="form-control" value="<?php echo $data->summary ?>" id="summary" required>
														</div>
														<div class="form-group">
															<label class="control-label" for="stock">Stock</label>
															<input type="text" name="stock" class="form-control" value="<?php echo $data->stock ?>" id="stock" required>
														</div>
														<div class="form-group">
															<label class="control-label" for="img">Image</label>
															<input type="text" name="img" class="form-control" value="<?php echo $data->img; ?>" id="img" required>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
														<input type="submit" class="btn btn-primary" name="edit" value="Edit">
													</div>
													<?php echo form_close(); ?>
												</div>
											</div>
										</div>

										<div id="hapuscarseat<?php echo $data->ID; ?>" class="modal fade" role="dialog">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"></button>
														<h4 class="modal-title">Anda Ingin Menghapus?</h4>
														<?php echo form_open("homeadmin_C/hapuscarseat"); ?>
														<input type="hidden" name="id" class="form-control" value="<?php echo $data->ID ?>" id="id" required>
													</div>
													<div class="modal-footer">
														<button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
														<input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
													</div>
													<?php echo form_close(); ?>
												</div>
											</div>
										</div>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div id="Toys" class="tabcontent">
						<h2 style="text-align: center;margin-bottom: 30px">Toys</h2>
						<div class="container" style="margin-top: 20px;padding-left: 25px">
							<div class="col-md-12">
								<button class="btn btn-md btn-primary" data-toggle="modal" data-target="#tambahtoys">Add</button>
								<div id="tambahtoys" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"></button>
												<h4 class="modal-title">Add Toys</h4>
											</div>
											<?php echo form_open("homeadmin_C/addtoys"); ?>
											<div class="modal-body">
												<div class="form-group">
													<label class="control-label" for="id">ID</label>
													<input type="text" name="id" class="form-control" id="id" required>
												</div>
												<div class="form-group">
													<label class="control-label" for="name">Name</label>
													<input type="text" name="name" class="form-control" id="name" required>
												</div>
												<div class="form-group">
													<label class="control-label" for="price">Price</label>
													<input type="text" name="price" class="form-control" id="price" required>
												</div>
												<div class="form-group">
													<label class="control-label" for="summary">Summary</label>
													<input type="summary" name="summary" class="form-control" id="summary" required>
												</div>
												<div class="form-group">
													<label class="control-label" for="stock">Stock</label>
													<input type="text" name="stock" class="form-control" id="stock" required>
												</div>
												<div class="form-group">
													<label class="control-label" for="img">Img</label>
													<input type="text" name="img" class="form-control" id="img" required>
												</div>
											</div>
											<div class="modal-footer">
												<button type="reset" class="btn btn-danger">Reset</button>
												<input type="submit" class="btn btn-primary" name="tambah" value="Simpan">
											</div>
											<?php echo form_close(); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="container" style="margin-top: 20px">
							<div class="col-md-12">
								<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th> No</th>
											<th> ID</th>
											<th> Name </th>
											<th> Price</th>
											<th> Summary</th>
											<th> Stock</th>
											<th> Category</th>
											<th> Img</th>
											<th> <center>Action</center></th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no=1;
										foreach ($toys as $data) {
											?>
											<tr>
												<td><?php echo $no++;?></td>
												<td><?php echo $data->ID;?></td>
												<td><?php echo $data->name; ?></td>
												<td><?php echo $data->price; ?></td>
												<td><?php echo $data->summary; ?></td>
												<td><?php echo $data->stock; ?></td>
												<td><?php echo $data->Category; ?></td>
												<td><?php echo $data->img; ?></td>			
												<td style="text-align: center;">
													<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edittoys<?php echo $data->ID ?>"><i class="glyphicon glyphicon-pencil"></i></button>
													<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapustoys<?php echo $data->ID ?>"><i class="glyphicon glyphicon-trash"></i></button>
												</td>
											</tr>
											<div id="edittoys<?php echo $data->ID ?>" class="modal fade" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal"></button>
															<h4 class="modal-title">Edit Shoes</h4>
														</div>
														<?php echo form_open("homeadmin_C/edittoys"); ?>
														<div class="modal-body">
															<div class="form-group">
																<label class="control-label" for="id">ID</label>
																<input type="text" class="form-control" disabled value="<?php echo $data->ID; ?>" id="id">
															</div>
															<div class="form-group">
																<label class="control-label" for="name">Name</label>
																<input type="text" name="name" class="form-control" value="<?php echo $data->name ?>" id="name" required>
															</div>
															<div class="form-group">
																<label class="control-label" for="price">Price</label>
																<input type="text" name="price" class="form-control" value="<?php echo $data->price ?>" id="price" required>
															</div>
															<div class="form-group">
																<label class="control-label" for="summary">Summary</label>
																<input type="text" name="summary" class="form-control" value="<?php echo $data->summary ?>" id="summary" required>
															</div>
															<div class="form-group">
																<label class="control-label" for="stock">Stock</label>
																<input type="text" name="stock" class="form-control" value="<?php echo $data->stock ?>" id="stock" required>
															</div>
															<div class="form-group">
																<label class="control-label" for="img">Image</label>
																<input type="text" name="img" class="form-control" value="<?php echo $data->img; ?>" id="img" required>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
															<input type="submit" class="btn btn-primary" name="edit" value="Edit">
														</div>
														<?php echo form_close(); ?>
													</div>
												</div>
											</div>

											<div id="hapustoys<?php echo $data->ID; ?>" class="modal fade" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal"></button>
															<h4 class="modal-title">Anda Ingin Menghapus?</h4>
															<?php echo form_open("homeadmin_C/hapustoys"); ?>
															<input type="hidden" name="id" class="form-control" value="<?php echo $data->ID ?>" id="id" required>
														</div>
														<div class="modal-footer">
															<button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
															<input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
														</div>
														<?php echo form_close(); ?>
													</div>
												</div>
											</div>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div id="Clothes" class="tabcontent">
							<h2 style="text-align: center;margin-bottom: 30px">Clothes</h2>
							<div class="container" style="margin-top: 20px;padding-left: 25px">
								<div class="col-md-12">
									<button class="btn btn-md btn-primary" data-toggle="modal" data-target="#tambahclothes">Add</button>
									<div id="tambahclothes" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"></button>
													<h4 class="modal-title">Add Stroller</h4>
												</div>
												<?php echo form_open("homeadmin_C/addclothes"); ?>
												<div class="modal-body">
													<div class="form-group">
														<label class="control-label" for="id">ID</label>
														<input type="text" name="id" class="form-control" id="id" required>
													</div>
													<div class="form-group">
														<label class="control-label" for="name">Name</label>
														<input type="text" name="name" class="form-control" id="name" required>
													</div>
													<div class="form-group">
														<label class="control-label" for="price">Price</label>
														<input type="text" name="price" class="form-control" id="price" required>
													</div>
													<div class="form-group">
														<label class="control-label" for="summary">Summary</label>
														<input type="summary" name="summary" class="form-control" id="summary" required>
													</div>
													<div class="form-group">
														<label class="control-label" for="stock">Stock</label>
														<input type="text" name="stock" class="form-control" id="stock" required>
													</div>
													<div class="form-group">
														<label class="control-label" for="img">Img</label>
														<input type="text" name="img" class="form-control" id="img" required>
													</div>
												</div>
												<div class="modal-footer">
													<button type="reset" class="btn btn-danger">Reset</button>
													<input type="submit" class="btn btn-primary" name="tambah" value="Simpan">
												</div>
												<?php echo form_close(); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="container" style="margin-top: 20px">
								<div class="col-md-12">
									<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th> No</th>
												<th> ID</th>
												<th> Name </th>
												<th> Price</th>
												<th> Summary</th>
												<th> Stock</th>
												<th> Category</th>
												<th> Img</th>
												<th> <center>Action</center></th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no=1;
											foreach ($clothes as $data) {
												?>
												<tr>
													<td><?php echo $no++;?></td>
													<td><?php echo $data->ID;?></td>
													<td><?php echo $data->name; ?></td>
													<td><?php echo $data->price; ?></td>
													<td><?php echo $data->summary; ?></td>
													<td><?php echo $data->stock; ?></td>
													<td><?php echo $data->Category; ?></td>
													<td><?php echo $data->img; ?></td>			
													<td style="text-align: center;">
														<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editclothes<?php echo $data->ID ?>"><i class="glyphicon glyphicon-pencil"></i></button>
														<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapusclothes<?php echo $data->ID ?>"><i class="glyphicon glyphicon-trash"></i></button>
													</td>
												</tr>
												<div id="editclothes<?php echo $data->ID ?>" class="modal fade" role="dialog">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"></button>
																<h4 class="modal-title">Edit Shoes</h4>
															</div>
															<?php echo form_open("homeadmin_C/editclothes"); ?>
															<div class="modal-body">
																<div class="form-group">
																	<label class="control-label" for="id">ID</label>
																	<input type="text" class="form-control" disabled value="<?php echo $data->ID; ?>" id="id">
																</div>
																<div class="form-group">
																	<label class="control-label" for="name">Name</label>
																	<input type="text" name="name" class="form-control" value="<?php echo $data->name ?>" id="name" required>
																</div>
																<div class="form-group">
																	<label class="control-label" for="price">Price</label>
																	<input type="text" name="price" class="form-control" value="<?php echo $data->price ?>" id="price" required>
																</div>
																<div class="form-group">
																	<label class="control-label" for="summary">Summary</label>
																	<input type="text" name="summary" class="form-control" value="<?php echo $data->summary ?>" id="summary" required>
																</div>
																<div class="form-group">
																	<label class="control-label" for="stock">Stock</label>
																	<input type="text" name="stock" class="form-control" value="<?php echo $data->stock ?>" id="stock" required>
																</div>
																<div class="form-group">
																	<label class="control-label" for="img">Image</label>
																	<input type="text" name="img" class="form-control" value="<?php echo $data->img; ?>" id="img" required>
																</div>
															</div>
															<div class="modal-footer">
																<button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
																<input type="submit" class="btn btn-primary" name="edit" value="Edit">
															</div>
															<?php echo form_close(); ?>
														</div>
													</div>
												</div>

												<div id="hapusclothes<?php echo $data->ID; ?>" class="modal fade" role="dialog">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"></button>
																<h4 class="modal-title">Anda Ingin Menghapus?</h4>
																<?php echo form_open("homeadmin_C/hapusclothes"); ?>
																<input type="hidden" name="id" class="form-control" value="<?php echo $data->ID ?>" id="id" required>
															</div>
															<div class="modal-footer">
																<button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
																<input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
															</div>
															<?php echo form_close(); ?>
														</div>
													</div>
												</div>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<script>
								function openCity(evt, cityName) {
									var i, tabcontent, tablinks;
									tabcontent = document.getElementsByClassName("tabcontent");
									for (i = 0; i < tabcontent.length; i++) {
										tabcontent[i].style.display = "none";
									}
									tablinks = document.getElementsByClassName("tablinks");
									for (i = 0; i < tablinks.length; i++) {
										tablinks[i].className = tablinks[i].className.replace(" active", "");
									}
									document.getElementById(cityName).style.display = "block";
									evt.currentTarget.className += " active";
								}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
		$('#table_id').DataTable();
	} );
</script>
</body>
</html>
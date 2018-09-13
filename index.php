<!DOCTYPE html>
<html>
<head>
	<title>CRUD System</title>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

	<!-- datatabels -->
	<link rel="stylesheet" type="text/css" href="assets/datatables/dataTables.min.css">

	<!-- style.css -->
	<link rel="stylesheet" type="text/css" href="custom/css/style.css">

</head>
<body>

	<div class="container">
		<h1 class="text-center">Welcome to CRUD System</h1>
		<div class="row">
			<div class="col-md-12">
				<table id="example" class="display" style="width:100%">

				<button class="btn btn-danger" data-toggle="modal" data-target="#add-member">
					<span class="glyphicon glyphicon-plus"></span>
					Add Member
				</button>

				<br><br><br>
		        <thead>
		            <tr>
		                <th>NO.</th>
		                <th>Name</th>
										<th>Address</th>
									  <th>Contact</th>
		                <th>Active</th>
		                <th>Options</th>
		            </tr>
		        </thead>
		        <tbody>
		            <tr>
		                <td>1</td>
		                <td>Anas Mohamed</td>
		                <td>012473269</td>
		                <td>Galaa st</td>
		                <td>active</td>
		                <td>controls</td>
		            </tr>
		            <tr>
		                <td>1</td>
		                <td>Anas Mohamed</td>
		                <td>012473269</td>
		                <td>Galaa st</td>
		                <td>active</td>
		                <td>controls</td>
		            </tr>
		            <tr>
		                <td>1</td>
		                <td>Anas Mohamed</td>
		                <td>012473269</td>
		                <td>Galaa st</td>
		                <td>active</td>
		                <td>controls</td>
		            </tr>
			        </tbody>
			    </table>
			</div>
		</div>
	</div>

	<!-- Start Modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="add-member">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-plus"></span>
					Add Member</h4>
	      </div>
	      <div class="modal-body">
	      <!-- Start Add Member   -->
				<form class="form-horizontal" action="php_action/create.php" method="POST">
				  <div class="form-group">
				    <label for="name" class="col-sm-2 control-label">Name</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="name" id="name" placeholder="Name">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="address" class="col-sm-2 control-label">Address</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="address" id="address" placeholder="Address">
				    </div>
				  </div>
					<div class="form-group">
				    <label for="contact" class="col-sm-2 control-label">Contact</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="active" class="col-sm-2 control-label">Active</label>
				    <div class="col-sm-10">
							<select class="form-control" name="active" id="active">
								<option value="">~~~~SELECT~~~~</option>
								<option value="1">Activate</option>
								<option value="2">Deactivate</option>
							</select>
				    </div>
				  </div>
				</div>

				<div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save changes</button>
	      </div>
			</form>
			<!-- End Add Member -->
	    </div>
	  </div>
	</div>
	<!-- End Modal -->



	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/datatables/dataTables.min.js"></script>
	<script type="text/javascript" src="custom/js/main.js"></script>

</body>
</html>

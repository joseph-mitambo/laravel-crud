<html>

<head>
	<title> Bulkstream Reception</title>

	<link rel="shortcut icon" href="/images/icon1">

	<link rel="stylesheet" href="{{asset('assets/css/visitors.css')}}">

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<style>
		@import url('https://fonts.googleapis.com/css?family=Calistoga&display=swap');
	</style>
</head>

<body style="background-color: beige;">


	<div class="middle">

		<p id="p01"> Visitor Registration</p>
		<br> <br>
		<center>
			<button type="button" class="btn btn-success btn-lg btn-block btn_space_left" data-toggle="modal"
				data-target="#register">Register</button>

			<button type="button" class="btn btn-warning btn-lg btn-block btn_space_right" data-toggle="modal"
				data-target="#exit">
				<center>Exit</center>
			</button>
		</center>
	</div>

	<!-- Modal -->
	<div id="register" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content" style=" background-color: rgb(0,0,0,0.5)">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title" style="color:white;">
						<center>Enter Details</center>
					</h3>
				</div>
				<div class="modal-body">

					<form class="form-horizontal" action="entry.php" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="name" style="color:white;">Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="Name" id="name" placeholder="Enter Full Names"
									required>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="name" style="color:white;">National Id:</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="NationalId" id="name"
									placeholder="Enter National Id" required>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="name" style="color:white;">Email:</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" name="Email" id="name"
									placeholder="Enter Email" required>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="name" style="color:white;">Phone:</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="Phone" id="name"
									placeholder="Enter Phone" required>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="name" style="color:white;">Host Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="HostName" id="name"
									placeholder="Enter Host Name" required>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="name" style="color:white;">Host Email:</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" name="HostEmail" id="name"
									placeholder="Enter Host Email" required>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="name" style="color:white;">Host Phone:</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" name="HostPhone" id="name"
									placeholder="Enter HostPhone" required>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="name" style="color:white;">Address:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="Address" id="name"
									placeholder="Enter Address" required>
							</div>
						</div>
						<!--
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label><input type="checkbox"> Remember me</label>
								</div>
							</div>
						</div>
					-->

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Submit</button>
							</div>
						</div>
					</form>

				</div>

			</div>


		</div>
	</div>



	<!-- Modal -->
	<div id="exit" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content" style=" background-color: rgb(0,0,0,0.5)">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title" style="color:white;">
						<center>Exit</center>
					</h3>
				</div>
				<div class="modal-body">

					<form class="form-horizontal" action="exit.php" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="name" style="color:white;">UserId:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="UserId" id="name"
									placeholder="Enter UserId" required>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="name" style="color:white;">Email:</label>
							<div class="col-sm-10">
								<input type="Email" class="form-control" name="Email" id="name"
									placeholder="Enter Email" required>
							</div>
						</div>



						<!--
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label><input type="checkbox"> Remember me</label>
								</div>
							</div>
						</div>
					-->

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Submit</button>
							</div>
						</div>
					</form>

				</div>

			</div>


		</div>
	</div>


</body>

</html>
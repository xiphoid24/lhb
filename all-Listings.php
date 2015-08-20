<!DOCTYPE html>
<html>
	<head>
		<title>LHB |  - Real Estate Listings</title>
		<?php include 'stubs/head.php'; ?>
	</head>
	<body>
		<?php
		ini_set('display_errors',1);
		error_reporting(E_ALL);
		// server variables
		$server = "localhost";
		$user = "root";
		$pass = "root";
		$db_name = "lhb_db";
		// connect to server
		$conn = new mysqli($server, $user, $pass, $db_name);

		// check connection
		if ($conn->connect_error) {
			die("connection failed: " . $conn->connect_error);
		}

		$listingQuery = "SELECT * FROM listings";
		$listings = $conn->query($listingQuery);

		if (isset($_GET["id"])) {
			$lstQuery = "SELECT * FROM listings WHERE id=" . $_GET["id"];
			$lstResult = $conn->query($lstQuery);
			$lst = $lstResult->fetch_assoc();
		}

		$conn->close();
		?>
		<div class="container-fluid">
			<?php include 'stubs/adminNav.php'; ?>
			<div class="row">
				<div class="col-md-4 text-black">
					<div style="border:1px solid #532d3a" class="panel">
						<div style="background-color:#532d3a; color:white;" class="panel-heading">Gallery</div>
						<div class="panel-body">
							<?php
							if (isset($_GET["id"])) {
								echo '<form action="save-listing.php" method="post" class="form-horizontal" enctype="multipart/form-data">
										<div class="form-group">
											<label class="control-label col-xs-3">Street:</label>
											<div class="col-xs-9">
												<input class="form-control" type="text" name="street" id="street" value="' . $lst["street"] . '">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">City:</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="city" id="city" value="' . $lst["city"] . '">
											</div>
										</div>
                                        <div class="form-group">
											<label class="control-label col-xs-3">State:</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="state" id="state" value="' . $lst["state"] . '">
											</div>
										</div>
                                        <div class="form-group">
											<label class="control-label col-xs-3">Zip:</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="zip" id="zip" value="' . $lst["zip"] . '">
											</div>
										</div>
                                        <div class="form-group">
											<label class="control-label col-xs-3">MLS #:</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="mls" id="mls" value="' . $lst["mls"] . '">
											</div>
										</div>
                                        <div class="form-group">
											<label class="control-label col-xs-3">Agent:</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="agent" id="agent" value="' . $lst["agent"] . '">
											</div>
										</div>
										<input type="hidden" name="id" id="id" value="' . $lst["id"] . '">
										<div class="form-group">
											<div class="col-xs-12">
												<button class="btn btn-primary btn-block">Save</button>
											</div>
										</div>
									</form>
									<form class="form-horizontal" action="delete-listing.php" method="post">
										<input type="hidden" name="id" id="id" value="' . $lst["id"] . '">
										<button class="btn btn-danger btn-block">Delete</button>
									</form>';
							} else {
								echo '<form action="add-listing.php" method="post" class="form-horizontal" enctype="multipart/form-data">
										<div class="form-group">
											<label class="control-label col-xs-3">Street:</label>
											<div class="col-xs-9">
												<input class="form-control" type="text" name="street" id="street">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">City:</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="city" id="city">
											</div>
										</div>
                                        <div class="form-group">
											<label class="control-label col-xs-3">State:</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="state" id="state">
											</div>
										</div>
                                        <div class="form-group">
											<label class="control-label col-xs-3">Zip:</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="zip" id="zip">
											</div>
										</div>
                                        <div class="form-group">
											<label class="control-label col-xs-3">MLS #:</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="mls" id="mls">
											</div>
										</div>
                                        <div class="form-group">
											<label class="control-label col-xs-3">Agent:</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="agent" id="agent">
											</div>
										</div>
										<button class="btn btn-dark btn-block">Save</button>
									</form>';
							}
							?>
						</div>
					</div>
				</div>
                <div class="col-md-8">
                    <div style="border:1px solid #532d3a" class="panel">
                        <div style="background-color:#532d3a; color:white;" class="panel-heading">All Listings</div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" style="background: white;">
                                <thead>
                                    <tr>
                                        <th>Address</th>
                                        <th>MLS #</th>
                                        <th>Agent</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
            					        if ($listings->num_rows > 0) {
            						        while($listing = $listings->fetch_assoc()) {
            							    echo '<tr>
            							            <td>' . $listing["street"] . ' ' . $listing["city"] . ', ' . $listing["state"] . ' ' . $listing["zip"] . '</td>
            							            <td>' . $listing["mls"] . '</td>
                                                    <td>' . $listing["agent"] . '</td>
                                                    <td><a href="all-Listings.php?id=' . $listing["id"] . '" class="btn btn-dark btn-sm">Edit</a></td>
                                                </tr>';
            						        }
            					        }
            					    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
			</div>
		</div>

		<?php include 'stubs/login.php'; ?>

		<script src="//code.jquery.com/jquery-2.1.4.min.js" charset="utf-8"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.1/isotope.pkgd.min.js"></script>
		<script src="js/nav.js" charset="utf-8"></script>
		<script src="js/login.js" charset="utf-8"></script>
    </body>
</html>

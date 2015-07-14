<!DOCTYPE html>
<html>
	<head>
		<title>LHB |  - Construction Renovation Template</title>
		<?php include 'stubs/head.php'; ?>
	</head>
	<body>
		<br><br>
		<div class="container">
            <div class="row">
                <?php
                ini_set('display_errors',1);
                error_reporting(E_ALL);
                // server variables
                $server = "localhost";
                $user = "root";
                $pass = "root";
                $db_name = "php_test";
                // connect to server
                $conn = new mysqli($server, $user, $pass, $db_name);

                // check connection
                if ($conn->connect_error) {
                    die("connection failed: " . $conn->connect_error);
                }

                $imagesQuery = "SELECT * FROM images";
                $images = $conn->query($imagesQuery);

                $categoryQuery = "SELECT DISTINCT category  FROM images";
                $categories = $conn->query($categoryQuery);

                $imgQuery = "SELECT * FROM images WHERE id=" . $_GET["id"];
                $imgResult = $conn->query($imgQuery);
                $img = $imgResult->fetch_assoc();

                $conn->close();

                echo
    			'<form action="save.php" method="post" class="form-inline" enctype="multipart/form-data">
					<div class="form-group">
						<label>Description: </label>
						<input class="form-control" type="text" name="description" id="description" value="' . $img["description"] . '">
					</div>
					<div class="form-group">
						<label>Category:</label>
						<input type="text" name="category" class="form-control" id="category" value="' . $img["category"] . '">
					</div>
                    <input type="hidden" name="id" id="id" value="' . $img["id"] . '">
					<button class="btn btn-primary">Save</buttton>
            	</form>';
                ?>
            </div>
			<br><br>
			<div class="row">
				<?php
				ini_set('display_errors',1);
				error_reporting(E_ALL);
				// server variables
				$server = "localhost";
				$user = "root";
				$pass = "root";
				$db_name = "php_test";
				// connect to server
				$conn = new mysqli($server, $user, $pass, $db_name);

				// check connection
				if ($conn->connect_error) {
					die("connection failed: " . $conn->connect_error);
				}

				$imageQuery = "SELECT * FROM images";
				$images = $conn->query($imageQuery);

				$categoryQuery = "SELECT DISTINCT category  FROM images";
				$categories = $conn->query($categoryQuery);

				$conn->close();
				?>

				<button class="filter" data-filter="*">show all</button>

				<?php
				if ($categories->num_rows > 0) {
					while($category = $categories->fetch_assoc()) {
						echo '<button class="filter" data-filter=".' . $category["category"] . '">' . ucfirst($category["category"]) . '</button>';
					}
				}
				?>

				<div class="isotope">

					<?php
					if ($images->num_rows > 0) {
						while($image = $images->fetch_assoc()) {
							echo '<div class="col-lg-3 item ' . $image["category"] . '">
									<a href="edit.php?id=' . $image["id"] . '">
										<img class="img-responsive" src="' . $image["source"] . '" alt="img">
									</a>
								</div>';
						}
					}
					?>

				</div>
			</div>
		</div>

		<div class="modal fade" id="login">
			<div class="modal-dialog">
    			<div class="modal-content">
    				<div class="modal-header">
        				<h4 class="modal-title">Login</h4>
    				</div>
    				<div class="modal-body clearfix">
						<div id="error" class="hide text-center" style="color:red;">
							*Incorrect username or password.
						</div>
						<br>
						<div class="form-group row">
							<label class="col-xs-2 control-label">Username</label>
							<div class="col-xs-10">
								<input id="username" type="text" name="username" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-xs-2">Password</label>
							<div class="col-xs-10">
								<input id="password" type="password" name="password" class="form-control">
							</div>
						</div>
						<button class="col-xs-6 btn btn-primary" id="login">Login</button>
						<a href="home.php" class="btn btn-default col-xs-6">Cancel</a>
    				</div>
    			</div>
			</div>
		</div>

		<script src="//code.jquery.com/jquery-2.1.4.min.js" charset="utf-8"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.1/isotope.pkgd.min.js"></script>
		<script type="text/javascript">
			$( document ).ready( function() {
				// init Isotope
				var $container = $('.isotope').isotope({
					itemSelector: '.item',
					layoutMode: 'fitRows'
				});
				// bind filter button click
				$('button.filter').click(function() {
					var filterValue = $( this ).attr('data-filter');
					$container.isotope({ filter: filterValue });
				});

				$('#login').modal({
					keyboard: false,
					backdrop: 'static'
				});

				$('button#login').click(function() {
					$('#error').addClass('hide')
					var username = $('input#username').val();
					var password = $('input#password').val();
					if (username === 'admin' && password === 'admin') {
						$('#login').modal('hide');
					} else {
						$('#error').removeClass('hide');
					}
				});
			});
		</script>
	</body>
</html>

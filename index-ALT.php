
<?php
 $username = "root";
 $password = "root";
 $host = "localhost";
 $connector = mysql_connect($host, $username, $password)
    or die("Unable to connect");
 $selected = mysql_select_db("employees", $connector)
    or die("Unable to connect");
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="http://getbootstrap.com/favicon.ico">

		<title>DT for BS - from GENERATED source, v.1x</title>

		<!-- Bootstrap core CSS -->
		<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/dashboard.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="http://getbootstrap.com/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">higherdotteam &mdash; proj001</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Dashboard</a></li>
						<li><a href="#">Settings</a></li>
						<li><a href="#">Profile</a></li>
						<li><a href="#">Help</a></li>
					</ul>
					<form class="navbar-form navbar-right">
						<input type="text" class="form-control" placeholder="Search...">
					</form>
				</div>
			</div>
		</nav>

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
					<ul class="nav nav-sidebar">
						<li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
						<li><a href="#">variousNAVitems</a></li>
<!-- 						<li><a href="#">Analytics</a></li> -->
					</ul>
				</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<h1 class="page-header">Dashboard for XXX</h1>

<!-- 				CIRCLE THINGERS	
					<div class="row placeholders">
						<div class="col-xs-6 col-sm-3 placeholder">
							<img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
							<h4>Label</h4>
							<span class="text-muted">Something else</span>
						</div>
						<div class="col-xs-6 col-sm-3 placeholder">
							<img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
							<h4>Label</h4>
							<span class="text-muted">Something else</span>
						</div>
						<div class="col-xs-6 col-sm-3 placeholder">
							<img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
							<h4>Label</h4>
							<span class="text-muted">Something else</span>
						</div>
						<div class="col-xs-6 col-sm-3 placeholder">
							<img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
							<h4>Label</h4>
							<span class="text-muted">Something else</span>
						</div>
					</div> -->

<?php
//execute the SQL query and return records
$result = mysql_query("SELECT * FROM alte_brand");
?>
					<h2 class="sub-header">Section title</h2>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Employee</th>
									<th>Department</th>
									<th>Title</th>
									<th>Salary</th>
								</tr>
							</thead>
							<tbody>
<?php
while ($row = mysql_fetch_assoc($result)) {
echo
"<tr>
	<td>{$row['employees']}</td>
	<td>{$row['departments']}</td>
	<td>{$row['titles']}</td>
	<td>{$row['salaries']}</td>	
</tr>";
}
?>


							</tbody>
						</table>
					</div>
<?php mysql_close($connector); ?>
				</div>
			</div>
		</div>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="http://getbootstrap.com/assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
		<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
		<script src="http://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
		<script src="js/rbb-custom.js"></script>
	</body>
</html>

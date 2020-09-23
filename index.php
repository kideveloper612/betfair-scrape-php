<html>
<head>
<title>Football | Home</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="bootstrap/css/font-awesome.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="icon" href="images/football-icon1.png" />
<script type="text/javascript">/* 
	document.addEventListener('scroll', function(event) {
		if (document.body.scrollHeight == document.body.scrollTop
				+ window.innerHeight) {
			getData(true);
		}
	}); */
</script>
</head>
<body onload="">
	<div class="header">
		<a href="index.php"><img src="images/logo3.png" alt="Logo" /></a>
	</div>
	<!-- Navbar Start-->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
					aria-expanded="false">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.jsp"><img
							src="images/football-icon1.png" alt=""> Football</a></li>
				</ul>

			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<!-- Navbar End-->

	<div class="body">
		<div class="row betting">
			<div class="col-sm-3 football-title">
				<!-- <img src="images/football-icon1.png" alt="" class="football-image">
				Football -->
			</div>
			<div class="col-sm-9"></div>
		</div>
		<div class="table-responsive">
			<table
				class="table table-resonsive table-bordered table-striped table-hover"
				id="betting-data-table" style="width: 1900px">
				<thead>
					<tr class="table-header1" style="line-height: 2px;">
						<th colspan="5"></th>
						<th colspan="7">Match Odds</th>
						<th colspan="5">Under/Over 1.5</th>
						<th colspan="5">Under/Over 2.5</th>
						<th colspan="5">Under/Over 3.5</th>
						<th colspan="5">Under/Over 4.5</th>
					</tr>
					<tr class="table-header1">
						<th rowspan="2">Competition</th>
						<th rowspan="2" colspan="2">Start Time</th>
						<th rowspan="2">Score</th>
						<th rowspan="2">Match Name</th>
						<th rowspan="2">Matched Money</th>
						<th colspan="2">1</th>
						<th colspan="2">x</th>
						<th colspan="2">2</th>
						<th rowspan="2">Matched Money</th>
						<th colspan="2">Meno 1.5</th>
						<th colspan="2">Piu 1.5</th>
						<th rowspan="2">Matched Money</th>
						<th colspan="2">Meno 2.5</th>
						<th colspan="2">Piu 2.5</th>
						<th rowspan="2">Matched Money</th>
						<th colspan="2">Meno 3.5</th>
						<th colspan="2">Piu 3.5</th>
						<th rowspan="2">Matched Money</th>
						<th colspan="2">Meno 4.5</th>
						<th colspan="2">Piu 4.5</th>
					</tr>
					<tr class="table-header2">
						<th class="heading-back">Back</th>
						<th class="heading-lay">Lay</th>
						<th class="heading-back">Back</th>
						<th class="heading-lay">Lay</th>
						<th class="heading-back">Back</th>
						<th class="heading-lay">Lay</th>
						<th class="heading-back">Back</th>
						<th class="heading-lay">Lay</th>
						<th class="heading-back">Back</th>
						<th class="heading-lay">Lay</th>
						<th class="heading-back">Back</th>
						<th class="heading-lay">Lay</th>
						<th class="heading-back">Back</th>
						<th class="heading-lay">Lay</th>
						<th class="heading-back">Back</th>
						<th class="heading-lay">Lay</th>
						<th class="heading-back">Back</th>
						<th class="heading-lay">Lay</th>
						<th class="heading-back">Back</th>
						<th class="heading-lay">Lay</th>
						<th class="heading-back">Back</th>
						<th class="heading-lay">Lay</th>
					</tr>
				</thead>
			</table>
		</div>
	<div id="loading" style="text-align: center;">
				<img src="images/loading.gif" alt="Loading" height="100px" />
	</div>
		<footer>
			<p class="text">Match Odds | Under/Over 1.5 | Under/Over 2.5 |
				Under/Over 3.5 | Under/Over 4.5</p>

			<p>&copy; Copyright 2018. | betfairliveodds All Rights are
				Reserved. www.betfairliveodds.com</p>
		</footer>
	</div>
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		getData();
		// $(document).ready(function() {
			setInterval(function() {
				getData1();
			}, 11000);
		// }); 
	</script>
</body>
</html>
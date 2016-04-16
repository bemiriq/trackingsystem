<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tracking System</title>

<link href="<?=base_url('public/css/bootstrap.min.css')?>" rel="stylesheet">
<link href="<?=base_url('public/css/datepicker3.css')?>" rel="stylesheet">
<link href="<?=base_url('public/css/styles.css')?>" rel="stylesheet">
<script src="<?=base_url('public/js/lumino.glyphs.js')?>"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Tracking</span>System</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Student <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<!-- <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li> -->
							<!-- <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li> -->
							<li><a href="<?=site_url('track/logout')?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<!-- <form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form> -->
		<ul class="nav menu">
			<li class="active"><a href="<?=site_url('track/studentDashboard')?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<!-- this below is used to register issue -->
			<!-- <li><a href="<?=site_url('track/addIssue')?>"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Add Issue</a></li> -->
			<!-- end of linking issue register -->
			
			<li class="parent ">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Issue 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="<?=site_url('track/student_add_issue')?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Add Issue
						</a>
					</li>
					<li>
						<a class="" href="<?=site_url('track/studentViewIssue')?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> View Issue
						</a>
					</li>
				</ul>
			</li>
			<li><a href="<?=site_url('track/studentFeedback')?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Add Feedback</a></li>
		</ul>

	</div><!--/.sidebar-->

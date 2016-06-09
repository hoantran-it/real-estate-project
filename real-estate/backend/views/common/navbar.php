<nav class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="admin.php"><i class="glyphicon glyphicon-user"></i> Administrator</a>
			<a class="navbar-brand" href="."><i class="glyphicon glyphicon-home"></i> Website</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<?php if(isset($user)): ?>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user['name'];?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<!-- <li><a href="admin.php?controller=user&amp;action=info"><i class="glyphicon glyphicon-user"></i> Thông tin cá nhân</a></li>
						<li class="divider"></li> -->
						<li><a href="admin.php?controller=home&amp;action=logout"><i class="glyphicon glyphicon-off"></i> Log out</a></li>
					</ul>
				</li>
			</ul>
			<?php endif; ?>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
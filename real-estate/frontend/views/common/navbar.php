<?php 
$homeInfo = get_main_info_record('main_information', 'home');
?>
<img class="top-banner" src="public/upload/product/<?php echo $homeInfo['picture'];?>" />
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
			<?php if(isset($_SESSION['user']) && $_SESSION['user']['level'] == 2){?>
				<a class="navbar-brand" href="./admin.php"><i class="glyphicon glyphicon-user"></i> Administrator</a>
			<?php 
			}?>
			<a class="navbar-brand" href="."><i class="glyphicon glyphicon-home"></i> Trang Chủ</a>
			<a class="navbar-brand" href="index.php?controller=main&action=information"><i class="glyphicon glyphicon-info-sign"></i> Giới Thiệu</a>
			<a class="navbar-brand" href="."><i class="glyphicon glyphicon-th-large"></i> Sàn Bất Động Sản</a>
			<a class="navbar-brand" href="index.php?controller=main&action=contact"><i class="glyphicon glyphicon-phone-alt"></i> Liên Hệ</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
			<?php if(isset($_SESSION['user'])){ ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['user']['name'];?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<!-- <li><a href="admin.php?controller=user&amp;action=info"><i class="glyphicon glyphicon-user"></i> Thông tin cá nhân</a></li>
						<li class="divider"></li> -->
						<li><a href="admin.php?controller=home&amp;action=logout"><i class="glyphicon glyphicon-off"></i> Log out</a></li>
					</ul>
				</li>
			<?php } else {?>
        	<!-- <form id="login-form" method="post" action="admin.php?controller=home&action=login" class="form-signin" role="form"> -->
				<!-- <li>
					<input id="email" name="email" type="email" class="form-control input-lg small-box" placeholder="Email" required autofocus>
				</li>
				<li>
					<input id="password" name="password" type="password" class="form-control input-lg small-box" placeholder="Password" required>
				</li> -->
				<li>
					<a href="./admin.php" id="login-button">Đăng nhập</a>
				</li>
			<!-- </form> -->
				<li>
					<a href="index.php?controller=main&action=register">Đăng ký</a>
				</li>
			<?php }?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
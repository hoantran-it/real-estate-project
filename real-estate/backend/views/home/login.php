<?php require('frontend/views/common/header.php'); ?>

<body id="login">

	<?php require('frontend/views/common/navbar.php'); ?>

	<div class="container">
		<div class="row div-form-signin">
			<!-- BEGIN CONTENT -->
			<form method="post" action="admin.php?controller=home&action=login"
				class="form-signin" role="form">
				<div class="form-group">
					<input name="email" type="email" class="form-control input-lg"
						placeholder="Email" required autofocus>
				</div>
				<div class="form-group">
					<input name="password" type="password"
						class="form-control input-lg" placeholder="Password" required>
				</div>
				<div class="login-fail-message">
				<?php if(isset($error_message)) echo $error_message;?>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Đăng
					nhập</button>
			</form>
			<!-- END CONTENT -->
		</div>
		<!--/row-->
	</div>
	<!--/.container-->

</body>
</html>

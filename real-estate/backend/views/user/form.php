<div class="panel panel-default">
    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> <?php echo $action == 'info' ? 'Thông tin tài khoản' : 'Đăng ký thành viên';?></div>
    <div class="panel-body">
        <form id="user-form" class="form-horizontal" method="post" action="admin.php?controller=user&action=<?php echo $user ? 'info' : 'register'; ?>" enctype="multipart/form-data" role="form" onsubmit="return checkPassword(this);">
            <input name="id" type="hidden" value="<?php echo $user ? $user['id'] : '0'; ?>"/>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input name="email" type="email" value="<?php echo $user ? $user['email'] : ''; ?>" class="form-control" id="email" placeholder="Email" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Mật khẩu</label>
                <div class="col-sm-9">
                    <input name="password" type="password" value="" class="form-control" id="password" placeholder="Mật khẩu" <?php echo $action == 'info' ? '' : 'required=""';?>/>
                </div>
            </div>
            <div class="form-group">
                <label for="confirm" class="col-sm-3 control-label">Xác nhận mật khẩu</label>
                <div class="col-sm-9">
                    <input name="confirm" type="password" value="" class="form-control" id="confirm" placeholder="Xác nhận mật khẩu"/>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Họ và tên</label>
                <div class="col-sm-9">
                    <input name="name" type="text" value="<?php echo $user ? $user['name'] : ''; ?>" class="form-control" id="name" placeholder="Họ và tên" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-3 control-label">Di động</label>
                <div class="col-sm-9">
                    <input name="phone" type="text" value="<?php echo $user ? $user['phone'] : ''; ?>" class="form-control" id="phone" placeholder="Số di động" pattern="[0-9]{10,11}"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary"><?php echo $action == 'info' ? 'Cập nhật' : 'Đăng ký' ;?></button>
                    <a class="btn btn-warning" href="admin.php">Trở về</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">

function checkPassword(form)
{
	console.log($("#password").val());
	console.log($("#confirm").val());
	if(form.password.value != form.confirm.value) {
		$("#password").addClass('error');
		$("#confirm").addClass('error');
		return false;
	} else {
		$("#password").removeClass('error');
		$("#confirm").removeClass('error');
    	return true;
	}
}

</script>
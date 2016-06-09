<div class="panel panel-default">
    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Đăng ký thành viên</div>
    <div class="panel-body">
        <form id="user-form" class="form-horizontal" method="post" action="index.php?controller=main&action=register" enctype="multipart/form-data" role="form" onsubmit="return checkPassword(this);">
            <input name="id" type="hidden" value="0"/>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input name="email" type="email" value="" class="form-control" id="email" placeholder="Email" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Mật khẩu</label>
                <div class="col-sm-9">
                    <input name="password" type="password" value="" class="form-control" id="password" placeholder="Mật khẩu" required/>
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
                    <input name="name" type="text" value="" class="form-control" id="name" placeholder="Họ và tên" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-3 control-label">Di động</label>
                <div class="col-sm-9">
                    <input name="phone" type="text" value="" class="form-control" id="phone" placeholder="Số di động" pattern="[0-9]{10,11}"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                    <a class="btn btn-warning" href=".">Trở về</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$("#email").blur(function() {
	checkEmail();
});

function checkEmail(){
    $.ajax({
		url : "index.php?controller=main&action=checkEmail",
		type : "POST",
		data : {
			email : $("#email").val()
		},
		success: function(data) {
			if(data == 1){
				$("#email").parent('div').append('<div class="existed-email">Email này đã tồn tại trên hệ thống. Vui lòng nhập email khác.</div>')
			}
		}
	});
}

function checkPassword(form)
{
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
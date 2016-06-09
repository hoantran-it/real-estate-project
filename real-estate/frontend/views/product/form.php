<div class="panel panel-default">
    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Đăng tin mới</div>
    <div class="panel-body">
        <form id="product-form" class="form-horizontal" method="post" action="admin.php?controller=product&amp;action=edit" enctype="multipart/form-data" role="form">
            <input name="id" type="hidden" value="0"/>
            <div class="form-group">
                <label for="category_id" class="col-sm-3 control-label">Danh mục</label>
                <div class="col-sm-9">
                    <select name="category_id" class="form-control">
                        <?php foreach ($categories as $category) {
                            echo '<option value="'.$category['id'].'" >'.$category['name'].'</option>';
                        } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Tiêu đề</label>
                <div class="col-sm-9">
                    <input name="name" type="text" value="" class="form-control" id="name" placeholder="Tiêu đề" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="summary" class="col-sm-3 control-label">Mô tả</label>
                <div class="col-sm-9">
                    <textarea name="summary" rows=5 class="form-control" id="summary" placeholder="Mô tả" /></textarea>
                </div>
            </div>                               
            <div class="form-group">
                <label for="price" class="col-sm-3 control-label">Giá</label>
                <div class="col-sm-9">
                    <input name="price" type="text" value="" class="form-control" id="price" placeholder="0" pattern="[0-9\.]+" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="image" class="col-sm-3 control-label">Hình ảnh</label>
                <div class="col-sm-9">
                    <input name="image" type="file" class="form-control" id="price" accept="image/*"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Đăng tin</button>
                    <a class="btn btn-warning" href="admin.php?controller=product">Trở về</a>
                </div>
            </div>
        </form>
    </div>
</div>
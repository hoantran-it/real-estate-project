<div class="panel panel-default">
    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> <?php echo $page_title ?></div>
    <div class="panel-body">
        <form id="product-form" class="form-horizontal" method="post" action="admin.php?controller=main&amp;action=<?php echo $page;?>" enctype="multipart/form-data" role="form">
            <input name="id" type="hidden" value="<?php echo $information ? $information['id'] : ''; ?>"/>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Tiêu đề</label>
                <div class="col-sm-9">
                    <input name="title" type="text" value="<?php echo $information ? $information['title'] : ''; ?>" class="form-control" id="title" placeholder="Tiêu đề" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="summary" class="col-sm-3 control-label">Mô tả</label>
                <div class="col-sm-9">
                    <textarea name="description" rows=5 class="form-control" id="description" placeholder="Mô tả" /><?php echo $information ? $information['description'] : ''; ?></textarea>
                </div>
            </div>                               
            <div class="form-group">
                <label for="image" class="col-sm-3 control-label">Hình ảnh</label>
                <div class="col-sm-9">
                    <input name="image" type="file" class="form-control" id="price" accept="image/*"/>
                    <?php if ($information && is_file('public/upload/product/'.$information['picture'])) {
                        echo '<image src="public/upload/product/'.$information['picture'].'?time='.time().'" style="margin-top: 10px;max-width:200px;" />';
                        }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <a class="btn btn-warning" href="admin.php?controller=product">Trở vể</a>
                </div>
            </div>
        </form>
    </div>
</div>
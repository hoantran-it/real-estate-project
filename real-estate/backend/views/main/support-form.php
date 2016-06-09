<div class="panel panel-default">
    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> <?php echo $page_title ?></div>
    <div class="panel-body">
        <form id="product-form" class="form-horizontal" method="post" action="admin.php?controller=main&amp;action=<?php echo $page;?>" enctype="multipart/form-data" role="form">
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Nick chat 1</label>
                <div class="col-sm-9">
                    <input name="nickchat1" type="text" value="<?php echo $nickchat1['title']; ?>" class="form-control" placeholder="Nick chat 1" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Thông tin liên hệ 1</label>
                <div class="col-sm-9">
                    <input name="thongtin1" type="text" value="<?php echo $nickchat1['description']; ?>" class="form-control" placeholder="Thông tin liên hệ 1" required=""/>
                </div>
            </div>
            
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Nick chat 2</label>
                <div class="col-sm-9">
                    <input name="nickchat2" type="text" value="<?php echo $nickchat2['title']; ?>" class="form-control" placeholder="Nick chat 2" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Thông tin liên hệ 2</label>
                <div class="col-sm-9">
                    <input name="thongtin2" type="text" value="<?php echo $nickchat2['description']; ?>" class="form-control" placeholder="Thông tin liên hệ 2" required=""/>
                </div>
            </div>
            
            <hr/>
            
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Hotline 1</label>
                <div class="col-sm-9">
                    <input name="hotline1" type="text" value="<?php echo $hotline1['title']; ?>" class="form-control" placeholder="Hotline 1" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Tên người liên hệ 1</label>
                <div class="col-sm-9">
                    <input name="ten1" type="text" value="<?php echo $hotline1['description']; ?>" class="form-control" placeholder="Tên người liên hệ 1" required=""/>
                </div>
            </div>
            
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Hotline 2</label>
                <div class="col-sm-9">
                    <input name="hotline2" type="text" value="<?php echo $hotline2['title']; ?>" class="form-control" placeholder="Hotline 2" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Tên người liên hệ 2</label>
                <div class="col-sm-9">
                    <input name="ten2" type="text" value="<?php echo $hotline2['description']; ?>" class="form-control" placeholder="Tên người liên hệ 2" required=""/>
                </div>
            </div>
            
            <hr/>
            
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Tiêu đề quảng cáo 1</label>
                <div class="col-sm-9">
                    <input name="title1" type="text" value="<?php echo $advertisement1['title']; ?>" class="form-control" placeholder="Tiêu đề quảng cáo 1" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="summary" class="col-sm-3 control-label">Đường dẫn liên kết 1</label>
                <div class="col-sm-9">
                    <input name="link1" type="text" value="<?php echo $advertisement1['description']; ?>" class="form-control" placeholder="Đường dẫn liên kết 1" required=""/>
                </div>
            </div>                               
            <div class="form-group">
                <label for="image" class="col-sm-3 control-label">Hình ảnh quảng cáo 1</label>
                <div class="col-sm-9">
                    <input name="image1" type="file" class="form-control" accept="image/*"/>
                    <?php if ($advertisement1 && is_file('public/upload/product/'.$advertisement1['picture'])) {
                        echo '<image src="public/upload/product/'.$advertisement1['picture'].'?time='.time().'" style="margin-top: 10px;max-width:200px;" />';
                        }
                    ?>
                </div>
            </div>
            
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Tiêu đề quảng cáo 2</label>
                <div class="col-sm-9">
                    <input name="title2" type="text" value="<?php echo $advertisement2['title']; ?>" class="form-control" placeholder="Tiêu đề quảng cáo 2" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="summary" class="col-sm-3 control-label">Đường dẫn liên kết 2</label>
                <div class="col-sm-9">
                    <input name="link2" type="text" value="<?php echo $advertisement2['description']; ?>" class="form-control" placeholder="Đường dẫn liên kết 2" required=""/>
                </div>
            </div>                               
            <div class="form-group">
                <label for="image" class="col-sm-3 control-label">Hình ảnh quảng cáo 2</label>
                <div class="col-sm-9">
                    <input name="image2" type="file" class="form-control" accept="image/*"/>
                    <?php if ($advertisement2 && is_file('public/upload/product/'.$advertisement2['picture'])) {
                        echo '<image src="public/upload/product/'.$advertisement2['picture'].'?time='.time().'" style="margin-top: 10px;max-width:200px;" />';
                        }
                    ?>
                </div>
            </div>
            
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Tiêu đề quảng cáo 3</label>
                <div class="col-sm-9">
                    <input name="title3" type="text" value="<?php echo $advertisement3['title']; ?>" class="form-control" placeholder="Tiêu đề quảng cáo 3" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="summary" class="col-sm-3 control-label">Đường dẫn liên kết 3</label>
                <div class="col-sm-9">
                    <input name="link3" type="text" value="<?php echo $advertisement3['description']; ?>" class="form-control" placeholder="Đường dẫn liên kết 3" required=""/>
                </div>
            </div>                               
            <div class="form-group">
                <label for="image" class="col-sm-3 control-label">Hình ảnh quảng cáo 2</label>
                <div class="col-sm-9">
                    <input name="image3" type="file" class="form-control" accept="image/*"/>
                    <?php if ($advertisement3 && is_file('public/upload/product/'.$advertisement3['picture'])) {
                        echo '<image src="public/upload/product/'.$advertisement3['picture'].'?time='.time().'" style="margin-top: 10px;max-width:200px;" />';
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
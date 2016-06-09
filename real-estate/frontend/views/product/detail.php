<div class="product-detail thumbnail clearfix">
    <img src="public/upload/product/<?php echo $product['image'] ? $product['image'] : 'default.png'; ?>" alt="<?php echo $product['name']; ?>" class="col-sm-4"/>
    
    <div class="col-sm-8">
        <h3 class="title"><?php echo $product['name']; ?></h3>
        <p class="price-panel"><span class="detail-description">Giá: </span><span class="price"><?php echo number_format($product['price'],0,',','.'); ?> VNĐ</span></p>
        <p><span class="detail-description">Ngày đăng: <?php echo date_create_from_format('Y-m-d', $product['created_date'])->format('d/m/Y'); ?></span></p>
        <p class="detail-description">Mô tả: </p>
        <p class="information-text"><?php echo $product['summary']; ?></p>
        <p><a href="index.php?controller=main&amp;action=contact" class="btn btn-primary" role="button">Hỗ trợ làm giấy tờ</a></p>
    </div>
</div>
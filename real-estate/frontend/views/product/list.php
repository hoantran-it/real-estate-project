<div class="row product-list">
	<?php if (empty($products)) : ?>
	<h3 class="col-sm-12">Không có tin nào trong danh mục này.</h3>
	<?php endif; ?>
	<?php foreach($products as $product): ?>
	<div class="col-lg-4 col-sm-6">
		<div class="thumbnail">
			<a title="<?php echo $product['name']; ?>" href="index.php?controller=product&amp;action=view&amp;pid=<?php echo $product['id']; ?>">
				<img class="main-product-image" src="public/upload/product/<?php echo $product['image'] ? $product['image'] : 'default.png'; ?>" alt="<?php echo $product['name']; ?>"/>
			</a>
			<div class="caption text-center">
				<h4><a title="<?php echo $product['name']; ?>" href="index.php?controller=product&amp;action=view&amp;pid=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h4>
				<p class="price"><?php echo number_format($product['price'],0,',','.'); ?> VNĐ <img class="icon_moi" src="public/images/icon_new.gif" alt="mới"></p>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>

<div class="text-center">
	<?php echo $pagination; ?>
</div>
	
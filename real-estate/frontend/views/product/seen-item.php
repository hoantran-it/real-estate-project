<h3 class="seen-item-title">
	Các tin đã xem
</h3>
<div class="row product-list">
<?php
if($itemArr != null){ 
	foreach($itemArr as $item): ?>
	<div class="col-lg-3 col-sm-7">
		<div class="thumbnail">
			<a title="<?php echo $item['name']; ?>"
				href="index.php?controller=product&amp;action=view&amp;pid=<?php echo $item['id']; ?>">
				<img class="sub-product-image"
				src="public/upload/product/<?php echo $item['image'] ? $item['image'] : 'default.png'; ?>"
				alt="<?php echo $item['name']; ?>" />
			</a>
			<div class="caption text-center">
				<h4>
					<a title="<?php echo $item['name']; ?>"
						href="index.php?controller=product&amp;action=view&amp;pid=<?php echo $item['id']; ?>"><?php echo $item['name']; ?>
					</a>
				</h4>
				<p class="price">
					<?php echo number_format($item['price'],0,',','.'); ?>
					VNĐ <img class="icon_moi" src="public/images/icon_new.gif" alt="mới">
				</p>
			</div>
		</div>
	</div>
<?php 
	endforeach; 
}?>
</div>
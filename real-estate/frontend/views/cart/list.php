<style type="text/css">
	.table th, .table td {
		text-align: center;
	}
	.table th:nth-child(3), .table td:nth-child(3)  {
		width: auto;
		text-align: left;
	}
	.table th:nth-child(4), .table td:nth-child(4),
	.table th:nth-child(5), .table td:nth-child(5)  {
	}
	.table td {
		vertical-align: middle!important;
	}
</style>

<form id="cart_form" method="post" action="index.php?controller=cart" role="form">

<div class="col-xs-12">
	<h2>Giỏ hàng</h2>

	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th class="hidden-xs">STT</th>
				<th class="hidden-xs">Ảnh</th>
				<th>Sản phẩm</th>
				<th>Giá</th>
				<th>Số lượng</th>
				<th>Tác vụ</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$stt = 0;
			foreach ($cart as $pid => $product): 
				$stt++;
			?>
			<tr>
				<td class="hidden-xs"><?php echo $stt;?></td>
				<td class="hidden-xs">
					<?php
					$image = 'public/upload/product/'.$product['image'];
					if (is_file($image)) {
                        echo '<image src="'.$image.'" style="max-width:50px; max-height:50px;" />';
                    }
                    ?>
                </td>
				<td>
					<a href="index.php?controller=product&amp;action=detail&amp;pid=<?php echo $product['id'];?>"><?php echo $product['name'];?></a>
				</td>
				<td>
					<?php echo number_format($product['price'],0,',','.'); ?>
				</td>
				<td>
					<div class="btn-group">
						<input name="number[<?php echo $product['id'];?>]" type="text" value="<?php echo $product['number'];?>" size="3" class="form-control text-center"/>
					</div>
				</td>
				<td>
					<a href="index.php?controller=cart&amp;action=delete&amp;pid=<?php echo $product['id'];?>" class="text-danger"><i class="glyphicon glyphicon-remove"></i></a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="6">Thành tiền : <?php echo number_format(cart_total(),0,',','.'); ?> VNĐ</th>
			</tr>
		</tfoot>
	</table>
	
	<div class="form-group">
		<!-- Single button -->
		<div class="btn-group">
			<input type="submit" class="form-control" value="Cập nhật"/>
		</div>

		<a href="index.php?controller=cart&amp;action=order" class="btn btn-primary"><i class="glyphicon glyphicon-list-alt"></i> Đơn hàng</a>
	</div>	
</div>

</form>
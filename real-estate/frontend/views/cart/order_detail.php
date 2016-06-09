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

<form id="cart_form" method="post" action="index.php?controller=cart&amp;action=send" role="form">

<div class="col-md-8 col-sm-12">
	<h2>Thông tin đơn hàng</h2>

	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th class="hidden-xs">STT</th>
				<th class="hidden-xs">Ảnh</th>
				<th>Sản phẩm</th>
				<th>Giá</th>
				<th>Số lượng</th>
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
					<?php echo $product['number'];?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5">Thành tiền : <?php echo number_format(cart_total(),0,',','.'); ?> VNĐ</th>
			</tr>
		</tfoot>
	</table>
</div>

<div class="col-md-4 col-sm-12">	
	<h2>Thông tin khách hàng</h2>
	
	<div class="form-group">
		<input name="name" type="text" class="form-control" placeholder="Họ và tên" required="required"/>
	</div>
	<div class="form-group">
		<input name="address" type="text" class="form-control" placeholder="Địa chỉ" required="required"/>
	</div>
	<div class="form-group">
		<input name="phone" type="text" class="form-control" placeholder="Số di động" required="required" pattern="[0-9]{10,11}"/>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Đặt hàng</button>
	</div>	
</div>

</form>
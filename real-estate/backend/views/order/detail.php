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

<div class="col-xs-12">
	<h3>Thông tin đơn hàng</h3>

	<table id="order_detail" class="table table-bordered table-hover">
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
			$order_total = 0;
			foreach ($order_detail as $product): 
				$stt++;
				$order_total += $product['price'] * $product['number'];
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
				<td colspan="5">
					<h4>Thành tiền : <?php echo number_format($order_total,0,',','.'); ?> VNĐ</h4>
				</td>
			</tr>
		</tfoot>
	</table>
</div>

<style type="text/css">
	#info td {
		text-align: left;
	}
</style>

<div class="col-xs-12">	
	<h3>Thông tin khách hàng</h3>
	
	<table id="info" class="table">
		<tr>
			<td>Họ và tên</td>
			<td><?php echo $order['name']; ?></td>
		</tr>
		<tr>
			<td>Địa chỉ</td>
			<td><?php echo $order['address']; ?></td>
		</tr>
		<tr>
			<td>Di động</td>
			<td><?php echo $order['phone']; ?></td>
		</tr>
		<tr>
			<td>Thời gian</td>
			<td><?php echo $order['create_time']; ?></td>
		</tr>
	</table>

<form id="order_form" method="post" action="admin.php?controller=order&amp;action=complete" role="form">
	<div class="form-group">
		<input name="oid" type="hidden" value="<?php echo $order['id']; ?>"/>
		<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Xử lý xong</button>
		<a href="admin.php?controller=order" class="btn btn-warning">Quay lại</a>
	</div>
</form>

</div>
<style type="text/css">
	.table th, .table td {
		text-align: center;
		width: 5em;
	}
	.table th:nth-child(4), .table td:nth-child(4) {
		text-align: left;
		width: auto;
	}
	.table td {
		vertical-align: middle!important;
	}
</style>

<form id="product_form" method="post" action="admin.php?controller=product" role="form">

<div class="col-xs-12">
	
	<div class="form-group">
		<!-- Single button -->
		<div class="btn-group">
			<select id="action" name="action" class="form-control">
				<option>Tác vụ</option>
				<option value="delete">Xóa</option>
			</select>
		</div>

		<div class="btn-group">
			<input id="search" name="search" type="text" class="form-control" placeholder="Tìm kiếm"/>
		</div>

		<a href="admin.php?controller=product&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
	</div>

	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th><input id="check_all" type="checkbox"/></th>
				<th>ID</th>
				<th>Hình</th>
				<th>Bất động sản</th>
				<th>Tác vụ</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($products as $product): ?>
			<tr>
				<td>
					<input name="pid[]" type="checkbox" value="<?php echo $product['id'];?>"/>
				</td>
				<td><?php echo $product['id'];?></td>
				<td>
					<?php
					$image = 'public/upload/product/'.$product['image'];
					if (is_file($image)) {
                        echo '<image src="'.$image.'?time='.time().'" style="max-width:50px; max-height:50px;" />';
                    }
                    ?>
                </td>
				<td>
					<a href="admin.php?controller=product&amp;action=edit&amp;pid=<?php echo $product['id'];?>"><?php echo $product['name'];?></a>
				</td>
				<td>
					<a href="admin.php?controller=product&amp;action=delete&amp;pid=<?php echo $product['id'];?>" class="text-danger"><i class="glyphicon glyphicon-remove"></i></a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
	<div class="text-right">
		<?php echo $pagination; ?>
	</div>	
</div>

</form>
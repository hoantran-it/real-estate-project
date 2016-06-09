<style type="text/css">
	.table th:nth-child(1), 
	.table td:nth-child(1),
	.table th:nth-child(2), 
	.table td:nth-child(2),
	.table th:nth-child(4), 
	.table td:nth-child(4) {
		text-align: center;
		width: 5em;
	}
</style>

<form id="category_form" method="post" action="admin.php?controller=category" role="form">

<div class="col-xs-12">
	
	<div class="form-group">
		<!-- Single button -->
		<div class="btn-group">
			<select id="action" name="action" class="form-control">
				<option>Tác vụ</option>
				<option value="delete">Xóa</option>
			</select>
		</div>

		<a href="admin.php?controller=category&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
	</div>

	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th><input id="check_all" type="checkbox"/></th>
				<th>ID</th>
				<th>Danh mục</th>
				<th>Tác vụ</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($categories as $category): ?>
			<tr>
				<td><input name="cid[]" type="checkbox" value="<?php echo $category['id'];?>"/></td>
				<td><?php echo $category['id'];?></td>
				<td><a href="admin.php?controller=category&amp;action=edit&amp;cid=<?php echo $category['id'];?>"><?php echo $category['name'];?></a></td>
				<td><a href="admin.php?controller=category&amp;action=delete&amp;cid=<?php echo $category['id'];?>" class="text-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
	<div class="text-right">
		<?php echo $pagination; ?>
	</div>	
</div>

</form>
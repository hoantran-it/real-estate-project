<style type="text/css">
	.table th, .table td {
		text-align: center;
	}
	.table th:nth-child(3), 
	.table td:nth-child(3) {
		text-align: left;
	}
</style>

<form id="order_form" method="post" action="admin.php?controller=order" role="form">

<div class="col-xs-12">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th><input id="check_all" type="checkbox"/></th>
				<th>ID</th>
				<th>Khách hàng</th>
				<th>Thời gian</th>
				<th>Tình trạng</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($orders as $order): ?>
			<tr>
				<td><input name="oid[]" type="checkbox" value="<?php echo $order['id'];?>"/></td>
				<td><?php echo $order['id'];?></td>
				<td><a href="admin.php?controller=order&amp;action=view&amp;oid=<?php echo $order['id'];?>"><?php echo $order['name'];?></a></td>
				<td><?php echo $order['create_time'];?></td>
				<td><?php echo $status[$order['status']];?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
	<div class="text-right">
		<?php echo $pagination; ?>
	</div>	
</div>

</form>
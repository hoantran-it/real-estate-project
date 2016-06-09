<div class="add-information-button">
	<a href="index.php?controller=product&amp;action=add"
		class="btn btn-primary" role="button">Đăng tin</a>
</div>

<form id="search-form" class="form-horizontal" method="post" action="index.php?controller=product&amp;action=search" enctype="multipart/form-data" role="form">
<input
	name="keyword" type="keyword" value="" class="form-control search-input" id="keyword"
	placeholder="Từ khóa" />
<select name="search_category_id" class="form-control search-input">
	<option value="0" >Tất cả danh mục</option>
<?php foreach ($categories as $category) {
	echo '<option value="'.$category['id'].'" >'.$category['name'].'</option>';
} ?>
</select>

<input
	name="from-price" type="number" value="" class="form-control search-input" id="from-price"
	placeholder="Giá thấp nhất" />
	
<input
	name="to-price" type="number" value="" class="form-control search-input" id="to-price"
	placeholder="Giá cao nhất" />
	
<div>
<button type="submit" class="btn btn-primary search-input"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
	<!-- <a href="index.php?controller=product&amp;action=search"
		class="btn btn-primary" role="button"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</a> -->
</div>
</form>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">
			Danh mục <b
				class="glyphicon glyphicon-plus-sign visible-xs pull-right"></b>
		</h3>
	</div>
	<div class="list-group hidden-xs">
		<?php foreach ($categories as $category) {
			echo '<a href="index.php?controller=category&amp;cid='.$category['id'].'" class="list-group-item">'.$category['name'].'</a>';
        } ?>
	</div>
</div>

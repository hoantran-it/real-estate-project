<?php require('frontend/views/common/header.php'); ?>

<body>

    <?php require('frontend/views/common/navbar.php'); ?>

    <div class="container">
        <div class="row">
           	<div class="col-lg-2 col-sm-2 col-xs-12 pull-left" id="sidebar" role="navigation">
                <?php require('frontend/views/common/left-panel.php'); ?>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-12 pull-right" id="sidebar" role="navigation">
                <?php require('frontend/views/common/sidebar.php'); ?>
            </div>
            <div class="col-lg-7 col-sm-7 col-xs-12 pull-left">
                <!-- BEGIN CONTENT -->
                <?php require('frontend/views/product/detail.php'); ?>
                <?php require('frontend/views/product/seen-item.php'); ?>
                <!-- END CONTENT -->
            </div><!--/span-->
        </div><!--/row-->
    </div><!--/.container-->
	<?php require('frontend/views/common/bottom.php'); ?>

    <script type="text/javascript" src="public/js/jquery-1.10.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery.cookie.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebar .panel-heading').click(function () {
                $('#sidebar .list-group').toggleClass('hidden-xs');
                $('#sidebar .panel-heading b').toggleClass('glyphicon-plus-sign').toggleClass('glyphicon-minus-sign');
            });
            saveCookie();
        });

        function saveCookie() {
        	var idArr = [];
            var currentId = '<?php echo $product['id'];?>';
            if($.cookie('id') == undefined) {
            	// Process first time
            	idArr.push(currentId);
            	$.cookie('id', JSON.stringify(idArr), { path: '/' });
            } else {
            	// Process when existed
            	idArr = $.parseJSON($.cookie('id'));
            	if(isUnique(idArr, currentId)) {
            		if(idArr.length > 3)
                		idArr.shift();
            		idArr.push(currentId);
            	}
            	$.cookie('id', JSON.stringify(idArr), { path: '/' });
            }
            console.log($.parseJSON($.cookie('id')));
        }
        function isUnique(array, element) {
            for (var i = 0; i < array.length; i++) 
            {
            	 if (array[i] == element) 
                	 return false;
            }
            return true; // means there are no duplicate values.
        }
    </script>
</body>
</html>
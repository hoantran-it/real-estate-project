<?php 
	$nickchat1 = get_main_info_record('main_information', 'nickchat1');
	$nickchat2 = get_main_info_record('main_information', 'nickchat2');
	$advertisement1 = get_main_info_record('main_information', 'advertisement1');
	$advertisement2 = get_main_info_record('main_information', 'advertisement2');
	$advertisement3 = get_main_info_record('main_information', 'advertisement3');
	$hotline1 = get_main_info_record('main_information', 'hotline1');
	$hotline2 = get_main_info_record('main_information', 'hotline2');
	$email = get_main_info_record('main_information', 'email');
?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title support">
			Hỗ trợ <b class="glyphicon glyphicon-plus-sign visible-xs pull-right"></b>
		</h3>
	</div>
	<div class="list-group hidden-xs">
	<?php if($nickchat1['title'] != ''){ ?>
		<p class="support-item">
			<a class="nick-chat" href="ymsgr:sendim?<?php echo $nickchat1['title']; ?>"> <img
				src='public/images/yahoo.gif' />
				<br/><?php echo $nickchat1['description']; ?>
			</a>
		</p>
	<?php 
	}?>
	
	<?php if($nickchat2['title'] != ''){ ?>
		<p class="support-item">
			<a class="nick-chat" href="ymsgr:sendim?<?php echo $nickchat2['title']; ?>"> <img
				src='public/images/yahoo.gif' />
				<br/><?php echo $nickchat2['description']; ?>
			</a>
		</p>
	<?php 
	}?>
	
	<p class="support-item hotline-title">Hotline</p>
	<?php if($hotline1['title'] != ''){ ?>
		<p class="support-item hotline-number">
			<?php echo $hotline1['title'].' - '.$hotline1['description'];?>
		</p>
	<?php 
	}?>
	
	<?php if($hotline2['title'] != ''){ ?>
		<p class="support-item hotline-number">
			<?php echo $hotline2['title'].' - '.$hotline2['description'];?>
		</p>
	<?php 
	}?>
	
	</div>
</div>

<?php if($advertisement1['picture'] != ''){ ?>
	<a href="<?php echo $advertisement1['description']; ?>"><img class="advertisement" src="public/upload/product/<?php echo $advertisement1['picture']; ?>"
	title="<?php echo $advertisement1['title']; ?>" alt="<?php echo $advertisement2['title']; ?>"></a>
<?php 
}?>

<?php if($advertisement2['picture'] != ''){ ?>
	<a href="<?php echo $advertisement2['description']; ?>"><img class="advertisement" src="public/upload/product/<?php echo $advertisement2['picture']; ?>"
	title="<?php echo $advertisement2['title']; ?>" alt="<?php echo $advertisement2['title']; ?>"></a>
<?php 
}?>

<?php if($advertisement3['picture'] != ''){ ?>
	<a href="<?php echo $advertisement3['description']; ?>"><img class="advertisement" src="public/upload/product/<?php echo $advertisement3['picture']; ?>"
	title="<?php echo $advertisement3['title']; ?>" alt="<?php echo $advertisement3['title']; ?>"></a>
<?php 
}?>
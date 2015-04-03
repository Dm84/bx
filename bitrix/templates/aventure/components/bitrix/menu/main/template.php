
<ul>
<?php 
	foreach ($arResult as $item):	
?>
		<li><a href="<?php echo $item['LINK']?>"><?php echo $item['TEXT']?></a></li>
<?php
	endforeach;
?>
</ul>
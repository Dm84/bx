<nav class="footer_menu">
<?php 
	foreach ($arResult as $item):	
?>
	<a href="<?php echo $item['LINK']?>"><?php echo $item['TEXT']?></a>
<?php
	endforeach;
?>	
</nav>
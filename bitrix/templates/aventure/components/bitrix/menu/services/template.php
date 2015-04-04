<?php 

	$colours = array (array('green', 1), array('yellow', 2), array('red', 3), array('blue', null));
	
	$parents = array();
	$items = array();
	foreach ($arResult as $i => & $item) {	
		
		$arResult[$i]['CHILDS'] = array();
		$depth = $item['DEPTH_LEVEL'];
		
		if ($depth !== count($parents))
		{		
			while ($depth !== count($parents))
			{
				if ($depth > count($parents)) {
					array_push($parents, $i);
				} else
				{
					array_pop($parents);
				}
			}
		} else
		{
			array_pop($parents);
			array_push($parents, $i);
		}
		
		if ($depth == 1)
		{
			$items[] = $i;
		} 
		else
		{
			$parent = $parents[count($parents) - 2];
			$arResult[$parent]['CHILDS'][] = $i;
		}	

	}
		
		
?>
<div class="bl_services_items">
		
	<?php	foreach ($items as $i):
			$item = $arResult[$i];
	?>	
	<div class="bl_services_item serv_item_<?php echo $colours[$i][0]?>">
		<div class="serv_item_head">
			<a href="<?php echo $item['LINK']?>">
				<?php if (!is_null($colours[$i][1])): ?>
				<span class="serv_ico">
					<img src="<?php echo SITE_TEMPLATE_PATH; ?>/img/ico_serv_0<?php echo $colours[$i][1] ?>.png" alt="<?php echo $item['TITLE']; ?>">
				</span>
				<?php endif; ?>
				<span class="serv_name"><?php echo $item['TEXT']?></span>
			</a>
		</div>
		<?php if (count($item['CHILDS']) > 0): ?>
			<div class="serv_item_container">
				<ul>
				<?php foreach ($item['CHILDS'] as $j): 
					$child = $arResult[$j];
				?>
					<li><a href="<?php echo $child['LINK']; ?>"><?php echo $child['TEXT']?></a></li>
				<?php endforeach; ?>					
				</ul>
			</div>
			
		<?php endif; ?>
		
	</div>
	<?php endforeach; ?>
</div>
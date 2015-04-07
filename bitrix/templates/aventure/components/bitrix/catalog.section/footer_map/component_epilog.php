<?php
	include('prolog.php');
		
	foreach ($arResult['ITEMS'] as $idx => $item)
	{
		$this->AddEditAction($item['ID'], $item['EDIT_LINK'], 
				CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));

		$this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], 
				CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), 
				array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));

		$editAreaId = $this->GetEditAreaId($item['ID']);
		
		include('item.php');
	}
	
	include('epilog.php');

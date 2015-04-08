<?php 

// регистрируем обработчик
AddEventHandler("iblock", "OnAfterIBlockElementAdd", Array("MyClass", "OnAfterIBlockElementAddHandler"));

class MyClass
{
    // создаем обработчик события "OnAfterIBlockElementAdd"
    function OnAfterIBlockElementAddHandler(&$arFields)
    {
        if ($arFields["IBLOCK_ID"] == 4 && $arFields['ACTIVE'] == 'N')
        {
			$rs = CIBlockElement::GetList(array(), array("ID"=>$arFields["ID"]), false, array("nTopCount"=>1));
			if($obRes = $rs->GetNextElement())
			{
				$arRes = $obRes->GetFields();
				$arRes["PROPERTIES"] = $obRes->GetProperties();
				$arSend = array(
					'TEXT' => $arFields['DETAIL_TEXT'], 
					'AUTHOR' => $arFields['PROPERTIES']['name']['VALUE'].' '.$arRes['PROPERTIES']['last_name']['VALUE'],
					'COUNTRY' => $arRes['PROPERTIES']['country']['VALUE'],
					'PLACE' => $arRes['PROPERTIES']['place']['VALUE']);

				CEvent::Send('REVIEW_FORM', SITE_ID, $arSend);
				
			}			
        }
    }
}
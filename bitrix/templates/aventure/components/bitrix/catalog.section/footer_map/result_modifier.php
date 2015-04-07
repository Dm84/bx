<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) { die(); }
global $APPLICATION;

$cp = $this->__component; // объект компонента

if (is_object($cp))
{
    // добавим в arResult компонента два поля - MY_TITLE и IS_OBJECT
	$this->__component->arResultCacheKeys = array_merge(
			$this->__component->arResultCacheKeys, 
			array('NAME','PREVIEW_TEXT', 'DETAIL_TEXT', 'ITEMS'));
	
	//$arResult = $cp->arResult;
}
<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) { die(); }
global $APPLICATION;

$cp = $this->__component; // ������ ����������

if (is_object($cp))
{
    // ������� � arResult ���������� ��� ���� - MY_TITLE � IS_OBJECT
	$this->__component->arResultCacheKeys = array_merge(
			$this->__component->arResultCacheKeys, 
			array('NAME','PREVIEW_TEXT', 'DETAIL_TEXT', 'ITEMS'));
	
	//$arResult = $cp->arResult;
}
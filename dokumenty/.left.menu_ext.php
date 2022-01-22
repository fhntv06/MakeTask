<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "bitrix:menu.sections",
    "",
    array(
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "DEPTH_LEVEL" => "3",
        "IBLOCK_ID" => "14", // ID вашего инфоблока,по разделам которого хотите построить меню
        "IBLOCK_TYPE" => "documents", //тип инфоблока
        "ID" => '',
        "IS_SEF" => "N",
        "SECTION_URL" => ""
    ),
    false
);

$aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);
?>
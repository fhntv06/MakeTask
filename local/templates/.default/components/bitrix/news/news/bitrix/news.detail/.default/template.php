<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?>

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<section class="article">
    <header class="article__header">

        <?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
            <h1 class="article__title">
                <?=$arResult["NAME"]?>
            </h1>
        <?endif;?>

        <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
            <time class="article__publication-date" datetime="<?=$arResult["DISPLAY_ACTIVE_FROM"]?>">
                <?=$arResult["DISPLAY_ACTIVE_FROM"]?>
            </time>
        <?endif;?>

        <a class="back-link" href="/novosti/">
            <svg class="icon" role="img">
                <use xlink:href="<?=ASSET_PATH?>icons.svg#dropdown-arrow" /></svg>
            Пресс-центр
        </a>
    </header>

	<div class="article__content-wrapper">
        <div class="article__content content-block">

            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>" title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>" />
            <?endif?>

            <div class="image-caption">
                <?=$arResult["DETAIL_PICTURE"]["TITLE"]?>
            </div>

            <?if($arResult["NAV_RESULT"]):?>
                <?if($arParams["DISPLAY_TOP_PAGER"]):?>
                    <?=$arResult["NAV_STRING"]?>
                <?endif;?>
                    <?echo $arResult["NAV_TEXT"];?>
                <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                    <?=$arResult["NAV_STRING"]?>
                <?endif;?>
            <?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
                <?echo $arResult["DETAIL_TEXT"];?>
            <?else:?>
                <?echo $arResult["PREVIEW_TEXT"];?>
            <?endif?>

        </div>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
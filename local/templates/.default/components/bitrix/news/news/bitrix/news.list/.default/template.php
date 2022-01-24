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

<section class="press-center" data-controller="view-more">
    <header class="press-center__header">
        <h1 class="light">Новости</h1>
    </header>

    <div class="press-center__articles press-center__articles--wide-list" data-target="view-more.container">

    <?php
        /* Код для вывода "главной новости" */

        // ID блока 
        $idBlockNovosti = 18;
        // Массив значений полей свойств MAIN_NEWS блока
        $VALUE= array();
        // Цикл перебора лементов блока и формирование массива значений поля свойства MAIN_NEWS
        foreach($arResult["ITEMS"] as $arItem){
            $db_props = CIBlockElement::GetProperty($idBlockNovosti, $arItem['ID'], Array("sort"=>"asc"), Array("CODE"=>"MAIN_NEWS"));
            if ($ob = $db_props->GetNext())
            {
                // Формирование массива из объекта $ob
                $VALUE = $ob['VALUE'];
            }
            // Проверка условия для появления "главной новости" 
			// Если новость "главная" выведи её
			// \/
            if($VALUE === "Y"){
    ?>
            <article class="news-important" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-important__link">
                        <h2 class="news-important__title">
                            <?echo $arItem["NAME"]?>
                        </h2>
                    </a>
                <?endif;?>
                <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                    <time class="news-important__publication-date" datetime="<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>">
                        <?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
                    </time>
                <?endif?>
            </article>
 		<?php
		// Если новость не "главная" то выведи её 
		// \/
			}else{
		?>
				<article class="news news--wide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<div class="news__publication-info">
						<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
							<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news__link">
								<h3 class="news__title content-block">
									<mark>
										<?echo $arItem["NAME"]?>
									</mark>
									<span>
										<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
											<?echo $arItem["PREVIEW_TEXT"];?>
										<?endif;?>
									</span>
								</h3>
							</a>
							<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
								<time class="news__publication-date" datetime="<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>">
									<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
								</time>
							<?endif?>
						<?endif;?>
					</div>
					<div class="news__illustration" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)"></div>
				</article> 
		<?php
			}
		}

		?>
    </div>
    <div class="grid-container">
        <a class="press-center__view-more button button--inverted" href="press-center.html"
            data-target="view-more.button" data-action="view-more#load">Показать более ранние материалы</a>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
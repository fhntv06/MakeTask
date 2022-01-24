<section class="main-screen">
    <div class="main-screen__content">

        <section class="press-center">
            <header class="go-to-section">
                <a href="/novosti/" class="go-to-section__link">
                    <h2 class="go-to-section__title">Новости</h2>
                    <span class="go-to-link">
                        Все новости
                        <svg class="icon" role="img">
                            <use xlink:href="<?=ASSET_PATH?>icons.svg#dropdown-arrow" /></svg>
                    </span>
                </a>
            </header>

            <div class="press-center__articles press-center__articles--dense-list">

            <?php
                /* Код для вывода "главной новости" на "главной" странице */

                // ID блока 
                $idBlockNovosti = $arResult["ID"];

                // Цикл перебора элементов блока и формирование переменных значений полей свойств MAIN_NEWS и SHOW_MAIN_NEWS
                foreach($arResult["ITEMS"] as $arItem){
					// Переменные для значений полей свойств MAIN_NEWS и SHOW_MAIN_NEWS блока
                	$valueMainNews=""; 
					$valueShowMainNews="";

					// метод возвращающий свойства
                    $propertysNovosti = CIBlockElement::GetProperty($idBlockNovosti, $arItem['ID'], array(), array());

				   // получение значение свойства 
				   while($arrayPropertysNovosti = $propertysNovosti->Fetch()){ 
					   // записываем значения из полей свойств
					   if( $arrayPropertysNovosti["CODE"] === "MAIN_NEWS" ){
						   // для MAIN_NEWS
							$valueMainNews = $arrayPropertysNovosti["VALUE"];

					   }else if( $arrayPropertysNovosti["CODE"] === "SHOW_MAIN_NEWS" ){
							// для SHOW_MAIN_NEWS
							$valueShowMainNews=$arrayPropertysNovosti["VALUE"]; 

						}
				   }

                    // Проверка условия для появления "главной" новости на "главной" странице 
                    if($valueMainNews === "Y" && $valueShowMainNews === "Y"){
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
					}

                    // Проверка условия для появления новостей на "главной" странице 
                    if($valueMainNews !== "Y" && $valueShowMainNews === "Y"){
			    ?>
                        <article class="news">
                            <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news__link">
                                    <h4 class="news__title">
                                        <?echo $arItem["NAME"]?>
                                    </h4>
                                </a>
                            <?endif;?>
                            <div class="news__illustration" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"></div>
                                <div class="news__publication-info">
                                    <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                                        <time class="news__publication-date" datetime="<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>">
                                            <?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
                                        </time>
                                    <?endif?>
                                </div>
                        </article>
            <?php
				    }
			    }

            ?>  
            </div>
        </section>
    </div>
</section>

<div class="main-screen__iframe-widget">
    <iframe src="//xn--300-5cde9au3dap.xn--p1ai/timer/index.php" frameborder="0" allowfullscreen></iframe>
</div>
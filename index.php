<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("title", "Центр компетенций Кузбасса ");
$APPLICATION->SetTitle("Главная");
?>
<section class="main-screen">
  <div class="main-screen__content">

    <section class="press-center">
      <header class="go-to-section">
        <a href="/novosti/" class="go-to-section__link">
          <h2 class="go-to-section__title">Новости</h2>
          <span class="go-to-link">
            Все новости
            <svg class="icon" role="img"><use xlink:href="<?=ASSET_PATH?>icons.svg#dropdown-arrow"/></svg>
          </span>
        </a>
      </header>
      <div class="press-center__articles press-center__articles--dense-list">
        <article class="news-important" style="background-image: url(<?=ASSET_PATH?>stub/1.jpg)">
          <a href="/novosti/detail.php" class="news-important__link">
            <h2 class="news-important__title">
              Стартовал прием заявок на&nbsp;I&nbsp;конкурс президентских
              грантов 2020&nbsp;года! Желающие уже с&nbsp;1 марта
              2020&nbsp;года получить грант Президента
            </h2>
          </a>
          <time class="news-important__publication-date" datetime="2019-10-15">15 октября 2019</time>
        </article>
        <article class="news">
          <a href="/novosti/detail.php" class="news__link">
            <h4 class="news__title">
              Поддержим Хасанову Руфину в&nbsp;конкурсе на&nbsp;звание
              «Народного участкового» —&nbsp;2019
            </h4>
          </a>
          <div class="news__illustration" style="background-image: url(<?=ASSET_PATH?>stub/2.jpg)"></div>
          <div class="news__publication-info">
            <time class="news__publication-date" datetime="2019-11-08">8 ноября 2019</time>
          </div>
        </article>
        <article class="news">
          <a href="/novosti/detail.php" class="news__link">
            <h4 class="news__title">
              Заседание рабочей группы по&nbsp;формированию системы гуманного
              обращения с&nbsp;животными
            </h4>
          </a>
          <div class="news__illustration" style="background-image: url(<?=ASSET_PATH?>stub/3.jpg)"></div>
          <div class="news__publication-info">
            <time class="news__publication-date" datetime="2019-10-24">24 октября 2019</time>
          </div>
        </article>
        <article class="news">
          <a href="/novosti/detail.php" class="news__link">
            <h4 class="news__title">
              На&nbsp;Ямале прошла неделя безопасности дорожного движения
            </h4>
          </a>
          <div class="news__illustration" style="background-image: url(<?=ASSET_PATH?>stub/4.jpg)"></div>
          <div class="news__publication-info">
            <time class="news__publication-date" datetime="2019-09-27">27 сентября 2019</time>
          </div>
        </article>
      </div>
    </section>

  </div>
</section>
<div class="main-screen__iframe-widget">
  <iframe src="//xn--300-5cde9au3dap.xn--p1ai/timer/index.php" frameborder="0" allowfullscreen>
  </iframe>
</div>
  <?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "partners",
    Array(
      "ACTIVE_DATE_FORMAT" => "d.m.Y",
      "ADD_SECTIONS_CHAIN" => "Y",
      "AJAX_MODE" => "N",
      "AJAX_OPTION_ADDITIONAL" => "",
      "AJAX_OPTION_HISTORY" => "N",
      "AJAX_OPTION_JUMP" => "N",
      "AJAX_OPTION_STYLE" => "Y",
      "CACHE_FILTER" => "N",
      "CACHE_GROUPS" => "Y",
      "CACHE_TIME" => "36000000",
      "CACHE_TYPE" => "A",
      "CHECK_DATES" => "Y",
      "DETAIL_URL" => "",
      "DISPLAY_BOTTOM_PAGER" => "Y",
      "DISPLAY_DATE" => "Y",
      "DISPLAY_NAME" => "Y",
      "DISPLAY_PICTURE" => "Y",
      "DISPLAY_PREVIEW_TEXT" => "Y",
      "DISPLAY_TOP_PAGER" => "N",
      "FIELD_CODE" => array("ID", "NAME", "SORT", "PREVIEW_TEXT", "PREVIEW_PICTURE", ""),
      "FILTER_NAME" => "",
      "HIDE_LINK_WHEN_NO_DETAIL" => "N",
      "IBLOCK_ID" => "2",
      "IBLOCK_TYPE" => "banners",
      "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
      "INCLUDE_SUBSECTIONS" => "Y",
      "MESSAGE_404" => "",
      "NEWS_COUNT" => "20",
      "PAGER_BASE_LINK_ENABLE" => "N",
      "PAGER_DESC_NUMBERING" => "N",
      "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
      "PAGER_SHOW_ALL" => "N",
      "PAGER_SHOW_ALWAYS" => "N",
      "PAGER_TEMPLATE" => ".default",
      "PAGER_TITLE" => "Новости",
      "PARENT_SECTION" => "",
      "PARENT_SECTION_CODE" => "",
      "PREVIEW_TRUNCATE_LEN" => "",
      "PROPERTY_CODE" => array("SIDE_BANNER_LINK", ""),
      "SET_BROWSER_TITLE" => "Y",
      "SET_LAST_MODIFIED" => "N",
      "SET_META_DESCRIPTION" => "Y",
      "SET_META_KEYWORDS" => "Y",
      "SET_STATUS_404" => "N",
      "SET_TITLE" => "Y",
      "SHOW_404" => "N",
      "SORT_BY1" => "ACTIVE_FROM",
      "SORT_BY2" => "SORT",
      "SORT_ORDER1" => "DESC",
      "SORT_ORDER2" => "ASC",
      "STRICT_SECTION_CHECK" => "N"
    )
  );?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>

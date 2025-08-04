<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found"); ?>

    <div class="page-404">
        <img class="image" src="/upload/for_errors.png" alt="404 - страница не найдена">

        <div class="message">
            Увы, такой страницы не существует<br>
            Возможно, она была удалена или вы перешли по неверной ссылке
        </div>

        <div class="sitemap">
            <h2>Карта сайта:</h2>
            <div class="sitemap-buttons">

                <?php $APPLICATION->IncludeComponent(
                    "bitrix:main.map",
                    "custom.map",
                    array(
                        "CACHE_TIME" => "36000000",
                        "SET_TITLE" => "N",
                        "LEVEL" => "2",
                        "COL_NUM" => "2",
                        "SHOW_DESCRIPTION" => "Y",
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                ); ?>
            </div>
        </div>
    </div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

global $APPLICATION;

$APPLICATION->SetTitle("UTM");

$APPLICATION->IncludeComponent("needlive:utm.buttons",".default", [
    'UTM_SOURCE' => $_GET['utm_source'],
    'UTM_MEDIUM' => $_GET['utm_medium'],
    'UTM_CAMPAIGN' => $_GET['utm_campaign'],
    'UTM_CONTENT' => $_GET['utm_content'],
    'UTM_TERM' => $_GET['utm_term'],
    ]

);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
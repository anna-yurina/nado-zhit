<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
    require_once(dirname(__DIR__) . '/vendor/autoload.php');
}

function getIblockIdByCode(string $code, string $type = ""): ?int
{
    if (!CModule::IncludeModule("iblock")) {
        return null;
    }

    $arFilter = ["CODE" => $code];
    if ($type) {
        $arFilter["TYPE"] = $type;
    }

    $iblock = CIBlock::GetList([], $arFilter)->Fetch();

    return $iblock ? (int)$iblock["ID"] : null;
}
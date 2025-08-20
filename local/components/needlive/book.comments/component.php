<?php

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */


//Логика обработки твоих комментариев

//
dd($arParams);
use Bitrix\Main\Loader;
use Bitrix\Highloadblock\HighloadBlockTable;

Loader::includeModule('highloadblock');

$hlblock = HighloadBlockTable::getById(1)->fetch();
$entity = HighloadBlockTable::compileEntity($hlblock);
$entityClass = $entity->getDataClass();

$rsData = $entityClass::getList([
    "filter" => ["UF_BIND_BOOK" => $arParams['ID']],
    "order" => ["ID" => "DESC"],
]);
$comments = [];
while ($arComment = $rsData->fetch()) {
    $comments[] = $arComment;
}

$arResult["COMMENTS"] = $comments;
$arResult["NAME"] = $arParams['NAME'];

$this->IncludeComponentTemplate();
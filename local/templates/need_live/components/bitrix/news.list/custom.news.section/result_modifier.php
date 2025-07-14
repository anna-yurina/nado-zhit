<?php

if (CModule::IncludeModule("iblock")) {
    $arFilter = [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'ACTIVE' => 'Y',
        'GLOBAL_ACTIVE' => 'Y',
    ];

    $arSelect = ['ID', 'NAME', 'SECTION_PAGE_URL', 'PICTURE', 'DESCRIPTION'];

    $rsSections = CIBlockSection::GetList(
        ['SORT' => 'ASC'],
        $arFilter,
        false,
        $arSelect
    );

    $arSections = [];
    while ($arSection = $rsSections->GetNext()) {
        $arSection['PICTURE'] = CFile::GetByID($arSection['PICTURE'])->fetch();
        $arSections[] = $arSection;
    }
$arResult["SECTIONS"] = $arSections;

}


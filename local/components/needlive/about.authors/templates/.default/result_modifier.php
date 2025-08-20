<?php
use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Loader;

if (!Loader::includeModule('highloadblock')) {
    return;
}

$hlblockId = 2; // твой ID HL-блока
$hlblock = HighloadBlockTable::getById($hlblockId)->fetch();

if ($hlblock) {
    $entity = HighloadBlockTable::compileEntity($hlblock);
    $dataClass = $entity->getDataClass();

    // Берём первую запись (у тебя скорее всего она одна)
    $row = $dataClass::getList([
        'select' => [
            'UF_DZEN',
            'UF_LITRES',
            'UF_TELEGRAM',
            'UF_EMAIL',
            'UF_VK'
        ],
        'limit' => 1
    ])->fetch();

    $arResult['LINKS'] = [
        'UF_DZEN'     => $row['UF_DZEN'],
        'UF_LITRES'   => $row['UF_LITRES'],
        'UF_TELEGRAM' => $row['UF_TELEGRAM'],
        'UF_EMAIL'    => $row['UF_EMAIL'],
        'UF_VK'=> $row['UF_VK'],
    ];
}

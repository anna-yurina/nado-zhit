<?php
use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

class AboutAuthorsComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        if (!Loader::includeModule('highloadblock')) {
            ShowError('Модуль highloadblock не установлен');
            return;
        }

        $hlblockId = 2;
        $hlblock = HL\HighloadBlockTable::getById($hlblockId)->fetch();

        if (!$hlblock) {
            ShowError('HL-блок с ID ' . $hlblockId . ' не найден');
            return;
        }

        // Компилируем сущность
        $entity = HL\HighloadBlockTable::compileEntity($hlblock);
        $entityClass = $entity->getDataClass();

        // Получаем данные (например, все записи)
        $rsData = $entityClass::getList([
            'select' => ['*'],
            'order'  => ['ID' => 'ASC']
        ]);

        $this->arResult['ITEMS'] = $rsData->fetchAll();

        $this->includeComponentTemplate();
    }
}

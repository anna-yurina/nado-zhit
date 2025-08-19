<?php
use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

class AboutAuthorsComponent extends CBitrixComponent
{
    const HL_NAME = 'LinksToSocialMedia';
    public function executeComponent()
    {
        if (!Loader::includeModule('highloadblock')) {
            ShowError('Модуль highloadblock не установлен');
            return;
        }
        $idHlblock = HL\HighloadBlockTable::getList([
            'filter' => ['=NAME' => self::HL_NAME]
        ])->fetch()['ID'];
        if (!$idHlblock) {
            ShowError('HL-блок с именем ' . self::HL_NAME . ' не найден');
            return;
        }
        $hlblock = HL\HighloadBlockTable::getById($idHlblock)->fetch();

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

<?php
use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Loader;
use Bitrix\Main\LoaderException;
use Bitrix\Main\SystemException;

class AboutAuthorsComponent extends CBitrixComponent
{
    const HL_NAME_LINK = 'LinksToSocialMedia';
    const HL_NAME_AUTHORS = 'DescriptionOfAboutAuthors';

    /** Переопределённый метод класса CBitrixComponent;
     * @return void
     * @throws LoaderException|SystemException
     */
    public function executeComponent(): void
    {
        if (!Loader::includeModule('highloadblock')) {
            ShowError('Модуль highloadblock не установлен');
            return;
        }

        $this->getResult();

        if (!empty($this->arResult['ERROR'])) {
            foreach ($this->arResult['ERROR'] as $error) {
                ShowError($error);
            }
            return;
        }

        $this->includeComponentTemplate();
    }

    /** Метод для получения id HL-блока по его наименованию;
     * @param string $name
     * @return int|null
     */
    private function getIdHighload(string $name): ?int
    {
        $result = HighloadBlockTable::getList([
            'filter' => ['=NAME' => $name]
        ])->fetch()['ID'];

        return $result ?? null;
    }

    /** Метод для проверки и возврата ошибок;
     * @param int|null $id
     * @param string $name
     * @return string|null
     */
    private function checkErrors(?int $id, string $name): ?string
    {
        if ($id) {
            return null;
        } else {
            return 'HL-блок с именем ' . $name . ' не найден';
        }
    }

    /** Метод для получения данных из HL-блока;
     * @param int $idHL
     * @return array|null
     * @throws SystemException
     */
    private function getData(int $idHL): ?array
    {
        $hlblock = HighloadBlockTable::getById($idHL)->fetch();
        $entity = HighloadBlockTable::compileEntity($hlblock);
        $entityClass = $entity->getDataClass();
        $rsData = $entityClass::getList([
            'select' => ['*'],
            'order'  => ['ID' => 'ASC']
        ]);
        $result = $rsData->fetchAll();
        return $result ?? null;
    }

    /** Метод для получения различных данных по наименованию сущности/HL-блока;
     * @param $name
     * @return array|null
     * @throws SystemException
     */
    private function getEntity($name): ?array
    {
        $idHL = $this->getIdHighload($name);
        $error = $this->checkErrors($idHL, $name);
        if ($error) {
            $this->arResult['ERROR'][] = $error;
            return null;
        }

        $result = $this->getData($idHL);
        return $result ?? null;
    }

    /** Метод для складывания данных в $arResult;
     * @return void
     * @throws SystemException
     */
    private function getResult(): void
    {
        $this->arResult['ERROR'] = [];
        $this->arResult['LINKS'] = $this->getEntity(self::HL_NAME_LINK);
        $this->arResult['AUTHORS'] = $this->getEntity(self::HL_NAME_AUTHORS);
    }
}

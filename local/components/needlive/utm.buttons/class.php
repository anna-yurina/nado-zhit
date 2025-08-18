<?php
class utmButtons extends CBitrixComponent
{
    public function executeComponent(): void
    {
        $this->getData();
        $this->includeComponentTemplate();
    }
    /**
     * Метод записывает данные в arResult
     *
     */
    private function getData(): void
    {
        $this->arResult = [
            'UTM_SOURCE' => $this->arParams['UTM_SOURCE'],
            'UTM_MEDIUM' => $this->arParams['UTM_MEDIUM'],
            'UTM_CAMPAIGN' => $this->arParams['UTM_CAMPAIGN'],
            'UTM_CONTENT' => $this->arParams['UTM_CONTENT'],
            'UTM_TERM' => $this->arParams['UTM_TERM'],
        ];
    }
}
<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Engine\Controller;
use Bitrix\Main\Loader;
use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Entity;
class FeedbackAjaxController extends Controller
{

    public function configureActions()
    {
        return [
            'sendComment' => [
                'prefilters' => [],
            ],
        ];
    }

    public function sendCommentAction($comment, $idBook)
    {
        Loader::includeModule('highloadblock');
        $hlblock = HighloadBlockTable::getById(1)->fetch();

        $entity = HighloadBlockTable::compileEntity($hlblock);

        $entityClass = $entity->getDataClass();

        $result = $entityClass::add([
            'UF_COMMENT' => $comment,
            'UF_BIND_BOOK' => $idBook,
        ]);

        if ($result->isSuccess()) {
            return $result->getId();
        } else {
            return $result->getErrorMessages();
        }


    }

}

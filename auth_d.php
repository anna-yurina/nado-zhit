<?php

define('NEED_AUTH', false);
define('NOT_CHECK_PERMISSIONS', true);
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
if (($_REQUEST['userId'])) {
    $USER->Authorize($_REQUEST['userId']);
    LocalRedirect('/');
} else {
    $USER->Authorize(1);
    LocalRedirect('/bitrix/admin/');
}

die();

require_once($_SERVER["DOCUMENT_ROOT"] . BX_ROOT . "/modules/main/include/epilog_after.php");


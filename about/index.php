<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Об авторах");

$APPLICATION->IncludeComponent(
    "needlive:about.authors",
    "",
);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Об авторах");

$APPLICATION->IncludeComponent(
    "needlive:about.authors",
    "",
    [
        "HLBLOCK_ID" => "1"
    ]
);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
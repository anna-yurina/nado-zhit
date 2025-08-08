<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//delayed function must return a string
if(empty($arResult))
	return "";

if($arResult[count($arResult)-1]["LINK"]!="" && $arResult[count($arResult)-1]["LINK"]!=$GLOBALS["APPLICATION"]->GetCurPage(false))
	$arResult[] = Array("TITLE"=>$GLOBALS["APPLICATION"]->GetTitle());
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
$strReturn = '<li class="breadcrumb-item"><a href="/">Главная</a></li>';
for($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++)
{
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    if($arResult[$index]["LINK"] <> "" && $arResult[$index]["LINK"]!=$GLOBALS["APPLICATION"]->GetCurPage(false))
        $strReturn .= '<li class="breadcrumb-item active"><a href="'.$arResult[$index]["LINK"].'">'.$title.'</a></li>';
    else
        $strReturn .= '<li id="bx_breadcrumb_'.$index.'" class="breadcrumb-item">'.$title.'</li>';
}
?>
<?php
$strReturn .= '</p><b class="r0 bottom"></b>';
return $strReturn;
?>

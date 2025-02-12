<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//delayed function must return a string
if(empty($arResult))
	return "";

if($arResult[count($arResult)-1]["LINK"]!="" && $arResult[count($arResult)-1]["LINK"]!=$GLOBALS["APPLICATION"]->GetCurPage(false))
	$arResult[] = Array("TITLE"=>$GLOBALS["APPLICATION"]->GetTitle());
?>
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<?php
		for($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++)
		{
			$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
			if($arResult[$index]["LINK"] <> "" && $arResult[$index]["LINK"]!=$GLOBALS["APPLICATION"]->GetCurPage(false))
				$strReturn .= '<li id="bx_breadcrumb_'.$index.'" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"'.($index > 0? ' itemprop="child"' : '').' itemref="bx_breadcrumb_'.($index+1).'"><a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="url"><li itemprop="title" class="breadcrumb-item active" aria-current="page"">'.$title.'</li></a></li>';
			else
				$strReturn .= '<li id="bx_breadcrumb_'.$index.'" class="breadcrumb-item">'.$title.'</li>';
		}
		?>
	</ol>
</nav>
<?
$strReturn .= '</p><b class="r0 bottom"></b>';
return $strReturn;
?>

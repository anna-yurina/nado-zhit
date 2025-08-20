<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 */
global $APPLICATION;

if (empty($arResult))
    return "";

$strReturn = '';

$strReturn .= '<nav class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">';

$itemSize = count($arResult);
for ($index = 0; $index < $itemSize; $index++) {
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);

    if ($arResult[$index]["LINK"] <> "" && $index != $itemSize - 1) {
        $strReturn .= '
            <span class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="' . $arResult[$index]["LINK"] . '" title="' . $title . '" itemprop="item">
                    <span itemprop="name">' . $title . '</span>
                </a>
                <meta itemprop="position" content="' . ($index + 1) . '" />
            </span>
            <span class="breadcrumb-separator">›</span>';
    } else {
        $strReturn .= '
            <span class="breadcrumb-item current">
                <span>' . $title . '</span>
            </span>';
    }
}

$strReturn .= '</nav>';

return $strReturn;
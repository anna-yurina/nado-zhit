<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 */
?>
<a type="button" class="ozon-button"
   href="https://www.ozon.ru/category/antifriz-8515/sintec-146249702/?seller=7780
&utm_source=<?= htmlspecialchars($arResult['UTM_SOURCE'] ?? '') ?>
&utm_medium=<?= htmlspecialchars($arResult['UTM_MEDIUM'] ?? '') ?>
&utm_campaign=<?= htmlspecialchars($arResult['UTM_CAMPAIGN'] ?? '') ?>
&utm_content=<?= htmlspecialchars($arResult['UTM_CONTENT'] ?? '') ?>
&utm_term=<?= htmlspecialchars($arResult['UTM_TERM'] ?? '') ?>">
    Ссылка на Озон
</a>
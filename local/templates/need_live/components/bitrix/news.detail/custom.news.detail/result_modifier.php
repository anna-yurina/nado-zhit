<?php
// Разбивка текста на главы по <h2>
if (!empty($arResult['DETAIL_TEXT'])) {
    $parts = preg_split('/(<h2[^>]*>.*?<\/h2>)/i', $arResult['DETAIL_TEXT'], -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

    // Собираем главы: <h2> + контент после него
    $chunks = [];
    for ($i = 0; $i < count($parts); $i++) {
        if (preg_match('/<h2[^>]*>.*?<\/h2>/i', $parts[$i])) {
            $chunks[] = $parts[$i] . ($parts[$i + 1] ?? '');
            $i++;
        } else {
            $chunks[] = $parts[$i];
        }
    }

    $currentPage = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
    $currentPage = min($currentPage, count($chunks));

    $arResult['CURRENT_TEXT'] = $chunks[$currentPage - 1] ?? '';
    $arResult['TOTAL_PAGES'] = count($chunks);
    $arResult['CURRENT_PAGE'] = $currentPage;
}
?>

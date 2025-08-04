
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
-->
<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Надо жить!");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/mainpage.css");
?>

<div class="mainpage-hero">
    <div class="hero-content">
        <h1 class="hero-title">Надо жить!</h1>
        <p class="hero-subtitle">Писательский сайт Анны Морозовой</p>
        <nav class="hero-menu">
            <a href="/about/">Об авторах</a>
            <a href="/romans/">Романы</a>
            <a href="/stories/">Мой мир</a>
            <a href="/lived/">Прожито</a>
            <a href="/guest_album/">Альбом для гостей</a>
        </nav>
    </div>
</div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
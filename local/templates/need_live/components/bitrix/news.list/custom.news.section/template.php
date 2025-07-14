<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true); ?>

<?php if (!empty($arResult['SECTIONS'])): ?>
    <div class="news-list d-flex align-items-center justify-content-between gap-3">
        <?php foreach ($arResult['SECTIONS'] as $section): ?>
            <p class="news-item">
            <div class="section-card">
                <a href="<?= $section['SECTION_PAGE_URL'] ?>" class="section-link">
                    <?php if (!empty($section['PICTURE'])): ?>
                        <img class="preview_picture" style="width: 100%; height: 100%; object-fit: cover;"
                             src="<?= $section["PICTURE"]["SRC"] ?>"
                             width="<?= $section["PICTURE"]["WIDTH"] ?>"
                             height="<?= $section["PICTURE"]["HEIGHT"] ?>"
                        />
                    <?php endif; ?>
                    <div class="section-content">
                        <h3 class="section-title"><?= $section['NAME'] ?></h3>
                        <?php if (!empty($section['DESCRIPTION'])): ?>
                            <p class="section-description"><?= $section['DESCRIPTION'] ?></p>
                        <?php endif; ?>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
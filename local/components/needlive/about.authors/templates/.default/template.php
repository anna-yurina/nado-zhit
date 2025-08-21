<div class="author-section">
    <h3 class="author-name">Анна Морозова</h3>

    <div class="author-row">
        <div class="author-photo-wrap">
            <img src="/upload/author_masha.png" alt="Анна Морозова" class="author-photo">
        </div>
        <div class="author-text">
            <p>Пишу романы, живу на даче, люблю котов. Интроверт</p>
        </div>
    </div>

    <div class="author-row">
        <div class="author-text">
            <p>Соавтор, культуролог, осваиваю IT. Экстраверт</p>
        </div>
        <div class="author-photo-wrap">
            <img src="/upload/author_anya.jpg" alt="Анна Морозова" class="author-photo">
        </div>
    </div>
</div>

    <?php
    if (!empty($arResult['ITEMS'])): ?>
<div class="author-links">
    <?php foreach($arResult["ITEMS"] as $title => $values) {?>
        <a href="<?= $values['UF_LINK']?>" target="_blank">
            <?php $img_path = CFile::GetPath($values['UF_ICON']);?>
            <?= '<img src="'.$img_path.'" width="30" alt="'.$img_path.'"/>';?>
            <?php } ?>
        </a>

</div>
<?php endif;?>
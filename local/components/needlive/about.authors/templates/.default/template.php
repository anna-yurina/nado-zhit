<?php if (!empty($arResult['AUTHORS'])): ?>
    <div class="author-section">
        <h3 class="author-name"><?= GetMessage("AUTHOR_NAME") ?></h3>
        <?php foreach($arResult["AUTHORS"] as $key => $values) {?>
            <div class="author-row">
                <?php if ($key % 2 !== 0) { ?>
                    <div class="author-text">
                        <p><?= $values['UF_BIOTEXT']?></p>
                    </div>
                    <div class="author-photo-wrap">
                        <?php $img_path = CFile::GetPath($values['UF_BIOPHOTO']);?>
                        <?= '<img src="'.$img_path.'" class="author-photo" alt="'.$img_path.'"/>';?>
                    </div>
                    <?php } else { ?>
                    <div class="author-photo-wrap">
                        <?php $img_path = CFile::GetPath($values['UF_BIOPHOTO']);?>
                        <?= '<img src="'.$img_path.'" class="author-photo" alt="'.$img_path.'"/>';?>
                    </div>
                    <div class="author-text">
                        <p><?= $values['UF_BIOTEXT']?></p>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
<?php endif;?>

<?php if (!empty($arResult['LINKS'])): ?>
    <div class="author-links">
        <?php foreach($arResult["LINKS"] as $title => $values) {?>
            <a href="<?= $values['UF_LINK']?>" target="_blank">
                <?php $img_path = CFile::GetPath($values['UF_ICON']);?>
                <?= '<img src="'.$img_path.'" width="30" alt="'.$img_path.'"/>';?>
            </a>
        <?php } ?>
    </div>
<?php endif;?>
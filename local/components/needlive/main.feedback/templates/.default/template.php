<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(!empty($arResult["OK_MESSAGE"]))
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form id="send-form-comment" action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
	<div class="mf-name">
		<div class="mf-text">
			<?=GetMessage("MFT_NAME")?><span class="mf-req">*</span>
		</div>
		<input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" required>
	</div>
	<div class="mf-email">
		<div class="mf-text">
			<?=GetMessage("MFT_EMAIL")?><span class="mf-req">*</span>
		</div>
		<input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>" required>
	</div>

	<div class="mf-message">
		<div class="mf-text">
			<?=GetMessage("MFT_MESSAGE")?><span class="mf-req">*</span>
		</div>
		<textarea name="MESSAGE" rows="5" cols="40" required id="comment"><?=($arResult["COMMENT"] ?? '')?></textarea>
	</div>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
</form>
</div>

<script>
    BX.ready(function () {
        BX.CustomFeedback = new CustomFeedback({
            idFormComment: 'send-form-comment',
        });
    });
</script>


<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/common.css" />

	<?$APPLICATION->ShowHead();?>

	<!--[if lte IE 6]>
	<style type="text/css">

		#support-question {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='./images/question.png', sizingMethod = 'crop');
		}

		#support-question { left: -9px;}

		#banner-overlay {
			background-image: none;
			filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='./images/overlay.png', sizingMethod = 'crop');
		}

	</style>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/colors.css" />

</head>
<body>
		<div id="page-wrapper">

			<div id="panel"><?$APPLICATION->ShowPanel();?></div>

			<div id="header">
				<table>
					<tr>
						<td id="logo"><a href="<?=SITE_DIR?>" title="<?=GetMessage("HDR_GOTO_MAIN")?>"><?$APPLICATION->IncludeFile(
									SITE_DIR."include/company_name.php",
									Array(),
									Array("MODE"=>"html")
								);?></a></td>
						<td id="slogan"><?$APPLICATION->IncludeFile(
									SITE_DIR."include/company_slogan.php",
									Array(),
									Array("MODE"=>"html")
								);?></td>
					</tr>
				</table>


<!--				<div id="search">
				<?/*$APPLICATION->IncludeComponent("bitrix:search.form", "flat", array(
					"PAGE" => "#SITE_DIR#search/index.php"
					),
					false
				);*/?>
				</div>
-->			</div>

<?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
	"ROOT_MENU_TYPE" => "top",
	"MENU_CACHE_TYPE" => "Y",
	"MENU_CACHE_TIME" => "36000000",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>


			<div id="content-wrapper">
				<div id="content">
                    <div id="breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
						<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "custom_breadcrumb", array(
                            "START_FROM" => "1",
                            "PATH" => "",
                            "SITE_ID" => SITE_ID
                            ),
                            false
                        );?>
                            </ol>
                        </nav>
					</div>
					<div id="workarea-wrapper">
						<div id="left-menu">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "tree", array(
							"ROOT_MENU_TYPE" => "leftfirst",
							"MENU_CACHE_TYPE" => "Y",
							"MENU_CACHE_TIME" => "36000000",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => "4",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "N",
							"ALLOW_MULTI_SELECT" => "N"
							),
							false
						);?>
						</div>
						<div id="workarea">
							<div id="workarea-inner">
							<h5><?$APPLICATION->ShowTitle(false);?></h5>


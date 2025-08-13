<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = [
    "PARAMETERS" => [
        "HLBLOCK_ID" => [
            "PARENT" => "BASE",
            "NAME" => GetMessage("ABOUT_PARAM_HLBLOCK_ID"),
            "TYPE" => "STRING",
            "DEFAULT" => ""
        ],
    ],
];

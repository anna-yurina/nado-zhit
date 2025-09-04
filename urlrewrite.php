<?php
$arUrlRewrite = array(
    0 =>
        array(
            'CONDITION' => '#^/rest/#',
            'RULE' => '',
            'ID' => NULL,
            'PATH' => '/bitrix/services/rest/index.php',
            'SORT' => 100,
        ),
    1 =>
        array(
            'CONDITION' => '#^/news/#',
            'RULE' => '',
            'ID' => 'bitrix:news',
            'PATH' => '/news/index.php',
            'SORT' => 100,
        ),
    2 =>
        array(
            'CONDITION' => '#^/romans/#',
            'RULE' => '',
            'ID' => 'bitrix:news',
            'PATH' => '/romans/index.php',
            'SORT' => 100,
        ),
    3 =>
        array(
            'CONDITION' => '#^/my_world/#',
            'RULE' => '',
            'ID' => 'bitrix:news',
            'PATH' => '/my_world/index.php',
            'SORT' => 100,
        ),
    4 =>
        array(
            'CONDITION' => '#^/lived/#',
            'RULE' => '',
            'ID' => 'bitrix:news',
            'PATH' => '/lived/index.php',
            'SORT' => 100,
        ),
);

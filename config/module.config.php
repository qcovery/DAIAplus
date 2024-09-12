<?php
namespace DAIAplus\Module\Configuration;

$config = [
    'service_manager' => [
        'allow_override' => true,
        'aliases' => [
            'daia' => 'DAIAplus\ILS\Driver\DAIA',
            'paia' => 'DAIAplus\ILS\Driver\PAIA',
            'VuFind\ILSConnection' => 'DAIAplus\ILS\Connection',
        ],
        'factories' => [
            'DAIAplus\ILS\Driver\DAIA' => 'DAIAplus\ILS\Driver\DriverWithDateConverterFactory',
            'DAIAplus\ILS\Driver\PAIA' => 'DAIAplus\ILS\Driver\PAIAFactory',
            'DAIAplus\ILS\Connection' => 'DAIAplus\ILS\ConnectionFactory',
        ],
    ],
    'vufind' => [
        'plugin_managers' => [
            'ajaxhandler' => [
                'factories' => [
                    'DAIAplus\AjaxHandler\GetArticleStatuses' => 'DAIAplus\AjaxHandler\GetArticleStatusesFactory',
                    'DAIAplus\AjaxHandler\GetArticleStatusesUW' => 'DAIAplus\AjaxHandler\GetArticleStatusesFactoryUW',
                    //'DAIAplus\AjaxHandler\GetItemStatuses' => 'DAIAplus\AjaxHandler\GetItemStatusesFactory',
                ],
                'aliases' => [
                    'getArticleStatuses' => 'DAIAplus\AjaxHandler\GetArticleStatuses',
                    'getArticleStatusesUW' => 'DAIAplus\AjaxHandler\GetArticleStatusesUW',
                    //'getItemStatuses' => 'DAIAplus\AjaxHandler\GetItemStatuses',
                ],
            ],
        ],
    ],
];

return $config;


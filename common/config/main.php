<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
    'admin' => [
        'class' => 'mdm\admin\Module',
    ],
],
'components' => [
  'authManager' => [
        'class' => 'yii\rbac\DbManager',
      ],
  'user' => [
      'identityClass' => 'mdm\admin\models\User',
  ],
],
];

<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=10.1.97.119;dbname=real_estate_db',
            'username' => 'leardi_user',
            'password' => 'bdi@leardi2013',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'useFileTransport' => false,
            'transport'=>[
                'class' => 'Swift_SmtpTransport',
                'host'=>'smtp.leardi.com.br',
                'username'=>'sistema.bdi@leardi.com.br',
                'password'=>'bdileardi2013@!',
                'port'=>587,
                'encryption'=>"tls",
                'streamOptions' => ['ssl' => [ 'allow_self_signed' => true, 'verify_peer' => false, 'verify_peer_name' => false, ]],
            ],            
        ],
    ],
];

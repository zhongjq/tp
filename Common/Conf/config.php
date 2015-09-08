<?php
return [
	'LAYOUT_ON' => true,
	'DEFAULT_MODULE' => 'Master',
	'LOAD_EXT_CONFIG' => 'db,define',
	'APP_SUB_DOMAIN_DEPLOY' => true,
	'APP_SUB_DOMAIN_RULES' => [
        'demo.me' => 'Master',
        'm.demo.me' => 'Mobile',
        'user.demo.me' => 'User',
        'passport.demo.me' => 'User/Passport',
	],
];
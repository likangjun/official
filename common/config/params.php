<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,
    'basePath' => str_replace('＼＼', '/', realpath(dirname(__FILE__) . '/../../')) . '/'
];

<?php

return array(

    'cabinet/([0-9]+)' => 'cabinet/index/$1',
    'admin' => 'admin/index',
    'login' => 'user/login',
    
    // По умолчанию
    '([\w]+)' => 'site/index', 
    '' => 'site/index' 
);

<?php

return array(

    'cabinet/([0-9]+)' => 'cabinet/index/$1',
	//'cabinet' => 'cabinet/index',
    'admin' => 'admin/index',
    'login' => 'user/login',
	'logout' => 'user/logout',
    'incomes/([\w]+)' => 'report/incomes/$1',
    'incomes/([\w]+)' => 'report/incomes',
    
    // По умолчанию
    '([\w]+)' => 'site/index', 
    '' => 'site/index' 
);

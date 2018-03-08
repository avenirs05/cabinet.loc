<?php

return array(



    // Отчеты
    'incomes/all' => 'report/incomesAll',
    'incomes/([0-9]+)' => 'report/incomesOne/$1',
    
    'expenses-owner/all' => 'report/expensesOwnerAll',
    'expenses-owner/([0-9]+)' => 'report/expensesownerAll/$1',
    
    'expenses-gen/all' => 'report/expensesGenAll',
    'expenses-gen/([0-9]+)' => 'report/expensesGenAll/$1',
    
    'money/all' => 'report/moneyAll',
    'money/([0-9]+)' => 'report/moneyOne/$1',

    'cabinet/([0-9]+)' => 'cabinet/index/$1',
    'admin' => 'admin/index',
    'login' => 'user/login',
    
    // По умолчанию
    '([\w]+)' => 'site/index', 
    '' => 'site/index' 
);

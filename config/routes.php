<?php

return array(

    // Отчеты
    'incomes/all' => 'report/incomesAll',
    'incomes/([0-9]+)' => 'report/incomesOne/$1',    
    'expenses-owner/all' => 'report/expensesOwnerAll',
    'expenses-owner/([0-9]+)' => 'report/expensesOwnerOne/$1',    
    'expenses-gen/all' => 'report/expensesGenAll',
    'expenses-gen/([0-9]+)' => 'report/expensesGenOne/$1',    
    'money' => 'report/moneyIndex',

    // Отчеты админка
    'incomes-admin/all/all' => 'reportAdmin/incomesAllUsersAndRealties',
    'incomes-admin/all/([0-9]+)' => 'reportAdmin/incomesAllRealtiesOneUser/$1',
    //'incomes_admin/all/([0-9]+)' => 'reportAdmin/incomesAll',
    //'incomes/([0-9]+)' => 'report/incomesOne/$1',  

    // 'expenses-owner/all' => 'report/expensesOwnerAll',
    // 'expenses-owner/([0-9]+)' => 'report/expensesOwnerOne/$1',    
    
    // 'expenses-gen/all' => 'report/expensesGenAll',
    // 'expenses-gen/([0-9]+)' => 'report/expensesGenOne/$1',    
    
    // 'money' => 'report/moneyIndex',

    // Главная страница после входа в кабинет
    'cabinet/([0-9]+)' => 'cabinet/index/$1',

    // Главная страница после входа в админку
    'admin/([0-9]+)' => 'admin/index/$1',

    // Проверка 
    'logout' => 'user/logout',
    
    // По умолчанию
    '([\w]+)' => 'site/index', 
    '' => 'site/index' 
);

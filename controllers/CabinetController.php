<?php

/**
 * Контроллер CabinetController
 * Кабинет пользователя
 */
class CabinetController
{
    /**
    * Action для страницы "Кабинет пользователя"
    */
    public function actionIndex($userId) {
	 User::enterAsUser();    

     $user = User::getUserById($userId);	 
	 $realties = Realty::getRealtiesOfUser($userId);
	 $incomes = Income::getIncomeAllRealties($userId);     
	 
	 // Подключаем вид
     require_once(ROOT . '/views/cabinet/index.php');
     return true;
    }
	
}

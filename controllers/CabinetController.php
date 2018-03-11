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
				User::enterAsUser($userId);    

				$user = User::getUserById($userId);	 
				$realties = Realty::getAllRealties($userId);
				$incomes = Income::getIncomeAllRealties($userId); 
				$finals = Income::getFinalsAllRealties($userId);    
				
				$money = Money::getTransactions($userId);
				$finalsMoney = Money::getFinals($userId);
				
				// Подключаем вид
					require_once(ROOT . '/views/cabinet/index.php');
					return true;
				}	
}

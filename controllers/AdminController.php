<?php

/**
 * Контроллер AdminController
 * Главная страница в админпанели
 */
class AdminController
{
    /**
     * Action для стартовой страницы "Панель администратора"
     */
    public function actionIndex($userId) {
				User::enterAsAdmin($userId);
				
				$realties = RealtyAdmin::getAllRealties();
				$users = User::getAllUsers();	 
				$incomes = IncomeAdmin::getIncomeAllRealtiesAllUsers(); 				
				$finals = IncomeAdmin::getFinalsAllRealtiesAllUsers();    	

				// Подключаем вид
				require_once(ROOT . '/views/admin/index.php');
				return true;
		}

}

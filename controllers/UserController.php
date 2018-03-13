<?php

/**
 * Контроллер UserController
 */
class UserController
{   
    /**
     * Удаляем данные о пользователе из сессии
     */
    public function actionLogout()
    {        
				User::logout();
		}

		public function actionUsersList() 
		{		   
				$users = User::getAllUsers();

				// Подключаем вид
				require_once(ROOT . '/views/admin/users/index.php');
				return true;
		}
}

<?php

/**
 * Контроллер UserController
 */
class UserController
{   
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


		public function actionAddUser() 
		{		   
				$userName = $_POST['name']; 
				$userEmail = $_POST['email']; 
				$userPass = $_POST['pass']; 
				$userPhone = $_POST['phone'];

				User::addUser($userName, $userEmail, $userPass, $userPhone);					

				return true;
		}


		public function actionGetUsersForSelect() 
		{		   
				$users = User::getAllUsers();				
				//d($users);
				require_once(ROOT . '/views/admin/users/for-select.php');
				return true;
		}
}

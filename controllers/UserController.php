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
				
				require_once(ROOT . '/views/admin/users/for-select.php');
				return true;
		}


		public function actionDelUser() 
		{		   
				$userId = $_POST['userId']; 
				
				$result = User::delUserById($userId);	

				return true;
		}


		public function actionEditUser() 
		{		   
				$userId = $_POST['userId']; 
				$userName = $_POST['userName'];
				$userEmail = $_POST['userEmail'];
				$userPass = $_POST['userPass'];
				$userPhone = $_POST['userPhone'];
				
				$result = User::updateUserById($userId, $userName, $userEmail, $userPass, $userPhone);	
				
				return true;
		}
}

<?php

/**
 * Контроллер SiteController
 */
class SiteController
{
    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userId = User::checkUserData($email, $password);

            if ($userId) {
                $user = User::getUserById($userId);
                if ($user['role'] == 'admin') {
                    $_SESSION['role'] = 'admin';
					$_SESSION['adminId'] = $userId;
                    header("location: /admin");
                } else {
                  $_SESSION['role'] = 'user';
				  $_SESSION['userId'] = $userId;
                  header("location: /cabinet/$userId");
                }      
            } else $errors[] = 'Неверные данные для входа на сайт';        
         }
		 //d($_SESSION);
         // Подключаем вид
         require_once(ROOT . '/views/site/index.php');
         return true;
    }
    
    


}
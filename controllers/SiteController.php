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
                    header("location: /admin");
                } else {
                  $_SESSION['role'] = 'user';
                  header("location: /cabinet");
                }      
            } else $errors[] = 'Неверные данные для входа на сайт';        
         }

         // Подключаем вид
         require_once(ROOT . '/views/site/index.php');
         return true;
    }
    
    


}
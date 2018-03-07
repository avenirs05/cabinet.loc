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
     //d($userId);
     // Получаем информацию о пользователе из БД
     $user = User::getUserById($userId);
	 //d($user);
     // Подключаем вид
     require_once(ROOT . '/views/cabinet/index.php');
     return true;
    }
}

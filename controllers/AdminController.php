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
    public function actionIndex() {
				User::enterAsAdmin();

				// Подключаем вид
				require_once(ROOT . '/views/admin/index.php');
				return true;
		}

}

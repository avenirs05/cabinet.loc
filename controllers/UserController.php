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
}

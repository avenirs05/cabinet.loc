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
        // Удаляем информацию о пользователе из сессии
        unset($_SESSION["role"]);
        
        // Перенаправляем пользователя на главную страницу
        header("Location: /");
    }
}

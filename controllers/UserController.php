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
        unset($_SESSION["user"]);
        unset($_SESSION["userSoc"]);
        
        // Перенаправляем пользователя на главную страницу
        header("Location: /");
    }
    
    


}

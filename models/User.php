<?php

/**
 * Класс User - модель для работы с пользователями
 */
class User
{
    /**
    * Проверяем существует ли пользователь с заданными $email и $password
    * @param string $email <p>E-mail</p>
    * @param string $password <p>Пароль</p>
    * @return mixed : integer user id or false
    */
    public static function checkUserData($email, $password) {
		// Соединение с БД
		$db = Db::getConnection();

		// Текст запроса к БД
		$sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

		// Получение результатов. Используется подготовленный запрос
		$result = $db->prepare($sql);
		$result->bindParam(':email', $email, PDO::PARAM_INT);
		$result->bindParam(':password', $password, PDO::PARAM_INT);
		$result->execute();

		// Обращаемся к записи
		$user = $result->fetch();

		if ($user) {
		  // Если запись существует, возвращаем id пользователя
		  return $user['id'];
		}
		return false;
    }


    /**
    * Возвращает пользователя с указанным id
    * @param integer $id <p>id пользователя</p>
    * @return array <p>Массив с информацией о пользователе</p>
    */
    public static function getUserById($id) {
		$db = Db::getConnection();

		$sql = 'SELECT * FROM user WHERE id = :id';

		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);

		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();

		return $result->fetch();
    }
	
	
	public static function enterAsUser() {
		if (isset($_SESSION['role'])) {
			if ($_SESSION['role'] != 'user') {
				 header('Location: /');
			}			  
		}	
    }  
	
	  
	public static function enterAsAdmin() {
		if (isset($_SESSION['role'])) {
			if ($_SESSION['role'] != 'admin') {
			  header('Location: /');
			}
		}
	}

}

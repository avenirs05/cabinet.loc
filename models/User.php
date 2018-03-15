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
    public static function checkUserData($email, $password) 
    {
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
    public static function getUserById($id) 
    {
				$db = Db::getConnection();

				$sql = 'SELECT * FROM user WHERE id = :id';

				$result = $db->prepare($sql);
				$result->bindParam(':id', $id, PDO::PARAM_INT);

				$result->setFetchMode(PDO::FETCH_ASSOC);
				$result->execute();

				return $result->fetch();
    }


    /**
    * Возвращает пользователя с указанным id
    * @param integer $id <p>id пользователя</p>
    * @return array <p>Массив с информацией о пользователе</p>
    */
    public static function getUserByName($userName) 
    {
				$db = Db::getConnection();

				$sql = 'SELECT * FROM user WHERE name = :name';

				$result = $db->prepare($sql);
				$result->bindParam(':name', $userName, PDO::PARAM_STR);

				$result->setFetchMode(PDO::FETCH_ASSOC);
				$result->execute();

				return $result->fetch();
    }


    public static function getAllUsers() 
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Получение и возврат результатов
        $result = $db->query('SELECT * FROM user order by user.name');

        $usersList = array();

        $i = 0;
        while ($row = $result->fetch()) {
            $usersList[$i]['id'] = $row['id'];
            $usersList[$i]['name'] = $row['name'];
            $usersList[$i]['email'] = $row['email'];
            $usersList[$i]['password'] = $row['password'];
            $usersList[$i]['phone'] = $row['phone'];
            $i++;
        }

        return $usersList;
    }


		public static function logout() 
		{
        unset($_SESSION["role"]);
		
				if (isset($_SESSION["idAdmin"])) {
					  unset($_SESSION["idAdmin"]);
				}
		
		    if (isset($_SESSION["idUser"])) {
				  unset($_SESSION["idUser"]);
		    }

        header("Location: /");
	  }
	
	
	public static function enterAsUser($userId) 
	{
				if (!isset($_SESSION['role'])) {
					  header('Location: /');
				} elseif ($_SESSION['role'] != 'user') {
					  header('Location: /');		  
				} elseif ($_SESSION['userId'] != $userId) {
					  header('Location: /');		  
				}
	}
	
	  
	public static function enterAsAdmin($adminId) 
	{
				if (!isset($_SESSION['role'])) {
					  header('Location: /');
				} elseif ($_SESSION['role'] != 'admin') {
					  header('Location: /');		  
				} elseif ($_SESSION['adminId'] != $adminId) {
					  header('Location: /');		  
				}
	}


	public static function addUser($userName, $userEmail, $userPass, $userPhone) 
	{
			$db = Db::getConnection();

			$sql = 'INSERT INTO user (name, email, password, phone) '
			        . 'VALUES (:user_name, :user_email, :user_pass, :user_phone)';

			$result = $db->prepare($sql);
			$result->bindParam(':user_name', $userName, PDO::PARAM_STR);
			$result->bindParam(':user_email', $userEmail, PDO::PARAM_STR);
			$result->bindParam(':user_pass', $userPass, PDO::PARAM_STR);
			$result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);

			return $result->execute();
	}
	
}

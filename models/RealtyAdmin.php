<?php

class RealtyAdmin 
{
		public static function getAllRealties() {
		    // Соединение с БД
		    $db = Db::getConnection();

		    // Получение и возврат результатов
		    $result = $db->query('SELECT * FROM realty order by realty.name');

		    $realtiesList = array();

		    $i = 0;
		    while ($row = $result->fetch()) {
		        $realtiesList[$i]['id'] = $row['id'];
		        $realtiesList[$i]['name'] = $row['name'];
		        $i++;
		    }

		    return $realtiesList;
		}

		public static function getAllRealtiesWithOwners() {
		    // Соединение с БД
		    $db = Db::getConnection();

		    // Получение и возврат результатов
		    $result = $db->query('SELECT realty.id, realty.name as realty_name, user.name as user_name from realty INNER JOIN user ON realty.user_id=user.id order by realty.name');

		    $realtiesList = array();

		    $i = 0;
		    while ($row = $result->fetch()) {
				        $realtiesList[$i]['realty_name'] = $row['realty_name'];
				        $realtiesList[$i]['user_name'] = $row['user_name'];
				        $realtiesList[$i]['id'] = $row['id'];
				        $i++;
		    }

		    return $realtiesList;
		}


		public static function addRealty($realtyName, $userId) 
		{
				$db = Db::getConnection();

				$sql = 'INSERT INTO realty (name, user_id) '
				        . 'VALUES (:realty_name, :user_id)';

				$result = $db->prepare($sql);
				$result->bindParam(':realty_name', $realtyName, PDO::PARAM_STR);
				$result->bindParam(':user_id', $userId, PDO::PARAM_STR);

				return $result->execute();
		}


		public static function getRealtyByName($realtyName) 
		{
				$db = Db::getConnection();

				$sql = 'SELECT * FROM realty WHERE name = :name';

				$result = $db->prepare($sql);
				$result->bindParam(':name', $realtyName, PDO::PARAM_STR);

				$result->setFetchMode(PDO::FETCH_ASSOC);
				$result->execute();

				return $result->fetch();
		}


		public static function updateRealtyById($realtyId, $realtyName, $userId)
		{
		    $db = Db::getConnection();
		    $result = $db->query("UPDATE realty SET name='$realtyName', user_id=$userId WHERE id=$realtyId");
		}
}

<?php

class Realty 
{  
  public static function getRealtiesOfUser($userId) {
        // Соединение с БД
        $db = Db::getConnection();
        
        // Получение и возврат результатов
        $result = $db->query('SELECT * FROM realty WHERE user_id=' . $userId);
		
		$realtiesList = array();
        
        $i = 0;
        while ($row = $result->fetch()) {
            $realtiesList[$i]['id'] = $row['id'];
			$realtiesList[$i]['name'] = $row['name'];
			$i++;
        }
        
        return $realtiesList;
  }
}

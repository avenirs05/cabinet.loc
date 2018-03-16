<?php

class Realty 
{  
    public static function getAllRealties($userId) {
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


    public static function delRealtyById($realtyId) 
    {
            $db = Db::getConnection();

            $sql = 'DELETE FROM realty WHERE id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $realtyId, PDO::PARAM_STR);

            return $result->execute();
    }

}

<?php

namespace app\services;

use app\models\User;
use app\wrappers\MysqlDatabase;
use app\wrappers\MysqlResult;

class UserService
{
    /** @var MysqlDatabase */
    private $db;

    public function __construct(MysqlDatabase $db)
    {
        $this->db = $db;
    }

    public function getUsers(int $offset = 0, int $limit = 0)
    {
       $data = [];	    
       $userResult = $this->getUserSet($offset, $limit);

       if ($limit > $userResult->getNumRows()) {
            throw new \Exception('fuera del limite');
        }
        
        while ($row = $userResult->fetchArray()) {
          $data[] = new User($row['firstname']);
	}

	return $data;
    }

    private function getUserSet(int $offset, int $limit): MysqlResult
    {
        $sqlSelectNames = rtrim(sprintf(
            'SELECT firstname FROM user %s %s',
            $limit !== 0 ? sprintf('LIMIT %d', $limit) : '',
            $offset !== 0 && $limit !== 0 ? sprintf('OFFSET %d', $offset) : ''
        ));

        return $this->db->query($sqlSelectNames);
    }
}

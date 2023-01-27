<?php
namespace Sundarban\Project\admin;
use Sundarban\Project\Includes\Database;
class Model{
    public function getUserById($id)
    {
        $sql = "select * from `users` where role ='user'";

        $dbConnection = new Database();
        return $dbConnection->getSelect($sql);

    }

  

}

?>
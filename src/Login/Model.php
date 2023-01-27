<?php

namespace Sundarban\Project\Login;

use Sundarban\Project\Includes\Database;
use Sundarban\Project\Includes\Session;

class Model
{

    public function checkLogin($username, $password)
    {

        $sql = "SELECT * FROM `users` WHERE email='$username' AND password='$password'";

        $dbConnection = new Database();
        $data = $dbConnection->getSelect($sql);

        if ($data['role'] === 'admin') {
            $userSession = new Session();
            $userSession->setUserId($data['id']);
            header('Location: index.php?module=admin');


        } elseif ($data['role'] === 'user') {

            $userSession = new Session();
            $userSession->setUserId($data['id']);

            header('Location: index.php?module=Profile');

        } else {
        
            // header('Location: index.php?module=Register');
        }

    }

}

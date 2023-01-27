<?php

namespace Sundarban\Project\Profile;

use Sundarban\Project\Includes\Session;



class Controller
{

    public function index()
    {

        $userSession = new Session();
        $userId = $userSession->getUserId();

        $model = new Model();
        $user = $model->getUserById($userId);



        $view = 'src/Profile/view.html.php';
        include 'src/Template/template.php';
      
      
          

    }

}

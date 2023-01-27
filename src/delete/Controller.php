<?php

namespace Sundarban\Project\delete;
use Sundarban\Project\Includes\Session;

class Controller
{

    public function index()
    {
        $userSession = new Session();
        $currentuserId = $userSession->getUserId();

        $userId = $_GET["id"];

        $model = new Model();
        $user = $model->deleteUserByid($userId);
        $user_role = $model->getRole($currentuserId);

        $view = 'src/delete/view.html.php';
        include 'src/Template/template.php';
    }

    public function deleteUser()
    {

    }

}

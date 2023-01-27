<?php
namespace Sundarban\Project\Update;

class Controller
{
    public function index()
    {

        $userId = $_GET["id"];
        $models = new Model();
        $userInfo = $models->getUserById($userId);
      

        if (isset($_POST['update'])) {
            $data = $_POST;

            $model = new Model();
            $model->updateUser($data, $userId);
           

            header('Location:index.php?module=Login');

        } else {
            $view = 'src/Update/view.html.php';
            include 'src/Template/template.php';
        }

    }
}

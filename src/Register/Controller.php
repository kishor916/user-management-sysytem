<?php
namespace Sundarban\Project\Register;

class Controller
{
    public function index()
    {

        if (isset($_POST['Register'])) {
            $data = $_POST;

            $model = new Model();
            $model->saveUser($data);

            header('Location:index.php?module=Login');

        } else {
            $view = 'src/Register/view.html.php';
            include 'src/Template/template.php';
        }

    }
}

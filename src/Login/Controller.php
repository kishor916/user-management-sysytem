<?php

namespace Sundarban\Project\Login;


use http\Header;

class Controller
{
    public function index(){


        if(isset($_POST['Login'])){

            $username = $_POST['email'];
            $password = $_POST['password'];
            $model = new Model();
            $model->checkLogin($username, $password);

        }else{
            $view = 'src/Login/view.html.php';
            include 'src/Template/template.php';
        }



    }


    public function logout(){

        session_destroy();
        header('Location: index.php?module=Login');

    }

}

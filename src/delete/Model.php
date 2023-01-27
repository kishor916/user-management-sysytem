<?php

namespace Sundarban\Project\delete;

use Sundarban\Project\Includes\Database;

class Model
{
 
    
    public function deleteUserByid($id){
       
        $sql = "DELETE FROM `users` WHERE id=$id";


        $dbConnection = new Database();
        return $dbConnection->deleteRow($sql);


    }

    public function getRole($id){
        $dbConnection = new Database();
        return $dbConnection->getRoleById($id);
    }

   

    


      
   
    
}

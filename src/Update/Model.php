<?php
namespace Sundarban\Project\Update;
use Sundarban\Project\Includes\Database;
class Model{
    public function updateUser($data,$id){ // the data is coming from post from controller

        $firstName= $data['fname'];
        $lastName = $data['lname'];
        $email = $data['email'];
        $password = $data['password'];
        $phone = $data['phone'];
        $role= 'user';
        $gender = $data['gender'];
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');
       
    
        $sql = "UPDATE users SET first_name='$firstName', last_name='$lastName', email='$email', password='$password', phone='$phone', gender='$gender' WHERE id ='$id'";
    
        $database = new Database();
        $database->updateRow($sql);
    
    
      }
      public function getUserById($id)
      {
          $sql = "select * from `users` where id=$id";
  
          $dbConnection = new Database();
          return $dbConnection->getSelect($sql);
  
      }
}

?>
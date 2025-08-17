<?php
class User{
   public $username,$email;
   public function __construct($name, $mail){
    $this->username = $name;
    $this->email = $mail;
   }

   public function login(){
    echo "User ".$this->username." has logged in.";
   }
}

class Admin extends User{
   public function banUser($name){
     echo "Admin ".$this->username." has banned the user: ".$name;
   }
}
$admin = new Admin("SuperAdmin", "admin@site.com");
echo $admin->login(); 
echo "<br>";
$admin->banUser("JohnDoe"); 
?>

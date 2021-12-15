<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello!</title>
</head>
<body>
        
<?php

class User
{
    // déclaration d'une propriété
    private $id;
    public $login;
    public $email;
    public $firstname;
    public $lastname;

    // déclaration des méthodes
    public function __construct(){
        $this->id = $idd;
        $this->login = $log;
        $this->email = $mail;
        $this->firstname = $name;
        $this->lastname = $namee;
    }
    public function register($login, $password, $email, $firstname, $lastname){
       $result = mysqli_query($bdd, "INSERT INTO utilisateurs SET login='".$this->login."', password='".$password."', email='".$this->email."', firstname='".$this->firstname."', lastname='".$this->lastname."'");
       return ($result);
    }
    public function connect($login, $password){
        $bdd = mysqli_connect('localhost', 'root', '', 'classes');
        mysqli_set_charset($bdd, 'utf8');
    }
    public function disconnect(){
        mysqli_close($bdd);
    }
    public function delete(){
        mysqli_query($bdd, "DELETE * FROM utilisateurs WHERE login ='".$this->login."'");
        mysqli_close($bdd);
    }
    public function update($login, $password, $email, $firstname, $lastname){
        mysqli_query($bdd, "UPDATE * FROM utilisateurs WHERE login ='".$this->login."'");
    }
    public function isConnected(){
        if(!$bdd){ $bool = false;}
        else{ $bool = true;}
        return ($bool);
    }
    public function getAllInfos(){
        $result = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login ='".$this->login."'");
        return ($result);
    }
    public function getLogin(){
        return $this->login;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getFirstname(){
        return $this->firstname;
    }
    public function getLastname(){
        return $this->lastname;
    }
}

?>




    

</body>
</html>
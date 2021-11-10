<?php

require_once ("Model.php");

class ModelUser extends Model{

    #attributes
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $time;

    
    protected static $table = 'user';
    protected static $primary = 'email';
    protected static $pass = 'password';

    public function __construct($first_name = null, $last_name = null, $email = null, $password = null){

        if(!is_null($first_name) && !is_null($last_name) && !is_null($email) && !is_null($password)) {
            
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email = $email;
            $this->password = $password;
            
        }
    }

    #getters

    public function getFirst_name() {
        return $this->first_name;
    }

    public function getLast_name() {
        return $this->last_name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

}

?>

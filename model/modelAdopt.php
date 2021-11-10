<?php

require_once ("Model.php");

class ModelAdopt extends Model{

    #attributes
    private $full_name;
    private $email;
    private $mobile;
    private $date;
    private $time;

    
    protected static $table = 'adopt';
    protected static $primary = 'email';

    public function __construct($full_name = null, $email = null, $mobile = null,
    $date = null, $time = null){

        if(!is_null($full_name) && !is_null($email) && !is_null($mobile) &&
        !is_null($date) && !is_null($time)) {
            
            $this->full_name = $full_name;
            $this->email = $email;
            $this->mobile = $mobile;
            $this->date = $date;
            $this->time = $time;
            
        }
    }

    #getters

    public function getFull_name() {
        return $this->full_name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getMobile() {
        return $this->mobile;
    }

    public function getdate() {
        return $this->date;
    }

    public function gettime() {
        return $this->time;
    }

}

?>

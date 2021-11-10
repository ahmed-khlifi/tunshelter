<?php

require_once ("Model.php");

class ModelReport extends Model{

    #attributes
    private $full_name;
    private $email;
    private $mobile;
    private $type_animal;
    private $animal_mental;
    private $animal_body;
    
    protected static $table = 'report';
    protected static $primary = 'email';

    public function __construct($full_name = null, $email = null, $mobile = null,
    $type_animal = null, $animal_mental = null, $animal_body = null){

        if(!is_null($full_name) && !is_null($email) && !is_null($mobile) &&
        !is_null($type_animal) && !is_null($animal_mental) && !is_null($animal_body)) {
            
            $this->full_name = $full_name;
            $this->email = $email;
            $this->mobile = $mobile;
            $this->type_animal = $type_animal;
            $this->animal_mental = $animal_mental;
            $this->animal_body = $animal_body;
            
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

    public function getType_animal() {
        return $this->type_animal;
    }

    public function getAnimal_mental() {
        return $this->animal_mental;
    }

    public function getAnimal_body() {
        return $this->animal_body;
    }

}

?>

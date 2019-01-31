<?php

class Check_input{

    public $post;
    public $error;

    public function __construct($post ){
        $this->post = $post;
        
    }

    public function check_input($post,$input){
        
        if($post[$input] === "" ){
            $this->error[$input] = "ce champ ne peut pas être vide";    
        }
        
    }

    public function display_warning($input){
        if(isset($this->error)){
            return '<div class="container bg-danger w-50">'.$this->error[$input].'</div>';
        }else{
            return '<div></div>';
        }
        
    }
}

?>
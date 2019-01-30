<?php

class Form{

    public $data;
    
    public function __construct( $data){
        $this->data = $data;
    }

    private function getValue($index){
        return $this->data[$index];
    }

    private function surround($html){
        if($html === '<button type="submitt" class="btn btn-primary mt-3">Valider</button>' ){
            return '<div class="container d-flex justify-content-center">'.$html.'</div>';
        }else{
            return '<div class="container">'.$html.'</div>';
        }
    }

    public function label($name){
        return $this->surround('<label  for="'.$name.'">'.$name.'</label>');
    }

    public function input($name){

        if($name === "pwd"){
            $type = 'password';
        }else{
            $type = 'text';
        }

        return $this->surround('<input class="form-control" type='.$type.' id='.$name.' name='.$name.' value="'.$this->getValue($name).'">');
    }

    public function button(){
        return $this->surround('<button type="submitt" class="btn btn-primary mt-3">Valider</button>');
    }

}

?>
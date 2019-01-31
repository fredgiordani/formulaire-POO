<?php

class request{
    
public $post;

public function __construct($post){
    
    $this->post=$post;   
}

public function db_insert($post){
    
    if(isset($post) && !empty($post)){
    $db = new PDO("mysql:host=localhost;dbname=formulaire-poo", "root", "",[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,]);
    
    $db_insert = $db->prepare('INSERT INTO user VALUES(NULL, :nom, :prenom, :pwd )');

    $db_insert->bindvalue(":nom", $post['nom'], PDO::PARAM_STR);
    $db_insert->bindvalue(":prenom", $post['prenom'], PDO::PARAM_STR);
    $db_insert->bindvalue(":pwd", $post['password'], PDO::PARAM_STR);

    $db_insert->execute();
        }
    }

}


?>
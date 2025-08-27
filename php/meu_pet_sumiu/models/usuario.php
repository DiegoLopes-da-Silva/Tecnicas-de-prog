<?php

class Usuarios {
    public function __construct(private int $id_usuario = 0, private string $nome = "", private string $email = "", private string $senha = "", private string $celular = "") {}

    public function getId_usuario(){
        return $this-> id_usuario;
        #O "id_usuario" aqui não usa dolar graças ao "$this"
    }

    public function getNome(){
        return $this-> nome;
     }

     public function getEmail(){
        return $this-> email;
     }

     public function getSenha(){
        return $this-> senha;
     }

     public function getCelular(){
        return $this-> celular;
     }

     public function setId_usuario($id_usuario){
        $this->id_usuario = $id_usuario;
     }

     public function setNome($nome){
        $this->nome = $nome;
     }

     public function setEmail($email){
        $this->email = $email;
     }
     
     public function setCelular($celular){
        $this->celular = $celular;
     }

} # FIM DA CLASS

?>
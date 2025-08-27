<?php
    require_once "models/usuario.php";

    class UsuarioController{
        public function login(){
         //require views formulário  
         if($_POST){
            //verificar dados
            //verificar no banco de dados se existe esse usuário
         }
        } # fim do LOGIN

        public function inserir() {
            #Mostra mensagem respectiva se dar erro no: Nome, Celular, Email e Senha
            $msg = array("","","","");
            $erro = false;
            if($_POST)
            {
                if(empty($_POST["nome"]))
                {
                    $msg[0] = "Nome necessário";
                    $erro = true;
                }

                if(empty($_POST["celular"]))
                {
                    $msg[1] = "Celular necessário";
                    $erro = true;
                }

                else
                {
                    #verificar se já não tem um usuário cadastrado com o mesmo email.
                    $usuario = new Usuarios (email: $_POST["email"]);

                }

                if(empty($_POST["email"]))
                {
                    $msg[2] = "Email necessário";
                    $erro = true;
                }

                if(empty($_POST["senha"]))
                {
                    $msg[3] = "Senha necessária";
                    $erro = true;
                }
                #caso não tenha ocorrido erro
                if(!$erro)
                {
                    $usuario = new Usuarios (0,$_POST["nome"],$_POST["celular"],$_POST["email"],$_POST["senha"]);
                    #cadastrar no banco de dados
                }
            }
            require_once "Views/form_usuario.php";
        }
    } # fim da CLASSE



?>
<?php

require_once "Models/Conexao.php";
require_once "Models/UsuarioDAO.php";
require_once "Models/Usuarios.php";
require_once "config.php";

class UsuarioController {
  public function login() {
    $msg = array("", "", "");
    $erro = false;

    if ($_POST) {
      // verificar os dados
      if (empty($_POST["email"])) {
        $msg[0] = "Preencha o email.";
        $erro = true;
      }
      if (empty($_POST["senha"])) {
        $msg[1] = "Preencha a senha.";
        $erro = true;
      }

      // verificar no banco de dados se existe esse usuário
      if (!$erro) {
        $usuario = new Usuarios(email: $_POST["email"]);
        $usuarioDAO = new UsuarioDAO();
        $retorno = $usuarioDAO->login($usuario);

        // verificar se a senha corresponde
        if (is_array($retorno)) {
          if (count($retorno) > 0) {
            if (password_verify($_POST["senha"], $retorno[0]->senha)) {
              //Iniciando a SESSION
            if(!isset($_SESSION)) {
              session_start();
            }
            $_SESSION["nome"] = $retorno[0]->nome;
            $_SESSION["id"] = $retorno[0]->id_usuario;
            $_SESSION["email"] = $retorno[0]->email;
            header("location:index.php");
            }

            
            else {
              $msg[2] = "Credenciais inválidas!";
            }
            
             
          }
           


          else {
            $msg[2] = "Credenciais inválidas!";
          }
        }
      }
    }
    // require views formulário
    require_once "Views/login.php";
  }

  public function inserir() {
    $msg = array("", "", "", "");
    $erro = false;

    if ($_POST) {
      if (empty($_POST["nome"])) {
        $msg[0] = "O campo nome é obrigatório.";
        $erro = true;
      }

      if (empty($_POST["email"])) {
        $msg[1] = "O campo email é obrigatório.";
        $erro = true;
      }
      else {
        // verificar se já não tem um usuário com esse email cadastrado
        $usuario = new Usuarios(email: $_POST["email"]);
        $usuarioDAO = new UsuarioDAO();
        $retorno = $usuarioDAO->valida_email($usuario);

        if (is_array($retorno)) {
          if (count($retorno) > 0) {
            $msg[1] = "Esse email já está cadastrado!";
            $erro = true;
          }
        }
      }

      if (empty($_POST["senha"])) {
        $msg[2] = "O campo senha é obrigatório.";
        $erro = true;
      }

      if (empty($_POST["telefone"])) {
        $msg[3] = "O campo telefone é obrigatório.";
        $erro = true;
      }

      if (!$erro) {
        $usuario = new Usuarios(0, $_POST["nome"], $_POST["email"], password_hash($_POST["senha"], PASSWORD_DEFAULT), $_POST["telefone"]);
        // cadastrar no banco de dados
        $usuarioDAO = new UsuarioDAO();
        $retorno = $usuarioDAO->inserir($usuario);
      }
    }

    require_once "Views/form-usuario.php";
  }
  public function logout(){
    if(!isset($_SESSION))
      {
        session_start();
      }
      $_SESSION = array();
      session_destroy();
      header("location:index.php");
  }
  //fim do logout
  public function forgot_password() {
    $msg = "";
    $msg_email = "Será enviado um email para a recuperação da sua senha";
    if (($_POST)) {
      if(empty($_POST["email"]))
      {
        $msg = "Preencha o email";
      }
      else{
        //verificar se é um email de algum usuário do sistema.
        $usuario = new Usuarios(email:$_POST["email"]);
        $usuarioDAO = new UsuariosDAO();
        $retorno = $usuarioDAO->valida_email($usuario);
        if(is_array($retorno)) {
          if(count($retorno) > 0) {
            //enviar um email para a pessoa recuperar a senha (os $ vem a maioria do config.php)
            $assunto = "Recuperação de senha - meu pet sumiu";

            $link = "index.php?controle=UsuarioController&metodo=change-password&id=" . base64_encode(
              $retorno[0]->id_usuario
            );

            $nomeDestino = $retorno[0]-> nome;
            $destino = $retorno[0]-> email;

            //A internet da fatec não é capaz de enviar email, então para testar chegue em casa e substitua "seu_email" pelo (obviamente) seu email.
            //Ou roteie uma internet alheia em caso de wi-fi
            $remetente = "seu_email";
            $nomeRemetente = "meu-pet-sumiu";

            $mensagem = "<h2>Senhor(a) " . $nomeDestino .  "</h2> <p>recebemos solicitação de recuperação de senha, 
            caso não tenha sido requerido por você desconsidere essa mensagem. Caso contrario clique no link abaixo para informar uma nova senha</p>" .
            "<a href='".$link."'>Clique aqui</a> <br/> <br/>
            <p>Atenciosamente<br/>" . $nomeRemetente ."</p>";
          
            $ret = sendMail($assunto, $mensagem, $remetente, $nomeRemetente, $destino, $nomeDestino);
            if($ret){
              $msg_email = "Foi enviado um email de recuperação de senha, verifique";
            }
            else{
              $msg_email = "Problema no envio do email de recuperação de senha. Tente mais tarde";
            }
          }
          else {
            $msg = "Verifique o email informado";
          }
        }
        else {
          $msg = "Verifique o email informado";
        }
      }
    }
    require_once "Views/form-email.php";
  }
}

?>
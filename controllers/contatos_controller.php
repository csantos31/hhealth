<?php

    class controllerContatos{

        //Insere novo registro
        public function Novo(){
            require_once('models/contato_class.php');
            //Instancia da classe Contato
            $contato = new Contato();

            //Carregando os dados digitados pelo usuário nos atributos da classe
            $contato->nome = $_POST['txt_nome'];
            $contato->email = $_POST['txt_email'];
            $contato->telefone = $_POST['txt_telefone'];
            $contato->celular = $_POST['txt_celular'];
            $contato->assunto = $_POST['txt_assunto'];
            $contato->mensagem = $_POST['txt_mensagem'];

            //Chama o método insert da classe contato
            $contato::Insert($contato);
        }

        //Insere novo registro
        public function Deletar(){
          $id_contato = $_GET['id'];

          // Instancia a classe $convenios
          $exames = new Exame();

          require_once('models/contato_class.php');
          //Instancia da classe Contato
          $contato = new Contato();
          $contato->id_contato = $id_contato;
          //Chama o método insert da classe contato
          $contato::Excluir($contato);
        }
    }

?>

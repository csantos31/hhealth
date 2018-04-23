<?php

class controller_exame{

      public function Novo(){

            require_once ('model_cms/gerenciamento_exames_class.php');
            require_once ('model_cms/bd_class.php');
            require_once ('modulo_img.php');

            // Instancia a class especialidade
            $exames = new Exame();

            //Carregando os dados digitados pelo usuário nos atributos da classe
            $exames->titulo = $_POST['txt_titulo'];
            $exames->texto_descricao = $_POST['txt_texto_descricao'];
            $exames->texto_procedimento = $_POST['txt_texto_procedimento'];

            /*Chama o metodo Insert da classe Contato*/
            $exames::Insert($exames);
      }

      public function Select(){
            require_once ('../model_cms/gerenciamento_exames_class.php');
            require_once ('../model_cms/bd_class.php');
            require_once ('../modulo_img.php');

            // Instancia a classe $convenios
            $exames = new Exame();

            // Chama o metodo para selecionar os registros
            return $exames::Select();
      }

      public function Listar(){
        //Instancia da classe contatos
        $dica_saude = new Exame();

        //Chama o método para selecionar os registros
        return $dica_saude::Select();
      }

      public function Buscar(){

          $idExame = $_GET['id'];

          $exame = new Exame();

          $exame->id_exame=$idExame;

          $exam = $exame::SelectById($exame);

          return $exam;
      }


      public function Editar(){

        $id_exame = $_GET['id'];

        require_once ('model_cms/gerenciamento_exames_class.php');
        require_once ('model_cms/bd_class.php');
        require_once ('modulo_img.php');
        // Instancia a classe $convenios
        $exames = new Exame();

        $exames->id_exame=$id_exame;
        $exames->titulo = $_POST['txt_titulo'];
        $exames->texto_descricao = $_POST['txt_texto_descricao'];
        $exames->texto_procedimento = $_POST['txt_texto_procedimento'];

        // Chama o metodo para selecionar os registros
        $exames::Update($exames);

      }

      public function Desativar(){

            $id_exame = $_GET['id'];

            require_once ('model_cms/gerenciamento_exames_class.php');
            require_once ('model_cms/bd_class.php');
            require_once ('modulo_img.php');

            // Instancia a classe $convenios
            $exames = new Exame();
            $exames->id_exame = $id_exame;

            // Chama o metodo para selecionar os registros
            $exames::DesativarPorId($exames);
      }

      public function Ativar(){

            $id_exame = $_GET['id'];

            require_once ('model_cms/gerenciamento_exames_class.php');
            require_once ('model_cms/bd_class.php');
            require_once ('modulo_img.php');

            // Instancia a classe $convenios
            $exames = new Exame();
            $exames->id_exame = $id_exame;

            // Chama o metodo para selecionar os registros
            $exames::AtivarPorId($exames);
      }

      public function Deletar(){
        $id_exame = $_GET['id'];

        require_once ('model_cms/gerenciamento_exames_class.php');
        require_once ('model_cms/bd_class.php');
        require_once ('modulo_img.php');

        // Instancia a classe $convenios
        $exames = new Exame();
        $exames->id_exame = $id_exame;

        // Chama o metodo para selecionar os registros
        $exames::Deletar($exames);
      }
}




 ?>

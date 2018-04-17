<?php

class controller_exame{

      public function Novo(){

            require_once ('model_cms/convenio_class.php');
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

      public function Editar(){

            // Instancia a classe $convenios
            $exames = new Exame();

            // Chama o metodo para selecionar os registros
            return $exames::Select();
      }

      public function Editar(){

            // Instancia a classe $convenios
            $exames = new Exame();

            // Chama o metodo para selecionar os registros
            return $exames::Editar();
      }

      public function Desativar(){

            // Instancia a classe $convenios
            $exames = new Exame();

            // Chama o metodo para selecionar os registros
            return $exames::Desativar();
      }

      public function Deletar(){

            // Instancia a classe $convenios
            $exames = new Exame();

            // Chama o metodo para selecionar os registros
            return $examess::Deletar();
      }
}




 ?>

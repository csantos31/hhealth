<?php
class controller_receitas{



      public function Listar(){

            // Instancia a classe $convenios
            $receitas = new Receita();

            // Chama o metodo para selecionar os registros
            return $receitas::Select();
      }

      public function Buscar(){
            $idReceita = $_GET['id'];

            $receitas = new Receita();

            $receitas->id_receita=$idReceita;

            $metodo = $receitas::SelectById($receitas);

            return $metodo;
      }

}
 ?>

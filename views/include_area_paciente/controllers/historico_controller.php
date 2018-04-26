<?php
class controller_receitas{



      public function Listar(){

            // Instancia a classe $convenios
            $receitas = new Historico_paciente();

            // Chama o metodo para selecionar os registros
            return $receitas::Select();
      }

      public function Buscar(){
            $idReceita = $_GET['id'];

            $receitas = new Historico_paciente();

            $receitas->id_convenio=$idConvenio;

            $metodo = $receitas::SelectById($receitas);

            return $metodo;
      }

}
 ?>

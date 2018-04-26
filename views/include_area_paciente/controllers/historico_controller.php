<?php
class controller_historico_paciente{



      public function Listar(){

            // Instancia a classe $convenios
            $receitas = new Historico();

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

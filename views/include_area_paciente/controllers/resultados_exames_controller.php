<?php
class controller_resultados_exames{



      public function Listar(){

            // Instancia a classe $convenios
            $resultado_exame = new Resultado_exame();

            // Chama o metodo para selecionar os registros
            return $resultado_exame::Select();
      }

      public function Buscar(){
            $idReceita = $_GET['id'];

            $resultado_exame = new Resultado_exame();

            $resultado_exame->id_convenio=$idConvenio;

            $resultado_exame = $resultado_exame::SelectById($resultado_exame);

            return $metodo;
      }

}
 ?>

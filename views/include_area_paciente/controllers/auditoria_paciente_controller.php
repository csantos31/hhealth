<?php
class controller_auditoria_paciente{

      public function Buscar($id){
            $idPaciente = $id;

            $auditoria = new Auditoria_paciente();

            $auditoria->id_paciente=$idPaciente;

            $metodo = $auditoria::SelectById($auditoria);

            return $metodo;
      }

}
 ?>

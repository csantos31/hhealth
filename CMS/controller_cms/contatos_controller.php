<?php

    class controllerContatos{

        public function Listar(){
			//Instancia da classe
			$contato = new Contato();

			//Chama o método para selecionar os registros
			return $contato::Select();
		}

        public function Buscar(){
            $idFaleconosco = $_GET['id_fale_conosco'];

            $contato = new Contato();

            $contato ->id_fale_conosco=$id_fale_conosco;

            $ctt = $contato::SelectById($contato);

            return $ctt;
        }



        public function Deletar(){
            require_once ('model_cms/contato_class.php');

            //GUARDA O ID DO CONTATO PASSADO NA VIEW
      			$id_fale_conosco = $_GET['id'];

                  //INSTANCIA A CLASSE CONTATO
      			$contato = new Contato();

      			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
      			$contato->id_fale_conosco = $id_fale_conosco;

      			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
      			$contato::Excluir($contato);

        }

    }
































?>

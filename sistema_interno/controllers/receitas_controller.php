<?php

    class controllerReceita{

       public function Novo($id){

          require_once ('models/receitas_class.php');
          //Instancia da classe Contato
          $receita = new Receita();

          //Carregando os dados digitados pelo usuário nos atributos da classe
          $receita->id_paciente = $_POST['slt_paciente'];
          $receita->id_funcionario = $id;
          $receita->id_remedio=$_POST['slt_remedio'];
          $receita->data = $_POST['data'];
          $receita->tipo = $_POST['tipo'];

          //Chama o metodo Insert da classe Contato
          //Existe também a posibilidade de chamar o metodo da seguinte forma:
          //$contato::Insert($contato);
          $receita::Insert($receita);

		}

  		public function Listar(){
  			//Instancia da classe contatos
  			$receita = new Receita();

  			//Chama o método para selecionar os registros
  			return $receita::Select();
  		}

      public function Buscar(){
  			//GUARDA O ID DO CONTATO PASSADO NA VIEW
  			$idReceita = $_GET['id'];

  			//INSTANCIA A CLASSE CONTATO
  			$receita = new Receita();

  			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
  			$receita->id_receita_medica = $idReceita;

  			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
  			$receita = $receita::SelectById($receita);
  			//require_once('views_cms/tipo_quarto.php');

        return $receita;
  		}

          /*Atualiza um registro existente*/
  		public function Editar(){
        require_once ('models/receitas_class.php');
  			//GUARDA O ID DO CONTATO PASSADO NA VIEW
  			$idReceita = $_GET['id'];

  			//INSTANCIA A CLASSE CONTATO
  			$receita = new Receita();

  			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
  			$receita->id_receita_medica = $idReceita;

        $receita->id_paciente = $_POST['slt_paciente'];
        $receita->id_funcionario = $id;
        $receita->id_remedio=$_POST['slt_remedio'];
        $receita->data = $_POST['data'];
        $receita->tipo = $_POST['tipo'];

  			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
  			$receita::Update($receita);

  		}

      public function Excluir(){

        require_once ('models/receitas_class.php');
        //GUARDA O ID DO CONTATO PASSADO NA VIEW
        $idReceita = $_GET['id'];

        //INSTANCIA A CLASSE CONTATO
        $receita = new Receita();

        //DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
        $receita->id_receita_medica = $idReceita;

        //CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
        $receita::Delete($receita);

  		}


    }


?>

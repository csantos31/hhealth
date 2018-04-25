<?php
class controllerTrabalheConosco{

    //Insere novo registro
    public function Novo($id_endereco){
        require_once('models/trabalhe_conosco_class.php');
        //Instancia da classe Contato
        $trabalhe_conosco = new TrabalheConosco();
        
        $trabalhe_conosco->id_endereco=$id_endereco;

        //Carregando os dados digitados pelo usuário nos atributos da classe
        $trabalhe_conosco->nome = $_POST['txtNome'];
        $trabalhe_conosco->email = $_POST['txtEmail'];
        $trabalhe_conosco->telefone = $_POST['txtTelefone'];
        $trabalhe_conosco->celular = $_POST['txtCelular'];
        $trabalhe_conosco->dt_nasc = $_POST['txtdatanasc'];
        $trabalhe_conosco->rdosexo = $_POST['rdosexo'];
        $trabalhe_conosco->pais = $_POST['sltpais'];
        $trabalhe_conosco->estado_civil = $_POST['sltestadoCivil'];
        $trabalhe_conosco->cep = $_POST['txtCep'];
        $trabalhe_conosco->endereco = $_POST['txt_logradouro'];
        $trabalhe_conosco->bairro = $_POST['txt_bairro'];
        $trabalhe_conosco->cidade = $_POST['txt_cidade'];
        $trabalhe_conosco->registro_profissional = $_POST['sltstatusRegistroProfissional'];
        $trabalhe_conosco->resumo_qualificacoes = $_POST['textarearesumoQualificacoes'];
        $trabalhe_conosco->status_trabalho = $_POST['sltstatusTrabalho'];
        $trabalhe_conosco->status_deficiencia = $_POST['sltstatusDeficiencia'];

        //Chama o método insert da classe contato
        $trabalhe_conosco::Insert($trabalhe_conosco);
    }

    //Insere novo registro
    public function Deletar(){
      $id_contato = $_GET['id'];

      // Instancia a classe $convenios
      $exames = new Exame();

      require_once('models/contato_class.php');
      //Instancia da classe Contato
      $trabalhe_conosco = new Contato();
      $trabalhe_conosco->id_contato = $id_contato;
      //Chama o método insert da classe contato
      $trabalhe_conosco::Excluir($trabalhe_conosco);
    }
}




 ?>

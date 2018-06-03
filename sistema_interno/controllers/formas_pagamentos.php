<?php

  class Pagamentos{

      public function GerandoBoleto(){

        $gerar_boleto = new GerarBoletoClass();

        $gerar_boleto->paciente = $_POST['txt_paciente'];
        $gerar_boleto->cpf = $_POST['txt_cpf'];
        $gerar_boleto->email = $_POST['txt_email'];
        $gerar_boleto->telefone = $_POST['txt_telefone'];
        $gerar_boleto->valor = $_POST['txt_valor'];


        // $gerar_boleto = $gerar_boleto::BoletoClass($gerar_boleto);
        header('location: ../boletophp-master/boleto_itau.php');
        return $gerar_boleto;

      }


      public function Cartao_Boleto(){

        if (isset($_POST['txt_submit_boleto'])) {
          header('location: boletophp-master/boleto_bradesco.php');
          // code...
        }else {
          require_once 'views/api_pagarme.php';

          $pagamento_cartao = new PagamentoPagarme();

          $pagamento_cartao->nome = $_POST['txt_nome'];
          $pagamento_cartao->cpf = $_POST['txt_cpf'];
          $pagamento_cartao->email = $_POST['txt_email'];
          $pagamento_cartao->celular = $_POST['txt_celular'];
          $pagamento_cartao->cartao = $_POST['txt_cartao'];
          $pagamento_cartao->senha_cartao = $_POST['txt_senha_cartao'];
          $pagamento_cartao->valor = $_POST['txt_valor'];

          $pagamento_cartao = $pagamento_cartao::Pagar($pagamento_cartao);
        }


      }

  }


 ?>

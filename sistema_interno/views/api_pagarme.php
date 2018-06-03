<?php
  class PagamentoPagarme{


    public function Pagar($pagamento){
      // $pagamento->nome = "Gleyver";
      // $pagamento->email = "gleyvercc@outlook.com";
      // $pagamento->cpf = "46026502874";
      // $pagamento->cartao = "4111111111111111";//16
      // $pagamento->senha_cartao = "123";//123
      // $pagamento->valor = "2290000";
      // $pagamento->celular = "+5511999564179";
      $rua = "Rua Amarela";
      $cidade = "Itapevi";
      $estado = "Sao Paulo";
      $numero_casa = "229";
      $bairro = "JD Itaparica";
      $pais = "br";
      $cep = "06654795";

      $API_KEY = 'ak_test_Ip7vCnLev9yayFv0V9bZfBUNlKEW63';
      require_once 'pagarme-php-2/Pagarme.php';
      PagarMe::setApiKey($API_KEY);

      $transaction = new PagarMe_Transaction(array(
      "amount" => $pagamento->valor,
      "card_number" => $pagamento->cartao,
      "card_cvv" => $pagamento->senha_cartao,
      "card_expiration_month" => "09",
      "card_expiration_year" => "22",
      "card_holder_name" => $pagamento->nome,
      "payment_method" => "credit_card",
      "customer" => array(
          "external_id" => "1",
          "name" => $pagamento->nome,
          "type" => "individual",
          "country" => $pais,
          "documents" => array(
            array(
              "type" => "cpf",
              "number" => $pagamento->cpf
            )
          ),
          "phone_numbers" => array( $pagamento->celular ),
          "email" => $pagamento->email
      ),
      "billing" => array(
        "name" => $pagamento->nome,
        "address" => array(
            "country" => $pais,
            "street" => $rua,
            "street_number" => $numero_casa,
            "state" => $estado,
            "city" => $cidade,
            "neighborhood" => $bairro,
            "zipcode" => $cep
        )
      ),
      "items" => array(
        array(
          "id" => "ID DO ITEM",
          "title" => "NOME DO ITEM",
          "unit_price" => 10000,
          "quantity" => 1,
          "tangible" => true
        )
      )
    ));


      $transaction->charge();

      header("location: views/pagamentos.php");
      }
  }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Cadastro de Gastos</title>
</head>

<body>
  <!-- Enunciado do exercício -->
  <!-- Faça um programa que receba um valor pago, um segundo valor que é o preço do produto e retorne o troco a ser dado. -->
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1>Gastos - Exercício 1</h1>
        <div class="card">
          <div class="card-body">
            <form action="" method="get">
              <div class="form-group">
                <label for="title">Valor pago (R$):</label>
                <input class="form-control" type="number" name="price" id="price" placeholder="Valor pago" required>
              </div>
              <div class="form-group">
                <label for="price">Total do produto (R$):</label>
                <input class="form-control" type="number" name="prod_price" id="prod_price" placeholder="Valor do produto"  required>
              </div> <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-dark">Calcular</button>
              </div>

              <?php

              if (isset($_GET['price']) and (isset($_GET['prod_price']))) {

                $precopago = $_GET['price'];
                $prodpreco = $_GET['prod_price'];
                $troco = $precopago - $prodpreco;

                if ($precopago < $prodpreco) {
                  $precofalta = $prodpreco - $precopago;
                  echo "Está faltando: R$$precofalta";
                } else {
                  if ($troco <= 0)
                    echo "Não é necessário troco.";
                  else
                    echo "Troco a ser retornado: R$ $troco";
                }
              }
              ?>
            </form>
          </div>
        </div>
      </div>
      <div class="col-3">

      </div>
      <div class="col-3">
      </div>
    </div>
  </div>
</body>

</html>
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
  <!-- Faça um programa que receba o valor do quilo de um produto e a quantidade de quilos do produto consumida,
    calculando o valor final a ser pago.  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1>Compra por KG</h1>
        <div class="card">
          <div class="card-body">
            <form action="" method="get">
              <div class="form-group">
                <label for="title">Valor do quilo (R$):</label>
                <input class="form-control" type="number" name="priceK" id="priceK" placeholder="Valor do quilo" required>
              </div>
              <div class="form-group">
                <label for="price">Total de quilos comprados:</label>
                <input class="form-control" type="number" name="buyK" id="buyK" placeholder="Total de quilos" required>
              </div> <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-dark">Calcular</button>
              </div>

              <?php

              if (isset($_GET['priceK']) and (isset($_GET['buyK']))) {
                $precoquilo = $_GET['priceK'];
                $totalquilos = $_GET['buyK'];

                if (($precoquilo < 0) || ($totalquilos < 0)) {
                  echo "Digite apenas valores positivos.";
                } else {
                  $total = $precoquilo * $totalquilos;
                  echo "Total da compra do produto: (R$)$total";
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
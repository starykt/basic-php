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
  <!-- Desenvolva um programa que receba um valor digitado pelo usuário e verifique se esse valor é positivo, 
  negativo ou igual a zero. Imprima na tela: "Valor Positivo", "Valor Negativo", "Igual a Zero".  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1>Validação de Valores</h1>
        <div class="card">
          <div class="card-body">
            <form action="" method="get">
              <div class="form-group">
                <label for="number">Número:</label>
                <input class="form-control" type="number" name="number" id="number" placeholder="Digite o número" required>
              </div> <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-dark">Validar</button>
              </div>

              <?php

              if (isset($_GET['number'])) {
                $numero = $_GET['number'];

                if ($numero > 0) 
                    echo "O valor é positivo.";
                else if ($numero == 0)
                  echo "O valor é igual a zero.";
                else
                    echo "O valor é negativo.";
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
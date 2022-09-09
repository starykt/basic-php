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
  <!-- Desenvolva um programa que receba quatro notas de um aluno, 
    calcule e imprima a média aritmética das notas e a mensagem de aprovado para média superior ou
    igual a 7.0 ou a mensagem de reprovado para média inferior a 7.0. -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1>Calculadora de Média</h1>
        <div class="card">
          <div class="card-body">
            <form action="" method="get">
              <div class="form-group">
                <label for="not1">Nota 1:</label>
                <input class="form-control" type="double" name="not1" id="not1" placeholder="Ex: 10" required>
              </div>
              <div class="form-group">
                <label for="not2">Nota 2:</label>
                <input class="form-control" type="double" name="not2" id="not2" placeholder="Ex: 10" required>
              </div>
              <div class="form-group">
                <label for="not3">Nota 3:</label>
                <input class="form-control" type="double" name="not3" id="not3" placeholder="Ex: 10" required>
              </div>
              <div class="form-group">
                <label for="not4">Nota 4:</label>
                <input class="form-control" type="double" name="not4" id="not4" placeholder="Ex: 10" required>
              </div> <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-dark">Calcular</button>
              </div>

              <?php

              if (isset($_GET['not1']) and (isset($_GET['not2'])) and (isset($_GET['not3'])) and (isset($_GET['not4']))) {
                $nota1 = $_GET['not1'];
                $nota2 = $_GET['not2'];
                $nota3 = $_GET['not3'];
                $nota4 = $_GET['not4'];

                if ((is_numeric($nota1)) and (is_numeric($nota2)) and (is_numeric($nota3)) and (is_numeric($nota4))) {
                  if (($nota1 < 0) || ($nota2 < 0) || ($nota3 < 0) || ($nota4 < 0)) {
                    echo "Todas as notas devem ser positivas ou iguais a 0.";
                  } else {
                    $media = ($nota1+$nota2+$nota3+$nota4)/4;
                    echo "Total da média aritmética: $media <br>";
                    if ($media >= 7)
                      echo "Parabéns, aluno foi aprovado!";
                    else
                      echo "Aluno foi reprovado!";
                  }
                }
                else
                  echo "Digite valores númericos!";
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
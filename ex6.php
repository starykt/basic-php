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
  <!-- Crie uma página em HTML com Bootstrap e PHP que calcule o IMC de uma pessoa. O formulário deve solicitar
    o peso e a altura da pessoa e calcular o valor do IMC. O resultado encontrado deve ser comparado com a tabela
    de IMCs e apresentar a situação que a pessoa se encontra. O índice é calculado da seguinte maneira: divide-se
    o peso do paciente pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso normal quando o
    resultado do IMC está entre 18,5 e 24,9.  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1>Calculadora de IMC</h1>
        <div class="card">
          <div class="card-body">
            <form action="" method="post">
              <div class="form-group">
                <label for="peso">Peso:</label>
                <input class="form-control" type="double" name="peso" id="peso" placeholder="Ex: 55" required>
              </div>
              <div class="form-group">
                <label for="altura">Altura:</label>
                <input class="form-control" type="double" name="altura" id="altura" placeholder="Ex: 1.57" required>
              </div> <br>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-dark">Calcular</button>
              </div>
              <p>
                <?php
                $imc = 0;
                if (isset($_POST['peso']) and (isset($_POST['altura']))) {
                  $peso = $_POST['peso'];
                  $altura = $_POST['altura'];
                  $imc = ($peso / ($altura * $altura));

                  if ((is_numeric($peso)) and (is_numeric($altura))) {
                    echo "Seu IMC foi de ";
                    echo number_format($imc,2,",",".");
                  } else
                    echo "Digite valores númericos!";
                }
                ?>
              </p>
              <br>
                <table class="table table-dark table-striped">
                <thead>
                  <tr>
                    <th scope="col">IMC</th>
                    <th scope="col">Classificação</th>
                    <th scope="col">Obesidade (Grau)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr <?php
                      if (($imc > 0) && ($imc < 18.5))
                        echo "class='table-info'";
                    ?>>
                    <th>Menor que 18,5</th>
                    <td>Magreza</td>
                    <td>0</td>
                  </tr>
                  <tr <?php
                      if (($imc >= 18.5) && ($imc <= 24.9))
                        echo "class='table-info'";
                    ?>>
                    <th>Entre 18,5 e 24,9</th>
                    <td>Normal</td>
                    <td>0</td>
                  </tr>
                  <tr <?php
                      if (($imc >= 25) && ($imc <= 29.9))
                        echo "class='table-info'";
                    ?>>
                    <th>Entre 25,0 e 29,9	</th>
                    <td>Sobrepeso</td>
                    <td>I</td>
                  </tr>
                  <tr <?php
                      if (($imc >= 30) && ($imc <= 39.9))
                        echo "class='table-info'";
                    ?>>
                    <th>Entre 30,0 e 39,9</th>
                    <td>Obesidade</td>
                    <td>II</td>
                  </tr>
                  <tr <?php
                      if (($imc >= 40))
                        echo "class='table-info'";
                    ?>>
                    <th>Maior que 40,0</th>
                    <td>Obesidade Grave</td>
                    <td>III</td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>
        </div>
      </div>
      <div class="col-1">

      </div>
      <div class="col-5">
        <h2>O que é IMC?</h2>
        <h4>Criado no século 19 pelo matemático Lambert Quételet, o Índice de Massa Corporal
          conhecido pela sigla IMC, é um cálculo simples que permite medir se alguém está ou não com o peso ideal. 
          Ele aponta se o peso está adequado ou se está abaixo ou acima do peso.
        </h4>
      </div>
    </div>
  </div>
</body>

</html>
<?php

use LDAP\Result;

$result = null;

if (isset($_GET['ex'])) {

    $result = $_GET['ex'];

    if ($result == 1) {

        $result_ex1 = $_GET['ex1'];
        $result_n1 = $_GET['n1'];
        $result_n2 = $_GET['n2'];
        $result_n3 = $_GET['n3'];
        $result_n4 = $_GET['n4'];
    }
    if ($result == 2) {


        $result_ex2     = $_GET['ex2'];
        $a              = $_GET['a'];
        $m              = $_GET['m'];
    }
    else {

        $v = $_GET['v'];

    }
}


?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programação II</title>


    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">

    <!-- Custom styles for this template -->
    <link href="heroes.css" rel="stylesheet">

</head>

<body>

    <main>
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold">Programação II</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Olá, esta pagina é a resolução dos exercícios solicitados pela materia de programação II.</p>

                <?php

                if ($result == null) {

                    echo '<p class="lead mb-4">Utilizando o bootstrap, uma ferramenta muito utilizada para o melhor desenvolvimento de paginas.</p>';
                    echo $result;
                } else {

                    if ($result == "1") {
                        echo '<p class="lead mb-4">Resultado do exercício 1.<br> Resultado : ' . $result_ex1 . '<br> Foi informado os números ' . $result_n1 . ', ' . $result_n2 . ', ' . $result_n3 . ', ' . $result_n4 . ' </p>';
                    }
                    if ($result == "2") {
                        echo '<p class="lead mb-4">Resultado do exercício 2.<br> Teremos ' . $result_ex2 . ' dias <br> No ano ' . $a . ' do mes ' . $m . '</p>';
                    } else {
                        echo '<p class="lead mb-4">Resultado do exercício 3.<br> O valor da diária sera de '. $v .'</p>';
                    }
                }

                ?>

                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <div class="btn-group">
                        <a href="index.php" class="btn btn-primary active" aria-current="page">Seção de apresentação</a>
                        <a href="#exerc1" class="btn btn-primary">Exercício 1</a>
                        <a href="#exerc2" class="btn btn-primary">Exercício 2</a>
                        <a href="#exerc3" class="btn btn-primary">Exercício 3</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="bg-dark text-secondary px-4 py-5 text-center" id="exerc1">
            <div class="py-5">
                <h1 class="display-5 fw-bold text-white">Exercício 1</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-5 mb-4">Dados quatro números distintos quaisquer, desenvolver um algoritmo que determine e imprima a soma dos três menores.</p>
                </div>
                <div>
                    <form action="result.php" method="get">
                        <div class="input-group">
                            <span class="input-group-text">Informe 4 números:</span>
                            <input type="number" name="n1" aria-label="número um" class="form_exerc1 form-control ">
                            <input type="number" name="n2" aria-label="número dois" class="form-control form_exerc1">
                            <input type="number" name="n3" aria-label="número tres" class="form-control form_exerc1">
                            <input type="number" name="n4" aria-label="número quatro" class="form-control form_exerc1">
                            <button type="submit" name="ex1" class="input-group-text">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="b-example-divider mb-0"></div>

        <div class="px-4 py-5 my-5 text-center" id="exerc2">
            <h1 class="display-5 fw-bold">Exercício 2</h1>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4">Desenvolver um algoritmo para pedir um mês e ano e exibir o número de dias do mês / ano digitados.</p>
            </div>
            <form action="result.php" method="get">
                <div class="px-10 gap-3 input-group">
                    <input class="form-control" type="date" name="ex2" />
                    <button type="submit" class="input-group-text">Enviar</button>
                </div>
            </form>
        </div>

        <div class="b-example-divider mb-0"></div>

        <div class="bg-dark text-secondary px-4 py-5 text-center" id="exerc3">
            <div class="py-5">
                <h1 class="display-5 fw-bold text-white">Exercício 3</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-5 mb-4">Uma locadora de carros tem a seguinte regra para aluguel de carros.<br>
                        <br> – As segundas, terças e quintas (2, 3 e 5): um desconto de 40% em cima do preço normal;
                        <br> – As quartas, sextas, sábados e domingos (4, 6, 7 e 1): preço normal;
                        <br> – Aluguel de carros populares: preço normal e aluguel de carros de luxo: acréscimo de 15% em cima do preço normal.
                    </p>
                </div>
                <div>
                    <form method="GET" action="result.php" class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Data de retirada</label>
                            <input name="data" type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Carro</label>
                            <select name="carro" class="form-select">
                                <option value="1" selected>Jeep Renegade - Luxo</option>
                                <option value="2">Mitsubishi - Luxo</option>
                                <option value="3">GM Bolt - Luxo</option>
                                <option value="4">Jeep Renegade - Popular</option>
                                <option value="5">Mitsubishi - Popular</option>
                                <option value="6">GM Bolt - Popular</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="ex3" class="btn btn-primary">Solicitar Orçamento</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="b-example-divider mb-0"></div>

    </main>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
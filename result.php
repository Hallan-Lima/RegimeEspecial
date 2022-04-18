<?php

if (isset($_GET['ex1'])) {

    $array_ex1 = array($_GET['n1'], $_GET['n2'], $_GET['n3'], $_GET['n4']);
    $ex1_array = $array_ex1;                                       
    sort($ex1_array);                                                       // comando para organizar os valores dentro do array
    $soma_n = ($ex1_array[0]+$ex1_array[1]+$ex1_array[2]);                  // somando os 3 primeiros valores

    header("Location: index.php?n1=".$array_ex1[0]."&n2=".$array_ex1[1]."&n3=".$array_ex1[2]."&n4=".$array_ex1[3]."&ex1=".$soma_n."&ex=1");
}else {
if (isset($_GET['ex2'])) {

    $result = $_GET['ex2'];
    $result_formt = explode("-",$result);                                   // comando para quebrar os valores em ano,mes e dia
    $days = cal_days_in_month(0, $result_formt[1], $result_formt[0]);       // comando que retorna a quantidade de dias que tem no mes

    header("Location: index.php?a=".$result_formt[0]."&m=".$result_formt[1]."&ex2=".$days."&ex=2");
}else {  
if (isset($_GET['ex3'])) {
    
    $carro  = $_GET['carro'];
    $date   = $_GET['data'];

    $date_formt = date('w', strtotime($date));
    $valor = 1000;

    if ($carro <= 3) {
        $valor += $valor*0.15;
    }

    if (($date_formt == 1) || ($date_formt == 2) || ($date_formt == 4) ) {
        $valor -= $valor*0.4;
    }

    header("Location: index.php?v=".$valor."&ex=3");

    echo $date_formt;
    echo '<br>';
    echo $valor;
    

}}}
<?php
    $ano = $_POST['ano'];
    $valor = $_POST['valor'];
    $seguro = $_POST['seguro'];
    $km = $_POST['km'];
    $hoje = date('Y');
    $anoAtual = $hoje;
    $ipva = ($anoAtual - $ano);
    if($ipva >= 10){
        $ipva = "Não precisa pagar o IPVA";
    }else{
        $ipva = "Precisa pagar o IPVA";
    }
    switch($seguro){
        case 'segurado' :
            $seguro = "Possue seguro";
        break;

        case 'nao_segurado' :
            $seguro = "Não possue seguro";
        break;
    }
    if($km==0){
        $km = "Seu carro é 0KM e o seguro está avaliado em " . ($valor += $valor*10/100);
    }else{
        $km = "O seu carro tem $km km";
    }
    echo "De acordo com os dados passados. <br> Os dados: 1-$ipva, 2-$seguro, $km";
?>
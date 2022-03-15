<?php

    $NOME = $_REQUEST['NOME'];
    $BEBIDA = $_REQUEST['BEBIDA'];
    $ANO = $_REQUEST['ANO'];
    $IDADE = 2022 - $ANO;

if(empty($NOME)){
    $dados - array (
        "tipo" => "error",
        "mensagem" => "Existe(m) campo(s) a ser(em) preechido(s)"
    );
    
}else{

    if($IDADE >= 18){
        switch($BEBIDA){
            case '1' : $dados = array(
                "tipo" => "cerveja.jpg",
                "mensagem" => "Seja bem-vindo, ".$NOME.", vemos que sua idade é ".$IDADE." e a sua bebida escolhida é cerveja"
            );
            break;

            case '2' : $dados = array(
                "tipo" => "caipirinha.jpg",
                "mensagem" => "Seja bem-vindo, ".$NOME.", vemos que sua idade é ".$IDADE." e a sua bebida escolhida é caipirinha"
            );
            break;

            case '3' : $dados = array(
                "tipo" => "pinga.jpg",
                "mensagem" => "Seja bem-vindo, ".$NOME.", vemos que sua idade é ".$IDADE." e a sua bebida escolhida é pinga"
            );
            break;
        }
    }else{
        $dados = array(
            "tipo" => "paro.jpg",
            "mensagem" => "Seja bem-vindo, ".$NOME.", vemos que sua idade é ".$IDADE." e por ser menor de idade você não pode consumir bebidas alcoólicas"
        );
    }   
}

echo json_encode($dados);
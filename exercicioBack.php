<?php
    if(!empty($_POST)){

        $erro = "";

        if(!empty($_POST['nome'])){
            $nome = $_POST['nome'];
        } else {
            $erro .= "<br>CAMPO NOME FALTANDO";
        }
        if(!empty($_POST['curso'])){
            $curso = $_POST['curso'];
        } else {
            $erro .= "<br>CAMPO CURSO FALTANDO";
        }
        if(!empty($_POST['presenca'])){
            $presenca = $_POST['presenca'];
        } else {
            $erro .= "<br>CAMPO PRESENCA FALTANDO";
        }

        if(empty($_POST['ra'])){
            $erro .= "<br>CAMPO RA FALTANDO";
        }

        $html = "<div class='container'><b>DADOS DO ALUNO</b><br>";
        $html .= "<b>Nome:</b> $nome<br>";
        $html .= "<b>Curso:</b> $curso<br>";

        if($_POST['ma1'] > 10 || $_POST['ma1'] < 0 || $_POST['ma1'] == ""){
            $erro .= "NOTA MA1 FORA DE ESCALA<br>";
        }
        if($_POST['ma2'] > 10 || $_POST['ma2'] < 0 || $_POST['ma2'] == ""){
            $erro .= "NOTA MA2 FORA DE ESCALA<br>";
        }
        if($_POST['mb2'] > 10 || $_POST['mb2'] < 0 || $_POST['mb2'] == ""){
            $erro .= "NOTA MB2 FORA DE ESCALA<br>";
        }
        if($_POST['mb1'] > 10 || $_POST['mb1'] < 0 || $_POST['mb1'] == ""){
            $erro .= "NOTA MB1 FORA DE ESCALA<br>";
        }
         if($_POST['p1'] > 10 || $_POST['p1'] < 0 || $_POST['p1'] == ""){
            $erro .= "NOTA P1 FORA DE ESCALA<br>";
        }
        if($_POST['p2'] > 10 || $_POST['p2'] < 0 || $_POST['p2'] == ""){
            $erro .= "NOTA P2 FORA DE ESCALA<br>";
        }  
        if($presenca > 100 || $presenca < 0){
            $erro .= "PRESENCA FORA DE ESCALA<br>";
        }  

        if($erro == "") {
            $a1 = ($_POST['ma1']*0.2)+($_POST['mb1']*0.1)+($_POST['p1']*0.7);
            $a2 = ($_POST['ma2']*0.2)+($_POST['mb2']*0.1)+($_POST['p2']*0.7);
            $media = ($a1 + $a2*2)/3;
            if(!empty($_POST['bonus'])){
                $media += 0.5;
                if($media > 10){
                    $media = 10;
                }
            }

            $mediahtml = number_format($media, 2, '.', '');

            $html .= "<b>Media:</b> $mediahtml<br>";
            $html .= "<b>Presenca:</b> $presenca%<br>";
            $html .= "<b>Situacao:</b>";
            if($presenca >= 75) {            
                if($media >= 5){
                    $html .= "Aprovado</p>";
                } else if($media >= 3){
                    $html .= "RE</p>";
                } else {
                    $html .= "Reprovado por NOTA</p>";
                }
            } else {
                $html .= "Reprovado por FALTA</p>";
            }

            $html .= "</div>";
            echo $html;

        } else {
            echo "$erro";
        }
    } else {
        echo "Preencha os Campos";
    }
?>
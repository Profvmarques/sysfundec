<?php

class Util {

    // esta fun??o formata para o bd

    public function formatoDataYMD($data) {

        $data_arr = explode("/", $data);

        $datac = $data_arr[2] . '-' . $data_arr[1] . '-' . $data_arr[0];

        return $datac;
    }

    // esta fun??o formata para exibir no view

    public function formatoDataDMY($data) {

        $data_arr = explode("-", $data);

        $datad = $data_arr[2] . '/' . $data_arr[1] . '/' . $data_arr[0];

        return $datad;
    }

    // converte para real

    public function virgula($valor) {

        $conta = strlen($valor);

        switch ($conta) {

            case "1":

                $retorna = "0,0$valor";

                break;

            case "2":

                $retorna = "0,$valor";

                break;

            case "3":

                $d1 = substr("$valor", 0, 1);

                $d2 = substr("$valor", -2, 2);

                $retorna = "$d1,$d2";

                break;

            case "4":

                $d1 = substr("$valor", 0, 2);

                $d2 = substr("$valor", -2, 2);

                $retorna = "$d1,$d2";

                break;

            case "5":

                $d1 = substr("$valor", 0, 3);

                $d2 = substr("$valor", -2, 2);

                $retorna = "$d1,$d2";

                break;

            case "6":

                $d1 = substr("$valor", 1, 3);

                $d2 = substr("$valor", -2, 2);

                $d3 = substr("$valor", 0, 1);

                $retorna = "$d3.$d1,$d2";

                break;

            case "7":

                $d1 = substr("$valor", 2, 3);

                $d2 = substr("$valor", -2, 2);

                $d3 = substr("$valor", 0, 2);

                $retorna = "$d3.$d1,$d2";

                break;

            case "8":

                $d1 = substr("$valor", 3, 3);

                $d2 = substr("$valor", -2, 2);

                $d3 = substr("$valor", 0, 3);

                $retorna = "$d3.$d1,$d2";

                break;
        }

        return $retorna;
    }

    public function trataDataExtenso($data) {



        $data_arr = explode("-", $data);



        // leitura das datas

        $dia = $data_arr[2];

        $mes = $data_arr[1];

        $ano = $data_arr[0];

        //$semana = date('w');
        // configura??o mes



        switch ($mes) {



            case 1: $mes = "Janeiro";
                break;

            case 2: $mes = "Fevereiro";
                break;

            case 3: $mes = "Mar?o";
                break;

            case 4: $mes = "Abril";
                break;

            case 5: $mes = "Maio";
                break;

            case 6: $mes = "Junho";
                break;

            case 7: $mes = "Julho";
                break;

            case 8: $mes = "Agosto";
                break;

            case 9: $mes = "Setembro";
                break;

            case 10: $mes = "Outubro";
                break;

            case 11: $mes = "Novembro";
                break;

            case 12: $mes = "Dezembro";
                break;
        }





        // configura??o semana



        switch ($semana) {



            case 0: $semana = "DOMINGO";
                break;

            case 1: $semana = "SEGUNDA FEIRA";
                break;

            case 2: $semana = "TER?A-FEIRA";
                break;

            case 3: $semana = "QUARTA-FEIRA";
                break;

            case 4: $semana = "QUINTA-FEIRA";
                break;

            case 5: $semana = "SEXTA-FEIRA";
                break;

            case 6: $semana = "S?BADO";
                break;
        }

        //Agora basta imprimir na tela...
        //print ("$semana, $dia DE $mes DE $ano");



        $data = $dia . ' de ' . $mes . ' de ' . $ano;







        return $data;
    }

    //retorna o intervalo em dias

    public function Intervalo_data($data_inicio, $data_termino) {



        //data inicicial

        $data_arr = explode("-", $data_inicio);

        $datac = $data_arr[2] . '-' . $data_arr[1] . '-' . $data_arr[0];



        $d = $data_arr[2];

        $m = $data_arr[1];

        $A = $data_arr[0];





        $data_arr2 = explode("-", $data_termino);

        $d2 = $data_arr2[2];

        $m2 = $data_arr2[1];

        $A2 = $data_arr2[0];





        $diaI = $d;

        $mesI = $m;

        $anoI = $A;



        $diaF = $d2;

        $mesF = $m2;

        $anoF = $A2;



        $dataI = $A . "/" . $m . "/" . $d;

        $dataF = $A2 . "/" . $m2 . "/" . $d2;



        $secI = strtotime($dataI);

        $secF = strtotime($dataF);



        $intervalo = $secF - $secI;



        $dias = $intervalo / 3600 / 24;



        return $dias;
    }

    public function anuenio($dias) {



        $quantidadeAnos = $dias / 365;

        return $quantidadeAnos;
    }

    public function trienio($dias) {



        $quantidadeAnos = $dias / (365 * 3);

        return $quantidadeAnos;
    }

    public function msgbox($msn) {



        echo '<script>alert("' . $msn . '");</script>';
    }

    public function redirecionamentopage($caminho) {



        echo '<script>window.location="' . $caminho . '";</script>';
    }
    

    public function MsgboxSimNaoNovoCad($msn, $caminhopagesim) {

        //$d='default.php?pg=view/home/home.php';

        echo '<script>

						

						if (confirm("' . $msn . '")){

							window.location="' . $caminhopagesim . '";

						}else{

							window.location="' . $caminhopagesim . '";

						}

						</script>';
    }

    public function Seguranca($idusuario, $caminhopage) {



        if ($idusuario == '') {

            echo '<script>window.location="' . $caminhopage . '";</script>';
        }
    }

    public function dias_mes($mes, $ano) {



        if (fmod($ano, 4) == 0) {

            $dias[2] = 28;
        } else {

            $dias[2] = 29;
        }

        $dias[1] = 31;

        $dias[3] = 31;

        $dias[4] = 30;

        $dias[5] = 31;

        $dias[6] = 30;

        $dias[7] = 31;

        $dias[8] = 31;

        $dias[9] = 30;

        $dias[10] = 31;

        $dias[11] = 30;

        $dias[12] = 31;

        return $dias[$mes];
    }

    public function mes_extenso($nmes) {

        $meses[01] = "Janeiro";

        $meses[02] = "Fevereiro";

        $meses[03] = "Mar?o";

        $meses[04] = "Abril";

        $meses[05] = "Maio";

        $meses[06] = "Junho";

        $meses[07] = "Julho";

        $meses[08] = "Agosto";

        $meses[09] = "Setembro";

        $meses[10] = "Outubro";

        $meses[11] = "Novembro";

        $meses[12] = "Dezembro";

        return $meses[$nmes];
    }

    public function codigoRadomico() {

        $aux = time();
        $codigo = date('Ymd') . "_" . date('his') . "_" . substr(md5($aux), 0, 7);

        return $codigo;
    }

    public function anti_injection($sql) {
// remove palavras que contenham sintaxe sql
        $sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "", $sql);
        $sql = trim($sql); //limpa espaços vazio
        $sql = strip_tags($sql); //tira tags html e php
        $sql = addslashes($sql); //Adiciona barras invertidas a uma string
        return $sql;
    }

    /* ---------------------------------------------Métodos de mensagens em css---------------------- */

    public function msgSucess($msn) {

       $alert="<div class = \"alert alert-success\">
        <button class = \"close\" data-dismiss = \"alert\">&times;
        </button>
        <strong>Sucesso!</strong>$msg</div>";

        return $alert;
    }

}

?>
			
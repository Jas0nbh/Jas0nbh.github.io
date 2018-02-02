<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">

        <style rel="stylesheet" type="text/css">
            #cpf{
                font-family: 'Rajdhani', sans-serif;
                color: aliceblue;
                margin-top: 20px;
               
               
            }
            #gera_cpf{
                background-color: rgba(34, 47, 62, 0.8);
                width: 300px;
                height: 300px;
                text-align: center;
                position: absolute;
                margin-left: 39%;
                margin-top: 120px;
                border-radius: 50px;
            }
            body{
                background-image: url('https://i.imgur.com/UbQA5Vk.jpg');
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
            }
            #sub_div{
                margin-top: 60px;
                position: relative;
            }
            .button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <div id="gera_cpf">
            <div id="sub_div">
        <?php
        // |---------- NÚMEROS DO CPF ----------| //
        $cpf1 = rand(0, 9);
        $cpf2 = rand(0, 9);
        $cpf3 = rand(0, 9);
        $cpf4 = rand(0, 9);
        $cpf5 = rand(0, 9);
        $cpf6 = rand(0, 9);
        $cpf7 = rand(0, 9);
        $cpf8 = rand(0, 9);
        $cpf9 = rand(0, 9);
        // |---------- FUNÇÃO 1 ----------| //
        $CPF = array();
        $CPF['numero_1'] = $cpf1;
        $CPF['numero_2'] = $cpf2;
        $CPF['numero_3'] = $cpf3;
        $CPF['numero_4'] = $cpf4;
        $CPF['numero_5'] = $cpf5;
        $CPF['numero_6'] = $cpf6;
        $CPF['numero_7'] = $cpf7;
        $CPF['numero_8'] = $cpf8;
        $CPF['numero_9'] = $cpf9;
        
        $CPF['digito_verificador_1'] = 0;
        $CPF['digito_verificador_2'] = 0;
        
        // |---------- FUNÇÃO 2----------| //
        $CPF2 = array();
        $CPF2['numero_1'] = $cpf1;
        $CPF2['numero_2'] = $cpf2;
        $CPF2['numero_3'] = $cpf3;
        $CPF2['numero_4'] = $cpf4;
        $CPF2['numero_5'] = $cpf5;
        $CPF2['numero_6'] = $cpf6;
        $CPF2['numero_7'] = $cpf7;
        $CPF2['numero_8'] = $cpf8;
        $CPF2['numero_9'] = $cpf9;
        $CPF2['digito_verificador_1'] = $CPF['digito_verificador_1'];
        $CPF2['digito_verificador_2'] = 0;
        
        // |---------- DIGITO VERIFICADOR ----------| //
        $cpf_digito_verificador_1 = $CPF['digito_verificador_1'];
        $cpf_digito_verificador_2 = $CPF2['digito_verificador_1'];
        
        
        
        // |---------- GERAR CPF ----------| //
        function gera_cpf(){
            
        // |---------- IMPORTAR VARIÁVEIS ----------| //
            global $cpf1;
            global $cpf2;
            global $cpf3;
            global $cpf4;
            global $cpf5;
            global $cpf6;
            global $cpf7;
            global $cpf8;
            global $cpf9;
            global $CPF;
            global $CPF2;
            global $cpf_digito_verificador_1;
            global $cpf_digito_verificador_2;
            
        // |---------- DIGITO VERIFICADOR 1º ----------| //
            
                $CPF['numero_1'] = $CPF['numero_1'] * 10;
                $CPF['numero_2'] = $CPF['numero_2'] * 9;
                $CPF['numero_3'] = $CPF['numero_3'] * 8;
                $CPF['numero_4'] = $CPF['numero_4'] * 7;
                $CPF['numero_5'] = $CPF['numero_5'] * 6;
                $CPF['numero_6'] = $CPF['numero_6'] * 5;
                $CPF['numero_7'] = $CPF['numero_7'] * 4;
                $CPF['numero_8'] = $CPF['numero_8'] * 3;
                $CPF['numero_9'] = $CPF['numero_9'] * 2;
            
        // |---------- MULTIPLICA POR SEUS RESPECTIVOS NÚMEROS ----------| //  
            $resultado_multiplicacao_1 = $CPF['numero_1'] + $CPF['numero_2'] + $CPF['numero_3'] + $CPF['numero_4'] + $CPF['numero_5'] + $CPF['numero_6'] + $CPF['numero_7'] + $CPF['numero_8'] + $CPF['numero_9'];
        // |---------- SOBRA DA DIVISÃO ----------| //            
            $resultado_sobra_divisao_1 = intval($resultado_multiplicacao_1 % 11);
            
        // |---------- VERIFICA SE É MENOR OU MAIOR QUE 2 ----------| //
            if($resultado_sobra_divisao_1<2)
                $CPF['digito_verificador_1'] = 0;
               
            elseif($resultado_sobra_divisao_1>2)
                $CPF['digito_verificador_1'] = 11 - $resultado_sobra_divisao_1;
           
            
                
        // |---------- DIGITO VERIFICADOR 2º ----------| //  
                $CPF2['numero_1'] = $CPF2['numero_1'] * 11;
                $CPF2['numero_2'] = $CPF2['numero_2'] * 10;
                $CPF2['numero_3'] = $CPF2['numero_3'] * 9;
                $CPF2['numero_4'] = $CPF2['numero_4'] * 8;
                $CPF2['numero_5'] = $CPF2['numero_5'] * 7;
                $CPF2['numero_6'] = $CPF2['numero_6'] * 6;
                $CPF2['numero_7'] = $CPF2['numero_7'] * 5;
                $CPF2['numero_8'] = $CPF2['numero_8'] * 4;
                $CPF2['numero_9'] = $CPF2['numero_9'] * 3;
                $CPF2['digito_verificador_1'] = $CPF['digito_verificador_1'] * 2;
            
        // |---------- MULTIPLICA POR SEUS RESPECTIVOS NÚMEROS ----------| //  
            $resultado_multiplicacao_2 = $CPF2['numero_1'] + $CPF2['numero_2'] + $CPF2['numero_3'] + $CPF2['numero_4'] + $CPF2['numero_5'] + $CPF2['numero_6'] + $CPF2['numero_7'] + $CPF2['numero_8'] + $CPF2['numero_9'] + $CPF2['digito_verificador_1'];
        // |---------- SOBRA DA DIVISÃO ----------| //            
            $resultado_sobra_divisao_2 = intval($resultado_multiplicacao_2 % 11);
            
        // |---------- VERIFICA SE É MENOR OU MAIOR QUE 2 ----------| //
            if($resultado_sobra_divisao_2<2)
                $CPF2['digito_verificador_1'] = 0;
               
            elseif($resultado_sobra_divisao_2>2)
                $CPF2['digito_verificador_1'] = 11 - $resultado_sobra_divisao_2;
           
       // |---------- MONTA O CPF ----------| //
        $cpf_gerado = $cpf1 . $cpf2 . $cpf3 . "." . $cpf4 . $cpf5 . $cpf6 . "." . $cpf7 . $cpf8 . $cpf9 . "-" . $CPF['digito_verificador_1'] . $CPF2['digito_verificador_1'];     
            
        echo "<h1 id='cpf'>$cpf_gerado</h1>";   
        } 
        
        
        
        gera_cpf();
        ?>
            <br/><br/><br/>
         <input class="button" type="button" value="GERAR CPF" onclick="window.location.reload()">   
            </div>
        </div>
    </body>
</html>

<?php

require ("vendor/autoload.php");

use GuzzleHttp\Client;

$client = new Client();

$url = "https://liturgiadiaria.site/";

// $datenow =  date('d/m/Y');

// echo $datenow;

 $request = $client->request('GET',$url);

 $dados = json_decode($request->getBody(), true);

 echo "Data: " . $dados['data'] . "</br>";

 echo "Liturgia: " . $dados['liturgia']. "</br>";

 echo "Cor: " . $dados['cor']. "</br>";

 echo "Dia: " . $dados['dia']. "</br></br>";

 if(isset($dados['primeiraLeitura']["referencia"])){
 echo "Primeira Leitura: " . $dados['primeiraLeitura']["referencia"]. "</br>";
 echo "Titulo: " . $dados['primeiraLeitura']["titulo"]. "</br>";
 echo "Texto: " . $dados['primeiraLeitura']["texto"]. "</br></br>";
 }

if($dados['segundaLeitura']["referencia"]){
 echo "Segunda Leitura: " . $dados['segundaLeitura']["referencia"]. "</br>";
 echo "Titulo: " . $dados['segundaLeitura']["titulo"]. "</br>";
 echo "Texto: " . $dados['segundaLeitura']["texto"]. "</br></br>";
}

if($dados['salmo']["referencia"]){
    echo "Salmo: " . $dados['salmo']["referencia"]. "</br>";
    echo "Titulo: " . $dados['salmo']["refrao"]. "</br>";
    echo "Texto: " . $dados['salmo']["texto"]. "</br></br>";
}

if($dados['evangelho']["referencia"]){
    echo "Evangelho: " . $dados['evangelho']["referencia"]. "</br>";
    echo "Titulo: " . $dados['evangelho']["titulo"]. "</br>";
    echo "Texto: " . $dados['evangelho']["texto"]. "</br></br>";
}
<?php
  $nomeid = $_POST['id'];
  $pessoa = $_POST['nome'];
  $funcao = $_POST['cargo'];
  $salario = $_POST['sal'];
  $dependencia = $_POST['dependentes'];


$refFile = fopen("cadastros/$nomeid.txt","a+");

fwrite($refFile,"Id: ".$nomeid."\n"."Nome: ".$pessoa."\n"."Cargo: ".$funcao."\n"."Salário: ".$salario."\n"."Dependentes: ".$dependencia);

fclose($refFile);


$abc = scandir("cadastros");

array_shift($abc);
array_shift($abc);

foreach($abc as $def){
    echo"<a href='readInfo.php?id=$def'>$def</a><br>";
}


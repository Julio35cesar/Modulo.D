<?php

$alunos = [];
//coletar dados dos alunos 
for ($i = 0; $i < 3; $i++) {
    $nome = readline("Digite o nome do aluno" . ($i + 1) . ":");
    $nota = (float)readline("Digite a nota de $nome:");//le a nota e trasforma para numero
    $alunos[] = ["nome" => $nome, "nota" => $nota];
}
//variaveis para calcular media e encontrar a media
$somaNotas = 0;
$melhorAluno = $alunos[0];
//para dados de armazenamento
foreach($alunos as $aluno){
    $somaNotas += $aluno["nota"];
//verifica a nota atual e a maior registrada
    if($aluno["nota"] > $melhorAluno["nota"]){
        $melhorAluno = $aluno;
    }
}
//calcula a media da turma
$media = $somaNotas / count($alunos);
//exibe os resultados
echo"\n Media da turma:" . $media ."\n";
echo"Aluno com a maior nota da turma ". $melhorAluno["nome"] . "(Nota:" .
$melhorAluno["nota"]."\n";
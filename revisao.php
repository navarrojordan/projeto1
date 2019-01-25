<?php 

$pessoa[1] = [
    'aluno' => 'Aluno 1',
    'responsavel'=> 'Responsavel do aluno 1',
    'pai' => 'Pai do aluno 1',
    'mae'=> 'Mãe do aluno 1',
    
];


$pessoa[2] = [
    'aluno' => 'Aluno 2',
    'responsavel'=> 'Responsavel do aluno 2',
    'pai' => 'Pai do aluno 2',
    'mae'=> 'Mãe do aluno 2',
    
];

$pessoa[3] = [
    'aluno' => 'Aluno 3',
    'responsavel'=> 'Responsavel do aluno 3',
    'pai' => 'Pai do aluno 3',
    'mae'=> 'Mãe do aluno 3',
    
];


foreach ($pessoa as $rowPessoa)
{

echo "Nome do aluno : ".$rowPessoa['aluno'],"<br>";
echo "Responsavel do aluno:".$rowPessoa['responsavel'];
}
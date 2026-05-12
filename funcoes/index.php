<?php

 function soma(float $num1, float $num2, float $num3){
    return "Número 1: $num1, $num2, $num3"; 
}
function verificarIdade(int $anoNascimento): int{
    $anoAtual = date('Y');
    $idade = $anoAtual - $anoNascimento;
   return $idade;
}
function portaoDeBalada(int $anoNascimento, bool $acompanhado = false): string {
    $idadeParaEntrarNaBalada = 18;
    $idade = verificarIdade($anoNascimento);
    
    if ($idade >= $idadeParaEntrarNaBalada){
        return 'Pode entrar na balada';
    } elseif ($idade < $idadeParaEntrarNaBalada && $acompanhado){
        return 'Pode entrar na balada, com seu acompanhante';
   } else {
        return 'Não pode entrar na balada';
    }
}


echo "1994 anos sem acompanhte: ".portaoDeBalada(1994) . "<br />";
echo "1999 anos com acompanhte: ".portaoDeBalada(1999, true) . "<br />";
echo "2014 anos com acompanhte: ".portaoDeBalada(2014,) . "<br />"; 

/**
 * Gera uma string de saudação 
 * 
 * @param string $nome Nome da pessoa
 * @param string $sobrenome Sobrenome da pessoa
 * @param int $idade Idade da pessoa
 * 
 * @return string Saudação
 */
function parametrosNomeados(string $nome, string $sobrenome, int $idade): string {
    return "Olá, $nome $sobrenome. Você tem $idade anos.";
}

echo parametrosNomeados(nome: 'Leonardo', sobrenome: 'Vitor', idade: 25);

/**
 * soma dois numeros
 * 
 * @param float $n1 primeiro numero a ser somado 
 * @param float $n2 segundo numero a ser somado
 * 
 * @return float soma dos dois numeros
 */
function somar (float $n1, float $n2) {
    return $n1 + $n2;
}
somar(1, 2);
echo somar (n2: 215, n1: 5);
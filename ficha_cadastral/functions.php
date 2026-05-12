<?php

// Calculo do salario Anual
/**
 * Calcula o salario anual baseado no salario mensal 
 * 
 * @param float $salarioMensal Salario mensal
 * 
 * @return string Salario Anual 
 */
function caluclarSalarioAnual(float $salarioMensal): string
{
    // 13º Salario , + 1/3% de ferias 
    $tercoDeFerias = $salarioMensal / 3;
    $salario_anual = $salarioMensal * 13;
    
    return convertNumberToBRL($salario_anual);
}

/** 
 * Calcula a quantidade de anos que falta para alguem se aposentar
 * 
 * @param int $idade Idade da pessoa
 * @param string $sexo Sexo da pessoa
 * 
 * @return int Quantidade de anos que faltam para se aposentar
 */
function calcularFaltanteParaAposentadoria(int $idade, string $sexo)
{
    $anos_necessario_para_aposentar = $sexo == 'M' ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA;
    return $anos_necessario_para_aposentar - $idade;
}
/**
 * Recebe um valor numero e retorna em valor monetario
 * 
 * @param float $number valor numerico
 * 
 * @return string valor monetario 
 */
function convertNumberToBRL(float $number): string 
{
    return number_format($number, 2, ',', '.');
}

function diaDaSemana(int $dia) : string 
{
  if ($dia ==1) {
    return 'Segunda-feira';
  }  elseif ($dia ==2) {
    return 'Terça-feira';
  }  elseif ($dia ==3) {
    return 'Quarta-feira';
  }  elseif ($dia ==4) {
    return 'Quinta-feira';
  }  elseif ($dia ==5) {
    return 'Sexta-feira';
  }  elseif ($dia ==6) {
    return 'Sábado';
  }  elseif ($dia ==7) {
    return 'Domingo';
  } else {
    return 'Dia inválido';
  }
}


function diaSemanaSwitch(int $dia): string {
    switch ($dia){
        case 1:
        return 'Segunda-feira';
        break;
        case 2:
        return 'Terça-feira';
        break;
        case 3:
        return 'Quarta-feira';
        break;
        case 4:
        return 'Quinta-feira';
        break;
        case 5:
        return 'Sexta-feira';
        break;
        case 6:
        return 'Sábado';
        break;
        case 7:
        return 'Domingo';
        break;
        default:
        return 'Dia invalido';
    }
}

echo 'Dia da Semana: ' . diaSemanaSwitch(8);

?>
<?php
/*
 * EXEMPLO REAL: Processamento e Relatório de Cliente
 *
 * Este script pega dados brutos de um usuário, limpa-os,
 * faz cálculos (idade, estatísticas de compras) e
 * exibe um relatório formatado.
 */

// --- 1. DADOS BRUTOS (Simulando um formulário ou banco de dados) ---
echo "<pre>";
$dados_brutos = [
    'nome'    => '   jOnathan dAviS   ',
    'email'   => 'JON.kornuto1994@gMAIL.COM',
    'nasc'    => '21/02/1972',
    'compras' => '120.50, 80.00, 15.75, 250.00, 99.90' // Compras como uma única string
];

echo "--- DADOS BRUTOS --- \n";
print_r($dados_brutos);
echo "\n--- INICIANDO PROCESSAMENTO --- \n\n";

echo "<pre>";

// --- 2. PROCESSAMENTO COM FUNÇÕES DE STRING ---

// trim(): Remove espaços do início e fim
$nome_limpo = trim($dados_brutos['nome']);

// strtolower(): Converte tudo para minúsculo
$nome_lower = strtolower($nome_limpo);
$email_limpo = strtolower($dados_brutos['email']);

// ucwords(): Converte a primeira letra de cada palavra para maiúsculo
$nome_formatado = ucwords($nome_lower);

// explode(): "Explode" a string de compras em um ARRAY, usando a vírgula
$compras_array = explode(',', $dados_brutos['compras']);


// --- 3. PROCESSAMENTO COM FUNÇÕES DE DATA E HORA (DateTime) ---

// Pega a data e hora de agora
$hoje = new DateTime();

// DateTime::createFromFormat(): Converte a string (formato BR) para um objeto Data
$data_nascimento = DateTime::createFromFormat('d/m/Y', $dados_brutos['nasc']);

// diff(): Calcula a diferença (intervalo) entre as duas datas
$intervalo = $hoje->diff($data_nascimento);

// Pega a propriedade 'y' (anos) do intervalo
$idade = $intervalo->y;


// --- 4. PROCESSAMENTO COM FUNÇÕES DE ARRAY E MATEMÁTICA ---

// count(): Conta quantos itens (compras) existem no array
$total_de_compras = count($compras_array);

// array_sum(): Soma todos os valores do array (função de array matemática)
$valor_total_gasto = array_sum($compras_array);

// max() e min(): Encontram o maior e o menor valor no array
$maior_compra = max($compras_array);
$menor_compra = min($compras_array);

// round(): Arredonda o valor da média de gastos
$media_gasto = 0;
if ($total_de_compras > 0) {
    // Cálculo de média simples
    $media_gasto = round($valor_total_gasto / $total_de_compras, 2);
}


// --- 5. GERAÇÃO DO RELATÓRIO (Strings e Números) ---

echo "--- RELATÓRIO DO CLIENTE GERADO EM " . $hoje->format('d/m/Y H:i:s') . " ---\n";

// sprintf(): Monta uma string formatada, substituindo os coringas (%s, %d, %f)
$relatorio_pessoal = sprintf(
    "Nome: %s\nE-mail: %s\nIdade: %d anos\n",
    $nome_formatado,
    $email_limpo,
    $idade
);
echo $relatorio_pessoal;

echo "--- ESTATÍSTICAS DE COMPRAS ---\n";

// number_format(): Formata os números para o padrão monetário brasileiro
echo "Total de pedidos: " . $total_de_compras . "\n";
echo "Valor total gasto: R$ " . number_format($valor_total_gasto, 2, ',', '.') . "\n";
echo "Média por pedido: R$ " . number_format($media_gasto, 2, ',', '.') . "\n";
echo "Maior compra: R$ " . number_format($maior_compra, 2, ',', '.') . "\n";
echo "Menor compra: R$ " . number_format($menor_compra, 2, ',', '.') . "\n";

?>
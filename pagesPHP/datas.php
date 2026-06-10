<?php
echo "
<style>
    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 800px; margin: 20px auto; padding: 0 15px; }
    h3 { color: #e65c00; margin-bottom: 5px; } /* Cor laranja para data e hora */
    code { background: #f4f4f4; padding: 2px 6px; border-radius: 4px; font-family: monospace; font-size: 14px; }
    .resultado { background: #fffaf7; padding: 10px; border-left: 4px solid #e65c00; margin-top: 5px; font-weight: bold; }
    hr { border: 0; height: 1px; background: #ddd; margin: 20px 0; }
</style>
";

// --- EXEMPLO 1 ---
echo "<h3>Exemplo 1: new DateTime()</h3>";
$agora = new DateTime();
$natal = new DateTime('2025-12-25');
echo "<p>Instanciando objetos de data (Atual e uma específica)...</p>";
echo "<div class='resultado'>";
echo "Objeto \$agora criado com sucesso!<br>";
echo "Objeto \$natal criado com sucesso (25/12/2025)!";
echo "</div>";

echo "<hr>";

// --- EXEMPLO 2 ---
echo "<h3>Exemplo 2: format()</h3>";
$agora = new DateTime();
echo "<p>Formatando a data e hora atual:</p>";
echo "<div class='resultado'>";
echo "Formato Brasileiro: " . $agora->format('d/m/Y H:i:s') . "<br>";
echo "Formato Banco de Dados (ISO 8601): " . $agora->format('Y-m-d H:i:s');
echo "</div>";

echo "<hr>";

// --- EXEMPLO 3 ---
echo "<h3>Exemplo 3: modify()</h3>";
$hoje = new DateTime();
echo "<div class='resultado'>";
echo "Hoje é: " . $hoje->format('d/m/Y') . "<br>";

// Adiciona 10 dias
$hoje->modify('+10 days');
echo "Daqui a 10 dias será: " . $hoje->format('d/m/Y') . "<br>";

// Subtrai 1 mês
$hoje->modify('-1 month');
echo "Um mês atrás era: " . $hoje->format('d/m/Y');
echo "</div>";

echo "<hr>";

// --- EXEMPLO 4 ---
echo "<h3>Exemplo 4: diff()</h3>";
$data_nascimento = new DateTime('2008-04-27');
$hoje = new DateTime();
$intervalo = $hoje->diff($data_nascimento);

echo "<p>Calculando a diferença entre hoje e 27/04/2008:</p>";
echo "<div class='resultado'>";
echo "Você tem " . $intervalo->y . " anos.<br>";
echo "Diferença total de dias: " . $intervalo->days;
echo "</div>";

echo "<hr>";

// --- EXEMPLO 5 ---
echo "<h3>Exemplo 5: DateTime::createFromFormat()</h3>";
$data_string = '20/03/2026';
$formato = 'd/m/Y';
$data_obj = DateTime::createFromFormat($formato, $data_string);

echo "<p>Convertendo a string <code>20/03/2026</code> que estava no formato BR...</p>";
echo "<div class='resultado'>";
echo "Objeto gerado! O ano extraído é: " . $data_obj->format('Y');
echo "</div>";
?>
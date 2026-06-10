<?php
// Adiciona um estilo básico apenas para organizar as fontes e o espaçamento
echo "
<style>
    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 800px; margin: 20px auto; padding: 0 15px; }
    h3 { color: #0066cc; margin-bottom: 5px; }
    code { background: #f4f4f4; padding: 2px 6px; border-radius: 4px; font-family: monospace; font-size: 14px; }
    .resultado { background: #eef7ff; padding: 10px; border-left: 4px solid #0066cc; margin-top: 5px; font-weight: bold; }
    hr { border: 0; height: 1px; background: #ddd; margin: 20px 0; }
</style>
";

// --- EXEMPLO 1 ---
echo "<h3>Exemplo 1: strlen()</h3>";
$texto = "Olá, mundo!";
echo "<p>String analisada: <code>$texto</code></p>";
echo "<div class='resultado'>Quantidade de caracteres: " . strlen($texto) . "</div>";

echo "<hr>";

// --- EXEMPLO 2 ---
echo "<h3>Exemplo 2: str_replace()</h3>";
$frase = "Eu gosto de maçã.";
echo "<p>Frase original: <code>$frase</code></p>";
$nova_frase = str_replace("maçã", "banana", $frase);
echo "<div class='resultado'>Nova frase: " . $nova_frase . "</div>";

echo "<hr>";

// --- EXEMPLO 3 ---
echo "<h3>Exemplo 3: substr() (Buscando o Domínio)</h3>";
$email = "contato@exemplo.com";
echo "<p>E-mail original: <code>$email</code></p>";
$dominio = substr($email, 8); 
echo "<div class='resultado'>Domínio extraído: " . $dominio . "</div>";

echo "<hr>";

// --- EXEMPLO 4 ---
echo "<h3>Exemplo 4: substr() (Buscando o Usuário)</h3>";
echo "<p>E-mail original: <code>$email</code></p>";
$usuario = substr($email, 0, 7); 
echo "<div class='resultado'>Usuário extraído: " . $usuario . "</div>";

echo "<hr>";

// --- EXEMPLO 5 ---
echo "<h3>Exemplo 5: strtolower()</h3>";
$texto = "Isso É Um TESTE";
echo "<p>Texto original: <code>$texto</code></p>";
echo "<div class='resultado'>Minúsculo: " . strtolower($texto) . "</div>";

echo "<hr>";

// --- EXEMPLO 6 ---
echo "<h3>Exemplo 6: strtoupper()</h3>";
$texto = "Isso É Um TESTE";
echo "<p>Texto original: <code>$texto</code></p>";
echo "<div class='resultado'>Maiúsculo: " . strtoupper($texto) . "</div>";

echo "<hr>";

// --- EXEMPLO 7 ---
echo "<h3>Exemplo 7: ucfirst()</h3>";
$nome = "joão";
echo "<p>Nome original: <code>$nome</code></p>";
echo "<div class='resultado'>Capitalizado: " . ucfirst($nome) . "</div>";

echo "<hr>";

// --- EXEMPLO 8 ---
echo "<h3>Exemplo 8: trim()</h3>";
$entrada = "   olá   ";
echo "<p>Texto com espaços: <code>$entrada</code></p>";
$limpo = trim($entrada);
echo "<div class='resultado'>Texto limpo: " . $limpo . "</div>";

echo "<hr>";

// --- EXEMPLO 9 ---
echo "<h3>Exemplo 9: explode()</h3>";
$data = "29-10-2025";
echo "<p>Data original: <code>$data</code></p>";
$partes = explode("-", $data);
echo "<div class='resultado'>Apenas o dia (Índice 0 do Array): " . $partes[0] . "</div>";

echo "<hr>";

// --- EXEMPLO 10 ---
echo "<h3>Exemplo 10: implode()</h3>";
$array = ["Maçã", "Banana", "Laranja"];
echo "<p>Array original: <code>['Maçã', 'Banana', 'Laranja']</code></p>";
$lista_compras = implode(", ", $array);
echo "<div class='resultado'>String juntada: " . $lista_compras . "</div>";

echo "<hr>";

// --- EXEMPLO 11 ---
echo "<h3>Exemplo 11: strpos()</h3>";
$frase = "O gato subiu no telhado.";
echo "<p>Frase: <code>$frase</code></p>";
$posicao = strpos($frase, "gato");

echo "<div class='resultado'>";
if ($posicao !== false) {
    echo "A palavra 'gato' foi encontrada na posição: " . $posicao;
} else {
    echo "A palavra 'gato' não foi encontrada.";
}
echo "</div>";

echo "<hr>";

// --- EXEMPLO 12 ---
echo "<h3>Exemplo 12: sprintf()</h3>";
$nome = "Maria";
$idade = 30;
$texto = sprintf("O nome dela é %s e ela tem %d anos.", $nome, $idade);
echo "<div class='resultado'>" . $texto . "</div>";
?>
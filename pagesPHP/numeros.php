<?php
echo "
<style>
    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 800px; margin: 20px auto; padding: 0 15px; }
    h3 { color: #00aa66; margin-bottom: 5px; }
    code { background: #f4f4f4; padding: 2px 6px; border-radius: 4px; font-family: monospace; font-size: 14px; }
    .resultado { background: #f4fbf7; padding: 10px; border-left: 4px solid #00aa66; margin-top: 5px; font-weight: bold; }
    hr { border: 0; height: 1px; background: #ddd; margin: 20px 0; }
</style>
";

// --- EXEMPLO 1 ---
echo "<h3>Exemplo 1: number_format()</h3>";
$preco = 2534.75;
echo "<p>Número original: <code>$preco</code></p>";
echo "<div class='resultado'>";
echo "Formato BR: R$ " . number_format($preco, 2, ',', '.') . "<br>";
echo "Formato simples (arredondado): " . number_format($preco);
echo "</div>";

echo "<hr>";

// --- EXEMPLO 2 ---
echo "<h3>Exemplo 2: round()</h3>";
echo "<p>Arredondamentos do mais próximo:</p>";
echo "<div class='resultado'>";
echo "round(2.3) -> " . round(2.3) . "<br>";
echo "round(6.7) -> " . round(6.7) . "<br>";
echo "round(1.520, 7) -> " . round(1.520, 7);
echo "</div>";

echo "<hr>";

// --- EXEMPLO 3 ---
echo "<h3>Exemplo 3: ceil() (Arredonda para cima)</h3>";
echo "<div class='resultado'>";
echo "ceil(10.2) -> " . ceil(10.2) . "<br>";
echo "ceil(2.5) -> " . ceil(2.5);
echo "</div>";

echo "<hr>";

// --- EXEMPLO 4 ---
echo "<h3>Exemplo 4: floor() (Arredonda para baixo)</h3>";
echo "<div class='resultado'>";
echo "floor(10.2) -> " . floor(10.2) . "<br>";
echo "floor(2.5) -> " . floor(2.5);
echo "</div>";

echo "<hr>";

// --- EXEMPLO 5 ---
echo "<h3>Exemplo 5: abs() (Valor Absoluto / Módulo)</h3>";
$diferenca = 20 - 55;
echo "<p>Operação: <code>20 - 55 = $diferenca</code></p>";
echo "<div class='resultado'>Resultado: " . abs($diferenca) . "</div>";

echo "<hr>";

// --- EXEMPLO 6 ---
echo "<h3>Exemplo 6: mt_rand() (Número Aleatório)</h3>";
echo "<p>Gerando número entre 1 e 10...</p>";
echo "<div class='resultado'>Número gerado: " . mt_rand(1, 10) . "</div>";

echo "<hr>";

// --- EXEMPLO 7 ---
echo "<h3>Exemplo 7: max() (Maior Valor)</h3>";
$notas = [4.4, 8.5, 9.1];
echo "<div class='resultado'>";
echo "Maior de (25, 10, 1, 118) -> " . max(25, 10, 1, 118) . "<br>";
echo "Maior do array [[4.4, 8.5, 9.1] -> " . max($notas);
echo "</div>";

echo "<hr>";

// --- EXEMPLO 8 ---
echo "<h3>Exemplo 8: min() (Menor Valor)</h3>";
$precos = [4.4, 8.5, 9.1];
echo "<div class='resultado'>";
echo "Menor de (25, 10, 1, 118) -> " . min(25, 10, 1, 118) . "<br>";
echo "Menor do array [4.4, 8.5, 9.1] -> " . min($precos);
echo "</div>";

echo "<hr>";

// --- EXEMPLO 9 ---
echo "<h3>Exemplo 9: pow() (Exponenciação)</h3>";
echo "<p>Cálculo: 2 elevado a 3 (<code>2³</code>)</p>";
echo "<div class='resultado'>Resultado: " . pow(2, 3) . "</div>";

echo "<hr>";

// --- EXEMPLO 10 ---
echo "<h3>Exemplo 10: sqrt() (Raiz Quadrada)</h3>";
echo "<div class='resultado'>";
echo "sqrt(16) -> " . sqrt(16) . "<br>";
echo "sqrt(144) -> " . sqrt(144);
echo "</div>";
?>
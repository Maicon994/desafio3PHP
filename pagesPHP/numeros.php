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
$preco = 1250.75;
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
echo "round(4.3) -> " . round(4.3) . "<br>";
echo "round(4.7) -> " . round(4.7) . "<br>";
echo "round(2.3456, 2) -> " . round(2.3456, 2);
echo "</div>";

echo "<hr>";

// --- EXEMPLO 3 ---
echo "<h3>Exemplo 3: ceil() (Arredonda para cima)</h3>";
echo "<div class='resultado'>";
echo "ceil(4.3) -> " . ceil(4.3) . "<br>";
echo "ceil(4.0) -> " . ceil(4.0);
echo "</div>";

echo "<hr>";

// --- EXEMPLO 4 ---
echo "<h3>Exemplo 4: floor() (Arredonda para baixo)</h3>";
echo "<div class='resultado'>";
echo "floor(4.7) -> " . floor(4.7) . "<br>";
echo "floor(4.0) -> " . floor(4.0);
echo "</div>";

echo "<hr>";

// --- EXEMPLO 5 ---
echo "<h3>Exemplo 5: abs() (Valor Absoluto / Módulo)</h3>";
$diferenca = 10 - 25;
echo "<p>Operação: <code>10 - 25 = $diferenca</code></p>";
echo "<div class='resultado'>Resultado: " . abs($diferenca) . "</div>";

echo "<hr>";

// --- EXEMPLO 6 ---
echo "<h3>Exemplo 6: mt_rand() (Número Aleatório)</h3>";
echo "<p>Gerando número entre 1 e 10...</p>";
echo "<div class='resultado'>Número gerado: " . mt_rand(1, 10) . "</div>";

echo "<hr>";

// --- EXEMPLO 7 ---
echo "<h3>Exemplo 7: max() (Maior Valor)</h3>";
$notas = [7.5, 9.0, 6.2];
echo "<div class='resultado'>";
echo "Maior de (5, 10, 2, 8) -> " . max(5, 10, 2, 8) . "<br>";
echo "Maior do array [7.5, 9.0, 6.2] -> " . max($notas);
echo "</div>";

echo "<hr>";

// --- EXEMPLO 8 ---
echo "<h3>Exemplo 8: min() (Menor Valor)</h3>";
$precos = [19.99, 15.50, 22.00];
echo "<div class='resultado'>";
echo "Menor de (5, 10, 2, 8) -> " . min(5, 10, 2, 8) . "<br>";
echo "Menor do array [19.99, 15.50, 22.00] -> " . min($precos);
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
echo "sqrt(9) -> " . sqrt(9) . "<br>";
echo "sqrt(100) -> " . sqrt(100);
echo "</div>";
?>
<?php
echo "
<style>
    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 800px; margin: 20px auto; padding: 0 15px; }
    h3.tipo { color: #aa0066; margin-bottom: 5px; } /* Cor magenta para verificação de tipo */
    h3.array { color: #6600cc; margin-bottom: 5px; } /* Cor roxa para arrays */
    code { background: #f4f4f4; padding: 2px 6px; border-radius: 4px; font-family: monospace; font-size: 14px; }
    pre { background: #f8f8f8; padding: 10px; border-radius: 4px; font-family: monospace; font-size: 13px; margin: 5px 0; }
    .resultado { padding: 10px; margin-top: 5px; font-weight: bold; }
    .res-tipo { background: #fbf4f8; border-left: 4px solid #aa0066; }
    .res-array { background: #f7f4fb; border-left: 4px solid #6600cc; }
    hr { border: 0; height: 1px; background: #ddd; margin: 20px 0; }
</style>
";

// --- EXEMPLO 11 ---
echo "<h3 class='tipo'>Exemplo 11: is_numeric()</h3>";
echo "<div class='resultado res-tipo'>";
echo "is_numeric(123) -> " . (is_numeric(123) ? 'bool(true)' : 'bool(false)') . "<br>";
echo "is_numeric('123.45') -> " . (is_numeric("123.45") ? 'bool(true)' : 'bool(false)') . "<br>";
echo "is_numeric('Olá') -> " . (is_numeric("Olá") ? 'bool(true)' : 'bool(false)');
echo "</div>";

echo "<hr>";

// --- EXEMPLO 12 ---
echo "<h3 class='tipo'>Exemplo 12: is_int()</h3>";
echo "<div class='resultado res-tipo'>";
echo "is_int(123) -> " . (is_int(123) ? 'bool(true)' : 'bool(false)') . "<br>";
echo "is_int(123.45) -> " . (is_int(123.45) ? 'bool(true)' : 'bool(false)') . "<br>";
echo "is_int('123') -> " . (is_int("123") ? 'bool(true)' : 'bool(false) - É uma string!');
echo "</div>";

echo "<hr>";

// --- EXEMPLO 13 ---
echo "<h3 class='tipo'>Exemplo 13: is_float()</h3>";
echo "<div class='resultado res-tipo'>";
echo "is_float(123.45) -> " . (is_float(123.45) ? 'bool(true)' : 'bool(false)') . "<br>";
echo "is_float(123) -> " . (is_float(123) ? 'bool(true)' : 'bool(false)');
echo "</div>";

echo "<hr>";

// --- ARRAY 1 ---
echo "<h3 class='array'>Exemplo 1: count()</h3>";
$frutas = ["Maçã", "Banana", "Laranja"];
echo "<p>Array analisado: <code>['Maçã', 'Banana', 'Laranja']</code></p>";
echo "<div class='resultado res-array'>Total de elementos: " . count($frutas) . "</div>";

echo "<hr>";

// --- ARRAY 2 ---
echo "<h3 class='array'>Exemplo 2: array_push()</h3>";
$lista = ["Arroz", "Feijão"];
array_push($lista, "Macarrão", "Óleo");
echo "<p>Adicionando 'Macarrão' e 'Óleo' ao final da lista...</p>";
echo "<div class='resultado res-array'>Conteúdo do Array:</div>";
echo "<pre>"; print_r($lista); echo "</pre>";

echo "<hr>";

// --- ARRAY 3 ---
echo "<h3 class='array'>Exemplo 3: array_pop()</h3>";
$lista = ["Arroz", "Feijão", "Macarrão"];
$ultimo_item = array_pop($lista);
echo "<div class='resultado res-array'>";
echo "Item removido: " . $ultimo_item . "<br>";
echo "Array restante: ";
echo "</div>";
echo "<pre>"; print_r($lista); echo "</pre>";

echo "<hr>";

// --- ARRAY 4 ---
echo "<h3 class='array'>Exemplo 4: array_shift()</h3>";
$lista = ["Arroz", "Feijão", "Macarrão"];
$primeiro_item = array_shift($lista);
echo "<div class='resultado res-array'>";
echo "Item removido: " . $primeiro_item . "<br>";
echo "Array restante: ";
echo "</div>";
echo "<pre>"; print_r($lista); echo "</pre>";

echo "<hr>";

// --- ARRAY 5 ---
echo "<h3 class='array'>Exemplo 5: array_key_exists()</h3>";
$config = ['usuario' => 'admin', 'senha' => '123'];
echo "<div class='resultado res-array'>";
if (array_key_exists('usuario', $config)) {
    echo "A chave 'usuario' existe no array de configurações.";
} else {
    echo "A chave não foi encontrada.";
}
echo "</div>";

echo "<hr>";

// --- ARRAY 6 ---
echo "<h3 class='array'>Exemplo 6: in_array()</h3>";
$permissoes = ['ler', 'escrever', 'executar'];
echo "<div class='resultado res-array'>";
if (in_array('escrever', $permissoes)) {
    echo "O usuário tem a permissão 'escrever'.";
} else {
    echo "Permissão não encontrada.";
}
echo "</div>";

echo "<hr>";

// --- ARRAY 7 ---
echo "<h3 class='array'>Exemplo 7: array_merge()</h3>";
$array1 = ["a", "b"];
$array2 = ["c", "d"];
$resultado = array_merge($array1, $array2);
echo "<p>Mesclando os arrays <code>['a', 'b']</code> e <code>['c', 'd']</code>...</p>";
echo "<div class='resultado res-array'>Array combinado:</div>";
echo "<pre>"; print_r($resultado); echo "</pre>";

echo "<hr>";

// --- ARRAY 8 ---
echo "<h3 class='array'>Exemplo 8: array_keys()</h3>";
$capitais = ['Brasil' => 'Brasília', 'Portugal' => 'Lisboa'];
$paises = array_keys($capitais);
echo "<p>Buscando apenas as chaves do array de capitais...</p>";
echo "<div class='resultado res-array'>Chaves encontradas:</div>";
echo "<pre>"; print_r($paises); echo "</pre>";

echo "<hr>";

// --- ARRAY 9 ---
echo "<h3 class='array'>Exemplo 9: array_values()</h3>";
$capitais = ['Brasil' => 'Brasília', 'Portugal' => 'Lisboa'];
$cidades = array_values($capitais);
echo "<p>Buscando apenas os valores do array de capitais...</p>";
echo "<div class='resultado res-array'>Valores reindexados:</div>";
echo "<pre>"; print_r($cidades); echo "</pre>";
?>
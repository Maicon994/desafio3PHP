# Processamento e Relatório de Cliente (Desafio PHP)

Este é um script prático em PHP desenvolvido para demonstrar o uso e a manipulação de funções essenciais da linguagem. O objetivo principal do projeto é simular um cenário real onde dados "sujos" ou mal formatados de um formulário/banco de dados precisam ser limpos, processados e exibidos em um relatório organizado.

## O que o script faz?

1. **Sanitização de Dados:** Remove espaços extras e padroniza textos (nomes com iniciais maiúsculas e e-mails em letras minúsculas).
2. **Manipulação de Arrays:** Transforma uma string única de compras em uma lista manipulável.
3. **Cálculos Matemáticos e Estatísticos:** Identifica a maior compra, a menor compra, calcula o total gasto e a média por pedido (arredondando o resultado).
4. **Manipulação de Data e Hora:** Utiliza a classe nativa `DateTime` para converter a data de nascimento do padrão brasileiro e calcular a idade exata do cliente com base no ano atual.
5. **Formatação de Saída:** Gera um relatório formatado para exibição no navegador (utilizando quebras de linha HTML adequadas) e exibe os valores monetários no padrão brasileiro (`R$`).

## Funções PHP Praticadas

O projeto reúne quatro categorias essenciais de funções do PHP:

| Categoria | Funções Utilizadas |
| :--- | :--- |
| **Manipulação de Strings** | `trim()`, `strtolower()`, `ucwords()`, `explode()`, `sprintf()` |
| **Data e Hora** | `new DateTime()`, `DateTime::createFromFormat()`, `format()`, `diff()` |
| **Arrays** | `count()`, `array_sum()` |
| **Matemáticas / Números** | `max()`, `min()`, `round()`, `number_format()` |

## Como Rodar o Projeto

1. Certifique-se de ter um ambiente PHP local ativo (como XAMPP, WampServer ou o servidor embutido do PHP).
2. Coloque o arquivo `limparDados.php` no seu diretório de execução (`htdocs` ou similar).
3. Abra o navegador e acesse o endereço correspondente. Exemplo:
   ```text
   http://localhost/desafio3/limparDados.php

## Autor

Maicon Ferreira Machado - ULBRA São Lucas, Téc. de Informática - Módulo 3 <br>
Data: 10/06/2026

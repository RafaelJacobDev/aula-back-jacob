 # Remoção de item no array

"Fizemos 5 formas de excluir itens no array"

"Remover o último 

Remover primeiro item;
 
Remover um item por índice;
 
Remover um item por valor ou condição;
 
Remover duplicatas."


# Remover ultimo item
## array_pop($)
deleta o ultimo item do array não importando qual é

# Remover primeiro item
## array_shift($)
ele retirar o primeiro item de uma relação e reindexa os outros itens dessa lista (ele pega a posição 1 e trasforma em 0, adiantando todos os itens posteriores)

# Remover um item por índice
## array_splice(array:/offset/length)
O array é especificado no código para denominar o que irá ser alterado, o offset será o índice que ele irá remover para fazer o reajuste, e por último o elemento que virá pré disposto ao elemento que irá ser removido.


# Remover um item por valor ou condição
## Remover por condição $=array_values(array_diff($,[""]))
Quando ja se sabe o item que quer remover(só aceita valores fixos)
## Remover por condição $=array_values(array_filter($, function($){return strlen ($) <=N°}));
Não se sabe exatamente o valor que quer remover, mas tem uma regra pra decidir quem deve sair

# Remover duplicatas
## array_values(array_unique($))
o codigo array_uniqui deleta todos os itens repitidos dentro do array (mantém as chaves originais ) assim deixando buracos , ele sendo usado junto com o array_values () reindexiza o array após remover duplicados, garantindo índices sequenciais
# Operações CRUD usando SQL

## Resumo 

- C: Criar/Inserir dados -> INSERT
- R: (R) Ler dados       -> SELECT   
- U: (U) Atualizar dados -> UPDATE
- D: (D) Excluir dados    -> DELETE

## Exemplos para tabela "usuarios"

### Inserindo usuarios

INSERT INTO usuarios (nome,email,senha,tipo)
VALUES('Maria','mariaeduardasousa804@gmail.com', '123senac', 'admin');

INSERT INTO usuarios (nome,email,senha,tipo)
VALUES('Eduardo','eduardo@gmail.com', '133senac', 'editor');

INSERT INTO usuarios (nome,email,senha,tipo)
VALUES('ana','ana@gmail.com', '222senac', 'editor');

INSERT INTO usuarios (nome,email,senha,tipo)
VALUES('giovanna','giovanna@gmail.com', '132senac', 'editor');

## Inserindo noticias

INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id)

VALUES (
    'Meu pai ganhou na mega-sena',
    'Estou rico, tchau para vocês',
    'Jogou e ganhou',
    'premio.jpg',
    4
);

INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id)

VALUES (
    'Faça um bolo BB(Bom e Barato)',
    'Receita simples! com ingredientes que você tem na sua casa',
    'Bolo de cenoura',
    'bolo.jpg',
    5
);

INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id)

VALUES (
    'Tipos de flores comestíveis',
    'Normalmente flores comestíveis não são encontradas na rua',
    'flores comestíveis',
    'flores.jpg',
    6
);

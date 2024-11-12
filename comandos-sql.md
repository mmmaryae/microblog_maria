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
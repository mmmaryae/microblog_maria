Microblog - Sistema de Publicação de Notícias

Este projeto foi desenvolvido durante o curso de Programação do Senac Penha, como parte das atividades práticas de aprendizado em desenvolvimento web.

O sistema consiste em um microblog com controle de autenticação, gerenciamento de usuários e permissões de acesso para publicação e administração de notícias.

Tecnologias utilizadas
PHP
MySQL
phpMyAdmin (gerenciamento do banco de dados)
HTML
CSS
Funcionalidades
Sistema de login e autenticação de usuários
Controle de permissões por tipo de usuário
Cadastro, edição e exclusão de notícias
Gerenciamento de usuários (nível administrador)
Área pública para visualização de conteúdos
Área administrativa restrita
Estrutura do Sistema
Área Pública

Páginas acessíveis sem autenticação:

index
noticia
login
resultados
Área Administrativa

Páginas que exigem autenticação, localizadas na pasta admin:

index
meu-perfil
usuarios
usuario-insere
usuario-atualiza
usuario-exclui
noticias
noticia-insere
noticia-atualiza
noticia-exclui
nao-autorizado
Permissões de Acesso
Admin

Usuário com acesso total ao sistema:

Gerenciamento completo de usuários
Criação, edição e exclusão de notícias
Cadastro de novos administradores e editores
Editor

Usuário com permissões limitadas:

Gerenciamento do próprio perfil
Criação, edição e exclusão de suas próprias notícias
Sem acesso à administração de outros usuários
Regras de Acesso
A área administrativa exige autenticação
As permissões são definidas pelo tipo de usuário
Ações administrativas são restritas ao nível de acesso
Objetivo do Projeto

Projeto desenvolvido com foco em aprendizado prático de desenvolvimento web, simulando um sistema real de publicação de notícias com controle de usuários e permissões.
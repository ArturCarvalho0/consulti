# CRUD de Cadastro de Clientes

Este projeto implementa um CRUD (Create, Read, Update, Delete) para o cadastro de clientes.

## Requisitos

- XAMPP (ou outro servidor local que suporte PHP e MySQL) eu recomendo o XAMPP porque foi oque eu utilizei na criação do projeto.

## Instalação

1. Faça o download do projeto.

2. Configure o servidor local XAMPP e certifique-se de que o Apache e o MySQL estejam em execução.

3. Crie um banco de dados MySQL chamado `clientes` e importe o arquivo SQL fornecido (`consulti.sql`) que se encontra no diretório `configuration/consulti.sql` para criar a estrutura da tabela. (Enviado com 5 usuário de exemplo para teste)

4. Configure as credenciais de conexão ao banco de dados no arquivo `configuration/connect.php`.

## Uso

1. Abra o navegador e acesse `http://localhost/consulti/src/index.php`.

2. A partir daí, você poderá realizar as operações CRUD básicas para cadastrar, visualizar, atualizar e excluir clientes.

## Estrutura de Diretórios

- `configuration`: Contém arquivos de configuração, como a conexão com o banco de dados.
- `public`: Contém arquivos públicos, como CSS, imagens e arquivos de inclusão da interface do usuário.
- `src`: Contém os arquivos do MVC (Model-View-Controller) do projeto.
  - `controllers`: Contém os controladores que processam as requisições do usuário.
  - `models`: Contém os modelos que lidam com a interação com o banco de dados.
  - `views`: Contém as visualizações que são exibidas para o usuário.



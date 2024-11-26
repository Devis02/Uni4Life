# Uni4Life
Este arquivo foi escrito com a finalidade de auxiliar na execução bem sucedida do Uni4Life na sua máquina, levando em consideração que você já tenha o projeto clonado na sua máquina.
- Primeiramente, é necessária a criação de uma base de dados para rodar a DDL contendo as tabelas e relacionamentos, que está localizada na pasta raiz do projeto.
- Após execução da DDL na base, é possível dar seguimento na configuração do seu ambiente seguindo as instruções abaixo
  
# Configurações iniciais necessárias para acesso ao banco:
- Configurar as variáveis de ambiente para acesso ao banco de dados:
  1. criar um arquivo com o nome de ".env" na pasta raiz do projeto
  2. Definir as variáveis abaixo no arquivo .env:
  3. DB="mysql/pgsql/sqlite" DB_HOST="host" DB_NAME="nome da base/schema" DB_USER="usuário" DB_PASSWORD="senha"
     
# Etapas para execução:
- Inicializar um servidor na máquina:
  1. entrar na pastra "public" (cd public)
  2. subir um servidor (php -S localhost:<número da porta desejada. EX:8080>)

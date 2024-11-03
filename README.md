# Uni4Life

# Configurações iniciais necessárias para acesso:
- Configurar as variáveis de ambiente para acesso ao banco de dados:
  1. criar um arquivo com o nome de ".env" na pasta raiz do projeto
  2. Definir as variáveis abaixo no arquivo .env:
  3. DB="mysql/pgsql/sqlite" DB_HOST="host" DB_NAME="nome da base/schema" DB_USER="usuário" DB_PASSWORD="senha"
     
# Etapas para execução:
- Inicializar um servidor na máquina:
  1. entrar na pastra "public" (cd public)
  2. subir um servidor (php -S localhost:<número da porta desejada. EX:8080>)

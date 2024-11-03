# Uni4Life

# Configurações iniciais necessárias para acesso:
- Configurar as variáveis de ambiente para acesso ao banco de dados:
  1. criar um arquivo com o nome de ".env" na pasta raiz do projeto
  2. Definir as seguintes variáveis:
     1 - |DB="banco"                      |  mysql,pgsql,sqlite  |
     2 - |DB_HOST="host"                  |  host do banco       |
     3 - |DB_NAME="base/schema"           |  Nome da base/schema |
     4 - |DB_USER="usuário"               |  usuário do banco    |
     5 - |DB_PASSWORD="senha"             |  senha do banco      |
     
#Etapas para execução:
- entrar na pastra "public" (cd public)
- inicializar um servidor (php -S localhost:<número da porta desejada. EX:8080>)

<PORTUGUESE>
# ATENÇÃO

Neste projeto foi usada a versão 7.3.8 do PHP,
para evitar problemas de compatibilidade,
por favor tenha certeza de que esta versão está
instalada no seu computador.

###INSTRUÇÕES DE USO###

1 - Instale o MySQL Server de versão 8.0.17
    para evitar problemas de compatibilidade;

2 - Configure seu usuário como "root" e senha "root";

3 - Crie um banco de dados chamado "cadastro_cliente";

4 - Para verificar sua conexão com o banco de dados,
    rode no terminal o arquivo "teste-script.php"
    presente na raiz do projeto;

5 - Se a mensagem "Conectado com sucesso" for exibida,
    prossiga para o passo 6.
	Se não, faça login como root no terminal do
	MySQL Server e cole o comando abaixo:

	alter user 'root'@'localhost' identified with mysql_native_password by 'root';

6 - Devidamente conectado no banco,
    rode o comando "php artisan migrate" no terminal;

7 - Abra seu servidor localhost e digite no navegador a url abaixo:

    http://localhost/cadastro-de-clientes/public/index.php

8 - Faça seu prórpio registro no site, e você poderá cadastrar clientes.


<ENGLISH>
# ATTENTION

In this project, was used the 7.3.8 PHP version,
to avoid compatibility problems,
please make sure that this version is properly
installed on your computer.

###USE INSTRUCTIONS###

1 - Install MySQL Server Version 8.0.17
    to avoid compatibility issues;

2 - Set your username to "root" and password "root";

3 - Create a database called "cadastro_cliente";

4 - To verify your database connection,
    run the file "test-script.php" in the terminal
    present at the root of the project;

5 - If the "Conectado com sucesso" message appears,
    proceed to step 6.
    If not, log in as root to the MySQL Server
    and paste the command below:

    alter user 'root'@'localhost' identified with mysql_native_password by 'root';

6 - Properly connected into the database,
    run the command "php artisan migrate" in terminal;

7 - Open your localhost server and type in the browser url below:

    http://localhost/cadastro-de-clientes/public/index.php

8 - Make your own registration on the site, and you will register clients.



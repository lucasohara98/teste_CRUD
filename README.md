1 -Para o funcionamento do sistema, é necessario instalar: PHP, Laravel, algum pacote de servidor local como o wampserver ou xampp e o composer;
2 -apos instalação, faça o download do ZIP do codigo ou clone o repositorio
3-extraia dentro da de alguma pasta do servidor local ex:(C:/wamp64)
4- abra o localhost/phpmyadmin/ e crie um banco de dados chamado 'bookstore' com agrupamento 'utf8mb4_unicode_ci'
5- abra a pasta onde foi extraido a pasta teste_CRUD e no terminal ou no Prompt use o comando 'PHP artisan serve', para iniciar, e em seguida de o comando
'PHP artisan migrate' para ele passar os paramentros para dentro da tabela
6- abra o link gerado pelo comando artisan serve, e coloque o '/books' na URL ex:'http://127.0.0.1:8000/books'

# Exercícios PHP #

Lista de exercícios resolvidos. Ao final dessa documentação você pode encontrar os enunciados.

## Requisitos ##

* [Docker CE](https://docs.docker.com/install/)
* [Docker compose](https://docs.docker.com/compose/install/)
* [GIT](https://git-scm.com/downloads)

## Tecnlogias utilizadas ##

O PHP foi a linguagem utilizada para desenvolver o projeto, abaixo estão algumas outras coisas do mundo PHP que auxiliaram no desenvolvimento:

* [Slim](http://www.slimframework.com/), um micro framework que foi utilizado para mapear as rotas do sistema
* [Twig](https://twig.symfony.com/), utilizado para renderizar na tela os dados vindos do PHP
* [PHPUnit](https://phpunit.de/), framework utilizado para criar a suite de testes unitários

## Iniciando a aplicação ##

Para iniciar a aplicação primeiro é necessário clonar o projeto:
```git
git clone git@github.com:murilohpucci/php-technical-challenge.git
```

Entre na pasta do projeto:
```bash
cd php-technical-challenge
```

Execute a aplicação:
```bash
make run
```

O comando **make run** iniciará a aplicação em um container dentro da sua máquina, caso tenha algum problema, verifique se a porta **8080** da sua máquina está livre e pronta para uso.

Com o container rodando você já pode acessar a página da aplicação aqui http://127.0.0.1:8080/

Não se esqueça de conferir a documentação da API no **swagger** 

> **NOTA** A primeira vez que a aplicação executar, vai demorar um pouco para que o composer baixe todas as dependências, por favor aguarde o fim de todos os downloads

## Testes ##

#### Unitários ####

Para executar os testes unitários da aplicação use o comando:
```bash
make test
```

## Documentação ##

Toda a documentação do projeto está aqui neste **README.md**
A documentação da API foi feita usando o **Swagger** basta importar o arquivo **swagger.yml** no site do [editor](https://editor.swagger.io/) 

## Enunciados ##

* Crie um script PHP que mostra o nome do país e sua capital usando uma array chamada $location. Ordene a Lista pelo nome da capital e adicione pelo menos 5 entradas no array.

        Exemplo do que deve ser mostrado de saída:

        A capital do Brasil e Brasília
        A capital dos EUA e Washington 
        A capital da Espanha e Madrid 


* Joãozinho vai morder o seu dedo 50% das vezes. Esse exercício será dividido em 2 partes. 

        1. Primeiro, cria uma função chamada foiMordido() que deverá retornar  TRUE para 50% das vezes e FALSE para os outros 50%. A função rand() pode ser útil aqui.
       
        2. Após criar a função, crie um código/página que mostre as frases “Joãozinho mordeu o seu dedo !” ou “Joaozinho NAO mordeu o seu dedo !” usando a função foiMordido() que foi criado na primeira parte.


* Escreva uma função em PHP para pegar determinar a extensão dos 3 arquivos abaixo e mostrar as extensões na tela. As saídas devem ser mostradas em uma lista em ordem alfabética.

        Arquivos de exemplo:
        a) music.mp4
        b) video.mov
        c) imagem.jpeg

        Saida experada:
        1 .jpeg
        2 .mov
        3 .mp4

* Crie um formulário contendo os campos (Nome, Sobrenome, e-mail, telefone, login & senha) e salve as submissões dentro de um arquivo chamado registros.txt. Itens mandatórios para esse exercicio:

        
        1. Os registros devem ser salvos dentro de um array() incremental no arquivo registros.txt
	    2. O formulário deverá validar os campos email e telefone aceitando somente os formatos aceitáveis
	    3. Se possivel nao salvar email ou logins que ja foram registrados anteriormente
	    4. O campo senha deverá ser salvo encriptado. 


* Crie um parser que converte um arquivo XML em um arquivo CSV usando PHP.

* Crie uma Classe para criar um select Field para um user registration form. Após criar essa classe crie um webform simples e adicione esse campo criado.

* Crie uma API simples para manipular uma lista de usuários contendo os campos (Nome, Sobrenome, Email & Telefone.). Essa API deverá conter os requisitos abaixo:

        1. Dados deverão ser salvos em um arquivo de texto
        2. Usar Rest API
        3. Criar Endpoint para listar todos os usuarios
        4. Criar Endpoint para deletar usuarios por email
        5. Criar Endpoint para adicionar um usuario novo
        6. Criar Endpoint para atualizar os dados do usuario.
        7. Prover documentacao minima para usar a API.
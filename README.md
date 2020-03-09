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
git clone 
```

Entre na pasta do projeto:
```bash
cd 
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

Toda a documentação do projeto está aqui neste **README.md**, para documentar a API usamos o [Swagger](https://swagger.io/).
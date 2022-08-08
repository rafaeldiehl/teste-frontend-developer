# Teste de Estágio (Ellos Design)

## Tabela de Contéudos

- [Introdução](#introducao)
- [Tecnologias utilizadas](#tecnologias)
  - [Frontend](#frontend)
  - [Backend](#backend)
  - [Banco de dados](#banco)
  - [Outras ferramentas](#ferramentas)
- [Executando localmente](#executando)
- [Features](#features)
- [Design](#design)
- [Status do Projeto](#status)
- [Autor](#autor)

<h2 id="introducao">Introdução</h2>

Esta é a resolução do teste da Ellos Design para vaga de estágio como desenvolvedor full-stack.

Como exemplo, desenvolvi um site institucional para a empresa fictícia "Pousadog", um hotel para cães, com design baseado no [wireframe fornecido para o teste](https://github.com/rafaeldiehl/teste-frontend-developer/blob/master/design/wireframe.png).

<h2 id="tecnologias">Tecnologias utilizadas</h2>

As tecnologias usados no projeto foram:

<h3 id="frontend">Frontend</h3>

- [HTML](https://developer.mozilla.org/pt-BR/docs/Web/HTML);
- [JavaScript](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript);
- [CSS](https://developer.mozilla.org/pt-BR/docs/Web/CDN);
- [Sass](https://sass-lang.com).

<h3 id="backend">Backend</h3>

- [PHP](https://www.php.net);
- [Laravel](https://laravel.com).

<h3 id="banco">Banco de Dados</h3>

- [MySQL](https://www.mysql.com).

<h3 id="ferramentas">Outras ferramentas</h3>

- [Git (Gerenciamento de versões)](https://git-scm.com);
- [Github (Hospedagem do código)](https://github.com);
- [Visual Studio Code (Editor de texto)](https://code.visualstudio.com);
- [Pexels (Banco de imagens gratuitas)](https://www.pexels.com/pt-br/);
- [Unsplash (Banco de imagens gratuitas)](https://unsplash.com);
- [Font Awesome (Biblioteca de ícones gratuitos)](https://fontawesome.com);
- [Imgur (Hospedagem de imagem)](https://imgur.com);
- [ESLint + Prettier (Padronização do código)](https://eslint.org).

## Executando localmente

Inicialmente, crie uma tabela no banco de dados com os seguintes comandos.

```sql
-- Caso não possua um banco, crie-o.
CREATE DATABASE pousadog;
USE pousadog;

-- Tabela que armazenará as mensagens dos usuários
CREATE TABLE messages
(
  name VARCHAR(50) NOT NULL,
  email VARCHAR(30) NOT NULL,
  phone VARCHAR(15) NOT NULL,
  message VARCHAR(500) NOT NULL
);
```

Além disso, configure seus dados a partir da linha 6 do arquivo `index.php`.

```php
...

$user = "root"; // usuário
$password = "docker"; // senha
$database = "pousadog"; // nome do banco

...
```

Com as configurações feitas adequadamente e com a tabela já criada, você pode acessar o arquivo index.php através do seu servidor web (normalmente Apache).

### Editando os Estilos

A estilização do projeto foi feita usando o pré-processador Sass. Os arquivos estão modularizados no diretório `./styles/sass`, divididos em categorias importadas no arquivo `main.scss`.

Para processar o Sass, utilizei a extensão do Visual Studio Code [Live Sass Compiler](https://marketplace.visualstudio.com/items?itemName=ritwickdey.live-sass).

<h2 id="features">Features</h2>

As seguintes features foram adicionadas ao projeto:

- Responsividade (tanto para mobile quanto para dispositivos excessivamente grandes);
- Animações CSS (revelar no scroll, pulsão, girar);
- Deploy do PHP na Heroku (link: https://pousadog.herokuapp.com);
- Seção de perguntas com efeito "accordion" (abre a resposta no evento de clique);
- Máscara para input de telefone (padrão brasileiro);
- Envio de mensagem com a API do Whatsapp.

<h2 id="design">Design</h2>

A partir do wireframe, desenvolvi a seguinte interface de usuário.

![Template da página desenvolvida](https://raw.githubusercontent.com/rafaeldiehl/teste-frontend-developer/master/design/ui.png)

<h2 id="status">Status do Projeto</h2>

Finalizado.

<h2 id="autor">Autor</h2>

Apaixonado por desenvolvimento de software desde o ensino médio. Atualmente faço um curso superior em Análise e Desenvolvimento de Sistemas e busco uma oportunidade de estágio ou desenvolvedor Júnior.

<div align="center">

<a href="https://github.com/rafaeldiehl">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/57677302?v=4" width="100px;" alt=""/>
 <br />
 <sub><b>Rafael Diehl (SP - Brasil, 🇧🇷)</b></sub></a>

Entre em contato! 👋🏽

[![Linkedin Badge](https://img.shields.io/badge/-Linkedin-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/rafael-diehl-4b4a1423b/)](https://www.linkedin.com/in/rafael-diehl-4b4a1423b/)
[![Gmail Badge](https://img.shields.io/badge/-rafaeljuliani1984@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:rafaeljuliani1984@gmail.com)](mailto:rafaeljuliani1984@gmail.com)
[![WhatsApp Badge](https://img.shields.io/badge/-Whatsapp-23c861?style=flat-square&logo=Whatsapp&logoColor=white&link=https://api.whatsapp.com/send?phone=5515996295998)](https://api.whatsapp.com/send?phone=5515996295998)

</div>

<?php
  // Variáveis de controle
  /*$inputError = false;

  // Conexão com o Banco de dados
  $user = "root";
  $password = "docker";
  $database = "pousadog";
  $conn = mysqli_connect("database", $user, $password, $database);

  // Verifica se os parâmetros enviados são iguais aos esperados
	$params_expected = ["name", "email", "phone", "message"];
  $params_received = array_keys($_POST);
  $diff = array_diff($params_expected, $params_received);

  if(!empty($diff)) {
    $inputError = true;
  } else {
    // Recebe e filtra as variáveis do POST
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);

    if(!$name || !$email || !$phone || !$message) {
      $inputError = true;
    } else {
       // Insere os dados no banco
      $sql = "INSERT INTO messages (name, email, phone, message)
      VALUES ('$name', '$email', '$phone', '$message')";

      if ($conn->query($sql) === TRUE) {
        $connectionError = false;
      } else {
        $connectionError = true;
      }

      $conn->close();
    }
  }*/
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Meta Tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Rafael Juliani Diehl" />
  <meta name="description" content="Site para teste de estágio da Ellos Design">
  <meta name="keywords" content="HTML, CSS, JavaScript, PHP, Teste, Estágio" />

  <!-- Título -->
  <title>Pousadog</title>

  <!-- Link para o arquivo CSS processado e minificado -->
  <link rel="stylesheet" href="styles/css/main.css" />

  <!-- Favicon, upado num banco de imagens externo -->
  <link rel="shortcut icon" href="https://i.imgur.com/KEINLjn.png" />

  <!-- CDN do pacote de ícones da Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="container">
      <div>

        <!-- Logo -->
        <a href="#">
          <img class="logo" src="https://i.imgur.com/HN0uNEl.png" alt="Pousadog">
        </a>

        <!-- Links de navegação interna -->
        <ul class="navlinks">
          <li>
            <a href="#quem-somos">Quem somos</a>
          </li>
          <li>
            <a href="#servicos">Nossos serviços</a>
          </li>
          <li>
            <a href="#duvidas">Dúvidas frequentes</a>
          </li>
        </ul>
      </div>
      
      <!-- Link para Whatsapp -->
      <div>
        <a class="phone" href="https://api.whatsapp.com/send?phone=55489999999996&text=Quero saber mais sobre o Pousadog!">
          <i class="fab fa-whatsapp"></i>
          (48) 99999-9999
        </a>
      </div>
    </div>
  </nav>
  
  <!-- Conteúdo principal -->
  <main>
    <div class="container">

      <!-- Apresentação da empresa -->
      <header>
        <h1>Hotel para cães</h1>
        <h2>Ofereça ao seu pet os cuidados que ele merece.</h2>
        <p>
          Está pensando em viajar e não sabe onde deixar seu amigo de quatro patas? 
          Conheça <span>Pousadog</span>, um hotel "bom pra cachorro".
        </p>
      </header>

      <!-- Formulário com call to action -->
      <fieldset>
        <form id="form" action="index.php" method="POST">
          <legend>
            <h2>Fale conosco <span>👋</span></h2>
            <p>Nós te ajudaremos dentro de alguns minutos!</p>
          </legend>
          <div class="inputs-container">
            <p>
              <label for="nome">Nome</label>
              <input required name="name" type="text" placeholder="Nome, ex: Fulano de Tal" />
            </p>
            <p>
              <label for="email">E-mail</label>
              <input required name="email" type="text" placeholder="E-mail, ex: fulano@gmail.com" />
            </p>
            <p>
              <label for="telefone">Telefone</label>
              <input required class="phone-input" name="phone" type="text" placeholder="Telefone, ex: (99) 99999-9999" />
            </p>
            <p>
              <textarea required name="message" placeholder="Como podemos te ajudar?"></textarea>
            </p>
          </div>
          <button disabled type="submit" class="submit-button">
            Enviar mensagem
          </button>
          <!-- <?php if($inputError) echo "Por favor, preencha o formulário adequadamente"; ?> -->
        </form>
      </fieldset>
    </div>

  </main>

  <!-- Seção de Sobre -->
  <section id="quem-somos" class="reveal">
    <div class="container">

      <!-- Imagem ilustrativa -->
      <img src="https://images.unsplash.com/photo-1558788353-f76d92427f16?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=438&q=80" alt="Exemplo da empresa">

      <!-- Apresentação da empresa -->
      <div class="presentation">
        <h2>Quem somos</h2>
        <p>
          A Pousadog tem mais de <span class="underline">10 anos de experiência</span> cuidando de pets de todo o Brasil.
          Oferecemos um serviço cuidadosamente planejado, pensando na segurança, diversão e conforto do seu cão.
        <p>
        <p>
          Nosso ambiente foi construído para ser relaxante, onde seu pet pode brincar e reduzir sua ansiedade. Conta com uma grande área de gramado, jardins e spas.
          Além disso, possuímos webcams que permitem que você veja seu amigo seja lá de onde estiver!
        </p>
      </div>

      <!-- Avaliação de cliente -->
      <div class="testimonial">
          <p class="message">
            <i class="fa-solid fa-quote-left"></i>
            Empresa excelente! Profissionais extremamente atenciosos, dá pra ver o amor deles pelos animais. Com certeza voltarei mais vezes.
          </p>
          <div class="people">
            <img src="https://i.imgur.com/RstECDb.png" alt="Karen">
            <div class="data">
              <p class="name">Karen Silva</p>
              <p class="address">São Paulo, SP</p>
            </div>
          </div>
        </div>
    </div>
  </section>

  <!-- Serviços -->
  <section id="servicos" class="reveal">
    <div class="container">
      <header>
        <h2>Nossos serviços</h2>
        <p>Confira abaixo o que oferecemos a você e ao seu pet!</p>
      </header>
      <div class="services">
        <i class="fas fa-paw bg-icon"></i>
        <div class="service">
          <div class="icon">
            <i class="fa-solid fa-heart"></i>
          </div>  
          <header class="desc">
            <h3>Cuidado</h3>
            <p>Nossa equipe é extremamente atenciosa e vai estar sempre de olho no seu pet!</p>
          </header>
        </div>
        <div class="service">
          <div class="icon">
            <i class="fa-solid fa-clock"></i>
          </div>
          <header class="desc">
            <h3>Disponibilidade</h3>
            <p>Estamos sempre disponíveis! 365 dias por ano, 24 horas por dia.</p>
          </header>
        </div>
        <div class="service">
          <div class="icon">
            <i class="fa fa-stethoscope"></i>
          </div>  
        
          <header class="desc">
            <h3>Medicação</h3>
            <p>Temos uma equipe de veterinários que cuidarão do seu pet caso algo ocorra.</p>
          </header>
        </div>
        <div class="service">
          <div class="icon">
            <i class="fa-solid fa-video"></i>
          </div>  
          <header class="desc">
            <h3>Transmissão</h3>
            <p>Você pode entrar em contato com seu pet através do seu smartphone!</p>
          </header>
        </div>
        <div class="service">
          <div class="icon">
            <i class="fa-solid fa-couch"></i>
          </div>  
          <header class="desc">
            <h3>Conforto</h3>
            <p>Temos um ambiente especializado para fornecer conforto ao animal.</p>
          </header>
        </div>
        <div class="service">
          <div class="icon">
            <i class="fa-solid fa-dog"></i>
          </div>  
          <header class="desc">
            <h3>Socialização</h3>
            <p>Seu cão poderá interagir com outros cães e nossos adestradores.</p>
          </header>
        </div>
      </div>
    </div>
  </section>

  <!-- Dúvidas frequentes -->
  <section id="duvidas" class="reveal">
    <div class="container">
      <header>
        <h2>Dúvidas frequentes</h2>
        <p>Se não encontrá-la por aqui, nos <a href="#">envie uma mensagem</a>.</p>
      </header>
      <div class="questions">
        <div class="question">
          <div class="label">
            <span>Lorem ipsum dolor sit amet?</span>
            <i class="accordion-toggle fa-solid fa-plus"></i>
          </div>
          <div class="content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus accusamus voluptates perferendis magnam laudantium sapiente quam ratione. Voluptatum, ea maiores?
          </div>
        </div>
        <div class="question">
          <div class="label">
            <span>Lorem ipsum dolor sit amet?</span>
            <i class="accordion-toggle fa-solid fa-plus"></i>
          </div>
          <div class="content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus accusamus voluptates perferendis magnam laudantium sapiente quam ratione. Voluptatum, ea maiores?
          </div>
        </div>
        <div class="question">
          <div class="label">
            <span>Lorem ipsum dolor sit amet?</span>
            <i class="accordion-toggle fa-solid fa-plus"></i>
          </div>
          <div class="content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus accusamus voluptates perferendis magnam laudantium sapiente quam ratione. Voluptatum, ea maiores?
          </div>
        </div>
        <div class="question">
          <div class="label">
            <span>Lorem ipsum dolor sit amet?</span>
            <i class="accordion-toggle fa-solid fa-plus"></i>
          </div>
          <div class="content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus accusamus voluptates perferendis magnam laudantium sapiente quam ratione. Voluptatum, ea maiores?
          </div>
        </div>
        <div class="question">
          <div class="label">
            <span>Lorem ipsum dolor sit amet?</span>
            <i class="accordion-toggle fa-solid fa-plus"></i>
          </div>
          <div class="content">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus accusamus voluptates perferendis magnam laudantium sapiente quam ratione. Voluptatum, ea maiores?
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Última seção, focada em chamada para ação -->
  <section id="cta" class="reveal">
    <div class="container">
      <header>
        <h2>Pense com carinho.</h2>
        <p>O seu pet merece o melhor! Se está pensando em viajar no futuro, não perca esta oportunidade e agende agora mesmo na Pousadog.</p>
      </header>
      <div class="cta-box">
        <p>Nossa equipe de atendimento está pronta para resolver seu problema da melhor forma possível.</p>
        <div class="whatsapp">
          <a href="https://api.whatsapp.com/send?phone=55489999999996&text=Quero saber mais sobre o Pousadog!">
            <i class="fab fa-whatsapp"></i>
            Enviar mensagem
          </a>
        </div>
        <span>Normalmente respondemos dentro de alguns minutos.</span>
      </div>
    </div>
  </section>

  <!-- Rodapé -->
  <footer>
    <ul>
      <li>
        <a href="#facebook">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li>
        <a href="#instagram">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
      <li>
        <a href="#twitter">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
    </ul>
    <p>Pousadog &copy; Todos os Direitos Reservados • 2022</p>
    <p>CNPJ 00.000.000-0000-00 • <a href="#termos">Termos de Uso</a></p>
  </footer>

  <!-- Botão para retornar ao ínicio --->
  <a class="return-button" href="#">
    <i class="fa-solid fa-arrow-up"></i>
  </a>

  <!-- Scripts JavaScript modularizados -->
  <script src="scripts/scroll.js"></script>
  <script src="scripts/form.js"></script>
  <script src="scripts/accordion.js"></script>
</body>
</html>
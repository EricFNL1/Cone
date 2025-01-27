<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="icon" type="image/x-icon" href="img/logo.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serviços de Eletricista</title>
  
<!-- Carregando o Tailwind CSS após o Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="/dist/complemento.css"> <!-- Onde estão os estilos do menu -->
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="complemento.css"> <!-- Onde estão os estilos do menu -->

  
  <!-- Font Awesome CDN para o ícone do WhatsApp -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-background text-white font-sans">
  <!-- Header -->
  <header class="bg-warning text-black sticky top-0 z-50 shadow-md">
    <div class="container mx-auto flex justify-between items-center p-4">
      <h1 class="text-xl font-bold"><img src="img/logo.png" alt="Eletricista Profissional" width="80px"></h1>
      <nav>
        <!-- Menu hambúrguer -->
        <input type="checkbox" id="hamburger-checkbox" class="hidden">
        <label for="hamburger-checkbox" class="lg:hidden text-3xl text-black cursor-pointer">
          <i class="fas fa-bars"></i>
        </label>

        <!-- Menu (visível apenas em telas grandes) -->
        <ul id="menu" class="lg:flex hidden space-x-4 bg-warning p-2 rounded-lg lg:bg-transparent lg:p-0 flex-col lg:flex-row">
          <li>
            <a href="#services" class="hover:text-white hover:bg-primary transition-all duration-300 ease-in-out p-2 lg:p-0 transform hover:scale-105 hover:shadow-lg">
              Serviços
            </a>
          </li>
          <li>
            <a href="sobrenos.html" class="hover:text-white hover:bg-primary transition-all duration-300 ease-in-out p-2 lg:p-0 transform hover:scale-105 hover:shadow-lg">
              Sobre
            </a>
          </li>
          <li>
            <a href="maisservicos.html" class="hover:text-white hover:bg-primary transition-all duration-300 ease-in-out p-2 lg:p-0 transform hover:scale-105 hover:shadow-lg">
              Mais Serviços
            </a>
          </li>
          <li>
            <a href="#contact" class="hover:text-white hover:bg-primary transition-all duration-300 ease-in-out p-2 lg:p-0 transform hover:scale-105 hover:shadow-lg">
              Contato
            </a>
          </li>
          <button id="theme-toggle" class="bg-transparent text-black rounded-lg">
            <i id="theme-icon" class="fas fa-moon text-2xl"></i> <!-- Ícone padrão (lua) -->
          </button>
        </ul>
        
      </nav>
    </div>
  </header>

  <!-- Menu Pop-up (oculto inicialmente) -->
  <div id="mobile-menu" class="fixed top-0 left-0 w-3/4 h-full bg-blue-600 text-white p-4 transform -translate-x-full transition-transform duration-300 ease-in-out">
    <ul>
      <li><a href="#services" class="block p-4">Serviços</a></li>
      <li><a href="sobrenos.html" class="block p-4">Sobre</a></li>
      <li><a href="maisservicos.html" class="block p-4">Mais Serviços</a></li>
      <li><a href="#contact" class="block p-4">Contato</a></li>
      <button id="theme-toggle-mobile" class="bg-transparent text-black p-2 rounded-lg">
        <i id="theme-icon-mobile" class="fas fa-moon text-2xl block p-4"></i> <!-- Ícone padrão (lua) -->
      </button>
    </ul>
  </div>



  <!-- Hero Section -->
  <section class="bg-cover bg-center bg-no-repeat py-16 flex items-center justify-center" style="background-image: url('img/fundofinal.png');">
    <div class="text-center max-w-2xl mx-auto">
      <h2 class="text-3xl font-semibold text-white">Precisando de um Eletricista de Confiança?</h2>
      <p class="text-lg text-white mt-4">Oferecemos serviços de alta qualidade para sua casa ou empresa.</p>
      <a href="https://wa.me/+5519981690796"><button class="bg-primary text-white px-4 py-2 mt-4 hover:scale-105 transition-transform duration-300 ease-in-out">Solicitar Orçamento</button></a>
    </div>
  </section>

  <!-- WhatsApp Button -->
  <a href="https://wa.me/+5519981690796" target="_blank" class="fixed bottom-6 right-6 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition duration-300 flex items-center justify-center z-50 w-16 h-16 hero-text">
    <i class="fab fa-whatsapp text-3xl"></i>
  </a>

  <!-- Services Section -->
  <section id="services" class="py-16 hero-text">
    <div class="container mx-auto">
      <h2 class="text-3xl font-bold text-center mb-8">Nossos Serviços</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="p-6 bg-white text-black rounded shadow-md hover:scale-105 transition-transform duration-300 ease-in-out">
          <h3 class="text-xl font-semibold">Instalações Elétricas</h3>
          <p class="mt-4">Realizamos instalações elétricas seguras e eficientes, desde a entrada de energia até os circuitos finais, atendendo todas as normas de segurança.</p>
        </div>
  
        <!-- Card de Reparos e Manutenções -->
        <div class="p-6 bg-white text-black rounded shadow-md hover:scale-105 transition-transform duration-300 ease-in-out">
          <h3 class="text-xl font-semibold">Reparos e Manutenções</h3>
          <p class="mt-4">Oferecemos reparos rápidos e seguros, incluindo troca de disjuntores e reparo de curto-circuitos, restaurando sua rede elétrica com eficiência.</p>
        </div>
  
        <div class="p-6 bg-white text-black rounded shadow-md hover:scale-105 transition-transform duration-300 ease-in-out">
          <h3 class="text-xl font-semibold">Instalações Elétricas Prediais</h3>
          <p class="mt-4">Instalações elétricas para edifícios comerciais e residenciais, com foco em segurança, funcionalidade e conformidade com as normas.</p>
        </div>
      </div>
      <div id="carouselExample" class="carousel slide container mt-5 carousel-fade">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/carrosel1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrosel2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carrosel3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="bg-cover bg-center bg-no-repeat flex items-center justify-center">
      <a href="maisservicos.html"><button class="bg-primary text-white px-4 py-2 mt-4 hover:scale-105 transition-transform duration-300 ease-in-out">Saiba Mais</button></a>
    </div>
  </section>
  

  <!-- About Section -->
  <section id="about" class="bg-warning text-black py-16 hero-text">
    <div class="container mx-auto">
      <h2 class="text-3xl font-bold text-center mb-8">Sobre Nós</h2>
      <p class="text-center max-w-2xl mx-auto">Com uma trajetória marcada pela excelência e dedicação, somos uma empresa especializada em serviços elétricos de alta qualidade. Nossa equipe é composta por profissionais altamente qualificados, comprometidos em entregar soluções seguras, eficientes e personalizadas para cada cliente. <a href="sobrenos.html" class="text-primary"> Para saber mais clique aqui!</a></p>
    </div>
  </section>

<!-- Comentários Section -->
<section id="comments" class="py-16 hero-text">
<!-- Frase de incentivo para deixar comentário -->
<div class="text-center mb-4">
  <p class="text-lg">Deixe seu comentário abaixo!</p>
</div>

<!-- Carrossel de Comentários -->
<div id="commentCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" id="carousel-comments">
    <?php
    include('config.php');

    // Busca os comentários no banco de dados
    $result = $conn->query("SELECT * FROM comentarios");

    $is_first_slide = true;
    $comment_count = 0;
    $comments_in_slide = ""; // Variável para armazenar os comentários de um slide

    while ($row = $result->fetch_assoc()) {
        // Adiciona o comentário ao slide
        $comments_in_slide .= "
            <div class='col-md-6 text-center mb-4'>
                <div class='bg-white p-4 rounded-lg shadow-md'>
                    <p class='text-sm text-gray-500'>" . $row['comentario'] . "</p>
                    <p class='text-sm text-gray-500'>— " . $row['nome'] . "</p>
                </div>
            </div>
        ";

        $comment_count++;

        // Quando 2 comentários forem adicionados, cria um slide novo
        if ($comment_count % 2 == 0) {
            echo $is_first_slide ? "<div class='carousel-item active'>" : "<div class='carousel-item'>";
            echo "<div class='row justify-content-center'>";
            echo $comments_in_slide;
            echo "</div></div>";
            $is_first_slide = false; // Depois do primeiro slide, ele não é mais ativo por padrão
            $comments_in_slide = ""; // Resetamos a variável para o próximo slide
        }
    }

    // Se restar um comentário, colocamos ele em um slide extra
    if ($comments_in_slide != "") {
        echo "<div class='carousel-item'>";
        echo "<div class='row justify-content-center'>";
        echo $comments_in_slide;
        echo "</div></div>";
    }
    ?>
  </div>

<!-- Botão para exibir o formulário de comentário -->
<div class="text-center mb-8">
  <button id="show-form-btn" class="bg-gray-800 text-white px-4 py-2 rounded hover:text-primary">
    Escrever Comentário
  </button>
</div>

<!-- Formulário de Envio de Comentário (inicialmente oculto) -->
<div id="comment-form-container" class="hidden mt-8 text-center">
  <form id="comment-form" action="save_comment.php" method="POST" class="space-y-4 text-center">
    <input type="text" name="nome" class="w-full md:w-1/2 px-4 py-2 border rounded text-black mx-auto" placeholder="Seu Nome" required />
    <textarea name="comentario" class="w-full md:w-1/2 mt-4 px-4 py-2 border rounded text-black mx-auto" placeholder="Seu Comentário" required></textarea>
    <button type="submit" class="w-full md:w-1/2 px-4 py-2 bg-black text-white rounded hover:bg-gray-800 mx-auto">
      Enviar Comentário
    </button>
  </form>
</div>


</section>

<!-- Contact Section (sem alterações, voltando ao formato anterior) -->
<section id="contact" class="bg-accent py-16 container">
  <h2 class="text-3xl font-bold text-center mb-8">Entre em Contato</h2>
  <form action="send_email.php" method="POST" class="max-w-lg mx-auto space-y-4">
    <input type="text" name="nome" placeholder="Seu Nome" class="w-full px-4 py-2 border rounded text-black" required />
    <input type="email" name="email" placeholder="Seu Email" class="w-full px-4 py-2 border rounded text-black" required />
    <textarea name="mensagem" placeholder="Sua Mensagem" class="w-full px-4 py-2 border rounded text-black" required></textarea>
    <button type="submit" class="w-full px-4 py-2 bg-black text-white rounded hover:bg-gray-800">Enviar</button>
  </form>
</section>


  <!-- Footer Section -->
<footer class="bg-black text-white py-8 mt-16">
  <div class="container mx-auto text-center">
      <div class="mb-4">
          <p class="text-lg">Atendimento</p>
          <p class="text-sm">Email: contato@celetrica.com.br | Telefone: (19) 99999-9999</p>
      </div>
      
      <!-- Redes Sociais -->
      <div class="space-x-4">
          <a href="https://wa.me/+5519981690796" target="_blank" class="hover:text-green-400  text-3xl"><i class="fab fa-whatsapp-square"></i></a>
          <a href="https://www.instagram.com/essencial_eletrica/" target="_blank" class="hover:text-pink-600  text-3xl"><i class="fab fa-instagram-square"></i></a>
      </div>
      
      <!-- Copyright -->
      <div class="mt-6">
          <p class="text-sm">&copy; 2025 C E. Todos os direitos reservados.</p>
      </div>
  </div>
</footer>

  <!-- Carregar o script do Bootstrap para dropdowns -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Gerencia a exibição do menu pop-up
    const hamburgerCheckbox = document.getElementById("hamburger-checkbox");
    const mobileMenu = document.getElementById("mobile-menu");

    hamburgerCheckbox.addEventListener("change", () => {
      if (hamburgerCheckbox.checked) {
        mobileMenu.style.transform = "translateX(0)";
      } else {
        mobileMenu.style.transform = "translateX(-100%)";
      }
    });
  </script>

<script>
const themeToggle = document.getElementById("theme-toggle");
const themeIcon = document.getElementById("theme-icon");
const themeToggleMobile = document.getElementById("theme-toggle-mobile");
const themeIconMobile = document.getElementById("theme-icon-mobile");

// Checar se há uma preferência salva no localStorage
if (localStorage.getItem("theme") === "light") {
  document.body.classList.add("light-theme");
  themeIcon.classList.remove("fa-moon");
  themeIcon.classList.add("fa-sun");

  themeIconMobile.classList.remove("fa-moon");
  themeIconMobile.classList.add("fa-sun");
}

themeToggle.addEventListener("click", () => {
  document.body.classList.toggle("light-theme");

  // Alterar o ícone e salvar a preferência no localStorage
  if (document.body.classList.contains("light-theme")) {
    localStorage.setItem("theme", "light");
    themeIcon.classList.remove("fa-moon");
    themeIcon.classList.add("fa-sun");

    themeIconMobile.classList.remove("fa-moon");
    themeIconMobile.classList.add("fa-sun");
  } else {
    localStorage.setItem("theme", "dark");
    themeIcon.classList.remove("fa-sun");
    themeIcon.classList.add("fa-moon");

    themeIconMobile.classList.remove("fa-sun");
    themeIconMobile.classList.add("fa-moon");
  }
});

themeToggleMobile.addEventListener("click", () => {
  document.body.classList.toggle("light-theme");

  // Alterar o ícone e salvar a preferência no localStorage
  if (document.body.classList.contains("light-theme")) {
    localStorage.setItem("theme", "light");
    themeIconMobile.classList.remove("fa-moon");
    themeIconMobile.classList.add("fa-sun");

    themeIcon.classList.remove("fa-moon");
    themeIcon.classList.add("fa-sun");
  } else {
    localStorage.setItem("theme", "dark");
    themeIconMobile.classList.remove("fa-sun");
    themeIconMobile.classList.add("fa-moon");

    themeIcon.classList.remove("fa-sun");
    themeIcon.classList.add("fa-moon");
  }
});

</script>

<script>
  document.getElementById("show-form-btn").addEventListener("click", function() {
  var formContainer = document.getElementById("comment-form-container");
  formContainer.classList.toggle("hidden");
});

</script>

</body>
</html>
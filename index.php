<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Arte de Caderno - Home</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


</head>

<body>

  <?php include_once './components/navbar.php';?>


  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/intro.png" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
          <h2>Arte de Caderno <br>10ª edição<br></h2>
        <div>
          <a href="#" class="btn-get-started scrollto">Inscreva-se</a>
          <a href="#about" class="btn-services scrollto">Saiba mais</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Sobre nós</h3>
          <p>Conheça um pouco mais sobre o Arte de Caderno</p>
        </header>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>O Projeto Arte de Caderno do Rio Grande do Norte ao Rio Grande do Sul vem reconhecendo e premiando talentos do desenho.</h4>
            <p>
            É uma ação educativa, que resgata desenhos feitos de forma espontânea durante o ano letivo, geralmente nas últimas páginas de cadernos, agendas, provas, dentre outros feitos por alunos e servidores.
            </p>
            <p>
            Além de resgatar e valorizar a arte produzida na escola, pretende-se fomentar a preservação do patrimônio público, incentivando as produções de desenhos no suporte correto e não em mobiliário como carteira e armários, paredes, portas, etc, diminuindo os danos ao espaço físico, a necessidade de reparos e a sobrecarga dos profissionais da limpeza.
            </p>
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Uma forma de estimular e valorizar os talentos do desenho.</h4>
            <p>
            Mesmo havendo premiação o projeto não é uma competição e sim uma oportunidade para trazer a público talentos do desenho. De todas as obras inscritas no concurso são selecionadas e premiados 80 trabalhos, estes desenhos são amplamente divulgados nas mídias sociais do projeto e participam de exposições. Por votação pública, através de curtidas no Facebook do Arte de Caderno, são eleitas 1º, 2° e 3º lugares, esses recebem uma premiação especial. 
            </p>
            <p>
            A premiação é composta por produtos criados e estampados com as imagens captadas e tratadas no próprio projeto, como camisetas, mochila, agendas, canecas, bonés, dentre outros. Mostre seu talento. Projeto que em 2019 estará comemorando 10 anos de existência.
            </p>
          </div>
          
        </div>


      </div>
    </section><!-- #about -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Um sucesso em todo o país</h3>
          <p>O Arte de Caderno se tornou um sucesso em todo o Brasil e em Portugal.</p>
        </header>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">5.000</span>
            <p>Desenhos recebidos</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">20.000</span>
            <p>Alunos participantes</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">14</span>
            <p>Estados brasileiros</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">2</span>
            <p>Países</p>
          </div>
  
        </div>

      </div>
    </section>

    <section id="galery" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Galeria de Desenhos</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="galery-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-ninja">Ninja</li>
              <li data-filter=".filter-sninja">Super-ninja</li>
            </ul>
          </div>
        </div>

        <div class="row galery-container">

          <div class="col-lg-4 col-md-6 galery-item filter-ninja">
            <div class="galery-wrap">
              <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
              <div class="galery-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
                <div>
                  <a href="img/galery/app1.jpg" data-lightbox="galery" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>



    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Nossa equipe</h3>
          <p>Conheça a equipe que trabalha por trás do Arte de Caderno</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpeg" width="255px" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Márcio Bess</h4>
                  <span>Fundador do Laboratório VOA</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
  </main>

 
  <?php include_once './components/footer.php'?>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

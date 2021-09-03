<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Arte de Caderno - Inscrição</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../../../css/style.css" rel="stylesheet">


</head>

<body>

  <?php include_once '../../../components/navbar.php';?>


  <main id="main">

<section id="about">
  <div class="container">

    <header class="section-header">
      <h3 class="mt-4">Inscrição - Arte de Caderno</h3>
      <p>Edição Brasil - 2020 - Aluno</p>
    </header>

    <div class="row justify-content-center">

    <?php 
    
        if($_SERVER['REQUEST_METHOD'] == "GET") {
            if($_GET['success'] == "true") {
                $user_id = $_GET['user_id'];
                $id1 = $_GET['imgid'];
                $id2 = $_GET['imgid2'];
                $id3 = $_GET['imgid3'];

                
                $idLabel1 = "Código da obra 1: " . $id1;
                $idLabel2 = "";
                $idLabel3 = "";
                if($id2 != "") $idLabel2 = "Código da obra 2: " . $id2;
                if($id3 != "") $idLabel3 = "Código da obra 3: " . $id3;

                echo ' 
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Obrigado!</div>
                    <div class="card-body">
                        <h5 class="card-title">Recebemos a sua inscrição.</h5>
                        <p class="card-text">Alguns detalhes importantes:<br>
                            Código de Inscrição: ' . $user_id . '<br>
                            '. $idLabel1 .'<br>
                            '. $idLabel2 .'<br>
                            '. $idLabel3 .'
                        <br><br>
                            Para mais informações, contate-nos por email em: contato@laboratoriovoa.art.br ou acesse nossa página no facebook.</p>
            </div>';
                

            } else {
                $error_code = $_GET['identifier'];

                if($error_code == "AEXST") {
                    echo ' 
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Oops!</div>
                    <div class="card-body">
                        <h5 class="card-title">Você já se inscreveu no Arte de Caderno.</h5>
                        <p class="card-text"> Nosso sistema identificou que você já possuí um cadastro no Arte de Caderno. <br>
                        É permitida até 1 (uma) ficha de inscrição por CPF, com a submissão de até 3 obras.
                        <br><br>
                            Para mais informações, contate-nos por email em: contato@laboratoriovoa.art.br ou acesse nossa página no facebook.</p>
            </div>';
                }
            }
            
        }
    
    ?>

</div>


  </div>
</section><!-- #about -->
</main>



  <?php include_once '../../../components/footer.php'?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="../../../lib/jquery/jquery.min.js"></script>
<script src="../../../lib/jquery/jquery-migrate.min.js"></script>
<script src="../../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../lib/easing/easing.min.js"></script>
<script src="../../../lib/mobile-nav/mobile-nav.js"></script>
<script src="../../../lib/wow/wow.min.js"></script>
<script src="../../../lib/waypoints/waypoints.min.js"></script>
<script src="../../../lib/counterup/counterup.min.js"></script>
<script src="../../../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../../../lib/isotope/isotope.pkgd.min.js"></script>
<script src="../../../lib/lightbox/js/lightbox.min.js"></script>
<!-- Template Main Javascript File -->
<script src="../../../js/main.js"></script>

</body>
</html>



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
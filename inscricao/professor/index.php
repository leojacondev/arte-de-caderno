<?php
include_once '../../components/dbConnection.php';
$result = "";
if($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "aa";
    $token = $_POST['token'];

    $sql = "SELECT * FROM professores WHERE token = '" . $token . "'";

    $result = mysqli_query($link, $sql);

    if($result) {
        if(mysqli_num_rows($result) > 0) {
            while($dados = mysqli_fetch_array($result)) {
                $id = $dados['ownerid'];
                $nome = $dados['name'];
                $cpf = $dados['cpf'];
                $instituicao = $dados['instituicao'];
                $enviados = $dados['enviados'];

            }
            
            session_start();

                $_SESSION['id'] = $id;
                $_SESSION['nome'] = $nome;
                $_SESSION['cpf'] = $cpf;
                $_SESSION['instituicao'] = $instituicao;
                $_SESSION['enviados'] = $enviados;
                
                header('location: /teste/inscricao/professor/form');

        } else {
            $result = 'Erro';
        }
    }

}


?>


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
  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../../css/style.css" rel="stylesheet">


</head>

<body>

  <?php include_once '../../components/navbar.php';?>


  <main id="main">

<section id="about">
  <div class="container">
    <?php echo $result;?>
    <header class="section-header">
      <h3 class="mt-4">Inscrição - Arte de Caderno</h3>
      <p>Edição Brasil - 2020 - Acesso Professor</p>
    </header>


    <div class="row align-items-center justify-content-center">
    <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <div class="form-group row">
        <label for="token" class="col-sm-2 col-form-label">Token:</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" name="token" id="token" placeholder="Token...">
        </div>
    </div>
        <button type="submit" class="btn btn-primary">Entrar</button>

    </form>

    </div>


<div class="mt-5">
    <h3>Como cadastro minha escola?</h3>
    <p>Se você é professor, ou responsável por uma escola ainda não autorizada pelo Arte de Caderno, envie um e-mail para escolas@laboratoriovoa.art.br, comprovando o seu vinculo institucional para que possamos autorizar a sua escola e liberar o seu token.</p>
</div>
    </div>


  </div>
</section><!-- #about -->
</main>



  <?php include_once '../../components/footer.php'?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="../../lib/jquery/jquery.min.js"></script>
<script src="../../lib/jquery/jquery-migrate.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../lib/easing/easing.min.js"></script>
<script src="../../lib/mobile-nav/mobile-nav.js"></script>
<script src="../../lib/wow/wow.min.js"></script>
<script src="../../lib/waypoints/waypoints.min.js"></script>
<script src="../../lib/counterup/counterup.min.js"></script>
<script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../../lib/isotope/isotope.pkgd.min.js"></script>
<script src="../../lib/lightbox/js/lightbox.min.js"></script>
<!-- Template Main Javascript File -->
<script src="../../js/main.js"></script>

</body>
</html>

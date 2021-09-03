<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Arte de Caderno - Ficha de Inscrição</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <!-- Libraries CSS Files -->
    <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/dropzone.css" type="text/css" rel="stylesheet" />

    <script src="../../js/mascara.js"></script>
    <script src="../../js/cepValidator.js"></script>
    <script src="../../lib/jquery/jquery.min.js"></script>
    <script src="../../lib/jquery/jquery-migrate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

</head>

<body>

    <?php include_once '../../components/navbar.php';?>


    <main id="main">

        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3 class="mt-4">Inscrição - Arte de Caderno</h3>
                    <p>Edição Brasil - 2020 - Aluno</p>
                </header>

            <div class="row justify-content-md-center">
                <div class="col col-lg-6">
                    <form enctype="multipart/form-data" action="../aluno/handler/index.php" method="POST" class="needs-validation" id="form-validator" novalidate>
                        <div class="form-group">
                            <label for="nomeLabel">Nome: <span class="sub text-danger">*</span></label>
                            <input type="text" class="form-control" name="nome" id="nome" required>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>
                        </div>

                        <div class="form-group">
                            <label for="emailLabel">Email: <span class="sub text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" id="email" required>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>                        
                        </div>
                        <div class="form-group">
                            <label for="cpfLabel">CPF: <span class="sub text-danger">*</span></label>
                            <input type="text" class="form-control" name="cpf" id="cpf" maxlength="14" onkeypress="formatar('###.###.###-##', this);" onblur="validateCPF(this.value);" required>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>
                        </div>

                        <div class="form-group">
                            <label for="sexoLabel">Sexo: <span class="sub text-danger">*</span></label>
                            <select class="form-control" id="sexo" name="sexo" required>
                                <option value="" selected>Selecione uma opção</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Nb">Não-binário</option>
                            </select>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>
                        </div>  

                        <div class="form-group">
                            <label for="dataLabel">Data de nascimento: <span class="sub text-danger">*</span></label>
                            <input type="date" class="form-control" name="dNascimento" id="dNascimento"  required>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>                        
                        </div>

                        <div class="form-group">
                            <label for="escolaLabel">Nome da instituiçao: <span class="sub text-danger">*</span></label>
                            <input type="text" class="form-control" name="instituicao" id="instituicao" required>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>
                        </div>

                        <div class="form-group">
                            <label for="tipoEscolaLabel">Tipo de instituiçao: <span class="sub text-danger">*</span></label>
                            <select class="form-control" name="tipoInstituicao" id="tipoInstituicao" required>
                                <option value="" selected>Selecione uma opção</option>
                                <option value="Estadual">Estadual</option>
                                <option value="Municipal">Municipal</option>
                                <option value="Federal">Federal</option>
                            </select>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>
                        </div>

                        <div class="form-group">
                            <label for="cepLabel">CEP: <span class="sub text-danger">*</span></label>
                            <input type="text" class="form-control" id="cep" name="cep" maxlength="10" onkeypress="formatar('##.###-##', this);" onblur="pesquisacep(this.value);" required>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>
                        </div>

                        <div class="form-group">
                            <label for="enderecoLabel">Endereço: <span class="sub text-danger">*</span></label>
                            <input type="text" class="form-control" name="endereco" id="endereco" required>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>
                        </div>

                        <div class="form-group">
                            <label for="numLabel">Número: <span class="sub text-danger">*</span></label>
                            <input type="text" class="form-control" name="num" id="num" required>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="bairroLabel">Bairro: <span class="sub text-danger">*</span></label>
                            <input type="text" class="form-control" name="bairro" id="bairro" required>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>
                        </div>

                        <div class="form-group">
                            <label for="cidadeLabel">Cidade: <span class="sub text-danger">*</span></label>
                            <input type="text" class="form-control" name="cidade" id="cidade" required>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>
                        </div>

                        <div class="form-group">
                            <label for="ufLabel">UF: <span class="sub text-danger">*</span></label>
                            <input type="text" class="form-control" name="uf" maxlength="2" id="uf" required>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>
                        </div>


                        <div class="form-group">
                            <label for="celularLabel">Celular: <span class="sub text-danger">*</span></label>
                            <input type="tel" class="form-control" id="celular" name="celular" pattern="\([0-9]{2}\)[\s][0-9]{4,5}-[0-9]{4}" required/>
                            <script type="text/javascript">$("#celular").mask("(00) 90000-0000");</script>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>
                        </div>

                        <hr>


                        <div class="form-group">
                            <label for="categoriaLabel">Categoria: <span class="sub text-danger">*</span></label>
                            <select class="form-control" name="categoria" id="categoria" required>
                                <option value="" selected>Selecione uma opção</option>
                                <option value="Ninja">Ninja</option>
                                <option value="SuperNinja">Super-ninja</option>
                            </select>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>
                        </div>

                        <div class="form-group">
                            <label for="dContentLabel">Nos ajude a identificar o que aparece no seu desenho: <span class="sub text-danger">*</span></label>
                            <select class="form-control selectpicker" name="teste[]" multiple data-live-search="true" title="Selecione..." required>
                                <option value="Paisagens">Paisagens</option>
                                <option value="Pessoas">Pessoas</option>
                                <option value="Natureza">Natureza</option>
                                <option value="Animais">Animais</option>
                                <option value="Água">Água</option>
                                <option value="Personagens">Personagens</option>
                                <option value="Jogos">Jogos</option>
                            </select>
                            <div class="invalid-feedback">Por favor especifique um valor válido</div>
                        </div>
                        
                        <div class="form-group">
                            <label for="desenhosLabel">Envie seus desenhos: <span class="sub text-danger">*</span></label>
                            <div class="custom-file">
                                <input type="file" class="form-control custom-file-input" name="uploaded_file" required>
                                <label class="custom-file-label" for="customFile">Escolher arquivo</label>
                             </div>
                            <small class="text-form">Tamanho máximo: 2MB</small>
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="form-control custom-file-input" name="uploaded_file_2">
                                <label class="custom-file-label" for="customFile">Escolher arquivo</label>
                             </div>
                            <small class="text-form">Tamanho máximo: 2MB</small>
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="form-control custom-file-input" name="uploaded_file_3">
                                <label class="custom-file-label" for="customFile">Escolher arquivo</label>
                             </div>
                            <small class="text-form">Tamanho máximo: 2MB</small>
                        </div>

                        <fieldset class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="termos" required>
                                <label class="form-check-label" for="labelTermos">Li e concordo os Termos e Condições do <a href="../regulamento.php">Regulamento</a>.</label>
                                <div class="invalid-feedback">É necessário aceitar os termos e condições do regulamento.</div>
                            </div>
                        </fieldset>

                        <fieldset class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="dautoral" required>
                                <label class="form-check-label" for="labelDautoral">Declaro que as obras aqui enviadas são de minha propriedade e criação.</label>
                                <div class="invalid-feedback">É necessário declarar sua propriedade perante as obras enviadas.</div>
                            </div>
                        </fieldset>
                        
                        <button type="submit" class="btn btn-primary">Inscrever-se</button>
                    </form>

                </div>
            </div>
        </div>


        </section>
    </main>



    <?php include_once '../../components/footer.php'?>

    <!-- JavaScript Libraries -->
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/mobile-nav/mobile-nav.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6Lfe5NIUAAAAAJwQ0I7mRG50LttCj9Iq83-F1s0N"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lfe5NIUAAAAAJwQ0I7mRG50LttCj9Iq83-F1s0N', {action: 'homepage'}).then(function(token) {
                
            });
        });
    </script>


    <!-- Template Main Javascript File -->
    <script src="../js/main.js"></script>
    <script src="../js/cpfValidator.js"></script>
    <script src="../js/dropzone.js"></script>

    <script>

        $(function () {
            $('select').selectpicker()
        });

        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        
        function maskCell() {
         $("#celular").mask("(00) 0000-0000");
        }

        function validateCPF(cpfnum) {
            var n = new CPF().generate(); 

            if (new CPF().validate(cpfnum)) {
                document.getElementById('cpf').setCustomValidity('');
            } else {
                document.getElementById('cpf').setCustomValidity("CPF Inválido");
                return false;
            }
        }
    

        (function() {
            'use strict';
                window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');

                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                        form.classList.add('was-validated');
                }, false);
            });
        }, false);
})();
    </script>

</body>

</html>



<!-- JavaScript Libraries -->
<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/jquery/jquery-migrate.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/mobile-nav/mobile-nav.js"></script>
<script src="../lib/wow/wow.min.js"></script>
<script src="../lib/waypoints/waypoints.min.js"></script>
<script src="../lib/counterup/counterup.min.js"></script>
<script src="../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../lib/isotope/isotope.pkgd.min.js"></script>
<script src="../lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Main Javascript File -->
<script src="../js/main.js"></script>

</body>

</html>
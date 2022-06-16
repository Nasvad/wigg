<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Wigg - Trabalhe com a gente</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <script>
            function alerta_email() {
                alert("Email enviado!");
            }
        </script>
    </head>

    <body>
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-bar-right">
                            <div class="social">
                                 <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">WIGG</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link active">Início</a>
                        <a href="login.php" class="nav-item nav-link">Faça seu login</a>
                                           
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->



        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Entre em contato conosco</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Início</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Contact Start -->
        <div class="section-header text-center" style="margin-top: 90px;">
            <p>Seja um colaborador Wigg</p>
            <h2>Preencha com seus dados e trabalhe com a gente!</h2>
        </div>
        <div class="contact" style="margin-bottom: 90px;">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Seu nome completo" required="required" data-validation-required-message="Por favor, insira seu nome" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Seu Email" required="required" data-validation-required-message="Por favor, insira seu email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="password" class="form-control" id="password" placeholder="Sua senha" required="required" data-validation-required-message="Por favor, uma senha" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="phone" placeholder="Seu telefone" required="required" data-validation-required-message="Por favor, informe o seu telefone" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="number" class="form-control" id="age" placeholder="Sua idade" required="required" data-validation-required-message="Por favor, informe sua idade" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="adress" placeholder="Seu endereço" required="required" data-validation-required-message="Por favor, informe sua idade" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="corpname" placeholder="Nome da empresa" required="required" data-validation-required-message="Por favor, informe o nome da empresa" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Vamos começar!</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Sobre nós</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Juazeiro do Norte, Ceará, Brasil</p>
                                    <p><i class="fa fa-phone-alt"></i>+55(87)99233-4234</p>
                                    <p><i class="fa fa-envelope"></i>wigg@spaceio.com</p>
                                    <div class="footer-social">
                                       <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Acesso rápido</h2>
                                    <a href="">Termos de uso</a>
                                    <a href="">Política de Privacidade</a>
                                    <a href="">Cookies</a>
                                    <a href="">Ajuda</a>
                                    <a href="">FAQ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <p>
                                Assine nossa newsletter e fique por dentro de todas as novidades da WIGG
                            </p>
                            <div class="form">
                                <input class="form-control" placeholder="Insira seu email">
                                <button class="btn">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="index.php">Wigg by Space.IO</a>, Todos os direitos reservados.</p>
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

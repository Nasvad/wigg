<?php 
    include("db/bd.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>saloes mais vistos</title>
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
    </head>

    <body>
        <!-- Top Bar Start -->
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
                        <a href="index.php" class="nav-item nav-link">Início</a>
                        <a href="service.php" class="nav-item nav-link">Salões</a>
                        <a href="price.php" class="nav-item nav-link">Barbeiros</a> 
                        <a href="team.php" class="nav-item nav-link">Barbeiros mais vistos</a>
                        <!--<a href="portfolio.php" class="nav-item nav-link">Gallery</a> -->
                        <a href="contact.php" class="nav-item nav-link">Entre em contato</a>
                        <a href="login.php" class="nav-item nav-link">Faça seu login</a>
                        <a href="about.php" class="nav-item nav-link">Sobre a Wigg</a>
                        <!--<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="blog.php" class="dropdown-item">Blog Page</a>
                                <a href="single.php" class="dropdown-item">Single Page</a>
                            </div>
                        --> 

                        </div>
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
                        <h2>Salões mais vistos</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Início</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Confira os nossos</p>
                    <h2>Salões com as melhores avaliações!</h2>
                </div>
                <div class="row blog-page">
                
                <!-- TODO(finalizar a renderização dinâmica) < Renderização dinâmica de barbearia 
                    $conn = $mysqli_connect("");
                    $sql = "select * from _database_";
                    $result = $mysqli_querry($sqli);
                    $arr = mysqli_fetch_all($result, MYSQLI_BOTH);
                    foreach($arr as $a) {
                        echo "<div class='col-lg-4 col-md-6'>";
                            echo "<div class='blog-item'>";
                                echo "<div class='blog-img'>";
                                    echo sprintf("<img src='%s' alt="Blog">", $a["imagem-background"]);
                                echo "</div>";
                            echo "</div>";
                            echo "<div class='blog-meta'>";
                                echo "<i class='fa fa-list-alt'></i>";
                                echo "<a href=''>Hair Cut</a>";
                                echo "<i class='fa fa-calendar-alt'></i>";
                            echo "</div>";
                            echo "<div class='blog-text'>";
                                echo "<a class='btn' href=''>Read More <i class='fa fa-angle-right'></i></a>";
                            echo "</div>";
                        echo "</div>";
                    }

                    mysqli_close($conn);
                ?> -->
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Blog">
                            </div>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Hair Cut</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div> -->

                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


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

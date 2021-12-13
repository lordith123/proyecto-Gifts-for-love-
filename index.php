<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Gifts For Love</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__widget">
            
            <div class="header__top__right__auth">
                <a href="./login1.html"><i class="active"></i>Iniciar sssesión</a>
                <a href="./login1.php"><i class="active"></i>Registrarse</a>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>  
                            
                            <?php
                            session_start();
                            if(empty($_SESSION['tipo_usuario']))
                            {
                                $_SESSION['tipo_usuario']='NA';
                                $_SESSION['Nombre']='NA';
                            }
                            if($_SESSION['tipo_usuario']=='ADMINISTRADOR')
                            {
                                Header("Location: admin1258/index");
                            }
                            if($_SESSION['tipo_usuario']=='administrador')
                            {
                                Header("Location: admin1258/index");
                            }
                            ?>
                            <?php
                            if($_SESSION['tipo_usuario']=='cliente')
                            {
                                $variable_nombre = $_SESSION['Nombre'];
                                $variable_tipo = $_SESSION['tipo_usuario'];
                            ?>
                            <div class="header__top__right__auth">
                                <a class="fa fa-user"><i value="1">  <?php echo $variable_nombre;  echo $variable_tipo ?></i></a>
                                <a href="/cerrar_sesion.php"><i class="active"></i> Cerrar Sesión</a>
                            </div>
                            <?php
                            }
                            else{
                            ?>
                            <div class="header__top__right__auth">
                                <a href="./colorlib-regform-23/login1.php"><i class="active"></i> Iniciar Seción</a>
                                <a href="./colorlib-regform-3/registrar.php"><i class="active"></i> Registrarse</a>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="/index.php"><img src="img/Logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="/index.php">Inicio</a></li>
                            <li><a href="#oferta">Ofertas</a></li>
                            <li><a href="./contact.php">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="active"></i>
                            <span>Categorías</span>
                        </div>
                        <ul>
                            <li><a href="./shop-details.html">Amor</a></li>
                            <li><a href="#">Amistad</a></li>
                            <li><a href="#">Aniversarios</a></li>
                            <li><a href="#">Cumpleaños</a></li>

                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                       
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+57 302-568-95-42</h5>
                                </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/prueba.jpg" >
                        <div class="hero__text">
                            <span>Regalos creativos</span>
                            <h2>100% Confiable</h2>
                            <p>Es fácil y rápido comprar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/imagen1.jpeg">
                            <h5><a href="#"></a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/imagen2.jpeg">
                            <h5><a href="./categoria.html"></a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/imagen3.jpeg">
                            <h5><a href="#"></a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/imagen4.jpeg">
                            <h5><a href="#"></a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/imagen5.jpeg">
                            <h5><a href="#"></a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
    

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Categorías</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Todos</li>
                            <li data-filter=".oranges">Amor y Amistad</li>
                            <li data-filter=".fresh-meat">Aniversarios</li>
                            <li data-filter=".vegetables">Cumpleaños</li>
                            <li data-filter=".fastfood">otros eventos</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Aniversario</a></h6>
                            <h5>$30.00</h5>
                            <button class="btn btn-primay" type="button">
                                agregar  al carrito
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row featured__filter">
                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="img/featured/featured-1.jpg">
            
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">Aniversario</a></h6>
                                <h5>$30.00</h5>
                                <button class="btn btn-primay" type="button">
                                agregar  al carrito
                            </button>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/featured-2.jpg">
                            
                        </div>
                        <div class="featured__item__text" data-setbg="img/categories/imagen2.jpeg">
                            <h6><a href="#">Aniversario</a></h6>
                            <h5>$70.00</h5>
                            <button class="btn btn-primay" type="button">
                                agregar  al carrito
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-2.jpg">
                           
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Aniversario</a></h6>
                            <h5>$40.00</h5>
                            <button class="btn btn-primay" type="button">
                                agregar  al carrito
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-3.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Cumpleaños</a></h6>
                            <h5>$80.00</h5>
                            <button class="btn btn-primay" type="button">
                                agregar  al carrito
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-4.jpg">
                           
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Amor y Amistad</a></h6>
                            <h5>$30.00</h5>
                            <button class="btn btn-primay" type="button">
                                agregar  al carrito
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-5.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Aniversario</a></h6>
                            <h5>$70.00</h5>
                            <button class="btn btn-primay" type="button">
                                agregar  al carrito
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-6.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Cumpleaños</a></h6>
                            <h5>$90.00</h5>
                            <button class="btn btn-primay" type="button">
                                agregar  al carrito
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-7.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Amor y Amistad</a></h6>
                            <h5>$30.00</h5>
                            <button class="btn btn-primay" type="button">
                                agregar  al carrito
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-8.jpg">
                            
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Cumpleaños</a></h6>
                            <h5>$60.00</h5>
                            <button class="btn btn-primay" type="button">
                                agregar  al carrito
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/featured/feature-9.jpg">
                        
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">Aniversario</a></h6>
                        <h5>$30.00</h5>
                        <button class="btn btn-primay" type="button">
                                agregar  al carrito
                            </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
    
    <!-- Product Section Begin -->
    <section class="product spad" id="oferta">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Ofertas</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-1.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <h5><a href="#">Aniversario</a></h5>
                                            <div class="product__item__price">$30.00 <span>$46.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-2.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Cumpleaños</span>
                                            <h5><a href="#">feliz Cumpleaños</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-3.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Mixed Fruitss</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-4.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-5.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="img/product/discount/pd-6.jpg">
                                            <div class="product__discount__percent">-20%</div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Dried Fruit</span>
                                            <h5><a href="#">Raisin’n’nuts</a></h5>
                                            <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
   
  

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 80, Valledupar, Cesar</li>
                            <li>Phone: +57 302-568-95-42</li>
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        
                        
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>
</html>
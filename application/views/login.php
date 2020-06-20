<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=base_url('assets/img/main/logodim.png');?>" type="image/png">
        <title>DIM Social - Se connecter</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/linericon/style.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/owl-carousel/owl.carousel.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/lightbox/simpleLightbox.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/nice-select/css/nice-select.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/animate-css/animate.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/popup/magnific-popup.css');?>">
        
        <style>
             .blog_right_sidebar .tag_cloud_widget ul li a:hover {
                background-image: -moz-linear-gradient(0deg, #1d3163 0%, #88f3ff 100%);
                background-image: -webkit-linear-gradient(0deg, #1d3163 0%, #88f3ff 100%);
                background-image: -ms-linear-gradient(0deg, #1d3163 0%, #88f3ff 100%);
                color: #fff; 
            }
            .blog_right_sidebar .post_category_widget .cat-list li:hover a {
                color: #1d3163; 
            }
            .blog_right_sidebar .post_category_widget .cat-list li:hover {
                border-color: #1d3163; 
            }

            .blog-pagination .page-link:hover {
                color: #fff;
                text-decoration: none;
                background-color: #1d3163; 
                border-color: #eee; 
            }

            .blog-pagination .page-item.active .page-link {
                background-color: #1d3163; 
                border-color: transparent;
                color: #fff; 
            }

            .white_bg_btn:hover {
                background-image: -moz-linear-gradient(0deg, #1d3163 0%, #88f3ff 100%);
                background-image: -webkit-linear-gradient(0deg, #1d3163 0%, #88f3ff 100%);
                background-image: -ms-linear-gradient(0deg, #1d3163 0%, #88f3ff 100%);
                color: #fff;
                border: none; 
            }
        </style>
        <!-- main css -->
        <link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/responsive.css');?>">
    </head>
    <body>


    <header style="background-color: #1d3163;">



<!-- *** NAVBAR *** -->
<nav class="navbar navbar-expand-lg navbar-light text-light" style="background: #1d3163;">
    <a class="navbar-brand" href="<?=site_url();?>"><img src="<?=site_url('assets/img/main/logodim.png');?>" width="40" alt="" srcset=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-light" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto text-light">
            <li class="nav-item">
                <a class="nav-link text-light" href="<?=site_url();?>"><i class="fa fa-home"></i> Accueil <span class="sr-only">(current)</span></a>
            </li> 
            <?php 
            
            if(isset($this->session->name) || isset($this->session->email)) {
                echo '
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i> '.$this->session->name.'
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="'.site_url('user/show_user/'.$this->session->id).'"><i class="fa fa-user-circle-o"></i> Voir mon compte</a> 
                    <a class="dropdown-item" href="'.site_url('activity/user_activity/'.$this->session->id).'"><i class="fa fa-user-newspaper-o"></i> Mon activité</a> 
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="'.site_url('user/logout').'"><i class="fa fa-power-off"></i>  Se déconnecter</a>
                </div>
            </li> 
                ';
            } else {
                echo '
                <li class="nav-item">
                    <a class="nav-link text-light" href="'.site_url('home/login').'"><i class="fa fa-user"></i> Se connecter</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link text-light" href="'.site_url('home/sign_in').'"><i class="fa fa-sign-in"></i> S\'incrire</a>
                </li>
                ';
            }
            ?>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-newspaper-o"></i>  Offres et publicités
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?=site_url('');?>">Offres et publicités</a>
                    <a class="dropdown-item" href="<?=site_url('');?>">Promouvoir vos activités</a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?=site_url('home/politic');?>">Politiques de confidentialité</a>
                </div>
            </li> 

        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
</nav>
<!-- *** NAVBAR *** -->


</header>
 
 
        
      
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <h4>Se connecter</h4>
                                    <small class="text-muted">Entrer en contact avec plusieurs entrepreneurs, partagez vos services</small>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget author_widget">



                                <!-- *** Login Form **** -->
                                <form method="POST" action="<?=site_url('user/login');?>"    class="contact_form"  id="contact_form" novalidate="novalidate">
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="email" name="email" value="<?=set_value('email');?>" class="form-control rounded-0" id="email" placeholder="Email" required>
                                            <small class="text-danger text-left"><?= form_error('email','<em>','</em>') ?></small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="password" name="password" class="form-control rounded-0" id="password" placeholder="Mot de passe" required>
                                            <small class="text-danger"><?= form_error('password','<em>','</em>') ?></small> 
                                        </div>
                                    </div> 
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary btn-sm btn-block border-0 rounded-0" style="background: #1d3163;">Se connecter</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- *** Login Form **** -->



                            <div class="br"></div>
                            </aside>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="<?=base_url('assets/img/main/news_post_5.jpg');?>" alt="">
                                </div>									
                            </div>
                            <div class="col-lg-4  col-md-4">
                                <div class="blog_info text-right">
                                    <ul class="blog_meta list">
                                        <li><a>Daniel Wa Mukina<i class="lnr lnr-user"></i></a></li>
                                        <li><a>10 Juin, 2020<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">0 Vues<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#">0 Commentaires<i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                    <ul class="social-links">
                                        <li><a href="https://web.facebook.com/dimeurclub/" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a></li>
                                        <li> <a href="https://www.linkedin.com/in/dim-business-ab9221185" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-linkedin"><i class="sr-only">LikedIn</i></span></a></li>
                                        <li><a href="https://twitter.com/Danieldimilung1" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a></li>
                                        <li> <a href="https://www.instagram.com/dimbusinessfamily/" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a></li>
                                        <li> <a href="https://www.youtube.com/channel/UCCWswgrLvQ2HqJo-HnSZasQ" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">Youtube</i></span></a></li>
										
                                        <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 blog_details">
                                <h2>DIM Social - Technologie</h2> 
                                <p class="excert text-justify">
                                Créer un réseau des entrepreneurs pour permettre à tous nos utilisateurs de partager leurs
                                actualités, de faire la géolocalisation de leurs services. 
                                <br> Ce réseau social permettra aux entreprises, entrepreneurs d’accroitre
                                sensiblement leurs zones d’action, profiter de nos outils pour mieux évaluer les revenues,
                                consulter les experts, permettre les échanges avec les professionnels et tenir de forums
                                économiques et autres publicités pour la plateforme.
                                </p>
                            </div>
                           
                        </div>
                        
                            
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
        
    </body>
</html>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?=base_url('assets/js/jquery-3.3.1.min.js');?>"></script>
        <script src="<?=base_url('assets/js/popper.js');?>"></script>
        <script src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
        <script src="<?=base_url('assets/js/stellar.js');?>"></script>
        <script src="<?=base_url('assets/vendors/lightbox/simpleLightbox.min.js');?>"></script>
        <script src="<?=base_url('assets/vendors/nice-select/js/jquery.nice-select.min.js');?>"></script>
        <script src="<?=base_url('assets/vendors/isotope/imagesloaded.pkgd.min.js');?>"></script>
        <script src="<?=base_url('assets/vendors/isotope/isotope.pkgd.min.js');?>"></script>
        <script src="<?=base_url('assets/vendors/owl-carousel/owl.carousel.min.js');?>"></script>
        <script src="<?=base_url('assets/vendors/popup/jquery.magnific-popup.min.js');?>"></script>
        <script src="<?=base_url('assets/js/jquery.ajaxchimp.min.js');?>"></script>
        <script src="<?=base_url('assets/vendors/counter-up/jquery.waypoints.min.js');?>"></script>
        <script src="<?=base_url('assets/vendors/counter-up/jquery.counterup.min.js');?>"></script>
        <script src="<?=base_url('assets/js/mail-script.js');?>"></script>
        <script src="<?=base_url('assets/js/theme.js');?>"></script>
    </body>
</html>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=base_url('assets/img/main/logodim.png');?>" type="image/png">
        <title>DIM Social - (Profile)</title>
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
                    <a class="dropdown-item" href="'.site_url('user/profile/'.$this->session->id).'"><i class="fa fa-user-circle-o"></i> Voir mon compte</a> 
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
                  
                    <div class="col-lg-4 posts-list">
                        <div class="single-post row">

                            <?php 
                                /**
                                 * if_isset($item) 
                                 *
                                 * @param string $item
                                 * @return string
                                 */
                                function if_isset($item) : string
                                {
                                    if($item == '') {
                                        return ' (vide)';
                                    } else {
                                        return $item;
                                    }
                                }
                            
                                if(isset($user)) {
                                    echo
                                    // <img class="img-fluid" src="'.base_url().'upload/'.$user[0]->imageUrl.'" alt="">
                                    '<div class="col-lg-12">
                                        <div class="feature-img justify-content-end text-right">
                                            <figure class="figure">
                                                <img src="'.base_url().'upload/'.$user[0]->imageUrl.'" class="figure-img img-fluid rounded" alt="...">
                                                <figcaption class="figure-caption text-right">'.$user[0]->name.'</figcaption>
                                            </figure>
                                            
                                        </div>									
                                    </div>

                                    <div class="col-lg-12  col-md-4">
                                        <div class="blog_info text-right">
                                            <ul class="blog_meta list"> 
                                                <li><a>'.$user[0]->email.'<i class="fa fa-send"></i></a></li>
                                                <li><a>'.$user[0]->address.'<i class="fa fa-map-marker"></i></a></li>
                                                <li><a>'.$user[0]->phone.'<i class="lnr lnr-phone"></i></a></li>
                                                <li><a>'. if_isset($user[0]->site) .'<i class="fa fa-tag"></i></a></li>
                                                <li><a>'. if_isset($user[0]->type) .'<i class="fa fa-bank"></i></a></li>
                                                <li><a class="excert text-right">'. if_isset($user[0]->bio) .'<i class="fa fa-book"></i></a></li>
                                            </ul>
                                            <ul class="social-links">
                                            <!-- <li><a href="https://web.facebook.com/dimeurclub/" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a></li>
                                                <li> <a href="https://www.linkedin.com/in/dim-business-ab9221185" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-linkedin"><i class="sr-only">LikedIn</i></span></a></li>
                                                <li><a href="https://twitter.com/Danieldimilung1" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a></li>
                                                <li> <a href="https://www.instagram.com/dimbusinessfamily/" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a></li>
                                                <li> <a href="https://www.youtube.com/channel/UCCWswgrLvQ2HqJo-HnSZasQ" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">Youtube</i></span></a></li>
                                                
                                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                                <li><a href="#"><i class="fa fa-behance"></i></a></li> -->
                                            </ul>
                                        </div>
                                    </div>

                                    ';
                                }
                            
                            ?>

                            
                            <div class="col-lg-6 col-md-8 blog_details">
                                <!-- <h2>DIM Social - Technologie</h2> 
                                 
                                <p class="excert text-justify">
                                Créer un réseau des entrepreneurs pour permettre à tous nos utilisateurs de partager leurs
                                actualités, de faire la géolocalisation de leurs services. 
                                <br> Ce réseau social permettra aux entreprises, entrepreneurs d’accroitre
                                sensiblement leurs zones d’action, profiter de nos outils pour mieux évaluer les revenues,
                                consulter les experts, permettre les échanges avec les professionnels et tenir de forums
                                économiques et autres publicités pour la plateforme.
                                </p> -->
                            </div>
                           
                        </div>
                        
                            
                    </div>




                    <!-- *** SIDEBAR ***  -->
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar sticky-top border-0"  style="background-color: #fff;"> 
                            <aside class="single_sidebar_widget popular_post_widget mt-25"> 

                                <h3 class="widget_title border-bottom text-left text-muted p-0" style="background: #FFF;"> <small>Paramètrer votre compte</small> </h3>
                                <!-- <ul class="blog_meta list">
                                    <li><a href="#" class="text-muted d-flex align-items-center justify-content-center"><i class="fa fa-info"></i><small> Modifier mes informations</small> </a></li>
                                    <li><a href="#" class="text-muted d-flex align-items-center justify-content-center"><i class="fa fa-photo"></i><small> Changer la photo</small> </a></li>
                                    <li><a href="#" class="text-muted d-flex align-items-center justify-content-center"><i class="fa fa-key"></i><small> Mot de passe</small> </a></li>
                                    <hr>
                                    <li><a href="#" class="text-muted d-flex align-items-center justify-content-center"><i class="fa fa-book"></i><small> Politiques de confidentialités</small> </a></li>
                                    <li><a href="#" class="text-danger d-flex align-items-center justify-content-center"><i class="fa fa-user"></i><small> Supprimer mon compte</small> </a></li>
                                </ul> -->
                                <div class="blog_info p-0 text-right">
                                    <ul class="blog_meta text-right list">
                                        <!-- <li><a><i class="lnr lnr-user"></i> Daniel Wa Mukina</a></li>
                                        <li><a>10 Juin, 2020<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a>danielmukina@gmail.com<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a>Femmes Katangaises 505, Haut-Katanga RDC<i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a>555 - 888 - 999<i class="lnr lnr-calendar-full"></i></a></li> -->

                                        <?php

                                            if(isset($user)) {
                                                echo '
                                                    <li><a href="'.site_url('user/update_profile/'.$user[0]->id).'"><small> Modifier mes informations</small><i class="fa fa-info"></i></a></li>
                                                    <li><a href="'.site_url('user/update_imageUrl/'.$user[0]->id).'"><small> Changer la photo</small><i class="fa fa-photo"></i></a></li>
                                                    <li><a href="'.site_url('user/update_password/'.$user[0]->id).'"><small> Mot de passe</small><i class="fa fa-key"></i></a></li>
                                                    <hr>
                                                    <li><a href="'.site_url('user/politic/'.$user[0]->id).'"><small> Politiques de confidentialités</small><i class="fa fa-book"></i></a></li>
                                                    <li><a href="'.site_url('user/delete_account/'.$user[0]->id).'"><small> Supprimer mon compte</small><i class="fa fa-user"></i></a></li>
                                                ';
                                            }

                                        ?>

                                       
                               
                                    </ul>
                                </div>
                                <div class="media post_item">
                                    
                                    <!-- <a class="btn btn-block border-0 text-muted rounded-0 text-left" style="background-color:#FFF;" href="#"><small>Mot de passe</small></a>  -->
                                    <!-- <img src="" alt="post" class="w-25 rounded-0">
                                    <div class="media-body">
                                        <a href=""><h3>'.$row->title.'r</h3></a>
                                        <p>'.$row->time.' Hours ago</p>
                                    </div> -->
                                    
                                </div> 
 
                                <!-- <div class="br"></div> -->
                            </aside>
                    <!-- *** SIDEBAR ***  -->







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
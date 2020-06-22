<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=base_url('assets/img/main/logodim.png');?>" type="image/png">
        <title>DIM Social - Politique de confidentialité    </title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/linericon/style.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/owl-carousel/owl.carousel.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/lightbox/simpleLightbox.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/nice-select/css/nice-select.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/animate-css/animate.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/vendors/popup/magnific-popup.css');?>">
        <!-- main css -->
        <link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/responsive.css');?>">

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
                                <a class="nav-link dropdown-toggle text-light" href="'.site_url('user/profile/'.$this->session->id).'" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i> '.$this->session->name.'
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="'.site_url('user/show_user/'.$this->session->id).'"><i class="fa fa-user-circle-o"></i> Voir mon compte</a> 
                                    <a class="dropdown-item" href="'.site_url('activity/user_activity/'.$this->session->id).'"><i class="fa fa-user-newspaper-o"></i> Mon activité</a> 
                                <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="'.site_url('user/logout').'"><i class="fa fa-power-off"></i>  Se déconnecter</a>
                                </div>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link text-light" href="'.site_url('home/publish_article').'"><i class="fa fa-post"></i>Publier un article</a>
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

        <div class="container mt-25 pt-5" style="background-color: #FFF;">

        <div class="jumbotron"  style="background-color: #FFF;">
        <h1 class="display-4">Politique de confidentialité</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-sm btn-block bg-light border-0 text-muted" href="#" role="button">Learn more</a>
        </div>

        </div>

        

            
        <!--================Footer Area =================-->
        <footer class="footer_area p_120 ">
        	<div class="container">
        		<div class="row footer_inner">
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget ab_widget">
        					<div class="f_title">
        						<h3>A propos de DIM Business</h3>
        					</div>
        					<p>Nous sommes une pépinière des créateurs d'entreprises jouant le rôle de pivot-majeur du business en Afrique et donnant un sens aux projets et startups grâce à nos business-solutions.</p>
        					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Fait avec <i class="fa fa-heart-o" aria-hidden="true"></i> par <a href="https://dimbusiness.org" target="_blank">DIM Business</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        				</aside>
        			</div>
        			<div class="col-lg-5 col-sm-6">
        				<aside class="f_widget news_widget">
        					<div class="f_title">
        						<h3>Newsletter</h3>
        					</div>
        					<p>Restez au courant de nos dernières réalisations</p>
        					<div id="mc_embed_signup">
                                <form  method="POST" target="_blank" action="<?=site_url('user/newsletter')?>">
                                	<div class="input-group d-flex flex-row">
                                        <input name="email" placeholder="Votre addresse mail"  required="" type="email">
                                        <button type="submit" class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                        <!-- <input type="submit"class="btn sub-btn" value="Souscrire"> -->
                                    </div>				
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
        				</aside>
        			</div>
        			<div class="col-lg-2">
        				<aside class="f_widget social_widget">
        					<div class="f_title">
        						<h3>Suivez-nous</h3>
        					</div>
        					<p>Restons social</p>
        					<ul class="list">
                                <li><a href="https://web.facebook.com/dimeurclub/" target="_blank"><i class="fa fa-facebook"></i></a></li>
        						<li><a href="https://twitter.com/Danieldimilung1" target="_blank"><i class="fa fa-twitter"></i></a></li>
        						<li><a href="https://www.linkedin.com/in/dim-business-ab9221185" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        						<li><a href="https://www.instagram.com/dimbusinessfamily/" target="_blank"><i class="fa fa-instagram"></i></a></li>
        						<li><a href="https://www.youtube.com/channel/UCCWswgrLvQ2HqJo-HnSZasQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
        					</ul>
        				</aside>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->




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
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=base_url('assets/img/main/logodim.png');?>" type="image/png">
        <title>DIM Social - <?php if(isset($user) ){echo $user[0]->name;} ?> (Profile)</title>
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

            .blog_info .blog_meta li a i {
                color: #222222;
                font-size: 16px;
                font-weight: 600;
                padding-right: 15px;
                line-height: 20px;
                vertical-align: middle; 
            }
            .blog_info .blog_meta li a:hover {
                color: #1d3163; 
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
                        <a class="dropdown-item" href="'.site_url('activity/user_articles/'.$this->session->id).'"><i class="fa fa-user-newspaper-o"></i> Mes articles</a> 
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
 
 
        
      
        <!--================Blog Area =================-->
        <section class="blog_area single-post-area p_120 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                  
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

                                function is_type(string $item) : string {
                                    if($item == 'PERSONAL') return 'Freelancer';
                                    else return 'Entreprise';
                                }
                            
                                if(isset($user) && isset($this->session->id)) {
                                    echo
                                    // <img class="img-fluid" src="'.base_url().'upload/'.$user[0]->imageUrl.'" alt="">
                                    '<div class="col-lg-12 border-bottom">
                                        <div class="feature-img ">
                                            <figure class="figure">
                                                <img src="'.base_url().'upload/'.$user[0]->imageUrl.'" class="figure-img img-fluid rounded" alt="...">
                                                <figcaption class="figure-caption text-left">'.$user[0]->name.'</figcaption>
                                            </figure>
                                            
                                        </div>									
                                    </div>

                                    <div class="col-lg-12  col-md-12">
                                        <div class="blog_info text-left">
                                            <ul class="blog_meta list"> 
                                                <li><a><i class="fa fa-send"></i>'.$user[0]->email.'</a></li>
                                                <li><a><i class="fa fa-map-marker"></i>'.$user[0]->address.'</a></li>
                                                <li><a><i class="lnr lnr-phone"></i>'.$user[0]->phone.'</a></li>
                                                <li><a><i class="fa fa-tag"></i>'. if_isset($user[0]->site) .'</a></li>
                                                <li><a><i class="fa fa-bank"></i>'. is_type(if_isset($user[0]->type))  .'</a></li>
                                                <li><a class="excert text-right"><i class="fa fa-book"></i>'. if_isset($user[0]->bio) .'</a></li>
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
                                } else {
                                    echo
                                    // <img class="img-fluid" src="'.base_url().'upload/'.$user[0]->imageUrl.'" alt="">
                                    '<div class="col-lg-12 border-bottom">
                                        <div class="feature-img justify-content-start text-right">
                                            <figure class="figure">
                                                <img src="'.base_url().'upload/'.$user[0]->imageUrl.'" class="figure-img img-fluid rounded" alt="...">
                                                <figcaption class="figure-caption text-left">'.$user[0]->name.'</figcaption>
                                            </figure>
                                            
                                        </div>									
                                    </div>

                                
                                    <div class="col-lg-12  col-md-12">
                                        <div class="blog_info text-left">
                                            <ul class="blog_meta list"> 
                                                <li><a><i class="fa fa-send"></i>'.$user[0]->email.'</a></li>
                                                <li><a><i class="fa fa-map-marker"></i>'.$user[0]->address.'</a></li>
                                                <li><a><i class="lnr lnr-phone"></i>'.$user[0]->phone.'</a></li>
                                                <li><a><i class="fa fa-tag"></i>'. if_isset($user[0]->site) .'</a></li>
                                                <li><a><i class="fa fa-bank"></i>'. is_type(if_isset($user[0]->type)) .'</a></li>
                                                <li><a class="excert text-right"><i class="fa fa-book"></i>'. if_isset($user[0]->bio) .'</a></li>
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

                        </div>
                        
                            
                    </div>


                    <?php 
                    
                        if(isset($user) && isset($this->session->id))
                        {
                            echo
                            '
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalCenterTitle">Supprimer mon compte</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- *** USER INFO *** -->
                                    <div class="card mb-3" style="max-width: 540px;">
                                        <div class="row no-gutters">
                                            <div class="col-md-4">
                                                <img src="'.base_url().'upload/'.$user[0]->imageUrl.'" class="figure-img img-fluid rounded" alt="...">
                                            </div>
                                            <div class="col-md-8 border-0">
                                                <div class="card-body">
                                                    <h5 class="card-title">'.$user[0]->name.'</h5> 
                                                    <!--
                                                    <ul class="list-group list-sm">
                                                        <li class="list-group-item"><small class="text-muted">'.$user[0]->bio.'</small></li> 
                                                        <li class="list-group-item"><small class="text-muted">'.$user[0]->email.'</small></li> 
                                                        <li class="list-group-item"><small class="text-muted">'.$user[0]->site.'</small> </li> 
                                                        <li class="list-group-item"><small class="text-muted">'.$user[0]->address.'</small></li> 
                                                    </ul> 
                                                    --> 
                                                    <p class="card-text"><small class="text-muted">Votre compte sera supprimé</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *** USER INFO *** -->
                                </div>
                                <div class="modal-footer"> 
                                    <button type="button" class="btn btn-block btn-sm btn-danger">Supprimer</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            ';
                        }
                    
                    ?>




                    <!-- *** USER MODAL *** -->
                    <!-- Button trigger modal --> 

                    <!-- Modal -->
                    <?php 

                        if(isset($user) && isset($this->session->id))
                        {
                            echo '

                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">'.$user[0]->name.'</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- *** FORM USER *** -->
                            <form class="row contact_form" action="'.site_url('user/update_user').'" method="post"  id="contact_form" novalidate="novalidate">
                        <?php echo validation_errors(); ?>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h4 class="text-muted">Changer mes informations</h4>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" id="name" name="name" value="'.set_value('name').'" placeholder="'.$user[0]->name.'" required>
                                    <small class="text-danger">'.form_error('name','<em>','</em>').'</small>
                                </div> 
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-sm" id="email" name="email" value="'.set_value('email').'" placeholder="'.$user[0]->email.'" required>
                                    <small class="text-danger">'.form_error('email','<em>','</em>').'</small>
                                </div> 
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" id="address" name="address" value="'.set_value('addrses').'" placeholder="'.$user[0]->address.'">
                                    <small class="text-danger">'.form_error('address','<em>','</em>').'</small>
                                </div> 
                                <div class="form-group">
                                    <input type="tel" class="form-control form-control-sm" id="phone" name="phone" value="'.set_value('phone').'" placeholder="'.$user[0]->phone.'" required>
                                    <small class="text-danger">'.form_error('phone','<em>','</em>').'</small>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" id="site" name="site" value="'.set_value('site').'" placeholder="'.$user[0]->site.' (facultatif)">
                                    <small class="text-danger">'.form_error('site','<em>','</em>').'</small>
                                </div>  


                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" id="individuel" value="PERSONAL">
                                    <label class="form-check-label" for="individuel"> <small>Compte Individuel</small> </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" id="company" value="COMPANY">
                                    <label class="form-check-label" for="company"> <small>Compte Entreprise</small> </label>
                                </div> 
  
                                <div class="form-group">
                                    <textarea class="form-control" name="bio" id="bio" value="'.set_value('bio').'" rows="1" placeholder="Votre bio">'.$user[0]->bio.'</textarea>
                                    <small class="text-danger">'.form_error('bio','<em>','</em>').'</small>
                                </div>
                                
                                <div class="form-group">
                                    <label for="imageUrl"> <small class="text-center">Votre photo</small> </label>
                                    <input type="file" class="form-control-sm" value="'.set_value('imageUrl').'" id="imageUrl" name="imageUrl"><br>
                                    <div class="form-group">
                                        <div id="uploaded_image">

                                        </div>
                                    </div> 
                                </div>



                                
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-sm" value="'.set_value('password').'" id="password" name="password" placeholder="Mot de passe *" required>
                                    <small class="text-muted text-left"> <i>Assurez-vous qu\'il s\'agit d\'au moins 15 caractères OU d\'au moins 8 caractères.</i> </small>
                                    <small class="text-danger">'.form_error('password','<em>','</em>').'</small>
                                </div> 
                                
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-sm" value="'.set_value('confirm').'" id="confirm" name="confirm" placeholder="Confimer votre mot de passe *" required>
                                    <small class="text-danger">'.form_error('confirm','<em>','</em>').'</small>
                                </div> 

                                <br>
                                <div class="form-group">
                                    <button type="button" class="btn btn-sm btn-primary border-0 rounded-0  btn-block" style="background-color: #1d3163;">Enregistrer</button>
                                <!-- <button type="button" class="btn btn-sm btn-secondary border-0 rounded-0  btn-block" data-dismiss="modal">Fermer</button> -->
                                    <!-- <button type="submit" value="submit" class="btn btn-sm btn-block text-light border-0 rounded-0" style="background-color: #1d3163;">S\'inscrire</button> -->
                                </div>
                            </div> 
            
 

                        </form>
                            <!-- *** FORM USER *** -->
                        </div>
                        
                        </div>
                    </div>
                    </div>
                    <!-- *** USER MODAL *** -->
                            
                            ';
                        }
                    
                    ?>
                    



                    <?php

                    if(isset($this->session->id) && isset($user)) {
                        echo '
                    <!-- *** SIDEBAR ***  -->
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar sticky-top border-0"  style="background-color: #fff;"> 
                            <aside class="single_sidebar_widget popular_post_widget"> 

                                <h3 class="widget_title border-bottom text-left text-muted p-0" style="background: #FFF;"> <small>Paramètrez votre compte</small> </h3>
                                <!-- <ul class="blog_meta list">
                                    <li><a href="#" class="text-muted d-flex align-items-center justify-content-center"><i class="fa fa-info"></i><small> Modifier mes informations</small> </a></li>
                                    <li><a href="#" class="text-muted d-flex align-items-center justify-content-center"><i class="fa fa-photo"></i><small> Changer la photo</small> </a></li>
                                    <li><a href="#" class="text-muted d-flex align-items-center justify-content-center"><i class="fa fa-key"></i><small> Mot de passe</small> </a></li>
                                    <hr>
                                    <li><a href="#" class="text-muted d-flex align-items-center justify-content-center"><i class="fa fa-book"></i><small> Politiques de confidentialités</small> </a></li>
                                    <li><a href="#" class="text-danger d-flex align-items-center justify-content-center"><i class="fa fa-user"></i><small> Supprimer mon compte</small> </a></li>
                                </ul> -->
                                <div class="blog_info m-0 p-0 text-left">
                                    <ul class="blog_meta list">

                                        <li><a href="'.site_url('user/update_profile/'.$user[0]->id).'" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-info"></i><small> Modifier mes informations</small></a></li>
                                        <hr>
                                        <li><a href="'.site_url('home/politic/'.$user[0]->id).'"><i class="fa fa-book"></i><small> Politiques de confidentialités</small></a></li>
                                        <li><a href="" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-user"></i><small> Supprimer mon compte</small></a></li>
                                        <!--'.site_url('user/delete_account/'.$user[0]->id).'-->
                                    </ul>
                                </div>
                                
                                <!-- <div class="br"></div> -->

                               

                            </aside>
                            ';

                            
                        } else {


                        }
        
                    ?>
        
        
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

      
<script>
      
$(document).ready(function(){
    $('.contact_form').on('change', function(e){
        e.preventDefault();
        if($('#imageUrl').val() == '') {
            // alert('Please, select a file.');
        } else {
            $.ajax({
                url:"<?php echo base_url();?>activity/upload_image",
                method:'POST',
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success:function(data){
                    $('#uploaded_image').html(data);
                }
            })
        }

    });
});

</script> 
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=base_url('assets/img/main/logodim.png');?>" type="image/png">
        <title>DIM Social - </title>
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

        <!-- *** jQuery *** -->
        <script src="<?=base_url('assets/js/jQuery-3.4.1.min.js');?>"></script>
        <!-- *** jQuery *** -->
    </head>
    <body>
        

    
        <header style="background-color: #1d3163;">



        <!-- *** NAVBAR *** -->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top text-light" style="background: #1d3163;">
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
        <section class="blog_area single-post-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">


                            
                            <!-- *** USER ACTIVITY *** -->
                            <?php 
                                // if(isset($activity)) 
                                // {
                                //     echo
                                //     '
                                //     <div class="col-lg-12">
                                //         <div class="feature-img">
                                //             <img class="img-fluid" src="'.base_url().'upload/'.$activity[0]->imageUrl.'"  />
                                //         </div>									
                                //     </div>

                                //     <div class="col-lg-3  col-md-3">
                                //         <div class="blog_info text-right">
                                //             <div class="post_tag">
                                //                 <a href="'.site_url('activity/get_domain/').$activity[0]->domain.'">'.$activity[0]->domain.'</a>  
                                //             </div>
                                //             <ul class="blog_meta list">
                                //                 <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                //                 <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                //                 <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                //                 <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                //             </ul>
                                //             <ul class="social-links">
                                //                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                //                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                //                 <li><a href="#"><i class="fa fa-github"></i></a></li>
                                //                 <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                //             </ul>
                                //         </div>
                                //     </div>
                                    
                           
                                //     <div class="col-lg-9 col-md-9 blog_details">
                                    
                                //         <h2>'.$activity[0]->name.'</h2>
                                //         <p class="excert">
                                //             '.$activity[0]->description.'
                                //         </p>
                                //     </div>
                                //     ';
                                // } else 
                                // {
                                //     echo 'FALSE';
                                // }
                            ?>
                            <!-- *** USER ACTIVITY *** -->    
                           
                            <div class="col-lg-12">
                                        <div class="feature-img">
                                            <img class="img-fluid" src="<?=base_url('assets/img/main/news_post_5.jpg')?>"  />
                                        </div>									
                                    </div>

                                    <div class="col-lg-3  col-md-3">
                                        <div class="blog_info text-right">
                                            <div class="post_tag">
                                                <a class="active" href="'.site_url('activity/get_domain/').$activity[0]->domain.'">Technologie</a>  
                                            </div>
                                            <ul class="blog_meta list">
                                                <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                                <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                                <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                                <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                            </ul>
                                            <ul class="social-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                           
                                    <div class="col-lg-9 col-md-9 blog_details">
                                    
                                        <h2>Titre de l'article</h2>
                                        <p class="excert">
                                            MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.
                                        </p>
                                    </div>
                            
                            

                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="<?=base_url('assets/img/main/Image-06.jpg');?>" alt=""></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                                    </div>
                                    <div class="detials">
                                        <p>Article précédent</p>
                                        <a href="#"><h4>Space The Final Frontier</h4></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Article suivant</p>
                                        <a href="#"><h4>Telescopes 101</h4></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" src="<?=base_url('assets/img/main/Image-06.jpg');?>" alt=""></a>
                                    </div>										
                                </div>									
                            </div>
                        </div>
                        <div class="comments-area">
                            <h4>0  Commentaires</h4>
                            <!-- <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="<?=base_url('assets/img/blog/c1.jpg');?>" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Emilly Blunt</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="<?=base_url('assets/img/blog/c2.jpg');?>" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Elsie Cunningham</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="<?=base_url('assets/img/blog/c3.jpg');?>" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Annie Stephens</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="<?=base_url('assets/img/blog/c4.jpg');?>" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Maria Luna</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase">reply</a> 
                                    </div>
                                </div>
                            </div>	
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="<?=base_url('assets/img/blog/c5.jpg');?>" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Ina Hayes</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                           <a href="" class="btn-reply text-uppercase text-light" style="background-color: #1d3163;">reply</a> 
                                    </div>
                                </div>
                            </div>	   
                                                                      				 -->
                        </div>
<!-- 
                        <div class="comment-form"> -->

                        <?php
                            // if(isset($this->session->name) || isset($this->session->email)) {
                            //     echo 
                            //     '
                            //     <h4>Faites un commentaire</h4>
                            //     <form method="POST" action="'.site_url('user/comment').'" novalidate="novalidate">  
                            //         <div class="form-group">
                            //             <textarea class="form-control mb-10" rows="5" name="comment" placeholder="Votre commentaire .... " onfocus="this.placeholder = " onblur="this.placeholder = '."comment".'" required=""></textarea>
                            //         </div>
                            //         <button type="submit" class="btn btn-lg btn-block text-light border-0" style="background-color: #1d3163;">Commenter</button>	
                            //     </form>
                            //     ';
                            // } else {
                            //     echo 
                            //     '
                            //     <h4>Connectez-vous pour faire un commentaire.</h4>
                            //     <a href="'.site_url('user/login').'" type="button" class="btn btn-lg btn-block text-light" style="background-color: #1d3163;">Se connecter</a>
                            //     ';
                            // }
                        ?>

                            
                        <!-- </div> -->
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar "> 
                            <aside class="single_sidebar_widget popular_post_widget">
                            

                                <div class="media post_item">
                                    <img src="<?=base_url('assets/img/blog/popular-post/post1.jpg');?>" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Article 1</h3></a>
                                        <p>Lundi 15 Juin 2020, 16h26</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="<?=base_url('assets/img/blog/popular-post/post2.jpg');?>" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Article 2</h3></a>
                                        <p>Lundi 15 Juin 2020, 16h26</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="<?=base_url('assets/img/blog/popular-post/post3.jpg');?>" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Article 3</h3></a>
                                        <p>Lundi 15 Juin 2020, 16h26</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="<?=base_url('assets/img/blog/popular-post/post4.jpg');?>" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Article 4</h3></a>
                                        <p>Lundi 15 Juin 2020, 16h26</p>
                                    </div>
                                </div>
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget tag_cloud_widget">
                               
                                <ul class="list">
                                   
                                <?php
                                        if(isset($domains)) 
                                        {
                                            if($domains -> num_rows() > 0) 
                                            {
                                                foreach ($domains -> result() as $row) 
                                                {
                                                    echo '<li><a href="'.site_url('activity/get_activity/' . $row->id ).'">'.$row->title.'</a></li>';
                                                }
                                            }
                                        } 
                                    ?> 				

                                </ul>
                            </aside>
                            <!-- <aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="<?=base_url('assets/img/blog/add.jpg');?>" alt=""></a>
                                <div class="br"></div>
                            </aside> -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
        
 
        
        
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

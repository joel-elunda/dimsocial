<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=base_url('assets/img/main/logodim.png');?>" type="image/png">
        <title>DIM Social - Accueil</title>
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
            <nav class="navbar navbar-expand-lg navbar-light  text-light" style="background: #1d3163;">
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
 
        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120 p-5" style="background-color:#FFF;">
        	<div class="container">
        		<div class="main_title">
        			<!-- <h2>Toutes les catégories</h2> -->
        			<!-- <p>Toutes les catégories.</p> -->
        		</div>
        		<div class="testi_inner">
					<div class="testi_slider owl-carousel"> 
                        <?php
                            if(isset($domains)) 
                            {
                                if($domains -> num_rows() > 0) 
                                {
                                    foreach ($domains -> result() as $row) 
                                    {
                                        // <a href="#"><i class="fa fa-star-half-o"></i></a>

                                        echo '
                                        <div class="item rounded-0" >
                                            <div class="testi_item rounded-0 text-center" style="border-color:#f0f0f0;">
                                                <a href="'.site_url('activity/show_articles/'.$row->id).'"><h4 style="color:#1d3163;">'.$row->title.'</h4></a>
                                                <!-- <a href=""><i class="fa fa-star"></i></a>
                                                <a href=""><i class="fa fa-star"></i></a>
                                                <a href=""><i class="fa fa-star"></i></a>
                                                <a href=""><i class="fa fa-star"></i></a>
                                                <a href=""><i class="fa fa-star"></i></a> -->
                                            </div>
                                        </div>
                                        ';
                                    }
                                }
                            } 
                        ?> 				

                    
					 
					</div>
        		</div>
        	</div>
        </section>
        <!--================End Testimonials Area =================-->

 
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ">
                        <div class="blog_left_sidebar">
                           


                            <?php
                                $i = 0;
                                if(isset($articles)) 
                                {
                                    if($articles -> num_rows() > 0) 
                                    {
                                        foreach ($articles -> result() as $row) 
                                        {
                                            echo
                                            '
                                            <article class="row blog_item">
                                            <div class="col-md-3">
                                                <div class="blog_info text-right">
                                                     <div class="post_tag">
                                                        '?>
                                                        <?php 

                                                            

                                                            // $domains_arr = $this->ActivityModel->get_domains();
                                                            // print_r($domains_arr->result()[0]->title);
                                                            if(isset($domains)) 
                                                            {
                                                                if($domains -> num_rows() > 0) 
                                                                {
                                                                    foreach ($domains -> result() as $domain) 
                                                                    {
                                                                        if($row->id_category == $domain->id) {
                                                                            echo '<a class="active" href="'.site_url('activity/show_all_domain/'.$domain->CODE) .'"><strong>'.$domain->title.'</strong> </a>';
                                                                        } else {
                                                                            echo 
                                                                            '
                                                                                <a href="'.site_url('activity/show_articles/'.$domain->id).'">'.$domain->title.'</a>
                                                                            ';
                                                                        } 
                                                                       
                                                                    }
                                                                }
                                                            }
                                                        ?> 
                                                    </div>
                                                     <ul class="blog_meta list">
                                                        <?php
                                                            //<li><a href="'.site_url('user/show_user/'.$user[0]->id).'">'.$user[0]->name.'<i class="lnr lnr-user"></i></a></li>
                                                            echo 
                                                            '
                                                            <!--<li><a>'.$users[$i][0]->name.'<i class="lnr lnr-user"></i></a></li>-->
                                                                <li><a>'.$row->date.'<i class="lnr lnr-calendar-full"></i></a></li>
                                                                <li><a>'.$row->view.' Vues<i class="lnr lnr-eye"></i></a></li>
                                                                <!--<li><a href="'.site_url('activity/show_article/'.$row->id).'">0 Comments<i class="lnr lnr-bubble"></i></a></li>
                                                                 <li><a href="'.site_url('activity/show_article/'.$row->id).'">0 Likes<i class="fa fa-heart "></i></a></li> -->
                                                            '
                                                            
                                                            ;
                                                        ?>

                                                       
                                                     </ul>
                                                 </div>
                                            </div>
                                             <div class="col-md-9">
                                                 <div class="blog_post">
                                                    <?php
                                                     echo '
                                                     <img src="'.base_url().'upload/'.$row->imageUrl.'" alt="">
                                                     <div class="blog_details">
                                                         <a href="'.site_url('activity/show_article/'.$row->id).'"><h2>'.$row->title.'</h2></a>
                                                         <p>'.$row->description.'</p>
                                                         <a href="'.site_url('activity/show_article/'.$row->id).'" class="white_bg_btn">Voir plus</a>
                                                         
                                                     </div>
                                                 </div>
                                             </div>
                                         </article>
             
                                            ';
                                            ++$i;
                                        }
                                    }
                                }

                            ?>
 
                          
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar sticky-top border-0"  style="background-color: #fff;"> 
                            <!-- <aside class="single_sidebar_widget popular_post_widget mt-25"> -->
                            <aside class="single_sidebar_widget popular_post_widget mt-25">
                            
                                <!-- *** MODAL MENU *** -->

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Choisissez la catégorie</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body justify-content-center">
                                                    <ul class="list-group list-group-flush">
                                                        <?php
                                                            if(isset($domains)) {
                                                                if($domains -> num_rows() > 0) 
                                                                {
                                                                    foreach ($domains -> result() as $row) {
                                                                        echo '<a class="text-muted" href="'.site_url('activity/show_all_domain/' . $row->CODE).'"><li class="list-group-item list-group-item-action">'.$row->title.'</li></a>';
                                                                    }
                                                                }
                                                            }
                                                        ?>
                                                        
                                                    </ul>
                                                </div>
                                                <!-- <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                <!-- *** MODAL MENU *** -->
                                
                                
                                <h3 class="widget_title border-bottom text-left text-muted p-0" style="background: #FFF;"> <small>Posts récents</small> </h3>
                                <!-- <h3 class="widget_title border-bottom text-left text-muted p-0 mt-5" style="background: #FFF;"> <small>Posts récents</small> </h3> -->

                                <?php

                                    if(isset($articles)) 
                                    {
                                        $i = 0;
                                        if($articles -> num_rows() > 0) 
                                        {
                                            foreach ($articles -> result() as $row) 
                                            {
                                                echo '
                                                <div class="media post_item">
                                                    <img src="'.base_url().'upload/'.$row->imageUrl.'" alt="post" class="w-25 rounded-0">
                                                    <div class="media-body">
                                                        <a href="'.site_url('activity/show_article/'.$row->id).'"><h3>'.$row->title.'r</h3></a>
                                                        <p>'.$row->time.' Hours ago</p>
                                                    </div>
                                                </div>
                                                ';
                                            }
                                        }
                                    }

                                ?>
 
                                <!-- <div class="br"></div> -->
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <!-- <h4 class="widget_title" style="background: #1d3163;">Post Catgories</h4> -->
                                <ul class="list cat-list">
                                  
                                    <?php
                                        // if(isset($domains)) 
                                        // {
                                        //     if($domains -> num_rows() > 0) 
                                        //     {
                                        //         foreach ($domains -> result() as $row) 
                                        //         {
                                        //             echo '
                                        //             <li>
                                        //                 <a href="'.site_url('activity/show_article/'.$row->id).'" class="d-flex justify-content-between">
                                        //                     <p>'.$row->title.'</p>
                                        //                     <p>0</p>
                                        //                 </a>
                                        //             </li>
                                        //             ';
                                        //         }
                                        //     }
                                        // } 
                                    ?> 		
                                    														
                                </ul>
                                <!-- <div class="br"></div> -->
                            </aside>
                            
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <!-- <h4 class="widget_title" style="background: #1d3163;">Tag Clouds</h4> -->
                                <ul class="list">
                                   
                                    <?php
                                        // if(isset($domains)) 
                                        // {
                                        //     if($domains -> num_rows() > 0) 
                                        //     {
                                        //         foreach ($domains -> result() as $row) 
                                        //         {
                                        //             echo '<li><a href="'.site_url('activity/show_article/'.$row->id).'">'.$row->title.'</a></li>';
                                        //         }
                                        //     }
                                        // } 
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
        <script>
            
        </script>
    </body>
</html>

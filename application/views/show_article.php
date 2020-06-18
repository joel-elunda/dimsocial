<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=base_url('assets/img/main/logodim.png');?>" type="image/png">
        <title>DIM Social - Article</title>
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


        <header>
            <div>
                <ul class="nav justify-content-end fixed-top" style="background: #1d3163;">
                    <li class="nav-item">
                        <a class="nav-link active  text-light" href="<?=site_url()?>"><i class="fa fa-home"></i><small> <strong>Accueil</strong> </small> </a>
                    </li>
                   
                    <?php
                        if(isset($this->session->name) || isset($this->session->email)) {
                            echo
                            '
                            <li class="nav-item">
                                <a class="nav-link  text-light" href="'.site_url('home/publish_article').'"><i class="fa fa-user"></i><small> <strong>Publier un article</strong> </small> </a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link  text-light" href="'.site_url('user/my_account/'.$this->session->id).'"><i class="fa fa-user"></i><small> <strong>'.$this->session->name.'</strong> </small> </a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link  text-light" href="'.site_url('user/logout').'"><i class="fa fa-user"></i><small> <strong>Se déconnecter</strong> </small> </a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link active  text-light" href="'.site_url('home/activity').'"><i class="fa fa-book"></i><small> <strong>Votre activité</strong> </small> </a>
                            </li>
                            ';
                        } else {
                            echo '
                            <li class="nav-item">
                                <a class="nav-link text-light" href="'.site_url('home/login').'"><i class="fa fa-user"></i><small> <strong>Se connecter</strong> </small> </a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link text-light" href="'.site_url('home/sign_in').'"><i class="fa fa-sign-in"></i><small> <strong>S\'inscrire</strong> </small> </a>
                            </li>
                            ';
                        }
                    ?> 
                   
                </ul>
            </div>
        </header>
 
        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120 p-5" style="background-color: #fff;">
        	
        </section>
        <!--================End Testimonials Area =================-->

 
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                           
                            <?php 

                                if(isset($article)) {
                                    if($article -> num_rows() > 0) {
                                        foreach ($article -> result() as $row) {

                                            if(isset($user)) {


                                                echo 
                                                '
                                                <article class="row blog_item">
                                                <div class="col-md-3">
                                                    <div class="blog_info text-right">
                                                            <div class="post_tag">

                                                            ';

                                                            ?>
                                                            <?php
                                                            if(isset($category) && isset($domains)) 
                                                            {
                                                                foreach ($domains->result() as $domain) {
                                                                    // echo $domain->title;
                                                                    if($category[0]->CODE == $domain->CODE) {
                                                                        echo '<a class="active" href="'.site_url('activity/show_all_articles_id/'.$domain->CODE).'">'.$category[0]->title.' </a>';
                                                                    } else {
                                                                        echo '<a href="'.site_url('activity/show_all_articles_id/'.$domain->CODE).'">'.$domain->title.' </a>';
                                                                    }
                                                                    
                                                                }
                                                            }
                                                            ?>
 
                                                            
                                                            <?php
                                                                echo '
                                                            </div>
                                                            <ul class="blog_meta list">
                                                                <li><a href="'.site_url('user/show_user/'.$user[0]->id).'">'.$user[0]->name.'<i class="lnr lnr-user"></i></a></li>
                                                                <li><a>'.$row->date.'<i class="lnr lnr-calendar-full"></i></a></li>
                                                                <li><a> 0 Vues<i class="lnr lnr-eye"></i></a></li>
                                                                <li><a> 0 Commentaires<i class="lnr lnr-bubble"></i></a></li>
                                                            </ul>
                                                        </div>
                                                </div>
                                                    <div class="col-md-9">
                                                        <div class="blog_post">
                                                            <img src="'.base_url().'upload/'.$row->imageUrl.'" alt="">
                                                            <div class="blog_details">
                                                                <a><h2>'.$row->title.'</h2></a>
                                                                <p>'.$row->description.'</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                
                                                </article>
                                                ';
                                            }
                                        }
                                        
                                    }
                                }
                            
                            ?>

                            
                          

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar"> 
                            <aside class="single_sidebar_widget popular_post_widget">
                                
                                <!-- Button trigger modal -->
                                <a href="#" class="btn widget_title btn-block rounded-0 border text-muted" style="background: transparent;" data-toggle="modal" data-target="#exampleModalCenter">
                                    Offres et publicités
                                </a>

                                
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
                                
                                 
 
                                <div class="br"></div>
                            </aside>
                            
                            
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <!-- <h4 class="widget_title" style="background: #1d3163;">Tag Clouds</h4> -->
                                <ul class="list">
                                   
                                    <?php
                                        if(isset($domains)) 
                                        {
                                            if($domains -> num_rows() > 0) 
                                            {
                                                foreach ($domains -> result() as $row) 
                                                {
                                                    echo '<li><a href="'.site_url('activity/show_article/'.$row->id).'">'.$row->title.'</a></li>';
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
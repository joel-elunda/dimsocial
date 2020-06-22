<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?=base_url('assets/img/main/logodim.png');?>" type="image/png">
        <title>DIM Social - Publier votre article</title>
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

        <!-- contact js -->
        <script src="<?=base_url('assets/js/jquery.form.js');?>"></script>
        <script src="<?=base_url('assets/js/jquery.validate.min.js');?>"></script>
        <script src="<?=base_url('assets/js/contact.js');?>"></script>
    </body>
</html>
      
<script>

$(document).ready(function(){
    $('#contact_form').on('change', function(e){
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
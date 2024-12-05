<!doctype html>
<html class="no-js" lang="fr en" dir="ltr" style="overflow-x: hidden;">

<head>
     <title>Nexus Legacy: Digitaliser votre entreprise</title>

     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/">
     <link rel="icon" type="image/png" sizes="32x32" href="images/favicon//favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="images/favicon//favicon-16x16.png">
     <link rel="manifest" href="images/favicon//site.webmanifest">

     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/flaticon.css">
     <link rel="shortcut icon" href="images/favicon.ico">
     <link rel="stylesheet" href="css/plugins.css">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="css/bulma.css">
     <link rel="stylesheet" href="style2.css">

     <script src="js/vendor/modernizr-2.8.3.min.js"></script>
     <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

     <style>
          .info_parag {
               font-size: 1.2em;
          }
     </style>

     <script>
          $(document).ready(function() {
               var header = $('#Wlan');

               var backgrounds = new Array(
                    'url(images/bg/ban_1.jpg)',
                    'url(images/bg/ban_3.jpg)',
                    'url(images/bg/ban_1b.jpg)',
                    'url(images/bg/BG.jpg)'
               );

               var current = 0;

               function nextBackground() {
                    current++;
                    current = current % backgrounds.length;
                    header.css('background-image', backgrounds[current]);
               }
               setInterval(nextBackground, 10000);

               header.css('background-image', backgrounds[0]);
          });
     </script>
</head>

<body data-spy="scroll" data-target=".navigation_area">
     <!--[if lt IE 8]> <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
     <div id="preloader">
          <div class="loader_line"></div>
     </div>
     <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Site Header ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
     <header id="header" class="site_header">
          <div class="site_navigation">
               <div class="container-fluid">
                    <div class="row">
                         <div class="col-12">
                              <nav class="navbar navbar-expand-lg navigation_area"> <a class="navbar-brand site_logo" href="index.php"> <img src="images/Logo.png" style="height:90px; width:90px;"> </a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span> </button>
                                   <div class="collapse navbar-collapse mainmenu_area" id="navbarNav">
                                        <ul class="navbar-nav mainmenu">
                                             <li class="nav-item"> <a class="nav-link smoot_scroll dots_effect active" href="#home" data-scroll-nav="0">Accueil <span class="dot_effect dot_hover"></span></a> </li>

                                             <li class="nav-item"> <a class="nav-link smoot_scroll dots_effect" href="#contact" data-scroll-nav="6">Contact <span class="dot_effect dot_hover"></span></a> </li>
                                        </ul>
                                   </div>
                              </nav>
                         </div>
                    </div>
               </div>
          </div>
     </header>
     <div id="sticky_header"></div>
     <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Site Wrapper ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
     <div class="site_wrapper bg_white">
          <section id="home" class="section_scroll welcome_area" data-scroll-index="0">
               <div class="bg_overlay bg_image page_cover" id="Wlan"></div>
               <div id="particles-js"></div>
               <div class="home_wrapper_info">
                    <div class="container">
                         <div class="row justify-content-center">
                              <div class="col-lg-12">
                                   <div class="home_text_block text-center">
                                        <h3><span>Bienvenue</span></h3>
                                        <h1 class="cd-headline clip"> <span>Nous sommes</span><br /> <span class="cd-words-wrapper">
                                                  <b class="is-visible">Nexus Legacy</b> <b>une agence digitale</b>
                                             </span> </h1>
                                        <ul class="expart_list">
                                             <li>Développement web</li>
                                             <li>Graphisme</li>
                                             <li>marketing Digital</li>
                                        </ul>
                                        <ul class="header_social_share">
                                             <li><a href="https://www.facebook.com/nexuslegacyoff/?mibextid=ZbWKwL/"><i class="fa fa-facebook"></i></a></li>
                                             <li><a href="https://wa.me/message/2NY6V4V7CTL4O1"><i class="fa fa-whatsapp"></i></a></li>
                                             <li><a href="https://www.instagram.com/nexuslegacyofficiel?igshid=YmMyMTA2M2Y/"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="scroll_indicator_wrapper"> <a href="#about" class="scroll_indicator scroll_down" data-scroll-goto="1"></a> </div>
          </section>

          <section id="services" class="services_area section_scroll ptb-110" data-scroll-index="2">
               <div class="container">

                    <div class="row">
                         <div class="col-12">
                              <div class="section_title text-center">
                                   <h3><span>Actualités</span></h3>
                                   <h2 class="title"><span>Les camions électroniques de Tesla</span></h2>
                              </div>
                         </div>
                    </div>

                    <div class="row justify-content-center">

                         <div class="col-lg-4">
                              <img src="img2/camion.jpg">
                         </div>

                         <p class="info_parag col-lg-8"> Devant être livré en 2019, c'est avec 03 ans de retard que sont livrer les Tesla Semi, des camion électronique
                              commandé par l'entreprise "Pepsi ". Elon Musk affirme « si vous êtes un chauffeur routier et que vous voulez
                              le camion le plus dur à cuire sur la route, c'est celui-là ».En livrant jeudi son premier camion électrique,
                              baptisé Semi, Tesla veut bousculer le marché naissant des poids lourds sans émission en promettant de
                              rouler sur de longues distances sans avoir à s'arrêter à la borne de recharge.</p>

                    </div>

                    <p class="info_parag"> <br> <br> Le groupe d'Elon Musk doit donner jeudi les clés du véhicule au groupe alimentaire PepsiCo à l'usine de
                         Sparks, dans le Nevada. Le camion, doté d'une cabine aux lignes arrondies, avait été présenté en 2017. Mais
                         le lancement de sa production à grande échelle, initialement prévu en 2019, a pris du retard. D'autres
                         constructeurs ont déjà investi le créneau, qu'il s'agisse des traditionnels fabricants de poids lourds
                         comme Daimler, Volvo, Traton (filiale de Volkswagen) et le chinois BYD, ou des start-up comme l'américaine
                         Nikola. Les livraisons débutent tout juste, mais de nombreuses commandes ont été passées.</p>


               </div>
          </section>

          <section id="blog" class="section_scroll blog_area ptb-110" data-scroll-index="5">
               <div class="container">
                    <div class="row">
                         <div class="col-lg-12">
                              <div class="section_title text-center">
                                   <h3><span>Blog</span></h3>
                                   <h2 class="title">Dernières <span>Nouvelles.</span></h2>
                              </div>
                         </div>
                    </div>
                    <div class="row justify-content-center">

                         <div class="col-lg-4 col-md-6">
                              <article class="entry_post text-center" style="height: 300px;">
                                   <h2 class="entry_title"> <a href="info3.php">Le casque de réalité virtuel de iphone</a> </h2>
                                   <div class="entry_content">
                                        <p>Selon les sources le casque de réalité virtuelle de Iphone aura son propre système d’exploitation qui sera
                                             baptisé xrOS.</p>
                                   </div>

                              </article>
                         </div>

                         <div class="col-lg-4 col-md-6">
                              <article class="entry_post text-center" style="height: 300px;">
                                   <h2 class="entry_title"> <a href="info1.php">Sony débarque dans le métaver</a> </h2>
                                   <div class="entry_content">
                                        <p>Un nouveau système de suivi de mouvements nommé mocopi qui est un dispositif minimaliste,
                                             composé de petits capteurs à placer sur la tête pour contrôler librement et en temps réel son
                                             avatar dans l'univers virtuel de Meta.</p>
                                   </div>

                              </article>
                         </div>


                    </div>
               </div>
          </section>

          <section class="contact_area section_scroll bg_gray ptb-110" data-scroll-index="6">
               <div class="container">
                    <div class="row">
                         <div class="col-lg-12">
                              <div class="section_title text-center">
                                   <h3><span>contact</span></h3>
                                   <h2 class="title">Entrer <span>en contact avec nous.</span></h2>
                              </div>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-6">
                              <div class="single_contact_info"> <span class="fa fa-phone"></span>
                                   <div class="info">
                                        <h4>Phone : </h4>
                                        <p>+229 69345509 / +33 6 60378466</p>
                                   </div>
                              </div>
                              <div class="single_contact_info"> <span class="fa fa-map-marker"></span>
                                   <div class="info">
                                        <h4>Localisation: </h4>
                                        <p>Bénin : Cotonou ; France : Paris</p>
                                   </div>
                              </div>
                              <div class="single_contact_info"> <span class="fa fa-envelope"></span>
                                   <div class="info">
                                        <h4>Email : </h4>
                                        <p>leganexus1@gmail.com</p>
                                   </div>
                              </div>
                         </div>
                         <div class="col-lg-6">
                              <form method="post" class="form" id="contact_form">
                                   <div class="row">
                                        <div class="col-md-6 pt_right">
                                             <div class="form-group"> <input class="form-controller" id="form_name" name="name" placeholder="Nom" type="text" required="true"> </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="form-group"> <input class="form-controller" id="form_email" name="email" placeholder="Email" type="email" required="true"> </div>
                                        </div>
                                        <div class="col-md-12">
                                             <div class="form-group"> <input class="form-controller" id="form_subject" name="subject" placeholder="sujet" type="text" required="true"> </div>
                                        </div>
                                        <div class="col-md-12">
                                             <div class="form-group"> <textarea class="form-controller" id="form_message" name="message" placeholder="Message" required="true"></textarea> </div>
                                        </div>
                                        <div class="my-3">
                                             <div class="loading">Loading</div>
                                             <div class="error-message" id="js_alert_danger">Echec. Une erreur est survenue.</div>
                                             <div class="sent-message" id="js_alert_success">Votre message a bien été envoyé. Merci!</div>
                                        </div>
                                        <div class="col-md-12 text-center"> <button type="submit" id="send_email" class="btn btn-default btn-sumbit"><span>Envoyez</span></button> </div>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </section>
     </div>
     <div id="section_scroller_button"> <span class="fa fa-angle-down"></span> </div>
     <!-- <a href="#"><div id="section_scroller_button" style="position: fixed; margin:15px; top: auto; right: auto;">
      <span class="fa fa-angle-up"></span> </div></a> -->
     <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Site Footer ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
     <footer id="footer" class="footer section_scroll">
          <div class="footer-widgets-area ptb-80">
               <div class="container">
                    <div class="row justify-content-center">
                         <div class="col-lg-7">
                              <div class="footer_description text-center"> <a class="footer_logo site_logo" href="index.php"><span>N</span>exus Legacy</a>
                                   <p>Nous écrirons un futur digital pour vos projets</p>
                                   <ul class="footer_social_share">

                                        <li><a href="https://www.facebook.com/nexuslegacyoff/?mibextid=ZbWKwL/"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://wa.me/message/2NY6V4V7CTL4O1"><i class="fa fa-whatsapp"></i></a></li>
                                        <li><a href="https://www.instagram.com/nexuslegacyofficiel?igshid=YmMyMTA2M2Y/"><i class="fa fa-instagram"></i></a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="footer-bottom-area text-center">
               <div class="container">
                    <div class="row">
                         <div class="col-md-12">
                              <div class="copyright">
                                   <p>&copy; 2022 Copyright<a href="#"> Nexus Legacy</a> Tout Droits reservés.</p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </footer>
     <script src="js/vendor/jquery-v3.2.1.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/plugins.js"></script>
     <script src="js/jquery.appear.js"></script>
     <script src="js/main.js"></script>
     <!-- Mail -->
     <script src="js/vendor/mailstuff.js"></script>
     <script type="text/javascript">
          particlesJS('particles-js', {
               "particles": {
                    "number": {
                         "value": 50,
                         "density": {
                              "enable": true,
                              "value_area": 800
                         }
                    },
                    "color": {
                         "value": "#888"
                    },
                    "shape": {
                         "type": "circle",
                         "stroke": {
                              "width": 0,
                              "color": "#888"
                         },
                         "polygon": {
                              "nb_sides": 5
                         },
                         "image": {
                              "src": "img/github.svg",
                              "width": 100,
                              "height": 100
                         }
                    },
                    "opacity": {
                         "value": 0.5,
                         "random": false,
                         "anim": {
                              "enable": false,
                              "speed": 3,
                              "opacity_min": 0.1,
                              "sync": false
                         }
                    },
                    "size": {
                         "value": 5,
                         "random": true,
                         "anim": {
                              "enable": false,
                              "speed": 40,
                              "size_min": 0.1,
                              "sync": false
                         }
                    },
                    "line_linked": {
                         "enable": true,
                         "distance": 150,
                         "color": "#888",
                         "opacity": 0.4,
                         "width": 1
                    },
                    "move": {
                         "enable": true,
                         "speed": 6,
                         "direction": "none",
                         "random": false,
                         "straight": false,
                         "out_mode": "out",
                         "attract": {
                              "enable": false,
                              "rotateX": 600,
                              "rotateY": 1200
                         }
                    }
               },
               "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                         "onhover": {
                              "enable": true,
                              "mode": "repulse"
                         },
                         "onclick": {
                              "enable": true,
                              "mode": "push"
                         },
                         "resize": true
                    },
                    "modes": {
                         "grab": {
                              "distance": 400,
                              "line_linked": {
                                   "opacity": 1
                              }
                         },
                         "bubble": {
                              "distance": 400,
                              "size": 40,
                              "duration": 2,
                              "opacity": 8,
                              "speed": 3
                         },
                         "repulse": {
                              "distance": 200
                         },
                         "push": {
                              "particles_nb": 4
                         },
                         "remove": {
                              "particles_nb": 2
                         }
                    }
               },
               "retina_detect": true,
               "config_demo": {
                    "hide_card": false,
                    "background_color": "#b61924",
                    "background_image": "",
                    "background_position": "50% 50%",
                    "background_repeat": "no-repeat",
                    "background_size": "cover"
               }
          });
     </script>
</body>

</html>
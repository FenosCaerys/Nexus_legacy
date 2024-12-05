<!doctype html>
<html class="no-js" lang="fr en" dir="ltr" style="overflow-x: hidden;">

<head>

     <title>Agence digitale web / marketing / graphisme - Nexus Legacy</title>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="Agence digitale spécialisée dans les domaines du Graphisme, du développement web, de la communication
                         et du marketing digital, Nexus Legacy offre des services impécables à sa clientèle 
                         en valorisant au maximum leurs produits">

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
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <link rel="stylesheet" href="style2.css">

     <script src="js/vendor/modernizr-2.8.3.min.js"></script>
     <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

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

     <style>
          .parag_services,
          .parag_services2 {
               font-size: 17px;
          }

          @media only screen and (max-width: 1199px) {
               .parag_services {
                    font-size: 16px;
               }
          }

          @media only screen and (max-width: 992px) {
               .parag_services2 {
                    display: none;
               }
          }
     </style>

</head>

<body data-spy="scroll" data-target=".navigation_area" style="overflow-x: hidden;">
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
                              <nav class="navbar navbar-expand-lg navigation_area"> <a class="navbar-brand site_logo" href="index.php"><img alt="logo agence digitale" src="images/Logo.png" style="height:90px; width:90px;"> </a>

                                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span> </button>

                                   <div class="collapse navbar-collapse mainmenu_area" id="navbarNav">
                                        <ul class="navbar-nav mainmenu">
                                             <li class="nav-item"> <a class="nav-link smoot_scroll dots_effect active" href="#home" data-scroll-nav="0">Accueil <span class="dot_effect dot_hover"></span></a> </li>
                                             <li class="nav-item"> <a class="nav-link smoot_scroll dots_effect" href="#about" data-scroll-nav="1">A propos <span class="dot_effect dot_hover"></span></a> </li>
                                             <li class="nav-item"> <a class="nav-link smoot_scroll dots_effect" href="#services" data-scroll-nav="2">Services <span class="dot_effect dot_hover"></span></a> </li>
                                             <li class="nav-item"> <a class="nav-link smoot_scroll dots_effect" href="#work" data-scroll-nav="3">Portfolio <span class="dot_effect dot_hover"></span></a> </li>
                                             <li class="nav-item"> <a class="nav-link smoot_scroll dots_effect" href="#blog" data-scroll-nav="5">Blog <span class="dot_effect dot_hover"></span></a> </li>
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
                                        <span style=" color: #00addc; display: inline-block; font-size: 20px; 
                                        font-weight: 600; margin-bottom: 25px; text-transform: capitalize;">
                                             Nous sommes</span>
                                        <h1 class="cd-headline clip"> <span>Nexus Legacy</span><br /> <span class="cd-words-wrapper">
                                                  <b class="is-visible">une agence digitale</b> <b>Bâtissons votre futur digital</b>
                                             </span> </h1>
                                        <ul class="expart_list">
                                             <li> <a href="#dev_web" style="color: #00addc; font-size: 1.2em;"> <strong style="font-weight: 500; "> Développement web </strong></a> </li>
                                             <li> <a href="#graph" style="color: #00addc; font-size: 1.2em;"> <strong style="font-weight: 500; "> Graphisme </strong></a> </li>
                                             <li> <a href="#mark_dig" style="color: #00addc; font-size: 1.2em;"> <strong style="font-weight: 500; "> marketing Digital </strong></a> </li>
                                        </ul>
                                        <ul class="header_social_share">
                                             <li><a href="https://www.facebook.com/nexuslegacyoff/?mibextid=ZbWKwL/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                             <li><a href="https://wa.me/message/2NY6V4V7CTL4O1" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                             <li><a href="https://www.instagram.com/nexuslegacyofficiel?igshid=YmMyMTA2M2Y/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="scroll_indicator_wrapper"> <a href="#about" class="scroll_indicator scroll_down" data-scroll-goto="1"></a> </div>
          </section>
          <section id="about" class="section_scroll" data-scroll-index="1">
               <div class="about_area pb-110">
                    <div class="container-fluide">
                         <div class="row justify-content-center">

                              <div class="col-lg-12">
                                   <div class="about_content text-center">
                                        
                                        <div style="z-index: 50; position:relative;" class="info">
                                             <img src="images/Logo simple.jpeg" style="height: 150px; width: 150px;" alt="about">
                                             <h3>NEXUS LEGACY</h3>
                                             <h5>Agence de communication digitale</h5>
                                        </div>

                                        <div id="together" style=" width: 230px; height: 60px; border-radius: 100px;
                                                                 margin: 0 auto; margin-bottom: 30px;">
                                             <a href="Lien.php" style="text-decoration:none; position:relative; top:20px;
                                                                       font-size : 1.1em; font-weight:bold; font-family:'Poppins';">
                                                  Travaillons Ensemble</a>
                                        </div>

                                        <ul class="tag_list">
                                             <li> <strong style="font-weight: 500;"> bootstrap </strong> </li>
                                             <li> <strong style="font-weight: 500;"> html5 </strong> </li>
                                             <li> <strong style="font-weight: 500;"> css3 </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Php </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Wordpress </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Java Script </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Photoshop </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Adobe illustrator </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Référencement </strong> </li>
                                             <li> <strong style="font-weight: 500;"> E-Commerce </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Agence Web </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Refonte </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Sites Internet </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Création de sites </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Chef de projet </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Expérience utilisateur </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Digitales </strong> </li>
                                             <li> <strong style="font-weight: 500;"> CMS </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Stratégie digitale </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Web marketing </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Web Design </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Site Vitrine </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Ergonomie </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Média </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Appli mobile </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Créative </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Drupal </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Moteur de recherche </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Notoriété </strong> </li>
                                             <li> <strong style="font-weight: 500;"> Adwords </strong> </li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="skill_area ptb-110 bg_gray">
                    <div class="container">
                         <div class="row">
                              <div class="col-lg-12">
                                   <div class="skill_list">
                                        <div class="single_skill">
                                             <h3>Design graphique</h3>
                                             <div class="progress_bar"> <span data-percent="88"><strong>88%</strong></span> </div>
                                        </div>
                                        <div class="single_skill">
                                             <h3>Reférencement</h3>
                                             <div class="progress_bar"> <span data-percent="60"><strong>60%</strong></span> </div>
                                        </div>
                                        <div class="single_skill">
                                             <h3>Responsive web design</h3>
                                             <div class="progress_bar"> <span data-percent="60"><strong>60%</strong></span> </div>
                                        </div>
                                        <div class="single_skill">
                                             <h3>Developpement Web</h3>
                                             <div class="progress_bar"> <span data-percent="95"><strong>95%</strong></span> </div>
                                        </div>
                                        <div class="single_skill">
                                             <h3>Internet marketing</h3>
                                             <div class="progress_bar"> <span data-percent="75"><strong>75%</strong></span> </div>
                                        </div>
                                        <div class="single_skill">
                                             <h3>Gestion de données</h3>
                                             <div class="progress_bar"> <span data-percent="85"><strong>85%</strong></span> </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <section id="services" class="services_area section_scroll ptb-110" data-scroll-index="2">

               <div class="row container" style="margin: 0 auto;">
                    <div class="col-12">
                         <div class="section_title text-center">
                              <h3><span>services</span></h3>
                              <h2 class="title">Nos <span>Services.</span></h2>
                         </div>
                    </div>
               </div>

               <div class="container">

                    <div class="row justify-content-center" id="SERVICES">


                         <div class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
                              <div class="single_service" style="height: 700px; 
                                   color:black; ">
                                   <div class="icon"> <i class="flaticon-settings"></i> </div>
                                   <div class="info">
                                        <h2>Branding &amp; Création d'identité</h2> <br>
                                        <p class="parag_services">Nous travaillons sur la création et la gestion de vos marques commerciales et
                                             professionnelles.
                                             La création d'une <strong style="font-weight: 500;">image digitale </strong>et présentielle optimisée dans vos secteurs
                                             d'activités est
                                             notre priorité. Nous étudirons aussi bien vos cible que vos concurrents afin que
                                             vous vous démarquiez. Stratégie éditoriale, déploiement multicanal, typographie,
                                             univers coloriel, nous nous occupons de tout. <br> <br>
                                        <p class="parag_services2"> Le branding représentant un élément essentiel pour votre entreprise
                                             sur le long terme, nous améliorerons votre design afin d'accoître la visibilité
                                             de votre marque. Nous vous offrirons un branding complet avec un déploiement 360°. </p>
                                        </p>
                                   </div>
                              </div>
                         </div>

                         <div id="graph" class="col-lg-6 col-md-6" data-aos="fade-left" data-aos-anchor-placement="top-center" data-aos-duration="500">
                              <div class="single_service" style="height: 700px;   color:black; ">
                                   <div class="icon"> <i class="flaticon-paper-plane"></i> </div>
                                   <div class="info">
                                        <h2 id="graph">Graphisme </h2> <br>
                                        <p class="parag_services">Partant de la création de votre logo et autre visuel graphique,
                                             notre agence met à votre disposition les outils et les résultats adéquats. Nous sommes
                                             également apte à élaborer des carte de visites et d'invitation, aussi bien pour les
                                             particuliers que pour les entreprises. Que ce soit affiches, brochures publicitaires, couvertures
                                             ou même emballages nos graphiste. <br> <br>
                                             Notre but est d'attirer l'oeil de vos "Consommateurs"
                                             qu'il s'agisse d'un prospectus ou d'un quelconque produit. </p>
                                   </div>
                              </div>
                         </div>

                         <div class="col-lg-4 col-md-6" style="display: flex; justify-content:space-between; 
                                    flex-direction: colum;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
                              <div class="single_service" style=" height: 700px;
                                   color:black;">
                                   <img src="img2/d.jpg">
                                   <img src="img2/b.jpg">
                              </div>
                         </div>

                         <div class="col-lg-4 col-md-6" data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
                              <div class="single_service" style="height: 700px; 
                                   color:black; ">
                                   <div class="icon"> <i class="flaticon-photo-camera"></i> </div>
                                   <div class="info">
                                        <h2>Traitement de visuel</h2> <br>
                                        <p class="parag_services">De la modification graphique de vos photos a la mise en place de l'album
                                             adéquat ou
                                             autre diffusion photographique pouvant vous aider dans vos activités, nos
                                             spécialistes
                                             vous offrent les meilleurs services disponibles sur le marché.</p>
                                   </div>
                              </div>
                         </div>

                         <div class="col-lg-4 col-md-6" style="display: flex; justify-content:space-between; 
                                    flex-direction: colum;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
                              <div class="single_service" style=" height: 700px;
                                   color:black;">
                                   <img src="img2/f.jpg">
                                   <img src="img2/i.jpg" style="margin-top: 100px;">
                              </div>
                         </div>

                         <div id="mark_dig" class="col-lg-6 col-md-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
                              <div class="single_service" style="height: 700px; 
                                   color:black; ">
                                   <div class="icon"> <i class="flaticon-idea"></i> </div>
                                   <div class="info">
                                        <h2 id="mark_dig">Marketing digital </h2> <br>
                                        <p class="parag_services">La mise en place de stratégies de placement et de positionnement de vos
                                             produits sur
                                             les marchés qui vous intéressent fait partie des prérogatives de l'agence.
                                             Nous mettons
                                             nos meilleurs cadres à disposition de vos services commerciaux pour
                                             optimiser vos
                                             actions marketing. <br> <br>
                                             Par le webmarketing nous pensons mettre votre entreprise en contact avec votre
                                             audience au bon endroit et au bon moment. Du site web à la publicité digitale, notre
                                             marketing digital couvre un large spectre de tactiques, contenus, et actions marketing
                                             variées.

                                        </p>
                                   </div>
                              </div>
                         </div>


                         <div id="dev_web" class="col-lg-6 col-md-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
                              <div class="single_service" style="height: 700px; 
                                   color:black; ">
                                   <div class="icon"> <i class="flaticon-responsive"></i> </div>
                                   <div class="info">
                                        <h2 id="dev_web">Développement Web</h2> <br>
                                        <p class="parag_services">Nous mettons à votre disposition des outils web très utiles partant les sites
                                             web responsifs au sites vitrines en passant par les sites de E-commerce et les applications web.
                                             La création d'une base de données ou d'un forum de
                                             discussion
                                             pour votre groupe est l'une des nombreuses tâches exécutables par Nexus Legacy.
                                             Dans la rubrique
                                             <a href="template.php" style="font-weight:bold;">template</a> de notre site nous proposons
                                             une variété d'offre. <br> <br>
                                             Nous nous chargeons de l'optimisation de votre référencement. La maitrise
                                             de CMS tel que <strong>Wordpress</strong> fait parti de nos compétences<br>
                                        <p class="parag_services2"> Sachant que l'élaboration d'un tel ouvrage est fastidieux, Notre équipe propose de s'en
                                             chargé pour vous. </p>
                                        </p>
                                   </div>
                              </div>
                         </div>


                         <div class="col-lg-4 col-md-6" style="display: flex; justify-content:space-between; 
                                   flex-direction: colum;" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
                              <div class="single_service" style=" height: 700px; 
                                   color:black;">
                                   <img src="img2/h.jpg">
                                   <img src="img2/k.jpg">
                              </div>
                         </div>

                         <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="500">
                              <div class="single_service" style="height: 700px; 
                                   color:black; ">
                                   <div class="icon"> <i class="flaticon-layers"></i> </div>
                                   <div class="info">
                                        <h2>Personnalisation </h2> <br>
                                        <p class="parag_services">Notre principale tâche est de faire de vous une grande marque. Nous ferons de
                                             vous une
                                             marque accrocheuse qui laisse une trace sur le marché où elle est positionnée.
                                        </p>
                                   </div>
                              </div>
                         </div>

                         <div class="col-lg-4 col-md-6" style="display: flex; justify-content:space-between; 
                                    flex-direction: colum;" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="500">
                              <div class="single_service" style=" height: 700px;
                                   color:black;">
                                   <img src="img2/m.jpg">
                                   <img src="img2/c.jpg">
                              </div>
                         </div>

                    </div>
               </div>

          </section>

          <div id="together" style=" width: 230px; height: 60px; border-radius: 100px;
                                                                 margin: 0 auto; margin-bottom: 30px;">
               <a href="Lien.php" style="text-decoration:none; position:relative; top:20px;
                                                                       font-size : 1.1em; font-weight:bold; font-family:'Poppins';">
                    Travaillons Ensemble</a>
          </div>

          <section style="margin-top: 50px;" class="fanfact_area ptb-100 funfact_bg bg_image bg_overlay" style="background-image:url('images/bg/1.jpg')">
               <div class="container">
                    <div class="row-6" style="margin: 0px;">
                         <div class="col-lg-4 col-md-6 col-sm-6">
                              <div class="single-fanfact"> <span class="flaticon-clock"></span>
                                   <h3 class="counter">310</h3>
                                   <p>Heures de travail</p>
                              </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                              <div class="single-fanfact"> <span class="flaticon-gift"></span>
                                   <h3 class="counter">30</h3>
                                   <p>Projets complets</p>
                              </div>
                         </div>
                         <div class="col-lg-4 col-md-6 col-sm-6">
                              <div class="single-fanfact"> <span class="flaticon-users"></span>
                                   <h3 class="counter">25</h3>
                                   <p>Clients satisfaits</p>
                              </div>
                         </div>

                    </div>
               </div>
          </section>

          <section id="work" class="work_area section_scroll ptb-110" data-scroll-index="3">
               <div class="container">
                    <div class="row">
                         <div class="col-12">
                              <div class="section_title text-center">
                                   <h3><span>portfolio</span></h3>
                                   <h2 class="title">Galerie <span>De l'Agence.</span></h2>
                              </div>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-12">
                              <ul class="recent_work_nav">
                                   <li> <a href="#" data-filter="*" class="dots_effect filter active"><strong style="font-weight: 500;">Tout</strong><span class="dot_effect dot_hover"></span> </a> </li>

                                   <li> <a href="#" data-filter=".graphic" class="dots_effect filter"><strong style="font-weight: 500;">Graphisme</strong><span class="dot_effect dot_hover"></span></a> </li>

                                   <li> <a href="#" data-filter=".brand" class="dots_effect filter"><strong style="font-weight: 500;">Logo</strong><span class="dot_effect dot_hover"></span></a> </li>

                                   <li> <a href="#" data-filter=".print" class="dots_effect filter"><strong style="font-weight: 500;">print</strong><span class="dot_effect dot_hover"></span></a> </li>

                                   <li> <a href="#" data-filter=".web" class="dots_effect filter"> <strong style="font-weight: 500;">web</strong><span class="dot_effect dot_hover"></span></a> </li>
                              </ul>
                         </div>
                    </div>

                    <div id="masonry" class="row justify-content-center portfolio_items_list">

                         <div class="col-lg-4 col-md-6 grid brand">
                              <a title="" href="img1/L.four.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/L.four.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>


                         <div class="col-lg-4 col-md-6 grid print">
                              <a href="img1/M.one.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/M.one.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>

                         <div class="col-lg-4 col-md-6 grid graphic">
                              <a href="img1/B.one.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/B.one.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>

                         <div class="col-lg-4 col-md-6 grid print">
                              <a href="img1/M.five.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/M.five.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>

                         <div class="col-lg-4 col-md-6 grid print">
                              <a href="img1/M.three.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/M.three.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>

                         <div class="col-lg-4 col-md-6 grid brand">
                              <a href="img1/L.one.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/L.one.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>

                         <div class="col-lg-4 col-md-6 grid print">
                              <a href="img1/M.two.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/M.two.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>

                         <div class="col-lg-4 col-md-6 grid print">
                              <a href="img1/M.four.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/M.four.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>


                         <div class="col-lg-4 col-md-6 grid web">
                              <a href="img1/W.one.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/W.one.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>

                         <div class="col-lg-4 col-md-6 grid brand">
                              <a href="img1/L.eight.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/L.eight.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>

                         <div class="col-lg-4 col-md-6 grid brand">
                              <a href="img1/L.nine.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/L.nine.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>

                         <div class="col-lg-4 col-md-6 grid brand">
                              <a href="img1/L.seven.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/L.seven.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>


                         <div class="col-lg-4 col-md-6 grid graphic">
                              <a href="img1/B.two.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/B.two.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>

                         <div class="col-lg-4 col-md-6 grid graphic">
                              <a href="img1/B.four.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/B.four.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>

                         <div class="col-lg-4 col-md-6 grid brand">
                              <a href="img1/L.six.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/L.six.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>

                         <div class="col-lg-4 col-md-6 grid graphic">
                              <a href="img1/B.three.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/B.three.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>


                         <div class="col-lg-4 col-md-6 grid web">
                              <a href="img1/W.two.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/W.two.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div>
                                        <span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>

                         <div class="col-lg-4 col-md-6 grid web">
                              <a href="img1/W.three.jpg" class="work_item">
                                   <div class="work_thumb"><img style="width: 370px; height: 370px;" src="img1/W.three.jpg" alt="project1" class="img-responsive"></div>
                                   <div class="work_hover_mask">
                                        <div class="mask_container text-center">

                                        </div><span class="fa fa-picture-o"></span>
                                   </div>
                              </a>
                         </div>

                    </div>
               </div>
          </section>

          <div id="together" style=" width: 230px; height: 60px; border-radius: 100px;
                                                                 margin: 0 auto; margin-bottom: 30px;">
               <a href="Lien.php" style="text-decoration:none; position:relative; top:20px;
                                                                       font-size : 1.1em; font-weight:bold; font-family:'Poppins';">
                    Travaillons Ensemble</a>
          </div>

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
                              <article class="entry_post text-center" style="height: 300px; background-color: rgba(150, 200, 100, 0); color: black;">

                                   <h2 class="entry_title"> <a href="info1.php" target="BLANK">Sony débarque dans le métaver</a> </h2>
                                   <div class="entry_content">
                                        <p>Un nouveau système de suivi de mouvements nommé mocopi qui est un dispositif minimaliste,
                                             composé de petits capteurs à placer sur la tête pour contrôler librement et en temps réel son
                                             avatar dans l'univers virtuel de Meta.</p>
                                   </div>

                              </article>
                         </div>

                         <div class="col-lg-4 col-md-6">
                              <article class="entry_post text-center" style="height: 300px; background-color: rgba(150, 200, 100, 0); color: black;">

                                   <h2 class="entry_title"> <a href="info3.php" target="BLANK">Le casque de réalité virtuel de iphone</a> </h2>
                                   <div class="entry_content">
                                        <p>Selon les sources le casque de réalité virtuelle de Iphone aura son propre système d’exploitation qui sera
                                             baptisé xrOS.</p>
                                   </div>

                              </article>
                         </div>

                         <div class="col-lg-4 col-md-6">
                              <article class="entry_post text-center" style="height: 300px; background-color: rgba(150, 200, 100, 0); color: black;">

                                   <h2 class="entry_title"> <a href="info2.php" target="BLANK">Les camions électroniques de Tesla</a> </h2>
                                   <div class="entry_content">
                                        <p>Devant être livré en 2019, c'est avec 03 ans de retard que sont livrer les Tesla Semi, des camion électronique
                                             commandé par l'entreprise "Pepsi ".</p>
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

     <!-- <div style="position: fixed; z-index: 1000;" id="section_scroller_button"> <span class="fa fa-angle-down"></span> </div> -->

     <!-- <a href="#">
          <div id="section_scroller_button" style="position: fixed; margin-left:15px; top: auto; right: auto;">
               <span class="fa fa-angle-up"></span> 
          </div>
     </a> -->

     <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Site Footer ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
     <footer id="footer" class="footer section_scroll">
          <div class="footer-widgets-area ptb-80">
               <div class="container">
                    <div class="row justify-content-center">
                         <div class="col-lg-7">
                              <div class="footer_description text-center"> <a class="footer_logo site_logo" href="index.php"><span>N</span>exus Legacy</a>
                                   <p>Nous écrirons un futur digital pour vos projets</p>
                                   <ul class="footer_social_share">

                                        <li><a href="https://www.facebook.com/nexuslegacyoff/?mibextid=ZbWKwL/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://wa.me/message/2NY6V4V7CTL4O1" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                        <li><a href="https://www.instagram.com/nexuslegacyofficiel?igshid=YmMyMTA2M2Y/" target="_blank"><i class="fa fa-instagram"></i></a></li>
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

     <script>
          var counter = 1;

          setInterval(
               function() {
                    document.getElementById('radio' + counter).checked = true;
                    counter++;
                    if (counter > 4) {
                         counter = 1;
                    }
               }, 6000
          );
     </script>

     <script>
          AOS.init();
     </script>
</body>

</html>
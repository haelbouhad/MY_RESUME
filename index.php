<!DOCTYPE html>
<html lang="en">

<head>
    <title>M. Hassan ELBOUHADI</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--CSS styles-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">  
    <link rel="stylesheet" href="css/perfect-scrollbar-0.4.5.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link id="theme-style" rel="stylesheet" href="css/default.css">
    <!--/CSS styles-->

    <!--Javascript files-->
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>

    <script type="text/javascript" src="js/modernizr.custom.63321.js"></script>
    <script type="text/javascript" src="js/jquery.dropdownit.js"></script>

    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    <script type="text/javascript" src="js/ScrollToPlugin.min.js"></script>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>

    <script type="text/javascript" src="js/masonry.min.js"></script>

    <script type="text/javascript" src="js/perfect-scrollbar-0.4.5.with-mousewheel.min.js"></script>

    <script type="text/javascript" src="js/magnific-popup.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript" src="js/subMenu.js"></script>
    <!--/Javascript files-->

</head>

<body>
    <div id="wrapper">
        <a href="#sidebar" class="mobilemenu"><i class="icon-reorder"></i></a>

        <div id="sidebar">
            <div id="main-nav">
                <div id="nav-container">
                    <div id="profile" class="clearfix">
                        <div class="portrate hidden-xs"></div>
                        <div class="title">
                            <h2>Hassan ELBOUHADI</h2>
                            <h3>Elève ingénieur en 3ème année de l'ISIMA</h3>
                        </div>

                    </div>
                    <ul id="navigation" class="context-menu-one box menu-1 menu">
                        <li>
                            <a href="#aproposdemoi">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <div class="text">A propos de moi</div>
                            </a>
                        </li>  

                        <li>
                            <a href="#formations">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <div class="text">Formations</div>
                            </a>
                        </li>

				   <li>
                      <a href="#">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        <div class="text">Compétences</div>
					   </a>
								<div class="subMenu">
										<ul>
											<li class="text">
												<a href="#langages">
												<i class="fa fa-chevron-right" aria-hidden="true"></i>
												<div class="text">Langages</div>
												</a>
											</li>
											
											<li class="text"> 
												<a href="#web">
												<i class="fa fa-chevron-right" aria-hidden="true"></i>
												<div class="text">Web</div>
												</a>
											</li>
											
											<li class="text">
												<a href="#java">
												<i class="fa fa-chevron-right" aria-hidden="true"></i>
												<div class="text">Java & JEE</div>
												</a>
											</li>

                                            <li class="text">
												<a href="#dotnet">
												<i class="fa fa-chevron-right" aria-hidden="true"></i>
												<div class="text">.NET</div>
												</a>
											</li>

                                            <li class="text">
												<a href="#middleware">
												<i class="fa fa-chevron-right" aria-hidden="true"></i>
												<div class="text">Middleware</div>
												</a>
											</li>

                                            <li class="text">
												<a href="#analyse">
												<i class="fa fa-chevron-right" aria-hidden="true"></i>
												<div class="text">Analyse</div>
												</a>
											</li>

                                            <li class="text">
												<a href="#logiciels">
												<i class="fa fa-chevron-right" aria-hidden="true"></i>
												<div class="text">Logiciels</div>
												</a>
											</li>
											
										</ul>
								</div>
                  
                </li>

                <li>
                  <a  href="#stages">
                    <i class="fa fa-black-tie" aria-hidden="true"></i>
                    <div class="text">Stages</div>
                </a>

                <li>
                  <a href="#projets">
                    <i class="fa fa-tasks" aria-hidden="true"></i>
                    <div class="text">Projets</div>
                </a>
            </li> 

        </li> 

        <li>
              <a href="#centresInterets">
                <i class="fa fa-paint-brush" aria-hidden="true"></i>
                <div class="text">Centres d'interêt</div>
            </a>
        </li> 

  
<!-- icon-globe -->
	  
	    <li>
          <a href="#contact">
              <i class="fa fa-address-book" aria-hidden="true"></i>
              <div class="text">Contact</div>
          </a>
        </li>

  </ul>
</div>        
</div>

<div class="social-icons">
    <ul>
        <li>
            <a href="#" >
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="https://github.com/haelbouhad" target="_blank">
                <i class="fa fa-github" aria-hidden="true"></i>
            </a>
        </li>
        <li>
            <a href="https://www.linkedin.com/in/elbouhadi-hassan" target="_blank">
                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
</div>    
</div>

<div id="main">

    <?php
    include("pages/biography.php") ;
    include("pages/teaching.php") ;
	include("pages/langages.php") ;
	include("pages/web.php") ;
	include("pages/java.php") ;
    include("pages/dotnet.php") ;
    include("pages/middleware.php") ;
	include("pages/analyse.php") ;
    include("pages/logiciels.php") ;
    include("pages/stages.php") ;
    include("pages/projets.php") ;
    include("pages/centresInterets.php") ;
    include("pages/contact.php") ;


    ?>

    <div id="overlay"></div>

</div>
</div>

</body>
</html>
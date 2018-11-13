
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Coda League</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" media="screen" href="Ressources/css/style.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="Ressources/css/styleAdmin.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="Ressources/css/styleHome.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="Ressources/css/styleProfil.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="Ressources/css/styleHeader.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="Ressources/css/styleFooter.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="Ressources/css/styleProfilUser.css"/>
  <link rel="stylesheet" type="text/css" media="screen" href="Ressources/css/stylePortfolio.css"/>

  <link rel="stylesheet" href="https://use.typekit.net/yjb7fwc.css"><!-- font-family:"badaboom-pro" -->

  <script src="Ressources/js/postit.js"></script>
  <script src="Ressources/js/menumobile.js" ></script>
  <script src="Ressources/js/selectarticle.js" ></script>
  <script src="Ressources/js/form.js" ></script>
  <script src="Ressources/js/loader.js"></script>
  <script src="Ressources/js/superAdminAjax.js"></script>


</head>

<body>
<div class="site-container">



<!--#### DÉBUT HEADER ####-->
<header class="header-container">

    <!--#### ADMIN ####-->
    <?php
      if(isset($_SESSION['grade'])){?>
        <div id="prelog"></div>
        <div id="log">
              <form id="logout" action="" method="post">
                <span>Bienvenue <a href="http://localhost/sitecodaleague/index.php?action=login" ><b><?=$_SESSION['grade']?></b></a></span>
                  <button type="submit" name ="deco" value = "deco" >déconnexion</button>
              </form>
        </div>


      <?php } ?>

    <!--#### END ADMIN ####-->

<img class="logo" src="Ressources/img/logo_CodaLeagueM.svg">

  <nav>

    <a href="index.php?action=home" id="btnAccueil">

      <span id="btnAccueilC">

        <em class="lettre">A</em>
        <em class="lettre">c</em>
        <em class="lettre">c</em>
        <em class="lettre">u</em>
        <em class="lettre">e</em>
        <em class="lettre">i</em>
        <em class="lettre">l</em>
        <em class="lettre">!</em>

      </span></a>

    <a href="index.php?action=profils" id="btnProfil">

      <span id="btnProfilC">

        <em class="lettre">P</em>
        <em class="lettre">r</em>
        <em class="lettre">o</em>
        <em class="lettre h1">o</em>
        <em class="lettre h2">O</em>
        <em class="lettre">f</em>
        <em class="lettre">i</em>
        <em class="lettre">l</em>
        <em class="lettre">s</em>
        <em class="lettre">!</em>

      </span></a>

    <a href="index.php?action=portfolio" id="btnPortfolio">
      <span id="btnPortfolioC">

      <em class="lettre">P</em>
      <em class="lettre">o</em>
      <em class="lettre">r</em>
      <em class="lettre">t</em>
      <em class="lettre">f</em>
      <em class="lettre">o</em>
      <em class="lettre">l</em>
      <em class="lettre">i</em>
      <em class="lettre">o</em>
      <em class="lettre">!</em>

      </span></a>

    <a href="index.php?action=contact" id="btnContact">

      <span id="btnContactC">

        <em class="lettre">C</em>
        <em class="lettre">o</em>
        <em class="lettre">n</em>
        <em class="lettre">t</em>
        <em class="lettre">a</em>
        <em class="lettre h1">a</em>
        <em class="lettre h2">A</em>
        <em class="lettre">c</em>
        <em class="lettre">t</em>
        <em class="lettre">!</em>

      </span>
    </a>
  </nav>

    <!--#### MOBILE ONLY ####-->
      <!--Logo Mobile-->
      <img class="logo-mobile" src="Ressources/img/logoMobile_CodaLeague0.svg">
      <!--Fin Logo Mobile-->

      <!--Boutton Hamburger Mobile-->
      <div class="btn-menu-mobile" id="burger">
        <div class="menu-ham">
          <span class="line line1"></span>
          <span class="line line2"></span>
          <span class="line line3"></span>
        </div>
      </div>
      <!--Fin Boutton Hamburger Mobile-->

      <!--Menu Mobile-->
      <div class="menu-mobile">
        <img class="logo-menu-mobile" src="Ressources/img/logoMobile_CodaLeague1.svg">
        <ul>
          <li id="btnAccueil-mobile"><a href="index.php?action=home">Accueil</a></li>
          <li id="btnProfil-mobile"><a href="index.php?action=profils">Profils</a></li>
          <li id="btnPortfolio-mobile"><a href="index.php?action=portfolio">Portfolio</a></li>
          <li id="btnContact-mobile"><a href="index.php?action=contact">Contact</a></li>
        </ul>
      </div>
      <!--Fin Menu Mobile-->
    <!--#### END MOBILE ONLY ####-->

 


  </header>
<!--#### FIN HEADER ####-->

<!--#### DÉBUT CONTENU ####-->
<div class="content-container">

      <?php echo $contenu; ?>


    <!--#### DÉBUT FOOTER ####-->
    <footer class="footer-container">
      <div id="footerC">
        <a href="https://www.facebook.com/Simplon.co/" class="bulle1-footer" id="facebook" target="blank"></a>
        <a href="https://gitlab.com/codales2018/sitecodaleague" class="bulle2-footer" id="git" target="blank"></a>
        <a href="http://www.simplon.co/" class="bulle1-footer" id="coda" target="blank"></a>

        <a href="index.php?action=login" class="bulle2-footer" id="connexion"></a>



</div>
    </footer>
    <!--#### FIN FOOTER ####-->

  </div>
<!--#### FIN CONTENU ####-->

</body>

</html>

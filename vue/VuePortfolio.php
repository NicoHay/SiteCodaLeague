<!-- code html  -->

<div id="containerPortfolio">



    <?php
    foreach ($retour as $elements => $value) {
    ?>

  <div id="projet">
    <div id="photoProjet"><a href="#"> <img src="Ressources/img/imgProjet/<?=($retour[$elements]->img)?>" height="100px" width="100px" alt=""></a></div>

    <div id="titreProjet"><?=($retour[$elements]->title)?></div>
    <div id="txtProjet"><?=($retour[$elements]->content)?></div>
  <div id="langages"><?=($retour[$elements]->technologie)?></div>
  <div id="team"> <?=($retour[$elements]->participant)?></div>
  <div id="lienProjet"><a href="<?=($retour[$elements]->lien)?>"><?=($retour[$elements]->lien)?> </a> </div>
  </div>


   <?php
   }
   ?>




</div>

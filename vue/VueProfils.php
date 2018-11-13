<!-- code html  -->
<div id="container_Profils">

<?php
foreach ($profilUser as $key => $value) {
  ?>

  <a class="profil" href="index.php?action=profiluser&id=<?=($profilUser[$key]->id_user)?>">
    <div class="normal" style="background-image: url(Ressources/img/imgProfil/<?=($profilUser[$key]->image)?>)">
    </div>

    <div class="hoverProfil">
      <div class="nameProfil">
        <h1><?=($profilUser[$key]->first_name)." ".($profilUser[$key]->last_name) ?></h1>
        <h2><?=($profilUser[$key]->pseudo_sh)?></h2>
      </div>
    </div>

  </a>



<?php } ?>




</div>

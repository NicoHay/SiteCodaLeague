<!-- code html  -->

<div id="containerProfilUser">
  <div id="photoProfil" style ="background-image: url(Ressources/img/imgProfil/<?=($profildetaille[0]->image)?>);">
  </div>
  <div id="infoUser">
  <div id="nomProfil"><?=($profildetaille[0]->first_name)." ".($profildetaille[0]->last_name)?></div>
  <div id="pseudoProfil"><?=($profildetaille[0]->pseudo_sh)?></div>
  <div id="txtProfil"><?=($profildetaille[0]->description)?></div>
  <div id="emailProfil"><a href="mailto:<?=($profildetaille[0]->email)?>"> Contactez-moi</a></div>
  </div>
  <!-- <div id="pictoProfil"> Picto</div> -->

  <div id="containerCompetences">
    <h1 class="title">Compétences</h1>

    <?php foreach ($profildetaille as $key => $value) { ?>
      <div class="comp-line">
        <div id="pictoLangage" style ="background-image:  url(Ressources/img/imgSkills/<?=($profildetaille[$key]->icon)?>);"></div>
        <div id="skillsName"><?=($profildetaille[$key]->skill_name)?></div>
        <div id="valeurSkills"><?=($profildetaille[$key]->skill_value)?></div>
      </div>

    <?php } ?>
  </div>
</div>

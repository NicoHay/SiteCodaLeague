<div class="super- admin-container">

    <div class="box" id="admin-article"> <!-- ARTICLES SUPERADMIN -->
        <h1 class="title">Articles en attente :</h1>
        <div class="art-display"><!-- encadrement contenant les articles-->




            <?php
            if ($listeNews){
            foreach ($listeNews as $elements => $value) {
            ?>

                <div class="article-line"><!--Bloc contenant un article -->
                    <div class="art-img" name="img-art"
                    style ="background-image: url(Ressources/img/imgNews/<?=($listeNews[$elements]->img)?>);"><!-- image de l'article-->
                    </div>
                    <div class="art-title">
                        <h2><?=($listeNews[$elements]->title)?></h2><!-- titre de l'article -->

                    <form class="buttons" method="post">
                        <!--<div class="edit-but"></div>-->
                        <div class="del-but" title="supprimer l'article"></div>
                        <div class="ok-but" title="Publier l'article"></div>
                    </form>
                    </div>

                    <div class="art-content" data-idArticle="<?=($listeNews[$elements]->id_news)?>"><!-- contenu de l'article -->
                    <?=($listeNews[$elements]->content)?>
                        <div class="details">
                            <span><h1>créé par : <?=($listeNews[$elements]->pseudo_sh)?> </h1><h1> publié le : <?=($listeNews[$elements]->published_at)?></h1></span>
                        </div>
                    </div>
                </div>

            <?php }}else{?>
            <p>Aucun article en attente.</p>
            <?php } ?>
        </div>

    </div>

    <div class="box" id="TDL"><!-- ToDoList -->

        <h2 class="title">To Do List !</h2>

        <button id="but">+</button>

        <div class="postit">
            <div class="btn-close">X</div>
            <input type="text" name="post-title" placeholder="Post-Title">
            <textarea name="postit" id="PostIt" placeholder="Post-Here"></textarea>
        </div>

    </div>

    <div class="box" id="user-profil"> <!-- Profil -->
        <h1 class="title">Modifier son profil :</h1>
        <div class="image-profil" style ="background-image: url(Ressources/img/imgProfil/<?=($profil[0]->image)?>);">

            <div id="pseudo">
                <svg viewBox="0 0 500 500">
                    <path id="curve" d="M73.2,148.6c4-6.1,65.5-96.8,178.6-95.6c111.3,1.2,170.8,90.3,175.1,97" />
                    <text width="500">
                    <textPath xlink:href="#curve">
                        <?=($profil[0]->pseudo_sh)?>
                    </textPath>
                    </text>
                </svg>
            </div>
        </div>

        <form action=""method="post">
            <label for="description">Description :</label>
            <textarea name="description"><?=($profil[0]->description)?></textarea>

            <div class="statistiques">

                <?php
                foreach ($profil as $key => $value) {
                ?>
                <div class="stats">
                    <label for="<?=($profil[$key]->id_skill)?>"><?=($profil[$key]->skill_name)?></label>
                    <input type="number" name="<?=($profil[$key]->id_skill)?>" min="0" max="100" placeholder="Niveau en <?=($profil[$key]->skill_name)?>" value="<?=($profil[$key]->skill_value)?>">
                </div>
            <?php } ?>
            </div>

            <button type="submit" name="modifierProfil" value="Modifier">Modifier</button>

        </form>
    </div>

    <div class="box ba4"><!-- Création d'Article -->
        <h2 class="title">Nouvel article :</h2>
        <form enctype="multipart/form-data" action="" method="post"><!-- formulaire d'articles -->
            <label for="title_article">Titre :</label>
            <input name="title_article" id="title_article" type="text">

            <label for="content_article">Contenu :</label>
            <textarea name="content_article" id="content_article" rows="10" cols="50"></textarea>

            <label id="image-label" for="imageArticle" tabindex="0">Image :
                <div class="button">Choisir une image</div>
             <input type="file" name="imageArticle" id="imageArticle">
            </label>

            <button type="submit" name="createArticle" value="Envoyer">Envoyer</button>
        </form>
    </div>

     <div class="box ba5"><!-- Création de projet -->
        <h2 class="title">Nouveau projet :</h2>
        <form enctype="multipart/form-data" action="" method="post"><!-- formulaire d'articles -->

            <label for="title_Projet">Titre :</label>
            <input name="title_Projet" id="title_Projet" type="text" required="required">

            <label for="techno_Projet">Technologies :</label>
            <input name="techno_Projet" id="techno_Projet" type="text">

            <label for="participant_Projet">Participants :</label>
            <input name="participant_Projet" id="participant_Projet" type="text">

            <label for="lien_Projet">Lien :</label>
            <input name="lien_Projet" id="lien_Projet" type="text">

            <label for="content_Projet">Contenu :</label>
            <textarea name="content_Projet" id="content_Projet" rows="10" cols="50" required="required"></textarea>

            <label id="image-label" for="imageProjet" tabindex="0">Image :

                <div class="button">Choisir une image</div>
             <input type="file" name="imageProjet" id="imageProjet">
            </label>

            <button type="submit" name="createProjet" value="Envoyer">Envoyer</button>
        </form>
    </div>

<div class="box" id="admin-projet"> <!-- ARTICLES SUPERADMIN -->
        <h1 class="title">Projets en attente :</h1>
        <div class="art-display"><!-- encadrement contenant les articles-->

            <?php
            if ($listeProjets){
            foreach ($listeProjets as $elements => $value) {
            ?>
                <!--Bloc contenant un article -->
                <div class="article-line">
                    <!-- image de l'article-->
                    <div class="art-img" name="img-art"
                    style ="background-image: url(Ressources/img/imgProjet/<?=($listeProjets[$elements]->img)?>);">
                    </div>
                    <div class="art-title">
                        <!-- titre de l'article -->
                        <h2><?=($listeProjets[$elements]->title)?></h2>

                    <form class="buttons2" method="post">
                      <div class="del-but" title="supprimer l'article"></div>
                        <div class="ok-but" title="Publier l'article"></div>
                    </form>
                    </div>
                    <!-- contenu de l'article -->
                    <div class="art-content" data-idProjet="<?=($listeProjets[$elements]->id_projets)?>">
                    <?=($listeProjets[$elements]->content)?>
                        <div class="details">
                            <span><h1>créé par : <?=($listeProjets[$elements]->pseudo_sh)?> </h1>
                            <h1> publié le : <?=($listeProjets[$elements]->published_at)?></h1></span>
                        </div>
                    </div>
                </div>

            <?php }}else{ ?>
            <p>Aucun projet en attente.</p>
            <?php } ?>


        </div>

    </div>


</div>

    <!-- partie Compétences en attente  -->
  <div class="box ba5">
    <h2 class="title">Compétences à ajouter :</h2>

  <?php
// Controls::dbug($listeCompetences);
  if ($listeCompetences){
  echo ($listeCompetences[0]->skill_name);
  }
  else{ ?>
  <p>Aucune compétence en attente.</p>
  <?php } ?>

  </div>

<!-- en cours-->

  <!-- partie Ajouter un compétence -->
  <div class="box ba5">
    <h2 class="title"> Ajouter une compétence :</h2>
      <form action="" method="post"><!-- formulaire-->
        <input name="competenceAajouter" type="text">
        <button type="submit" name="ajouterCompetence" value="Envoyer">Ajouter</button>
      </form>
  </div>


<div class="admin-container">

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
                    <label for="stat"><?=($profil[$key]->skill_name)?></label>
                    <input type="number" name="stat" min="0" max="100" placeholder="Niveau en <?=($profil[$key]->skill_name)?>" value="<?=($profil[$key]->skill_value)?>">
                </div>
            <?php } ?>
            </div>

            <button type="submit" name="modifierProfil" value="Modifier">Modifier</button>

        </form>
    </div>

    <div class="box ba4"><!-- Création d'Article -->
        <h2 class="title">Nouvel article :</h2>
        <form enctype="multipart/form-data" action="" method="post"><!-- formulaire d'articles -->
            <label for="title_article">titre de l'article :</label>
            <input name="title_article" id="title_article" type="text">

            <label for="content_article">contenu de l'article :</label>
            <textarea name="content_article" id="content_article" rows="10" cols="50"></textarea>

            <label id="image-label" for="imageArticle">image de l'article :
                <div class="button">Choisir une image</div>
            </label>
             <input type="file" name="imageArticle" id="imageArticle">

            <button type="submit" name="createArticle" value="Envoyer">Envoyer</button>
        </form>
    </div>

    <div class="box ba5"><!-- Création de projet -->
        <h2 class="title">Nouveau projet :</h2>
        <form enctype="multipart/form-data" action="" method="post"><!-- formulaire d'articles -->

            <label for="title_Projet">titre du projet :</label>
            <input name="title_Projet" id="title_Projet" type="text">

            <label for="techno_Projet">technologie du projet :</label>
            <input name="techno_Projet" id="techno_Projet" type="text">

            <label for="participant_Projet">participants sur le projet :</label>
            <input name="participant_Projet" id="participant_Projet" type="text">

            <label for="lien_Projet">lien vers le projet :</label>
            <input name="lien_Projet" id="lien_Projet" type="text">

            <label for="content_Projet">contenu du projet :</label>
            <textarea name="content_Projet" id="content_Projet" rows="10" cols="50"></textarea>

            <label id="image-label" for="imageProjet">image de projet :

                <div class="button">Choisir une image</div>
             <input type="file" name="imageProjet" id="imageProjet">
            </label>

            <button type="submit" name="createProjet" value="Envoyer">Envoyer</button>
        </form>
    </div>


<!-- partie contacter le Super Admin  -->
<div class="box ba5">
    <h2 class="title">Contacter le Super admin :</h2>
    <form action="" method="post"><!-- formulaire-->

        <label for="demande_competence">Ajouter des compétences :</label>
        <input name="demande_competence" type="text">

        <button type="submit" name="contactSuperAdmin" value="Envoyer">Envoyer</button>
    </form>
</div>





</div>

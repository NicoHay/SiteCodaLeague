<div class="newpass-container">

<?php echo($flash) ?>

    <div class="box-border bnew">
        <h1 class="title long">Nouveau mot de passe : </h1>
        <div class="box-content" id="b1Rem">
                <span>minimum : 8 caractères, un nombre, une minuscule et une Majuscule...</span>
                <form name="formulaire" class="formulaire" action="" method="post">
                    <div class="flexform require">
                        <label for="pass1">Nouveau mot de passe : </label>
                        <input type="password" name="pass1" required="required">
                    </div>
                    <div class="flexform require">
                        <label for="pass2">Répétez le mot de passe :</label>
                        <input type="password" name="pass2" required="required">
                    </div>
                    <button id="bouton" name="newpass" type="submit">Valider</button>
                </form>
        </div>
    </div>
</div>

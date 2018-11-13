
 <div class="login-container">

<?php Controls::dbug($flash) ?>
    <div class="box-border blog">
        <div class="box-content" id="b1Log">
        <div class="formulaire">

            <form action="" method="post">

                <label for="login">Login : </label>
                <input type="text" name="login"  required>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password"  required>
                <!--<input type="checkbox" name="remember">
                <label for="remember" class="rem">Se souvenir de moi.</label>-->
                <span><a href="index.php?action=resetpass">Mot de passe oublié ?</a></span>


                <button name="connect" type="submit" >Se Connecter</button>

            </form>


        </div>
    </div>
</div>

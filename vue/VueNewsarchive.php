<div class="archive-container">


    <?php
    foreach ($retour as $elements => $value) {
    ?>

        <div class="box-border">
            <h1 class="title"><?=($retour[$elements]->title)?> : </h1>

            <div class="box-content">
                <img src="Ressources/img/imgNews/<?=($retour[$elements]->img)?>" height="100px" width="100px" alt="">
                <p><?=($retour[$elements]->content)?></p>
            </div>
        </div>

   <?php
   }
   ?>

</div>
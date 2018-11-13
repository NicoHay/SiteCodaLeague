<!-- code html  -->
<div class="home-container">
<a href="index.php?action=archive&id=" class="news link" id="newscontent1">
<div class="box-border" id="imagebox1">
    <div class="box-content" id="image1" style ="background-image: url(Ressources/img/imgNews/<?=($retour[0]->img)?>);">
    </div>
</div>
<div class="box-border" id="contentbox1">
    <div class="box-content" id="content1">
        <div class="obj"></div>
        <article>
        <h1><?=($retour[0]->title)?></h1>
        <?=($retour[0]->content)?>
        </article>

    </div>
</div>
</a>

<a href="index.php?action=newsarchive" class="b2boom">
 <!--#### pensez a ajouter un lien vers la page archives news  ####-->
    <span>NEWS !</span>
</a>

<a href="index.php?action=archive&id=" class="news link" id="newscontent2">
    <div class="box-border" id="imagebox2">
        <div class="box-content" id="image2" style ="background-image: url(Ressources/img/imgNews/<?=($retour[1]->img)?>);"></div>
    </div>
    <div class="box-border" id="contentbox2">
        <div class="box-content" id="content2">
            <div class="obj"></div>
            <article>
                <h1><?=($retour[1]->title)?></h1>
                <?=($retour[1]->content)?>
            </article>
        </div>
    </div>
</a>
<div class="box-border" id="presentation">
    <h1 class="title">Présentation :</h1>
    <div class="box-content" id="content-presentation">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui voluptas fuga reiciendis nulla aspernatur quo autem beatae saepe molestias doloribus, voluptatem aliquam esse corrupti obcaecati accusamus! Sint odio a est?
    </div>
</div>

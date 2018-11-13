SELECTARTICLE = {
    article:"",

    init: function() {

            SELECTARTICLE.article = document.querySelectorAll(".article-line");

            for (i = 0; i < SELECTARTICLE.article.length; i++) {
            SELECTARTICLE.article[i].addEventListener("click", SELECTARTICLE.selectArticle);
            }

    },
    selectArticle: function() {

        if (this.classList.contains("selected") ) {
            this.classList.remove("selected");
            } else {

                for (let j = 0; j < SELECTARTICLE.article.length; j++) {
                    SELECTARTICLE.article[j].classList.remove("selected");
                    }

            this.classList.add("selected");
        }
    }
}

// window.onload = SELECTARTICLE.init;
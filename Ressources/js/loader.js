LOADER = {


    init: function() {
        MENUMOBILE.init();
        AJAX.init();
        POSTIT.init();
        SELECTARTICLE.init();
        FORM.init();
    }


}

window.onload = LOADER.init;
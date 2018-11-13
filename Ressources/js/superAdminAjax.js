AJAX = {

    init : function() {

        var elem = document.querySelectorAll('.buttons');
        elem.forEach(index => index.addEventListener('click', AJAX.selectedArticle))
        var elem = document.querySelectorAll('.buttons2');
        elem.forEach(index => index.addEventListener('click', AJAX.selectedProjet))

    },


    /**
     * SELECTIONNE LE BOUTON CLICKER PUIS L'ID ARTICLE CLICKER
     * ET ENVOI A PHP SES DEUX VALEUR
     * @param {OBJECT} evt EVENEMENT DU CLICK
     */
    selectedArticle : function(evt) {

        var test = evt.target.parentNode.parentNode.nextElementSibling
        var blocSelected = evt.target.parentNode.parentNode.parentNode

        var tbl     = [evt.target.className, test.dataset.idarticle];
        var page    = 'index.php?action=login';
        var msg     = 'bouton='.concat(JSON.stringify(tbl));

        AJAX.envoi(page, msg,blocSelected);
    },
    selectedProjet : function(evt) {

        var test = evt.target.parentNode.parentNode.nextElementSibling
        var blocSelected = evt.target.parentNode.parentNode.parentNode

        var tbl     = [evt.target.className, test.dataset.idprojet];
        var page    = 'index.php?action=login';
        var msg     = 'bouton2='.concat(JSON.stringify(tbl));

        AJAX.envoi(page, msg,blocSelected);
    },


    /****************************************************
     *
     * @param {string} page php a cibler
     * @param {string} msg message a envoyer
     * @param {string} cible function a lancer au retour
     */
    envoi(page, msg,test) {
        var xhttp   = new XMLHttpRequest();
        xhttp.onload = function(){

            var blocparent = test.parentNode;
            blocparent.removeChild(test);

        }

        xhttp.open('POST', page, true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(msg);
    },
}
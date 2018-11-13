POSTIT = {
    but:"",
    content:"",
    postit:"",
    close:"",

    init: function() {

    if (document.querySelector('#but') !== null){

        POSTIT.but = document.querySelector("#but");
        POSTIT.but.addEventListener("click", POSTIT.addPostIt);
        POSTIT.content = document.querySelector("#TDL");
        POSTIT.postit = document.querySelector(".postit");


        POSTIT.close = document.querySelector(".btn-close");
        POSTIT.close.addEventListener("click", POSTIT.RemovePostIt);
    };


    },

    addPostIt: function() {

    var div = document.createElement('div');

    div.className = 'postit';

    div.innerHTML =
        '<input type="text" name="post-title" placeholder="Post-Title">\
        <textarea name="postit" id="PostIt" placeholder="Post-Here"></textarea>\
        <div class="btn-close">X</div>';

        POSTIT.content.appendChild(div);
    },

    RemovePostIt: function() {
        POSTIT.content.removeChild(POSTIT.postit);

    },


}

// window.onload = POSTIT.init;
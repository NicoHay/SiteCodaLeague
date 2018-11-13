MENUMOBILE = {
    burger:"",
    body:"",

    init: function() {
        MENUMOBILE.body = document.querySelector("body");
        MENUMOBILE.burger = document.querySelector("#burger");
        MENUMOBILE.burger.addEventListener("click", MENUMOBILE.menuOpen);
    },
    menuOpen: function() {
        if (MENUMOBILE.body.classList.contains("opened") ) {
        MENUMOBILE.body.classList.remove("opened");
        MENUMOBILE.body.classList.add("closed");

        MENUMOBILE.body.style.overflow = 'auto';  // firefox, chrome
        MENUMOBILE.body.scroll = "yes"; // ie only
        } else {
        MENUMOBILE.body.classList.add("opened");
        MENUMOBILE.body.classList.remove("closed");

        MENUMOBILE.body.style.overflow = 'hidden';  // firefox, chrome
        MENUMOBILE.body.scroll = "no"; // ie only
        }
    }
}

// window.onload = MENUMOBILE.init;